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
    <title>Contactez-nous</title>
</head>
<style>
    .form_connexion_inscription {
        display: flex;
        background-color: #fff;
        flex-direction: column;
        width: 550px;
        padding: 10px;
        border-radius: 0px;
        margin-top: 95px;
    }

    .form_connexion_inscription .message_error {
        color: red;
        font-size: 14px;
    }

    .form_connexion_inscription label {
        margin: 2px 0;
    }

    .form_connexion_inscription input, .form_connexion_inscription textarea {
        background-color: #f1f1f1;
        caret-color: var(--color);
        padding: 12px;
        font-size: 15px;
        border-radius: 0px;
        border: 1px solid #f1f1f1;
        resize: none;
    }

    .form_connexion_inscription input:focus, .form_connexion_inscription textarea:focus {
        border: 1px solid #000;
        outline: none;
    }

    .form_connexion_inscription input::placeholder, .form_connexion_inscription textarea::placeholder {
        color: #4e4e4e;
    }

    .form_connexion_inscription input[type='submit'] {
        cursor: pointer;
        margin-top: 20px;
        font-size: 16px;
        background-color: #000;
        border: 1px solid #000;
        border-radius: 0px;
        padding: 12px;
        color: #fff;
    }

    .form_connexion_inscription input[type='submit']:hover {
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

<body class="h-full">
    <!-- Navigation -->
    <?php include("components/nav.php") ?>

    <div class="flex flex-wrap justify-center pl-4 sm:pl-10 pt-6">
        <form action="" method="POST" enctype="multipart/form-data" class="form_connexion_inscription">
            <h1 class="font-bold text-black text-4xl leading-none mb-5 text-center pt-6">
                PRISE DE CONTACT
            </h1>
            <p class="text-center text-1xl mb-4">
                Laissez-nous un méssage peut importe votre préocupation.
            </p>
            <input type="text" class="mb-4" name="Nom" placeholder="Votre nom">
            <div class="flex flex-wrap justify-between">
                <input type="text" class="mb-4 sm:w-64 w-full" name="Email" placeholder="Adrèsse mail">
                <input type="text" class="mb-4 sm:w-64 w-full" name="whatsApp" placeholder="Numéro WhatsApp">
            </div>
            <textarea name="Méssage" placeholder="Exprimez-vous..." cols="30" rows="10"></textarea>

            <!-- Validate -->
            <input type="submit" value="ENVOYER VOTRE MESSAGE" name="save" />
        </form>
    </div>

    <!-- JS files -->
    <?php include("components/script.php") ?>
</body>

</html>