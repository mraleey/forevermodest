document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();

            const productId = this.dataset.id;

            // Send AJAX request to add product to cart
            fetch('/add-to-cart', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ product_id: productId })
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                updateCartUI();
            })
            .catch(error => console.log(error));
        });
    });
});

function updateCartUI() {
    // Fetch the cart details to update the cart UI
    fetch('/cart')
    .then(response => response.json())
    .then(cart => {
        let cartItems = document.getElementById('cart-items');
        let cartCount = document.querySelector('.cart-number');
        cartItems.innerHTML = ''; // Clear current cart items

        let totalAmount = 0;

        cart.forEach(item => {
            let cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                <img src="${item.product.image}" alt="${item.product.name}" />
                <div>${item.product.name}</div>
                <div>${item.quantity}</div>
                <div>$${item.product.price}</div>
            `;
            cartItems.appendChild(cartItem);

            totalAmount += item.product.price * item.quantity;
        });

        cartCount.textContent = cart.length;
        document.getElementById('cart-total-amount').textContent = totalAmount.toFixed(2);
    })
    .catch(error => console.log(error));
}
