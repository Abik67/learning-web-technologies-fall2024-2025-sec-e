<?php
    session_start();
    include '../model/db.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sqli = $conn->prepare("SELECT * FROM authors WHERE username = ?");
    $sqli->bind_param("s", $username);
    $sqli->execute();
    $result = $sqli->get_result();

    if ($result->num_rows > 0) {
        $author = $result->fetch_assoc();
        if (password_verify($password, $author['password'])) {
            echo "Login successful!";
            header('Location: ../home.html');
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "No user found with the given username!";
    }
    $sqli->close();
}
?>
