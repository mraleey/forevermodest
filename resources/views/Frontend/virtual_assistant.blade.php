<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Virtual Assistant - Help Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .assistant-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .chat-box {
            height: 400px;
            overflow-y: auto;
            padding: 10px;
            border: 1px solid #ccc;
            background: #fff;
            border-radius: 5px;
        }
        .message {
            padding: 8px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .bot-message {
            background: #e9f5ff;
        }
        .user-message {
            background: #d4edda;
            text-align: right;
        }
    </style>
</head>
<body>

    <div class="container assistant-container">
        <h2 class="text-center">Virtual Assistant</h2>
        <h3>I am your Personal Assistant</h3>
        <div class="chat-box" id="chat-box">
            <div class="message bot-message">Hello! How can I assist you today?</div>
        </div>
        <div class="mt-3">
            <input type="text" id="user-input" class="form-control" placeholder="Type your question...">
            <button class="btn btn-primary mt-2" onclick="sendMessage()">Ask</button>
        </div>
    </div>

    <script>
        function sendMessage() {
            let userInput = document.getElementById('user-input').value;
            let chatBox = document.getElementById('chat-box');
    
            if (userInput.trim() === '') return;
    
            // Display user message
            let userMessage = document.createElement('div');
            userMessage.className = 'message user-message';
            userMessage.innerText = userInput;
            chatBox.appendChild(userMessage);
    
            // Send request to Laravel backend
            fetch('/chatbot', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF protection
                },
                body: JSON.stringify({ query: userInput })
            })
            .then(response => response.json())
            .then(data => {
                // Display bot response
                let botMessage = document.createElement('div');
                botMessage.className = 'message bot-message';
                botMessage.innerText = data.response;
                chatBox.appendChild(botMessage);
            })
            .catch(error => console.error('Error:', error));
    
            document.getElementById('user-input').value = '';
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    </script>
    
    

</body>
</html>
