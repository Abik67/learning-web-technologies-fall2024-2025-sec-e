<?php
    session_start();
    include '../model/db.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author_name = $_POST['author_name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO authors (author_name, contact_no, username, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $author_name, $contact_no, $username, $password);

    if ($stmt->execute()) {
        echo "Author registered successfully!";
        header('Location: ../view/login.html');
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
}
?>
