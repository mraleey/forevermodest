<div class="forevermodest-search-form">
    <form id="search-product" action="#" method="GET">
        <input type="text" id="search-input" name="query" placeholder="Type to search..." autocomplete="off">
        <button type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
    <div id="search-results"></div> <!-- Search results will appear here -->
</div>

<!-- Add CSS for Styling -->
<style>
    .forevermodest-search-form {
        position: relative;
        max-width: 400px;
        margin: auto;
    }
    .forevermodest-search-form input {
        width: 100%;
        padding: 12px;
        border: 2px solid #ccc;
        border-radius: 25px;
        outline: none;
        transition: 0.3s ease-in-out;
    }
    .forevermodest-search-form input:focus {
        border-color: #ff6600;
        box-shadow: 0 0 10px rgba(255, 102, 0, 0.5);
    }
    .forevermodest-search-form button {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: #ff6600;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 50%;
        cursor: pointer;
        transition: 0.3s ease-in-out;
    }
    .forevermodest-search-form button:hover {
        background: #cc5500;
    }
    #search-results {
        position: absolute;
        width: 100%;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        max-height: 250px;
        overflow-y: auto;
        display: none;
        z-index: 999;
    }
    .search-item {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        cursor: pointer;
        transition: background 0.3s;
    }
    .search-item:hover {
        background: #f8f8f8;
    }
</style>

<!-- JavaScript (AJAX Live Search) -->
<script>
document.getElementById("search-input").addEventListener("keyup", function() {
    let query = this.value.trim();
    let resultsDiv = document.getElementById("search-results");

    if (query.length > 2) { // Start searching after 3 characters
        fetch(`/search-results?query=${query}`)
            .then(response => response.json())
            .then(data => {
                resultsDiv.innerHTML = "";
                resultsDiv.style.display = "block";  // Show results

                if (data.length > 0) {
                    data.forEach(item => {
                        let resultItem = document.createElement("div");
                        resultItem.className = "search-item";
                        resultItem.innerHTML = `<a href="${item.url}">${item.name}</a>`;
                        resultItem.addEventListener("click", function() {
                            window.location.href = item.url;
                        });
                        resultsDiv.appendChild(resultItem);
                    });
                } else {
                    resultsDiv.innerHTML = "<p style='padding:10px;'>No results found.</p>";
                }
            })
            .catch(error => {
                resultsDiv.innerHTML = "<p style='padding:10px; color:red;'>Error fetching results.</p>";
                console.error("Search Error:", error);
            });
    } else {
        resultsDiv.style.display = "none";
    }
});
</script>
