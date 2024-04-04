<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #4CAF50;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .animation-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0 auto 30px;
        }

        .animation {
            display: none;
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 4px solid transparent;
            border-top-color: #4CAF50;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .tick {
            font-size: 50px;
            color: #4CAF50;
        }

        p {
            font-size: 20px;
            color: #333;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="animation-wrapper">
            <div class="animation" id="loader"></div>
            <div class="tick" id="tick">&#10004;</div>
        </div>
        <h1>Thank You!</h1>
        <p>Your form has been submitted successfully.</p>
    </div>
    <script>
        // Show tick mark after 1 second
        setTimeout(function() {
            document.getElementById('loader').style.display = 'none';
            document.getElementById('tick').style.display = 'block';
        }, 1000);
    </script>
</body>

</html>