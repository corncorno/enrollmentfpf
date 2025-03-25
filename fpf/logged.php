<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
<body>
    <div class="header">
        <img src="images/FPFelixLogo.png" alt="FPFelix Logo" height="100" width="100">
        <h1>Francisco P. Felix Memorial National High School</h1>
    </div>
    <div class="form-container">
        <h2>Welcome</h2>
        <p>Name: <?php echo htmlspecialchars($_POST["name"]); ?></p> <!-- Added htmlspecialchars for security -->
        <p>Your email address is: <?php echo htmlspecialchars($_POST["email"]); ?></p> <!-- Added htmlspecialchars for security -->
    </div>
    <div class="chatbot-container">
        <div class="chatbot-header">Chatbot</div>
        <div class="chatbot-messages">
            <p><strong>Bot:</strong> Hello! How can I assist you today?</p>
        </div>
        <div class="chatbot-input">
            <input type="text" placeholder="Type your message...">
            <button>Send</button>
        </div>
    </div>
</body>
</html>