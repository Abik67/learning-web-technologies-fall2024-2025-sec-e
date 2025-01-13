<?php
    include '../model/db.php';

    $search = $_GET['query'] ?? '';
    $query = "SELECT * FROM authors WHERE author_name LIKE ?";
    $stmt = $conn->prepare($query);
    $likeSearch = "%" . $search . "%";
    $stmt->bind_param("s", $likeSearch);
    $stmt->execute();
    $result = $stmt->get_result();

    $authors = [];
    while ($row = $result->fetch_assoc()) {
        $authors[] = $row;
    }
    echo json_encode($authors);
?>
