<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
     <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 40px auto; padding: 0 20px; }
        h1 { color: #2c3e50; }
        ul { list-style-type: none; padding: 0; }
        li { background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 4px; padding: 15px; margin-bottom: 10px; }
        strong { color: #34495e; }
        a { color: #3498db; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1><?= $data['title']; ?></h1>

    <ul>
        <!-- Loop through the courses data and display each one -->
        <?php foreach ($data['courses'] as $course) : ?>
            <li>
                <strong><?= htmlspecialchars($course['name']); ?></strong><br>
                Instructor: <?= htmlspecialchars($course['instructor']); ?>
            </li>
        <?php endforeach; ?>
    </ul>
    
    <p><a href="../home"> &larr; Back to Home</a></p>

</body>
</html>
