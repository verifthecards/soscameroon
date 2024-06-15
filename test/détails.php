<?php
include('connexion.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM articles WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>" . $row["titre"]. "</h2>";
        echo "<p>" . $row["contenu"]. "</p>";
        echo "<p>Date de création: " . $row["date_creation"]. "</p>";
    } else {
        echo "Aucun article trouvé avec cet identifiant.";
    }
} else {
    echo "Aucun identifiant d'article fourni.";
}

$conn->close();
?>