<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="app">
        <header>
            <h1>ChatBox</h1>
        </header>
        <div id="messages"></div>
        <form method="post" action="/sendmessage" id="message-form">
            <input type="text" name="message" id="message-input" placeholder="Enter Message" />
            <button type="submit" id="message-send">Send</button>
        </form>
    </div>
</body>

</html>