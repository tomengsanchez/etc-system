<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The title is dynamically set by the data passed from the controller -->
    <title><?= $data['title']; ?></title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 40px auto; padding: 0 20px; }
        h1 { color: #2c3e50; }
        p { color: #7f8c8d; }
        code { background-color: #ecf0f1; padding: 2px 5px; border-radius: 4px; }
    </style>
</head>
<body>
    <!-- The h1 and p tags also use data from the controller -->
    <h1><?= $data['title']; ?></h1>
    <p><?= $data['description']; ?></p>
    <p>If you are seeing this page, it means:</p>
    <ul>
        <li>The <code>.htaccess</code> rule correctly redirected the request to <code>public/index.php</code>.</li>
        <li>The <code>App</code> router correctly identified that no specific controller was requested and loaded the default <code>HomeController</code>.</li>
        <li>The <code>HomeController</code>'s <code>index()</code> method was called.</li>
        <li>The controller successfully loaded this view file (<code>app/views/home/index.php</code>) and passed data to it.</li>
    </ul>
</body>
</html>
