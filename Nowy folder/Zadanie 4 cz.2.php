<?php

// Dane do weryfikacji
$entered_username = "example_user";
$entered_password = "user_password";

// Tutaj trzeba użyć odpowiednich funkcji do pobrania danych z bazy danych
 $stored_password_query = "SELECT hashed_password, salt FROM users WHERE username = '$entered_username'";
 $stored_password_result = $conn->query($stored_password_query);
 $row = $stored_password_result->fetch_assoc();
 $stored_hashed_password = $row['hashed_password'];
 $stored_salt = $row['salt'];

// Przykładowe dane (trzeba je odpowiednio dostosować)
$stored_hashed_password = "$2y$10$BwL6vr6sSRgk6VGMebPdxuI8jrgEbKFQRMZ8MFI15H44ERPlXjRD2"; // Przykładowe zahashowane hasło
$stored_salt = "3c7c7ee9a679218d6ac682a1897db422"; // Przykładowa sól

// Weryfikacja hasła
if (password_verify($entered_password . $stored_salt, $stored_hashed_password)) {
    echo "Logowanie udane!";
} else {
    echo "Błędne dane logowania!";
}

// Zamknięcie połączenia z bazą danych
     $conn->close();

?>

