<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Subscriber Notification</title>
    <style>
        .email-wrapper {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }
        .email-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .email-header h1 {
            font-size: 24px;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .email-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }
        .email-row {
            margin-bottom: 15px;
        }
        .email-label {
            font-weight: bold;
            color: #555;
        }
        .email-value {
            font-size: 14px;
            color: #333;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-header">
            <h1>You have a new subscription on your website:</h1>
        </div>
        <div class="email-content">
            <div class="email-row">
                <p class="email-label">Email: {{ $email }}</p>
            </div>
        </div>
    </div>
</body>
</html>