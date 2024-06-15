<?php
// Include the config file of Database
include('config/config.php');

// Vérifie si le formulaire a été soumis
if (isset($_POST["save"])) {
  // Data
  $title = htmlspecialchars($_POST['title']);
  $video_path = htmlspecialchars($_POST['video_path']);
  $location = htmlspecialchars($_POST['location']);

  // Dossier de destination pour les vidéos uploadées
  $targetDir = "storage/";
  $targetFile = $targetDir . basename($_FILES["video_path"]["name"]);
  $uploadOk = 1;
  $videoFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  // Vérifie si le fichier existe déjà
  if (file_exists($targetFile)) {
    echo "Désolé, le fichier existe déjà.";
    $uploadOk = 0;
  }

  // Vérifie la taille de la vidéo
  if ($_FILES["video_path"]["size"] > 555000000) {
    echo "Désolé, votre fichier est trop volumineux.";
    $uploadOk = 0;
  }

  // Autorise certains formats de fichiers
  if ($videoFileType != "mp4" && $videoFileType != "avi" && $videoFileType != "mkv" && $videoFileType != "mov") {
    echo "Désolé, seuls les fichiers MP4, AVI, MKV et MOV sont autorisés.";
    $uploadOk = 0;
  }

  // Vérifie si $uploadOk est à 0 pour une raison quelconque
  if ($uploadOk == 0) {
    echo "Désolé, votre fichier n'a pas été téléchargé.";
  // Si tout est correct, télécharge le fichier
  } else {
    if (move_uploaded_file($_FILES["video_path"]["tmp_name"], $targetFile)) {
      //echo "Le fichier ". htmlspecialchars( basename( $_FILES["video_path"]["name"])). " a été téléchargé.";
      //header("Location:streaming.php"); 

      // Insérer le chemin de la vidéo dans la base de données MySQL
      $video_path = mysqli_real_escape_string($mysqli, $targetFile);
      $sql = "INSERT INTO video (title, video_path, location) VALUES ('$title', '$video_path', '$location')";

      if ($mysqli->query($sql) === TRUE) {
        header("Location:streaming.php"); 
      } else {
        echo "Erreur lors de l'insertion dans la base de données : " . $mysqli->error;
      }
    } else {
      echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
    }
  }

  // Ferme la connexion à la base de données
  $mysqli->close();
}
?>