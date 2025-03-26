<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', 'rhmsoftware80');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Error handling
    // Crear la tabla si no existe
    $sql = "CREATE TABLE IF NOT EXISTS contacts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(20),
        image VARCHAR(255)
    );";
    $pdo->exec($sql);
    // echo "Tabla 'contacts' creada correctamente.";
    return $pdo;
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}   
