<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 - Page Not Found | ZIMA Solutions</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Source Sans Pro', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .error-container {
            text-align: center;
            max-width: 500px;
        }
        .error-code {
            font-family: 'Roboto Slab', serif;
            font-size: clamp(80px, 20vw, 140px);
            font-weight: 700;
            color: #1F3B8D;
            line-height: 1;
            margin-bottom: 16px;
        }
        .error-title {
            font-family: 'Roboto Slab', serif;
            font-size: clamp(20px, 5vw, 28px);
            color: #1a1a1a;
            margin-bottom: 16px;
        }
        .error-message {
            color: #6b7280;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 32px;
        }
        .error-btn {
            display: inline-block;
            padding: 14px 32px;
            background: #FF621B;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .error-btn:hover {
            background: #e55516;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 98, 27, 0.3);
        }
        .error-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 24px;
            background: #dbeafe;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .error-icon svg {
            width: 40px;
            height: 40px;
            color: #1F3B8D;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <h1 class="error-code">404</h1>
        <h2 class="error-title">Page Not Found</h2>
        <p class="error-message">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>
        <a href="/" class="error-btn">Return Home</a>
    </div>
</body>
</html>
