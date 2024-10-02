<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        table {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-collapse: collapse;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        td {
            padding: 20px;
        }
        .header {
            background-color: #4CAF50;
            color: #ffffff;
            text-align: center;
            padding: 30px 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .body-content {
            padding: 30px;
            text-align: center;
        }
        .body-content h2 {
            font-size: 22px;
            color: #333;
        }
        .body-content p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }
        .button {
            background-color: #4CAF50;
            color: #ffffff;
            text-decoration: none;
            padding: 15px 25px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
        .footer {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
            color: #888;
            font-size: 14px;
        }
        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }
        @media screen and (max-width: 600px) {
            table {
                width: 100%;
            }
            .body-content h2 {
                font-size: 20px;
            }
            .body-content p {
                font-size: 14px;
            }
            .button {
                padding: 12px 20px;
            }
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td class="header">
            <h1>Welcome to Our Platform, {{ $user->name }}!</h1>
        </td>
    </tr>
    <tr>
        <td class="body-content">
            <h2>We're glad to have you on board!</h2>
            <p>
                Thank you for joining us, {{ $user->name }}. We are excited to help you explore our services and provide you with the best experience. Here are a few things you can do to get started:
            </p>
            <ul style="text-align: left; padding: 0 30px;">
                <li>Check out our latest features</li>
                <li>Set up your profile to personalize your experience</li>
                <li>Join our community and connect with others</li>
            </ul>
            <a href="#" class="button">Explore Now</a>
        </td>
    </tr>
    <tr>
        <td class="footer">
            <p>Need help? <a href="mailto:support@yourplatform.com">Contact Support</a></p>
            <p>Follow us on 
                <a href="https://facebook.com/yourplatform">Facebook</a>, 
                <a href="https://twitter.com/yourplatform">Twitter</a>, 
                <a href="https://instagram.com/yourplatform">Instagram</a>
            </p>
        </td>
    </tr>
</table>

</body>
</html>
