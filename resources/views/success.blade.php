<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
        }

        .message-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #367C2B;
        }

        p {
            color: #333;
            margin: 20px 0;
        }

        a {
            display: inline-block;
            background-color: #367C2B;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #2A5B21;
        }
        .header {
            /* background-color: #367C2B;*/
            color: white;
            padding: 10px 0;
            text-align: center;
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }

    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('images/banner.png') }}" alt="Contact Us at Atlantic Tractor">>
    </div>
    
    <div class="message-container">
        <h1>Thank you for your message!</h1>
        <p>We will get back to you soon.</p>
        <a href="{{ url('/contact') }}">Return Home</a>
    </div>
</body>
</html>
