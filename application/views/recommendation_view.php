<!DOCTYPE html>
<html>
<head>
    <title>Product Recommendations</title>
</head>
<body>
    <h1>Product Recommendations</h1>
    <ul>
        <?php foreach ($recommendations as $rec): ?>
            <li>
                <strong><?php echo $rec['product']->name; ?></strong> - <?php echo $rec['recommendation']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
