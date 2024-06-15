<!-- <a href="../../storage/"></a> -->
<?php
    // Include the confg file of Database
    include('config.php');

    if(isset($_POST["save"])) {
        // Data
        $title = $_POST['title'];
        $seller = $_POST['seller'];
        $seller_email = $_POST['seller_mail'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $localisation = $_POST['localisation'];

        // Dossier de destination pour les images uploadées
        $targetDir = "storage/";
        $targetFile = $targetDir . basename($_FILES["image_path"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

        // Vérifie si le fichier image est une vraie image ou une fausse image
        $check = getimagesize($_FILES["image_path"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "Le fichier n'est pas une image.";
            $uploadOk = 0;
        }
        // Vérifie si le fichier existe déjà
        if (file_exists($targetFile)) {
            echo "Désolé, le fichier existe déjà.";
            $uploadOk = 0;
        }

        // Vérifie la taille de l'image
        if ($_FILES["image_path"]["size"] > 5000000) {
            echo "Désolé, votre fichier est trop volumineux.";
            $uploadOk = 0;
        }

        // Autorise certains formats de fichiers
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Désolé, seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
            $uploadOk = 0;
        }

        // Vérifie si $uploadOk est à 0 pour une raison quelconque
        if ($uploadOk == 0) {
            echo "Désolé, votre fichier n'a pas été téléchargé.";

        // Si tout est correct, télécharge le fichier
        } else {
            if (move_uploaded_file($_FILES["image_path"]["tmp_name"], $targetFile)) {
                echo "Le fichier ". htmlspecialchars( basename( $_FILES["image"]["name"])). " a été téléchargé.";
                header("Location:../../upload.php"); 
                
                // Insérer le chemin de l'image dans la base de données MySQL
                $image_path = mysqli_real_escape_string($conn, $targetFile);
                $sql = "INSERT INTO items (title, image_path, seller, seller_mail, price, category, type, description, localisation) VALUES ('$title', '$image_path', '$seller', '$seller_email', '$price', '$category', '$type', '$description', '$localisation')";
                mysqli_query($conn, $sql);
                mysqli_close($conn);
            } else {
                echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
            }
            // Check if Data is include
            if ($conn->query($sql) === TRUE) {
                // header("Location:img_upload.php");
                } else {
                    echo "Erreur lors de l'ajout de l'article: " . $conn->error;
                }
            }
        // Insert data in the Database
        // $sql = "INSERT INTO items (title, image_path, seller, seller_mail, price, category, description, localisation) VALUES ('$title', '$image_path', '$seller', '$seller_email', '$price', '$category', '$description', '$localisation')";
    }

    $conn->close();
?>