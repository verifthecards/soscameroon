
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

	<title>Publier une vidéo</title>
</head>
<style>
    .form_connexion_inscription {
        display: flex;
        background-color: #fff;
        flex-direction: column;
        width: 550px;
        padding: 10px;
        border-radius: 0px;
        margin-top: 60px;
    }
    .form_connexion_inscription .message_error {
        color: red;
        font-size: 14px;
    }
    .form_connexion_inscription  label {
        margin: 5px 0;
    }
    .form_connexion_inscription input {
        background-color: #f1f1f1;
        caret-color: var(--color);
        padding: 11px;
        font-size: 15px;
        border-radius: 0px;
        border: 1px solid #f1f1f1;
    }
    .form_connexion_inscription input:focus {
        border: 1px solid #000;
        outline: none;
    }
    .form_connexion_inscription input::placeholder {
        color: #4e4e4e;
        margin-left: 25px;
    }
    .form_connexion_inscription input[type='submit']{
        cursor: pointer;
        margin-top: 20px;
        font-size: 16px;
        background-color: #000;
        border: 1px solid #000;
        border-radius: 0px;
		padding: 12px;
        color: #fff;
    }
    .form_connexion_inscription input[type='submit']:hover{
        cursor: pointer;
        margin-top: 20px;
        font-size: 16px;
        background-color: #fff;
        border: 1px solid #000;
        border-radius: 0px;
        color: #000;
    }
    .form_connexion_inscription .link {
        margin-top: 10px;
        font-size: 14px;
        text-align: center;
        text-decoration-line: underline;
    }
    .link a {
        color: var(--color);
        font-size: 14px;
        text-decoration: 0;
    }
    .link a:hover {
        text-decoration: underline;
    }
</style>
	<body>      
		<!-- Navigation -->
		<?php include("components/nav.php") ?>
        <br><br>
		<div class="flex flex-wrap justify-center pl-4 sm:pl-10 pt-6">
			<form action="_add_.php" method="POST" enctype="multipart/form-data" class="form_connexion_inscription">
                <div class="flex flex-wrap justify-center">
                    <img src="assets/icons/uploader.png" height="100" width="100">
                </div>
                <br>
				<input type="text" class="mb-4" name="title" placeholder="Titre de la vidéo">
                <br>
                <h3 class="font-bold ml-4 mb-2">Sélectionner la vidéo</h3>
                <input type="file" name="video_path" id="item_video" />

				<!-- Validate -->
				<input type="submit" value="Publier maintenant" name="save" />
			</form>
		</div>
        <!-- Footer -->
        <div class="sm:block hidden">
            <?php include("components/footer.php") ?>
        </div>
	</body>
</html>