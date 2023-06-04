<?php

$host = 'mysql';
$port = 3306;
$db = 'db';
$user = 'test';
$password = 'test';

// Stworzenie nowej instancji PDO
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die("Nie udalo sie polaczyc z baza danych: " . $e->getMessage());
}

// Pobranie pierwszego wiersza z tabeli kontaktów   
$query = "SELECT * FROM contacts LIMIT 1";
try {
    $stmt = $pdo->query($query);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}

// Wyświetlenie danych kontaktów
if ($row) {
    echo "<p>Imię: " . $row['firstname'] . "</p>";
    echo "<p>Nazwisko: " . $row['surname'] . "</p>";
    echo "<p>Numer telefonu: " . $row['phone_number'] . "</p>";
} else {
    echo "Brak danych w tabeli kontaktow.";
}
?>
