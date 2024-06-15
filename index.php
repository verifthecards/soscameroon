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
    <title>SOS CAMEROON SOLIDARITY</title>
</head>
<style>
    .stream_marketing
    {
        background-image: linear-gradient(to right,rgba(19, 83, 17, 0.858), rgba(200, 29, 29, 0.915), rgba(188, 188, 46, 0.926));
    }
</style>
<body class="h-full">
    <!-- Navigation -->
    <?php include("components/nav.php") ?>

    <section id="banner" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.907) 62%, rgba(0,0,0,0.4)),url('assets/img/school.webp');background-attachment:fixed">
        <div class="pt-10 sm:pt-64 mt-20 grid max-w-screen-xl px-4 py-1 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto pt-10 place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-white text-4xl font-extrabold leading-none md:text-5xl sm:text-6xl xl:text-6xl">
                    Fondé pour aider les victimes de l'autocratie de Paul Biya et son gouvernement.
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-100 lg:mb-8 md:text-lg lg:text-xl">
                    Nous receuillons des personnes sans abris et protection pour dans le but de rendre leurs existences plus paisibles.
                </p>
                <a href="streaming.php" class="button flex align-middle items-center" style="color:#fff;width:270px;padding:0.8em 1em;background-color:#000;margin-right: 0.5em;">
                    Découvrir nos actualités
                    <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <br><br>
            </div>
        </div>
    </section>

     <!-- Logo company -->
     <div class="bg-white flex flex-wrap gap-6 justify-around p-10 pt-16" id="logo">
        <img src="assets/img/onu.png" alt="ONU" title="ONU" height="30" width="280">
        <img src="assets/img/UNICEF.png" alt="UNICEF" title="UNICEF" height="80" width="90">
        <img src="assets/img/OMS.png" alt="OMS" title="OMS" height="80" width="80">
        <img src="assets/img/eurochem.png" alt="eurochem" title="eurochem" height="80" width="80">
        <!-- <img src="img/#" alt="Google" title="Google" height="70" width="80"> -->
    </div>
    <br><br>

    <section class="sections" id="services">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-black sm:text-lg">
                <h2 class="mb-4 text-3xl leading-none sm:text-6xl font-extrabold text-black">
                    Quels sont nos objectifs ?
                </h2>
                <p class="mb-4 text-gray-800">
                    Créer un élan de solidarité en faveur des camerounais(adultes, enfants et personnes agées) victimes de l'autocratie du régime Biya, son gouvernement et des instabilités sécuritaires dans le Sud-Ouest et Nord-Ouest du Cameroun.
                </p><br>
                <a href="helpMe.php" class="button hover:shadow-lg" style="color:#fff;width:40%;padding:0.8em 1em;background-color:#000;margin-right:0.5em;border:0.9px solid #fff;">
                    <b>Devenir bénéficiaire</b>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="assets/img/mother.webp" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="assets/img/children.jpg" alt="office content 2">
            </div>
        </div>
    </section>

    <section class="sections pb-32 pt-20 bg-white">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="assets/img/one_child.jpg">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="assets/img/main.jpg">
            </div>
            <div class="font-light sm:text-lg">
                <h2 class="mb-4 mt-8 sm:mt-0 text-3xl leading-none sm:text-6xl font-extrabold text-black">
                    Nous avons des valeurs...
                </h2>
                <p class="mb-4 text-black">
                    Promouvoir les valeurs auxquelles elle croit: responsabilité, professionnalisme, indépendance, intégrité et respect :
                </p><br>
                <li class="mb-6 block items-center text-black">
                    <span class="flex">
                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                            <path
                                d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                            </path>
                        </svg><b class="font-bold">Responsabilité</b><br>
                    </span>
                    <p class="text-1xl">
                        Responsabilité envers les donateurs en utilisant leur contribution avec professionnalisme, intégrité et transparence.
                    </p>
                </li>
                <li class="mb-6 block items-center text-black">
                    <span class="flex">
                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                            <path
                                d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                            </path>
                        </svg><b class="font-bold">Encouragez les bénéficiaires</b><br>
                    </span>
                    <p class="text-1xl">
                        Responsabilité envers les bénéficiaires, pour leur fournir l'aide dont ils ont besoin de la manière la plus appropriée.
                    </p>
                </li>
                <li class="mb-6 block items-center text-black">
                    <span class="flex">
                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                            <path
                                d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                            </path>
                        </svg><b class="font-bold">La liberté</b><br>
                    </span>
                    <p class="text-1xl">
                        Indépendance: en agissant de manière indépendante et dans le respect des lois.
                    </p>
                </li>
                <br>
                <a href="#" class="button" style="color:#fff;width:250px;padding:0.8em 1em;background-color: green;margin-right: 0.5em;">Devenir bénéficiaire</a>
            </div>
        </div>
    </section>

    <div class="flex justify-around p-6 sm:p-40 sm:-mt-56 sm:-mb-40">
        <div class="stream_marketing block p-10 sm:p-20 rounded-lg">
            <h2 class="font-bold text-white leading-none text-3xl sm:text-5xl">
                Découvrez notre espace streaming pour plus de détails.
            </h2>
            <br><br>
            <a href="streaming.php" class="button hover:shadow-lg" style="color:#fff;width:40%;padding:0.8em 1em;background-color:#000;margin-right:0.5em;border:0.9px solid #000">
                <b>Visiter l'espace</b>
            </a>
        </div>
    </div>
    
    <div class="flex flex-wrap justify-center bg-white gap-20 pt-32 pb-0">
        <div class="block text-center">
            <h2 class="font-bold text-3xl sm:text-5xl" style="color:green;">+ 45</h2>
            <h4 class="font-bold text-2xl sm:text-2xl" style="color:var(--black);">Volontaires</h4>
        </div>
        <div class="block text-center">
            <h2 class="font-bold text-3xl sm:text-5xl" style="color:green;">05</h2>
            <h4 class="font-bold text-2xl sm:text-2xl" style="color:var(--black);">Partenaires</h4>
        </div>
        <div class="block text-center">
            <h2 class="font-bold text-3xl sm:text-5xl" style="color:green;">03</h2>
            <h4 class="font-bold text-2xl sm:text-2xl" style="color:var(--black);">Représentations</h4>
        </div>
    </div>

    <div class="mt-6 -mb-32 relative hidden sm:flex flex-wrap justify-between p-40 lg:h-screen lg:items-center" id="marketing" style="height:128vh;">
        <div class="w-full h-full shadow-lg px-4 h-full py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24 rounded-l-lg" style="background-color:#000" id="write">
            <div class="mx-auto max-w-lg text-left">
                <p class="mt-4 text-gray-200">
                    #HelpTheHuman
                </p>
                <h1 class="text-6xl lg:text-6xl sm:text-6xl text-white font-bold" style="line-height:1.1;">
                    Contribuez à la prise en charge des camerounais en difficultés
                </h1>
                <br><br>
                <a href="donation.php" class="button hover:shadow-lg" style="color:#fff;width:40%;padding:0.8em 1em;background-color:#000;margin-right:0.5em;border:0.9px solid #fff;">
                    <b>Faire un don</b>
                </a>
            </div>
        </div>
        <div class="relative shadow-lg h-96 w-full sm:h-96 lg:h-full lg:w-1/2">
            <img alt="Welcome" src="assets/img/children.jpg" class="absolute inset-0 h-full w-full object-cover rounded-r-lg" />
        </div>
    </div>

    <!-- Footer -->
    <?php include("components/footer.php") ?>

    <!-- JS files -->
    <?php include("components/script.php") ?>
</body>
</html>