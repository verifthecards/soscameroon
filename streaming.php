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
    <title>Espace vidéos</title>
</head>
<body>
    <!-- Navigation -->
    <?php include("components/nav.php") ?>
    <br><br>
    <!-- Item Card -->
    <div class="flex flex-wrap justify-center mt-20 sm:p-0 p-0 mb-40">
        <?php include("components/video.php") ?>
    </div>

    <!-- Footer -->
    <?php include("components/footer.php") ?>

    <!-- JS files -->
    <?php include("components/script.php") ?>
</body>
</html>