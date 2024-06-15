<?php
    include('config/config.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM video WHERE id = $id";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <!-- Meta(Keywords, description, robots...) -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="robots" content="index,follow">

    <!-- SCSS files -->
    <?php include("components/link.php") ?>

    <!-- Title of page -->
    <title><?php echo $row["title"]; ?></title>
</head>
<body>
    <!-- Navigation -->
    <?php include("components/nav.php") ?>
    <br>
    <div class="max-w-screen-xl mt-20 flex flex-wrap items-center justify-between mx-auto p-5" id="watch">
        <div id="wath_div">
            <video autoplay="autoplay" controls height="600" width="1000" style="border-radius:2px;">
                <source src="<?php echo $row["video_path"]; ?>">
            </video>
            <h2 class="text-2xl text-black mt-4">
                <?php echo $row["title"]; ?>
            </h2>
            <div class="flex" style="padding-left: 15px;margin-top:15px">
                <img src="assets/icons/eye_b.png" id="view">
                <p class="mb-3 font-normal" style="margin-right:8px;color:var(--gray)">1,3k vues</p>
                <span style="color:var(--first-color);">●</span>
                <p class="flex mb-3 font-normal" style="color:var(--gray);margin-left:8px">
                <span>Publié il y a, <span>3 jours</span></span></p>
            </div>
            <br>
        </div>
    </div>

    <?php       
        } else {
            echo "Aucun article trouvé avec cet identifiant.";
        }
        } else {
            echo "Aucun identifiant d'article fourni.";
        }
        $mysqli->close();
    ?>


    <!-- Footer -->
    <?php include("components/footer.php") ?>

    <!-- JS files -->
    <?php include("components/script.php") ?>
    <script>
        document.getElementById('linkItems').addEventListener('click', function(event) {
        event.preventDefault(); // Empêche le comportement par défaut du lien
        
            var texte = this.getAttribute('href'); // Obtient l'URL du lien
            copierDansPressePapier(texte); // Appelle la fonction pour copier dans le presse-papiers
        
            alert('Le lien a été copié dans le presse-papiers !');
        });

        function copierDansPressePapier(texte) {
        var textarea = document.createElement('textarea');
            textarea.value = texte;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
        }
    </script>
</body>
</html>