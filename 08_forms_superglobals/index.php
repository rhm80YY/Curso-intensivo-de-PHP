<?php
$contactsFiles = 'contacts.json';
$contacts = file_exists($contactsFiles) ? 
json_decode(file_get_contents($contactsFiles), true) : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="create.php" target="_blank" rel="noopener noreferrer">Create new contact</a>
    <ul>
        <?php foreach ($contacts as $contact): ?>
            <li>
                <img src="<?php echo $contact['image']; ?>" height="50">
                <?php echo "{$contact['name']} - {$contact['email']} - {$contact['phone']}"; ?>
                <a href="delete.php?id=<?php echo $contact['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>

