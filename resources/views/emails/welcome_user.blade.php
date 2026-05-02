<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 20px;
            text-align: center;
            color: white;
        }
        .header h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        .header p {
            font-size: 14px;
            opacity: 0.9;
        }
        .content {
            padding: 40px 30px;
        }
        .greeting {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }
        .message {
            color: #666;
            margin-bottom: 25px;
            font-size: 14px;
        }
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            margin: 20px 0;
            transition: transform 0.2s;
        }
        .cta-button:hover {
            transform: translateY(-2px);
        }
        .features {
            margin-top: 30px;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
        .feature-item {
            margin-bottom: 15px;
            color: #666;
            font-size: 14px;
        }
        .feature-item:before {
            content: "✓ ";
            color: #667eea;
            font-weight: bold;
            margin-right: 10px;
        }
        .footer {
            background-color: #f9f9f9;
            padding: 20px 30px;
            text-align: center;
            border-top: 1px solid #eee;
            font-size: 12px;
            color: #999;
        }
        .footer a {
            color: #667eea;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome! 🎉</h1>
            <p>Great to have you on board</p>
        </div>
        
        <div class="content">
            <p class="greeting">Hello {{ $user->name }},</p>
            
            <p class="message">
                Thank you for joining our community! We're thrilled to have you here. Get ready to explore amazing features and unlock unlimited possibilities.
            </p>
            
            <a href="{{ route('dashboard') }}" class="cta-button">Get Started</a>
            
            <div class="features">
                <p style="font-weight: 600; color: #333; margin-bottom: 15px;">What you can do:</p>
                <div class="feature-item">Access exclusive content and resources</div>
                <div class="feature-item">Connect with our vibrant community</div>
                <div class="feature-item">Unlock personalized recommendations</div>
                <div class="feature-item">Enjoy 24/7 premium support</div>
            </div>
        </div>
        
        <div class="footer">
            <p>Questions? <a href="{{ route('contact') }}">Contact us</a> or reply to this email.</p>
            <p style="margin-top: 10px;">© {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </div>
</body>
</html>