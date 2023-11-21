<?php

// Dane do zapisania
$username = "example_user";
$password_to_store = "user_password";

// Generowanie soli
$salt = bin2hex(random_bytes(32));

// Haszowanie hasła z solą przy użyciu sha256 (Uwaga: To jest uproszczone podejście)
$hashed_password = hash('sha256', $password_to_store . $salt);

// Zapis do bazy danych
$sql = "INSERT INTO users (username, hashed_password, salt) VALUES ('$username', '$hashed_password', '$salt')";

// Tutaj trzeba użyć odpowiednich funkcji do połączenia z bazą danych

// Przykład:
 $conn = new mysqli($servername, $db_username, $db_password, $dbname);
 $conn->query($sql);

// Zamknięcie połączenia
 $conn->close();

?>
