<!-- Navigation bar -->
<nav class="border border-gray-100 fixed w-full top-0 bg-white" id="nav" style="z-index:999;">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="index.php" class="flex items-center align-middle">
            <img src="assets/img/logo.jpg" height="70" width="70" alt="CID-LOGIS">
        </a>
        <div class="flex md:order-2">
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 rounded-none text-sm p-2.5 mr-1">
                <svg class="w-5 h-5" aria-hidden="true" fill="#fff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="relative hidden mr-4 md:flex gap-8 align-middle items-center">
                <a href="all.php" class="text-black font-bold hover:text-yellow-500">
                    
                </a>
                <form action="" method="post" class="re">
                    <input type="text" id="searchbbar" class="block w-full p-3 pl-10 bg-white text-1xl font-normal border border-gray-100 rounded-full bg-gray-200 focus:border-yellow-500" placeholder="Rechercher..." style="width:90%;min-width:250px;z-index:999;outline:none">
                </form>
            </div>
            <div class="relative hidden md:block">
                <?php include('components/button-bg.php') ?>
            </div>
            <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-none md:hidden" aria-controls="navbar-search" aria-expanded="false">
                <a href="streaming.php">
                    <img src="assets/icons/video.png" height="25" width="25">
                </a>
            </button>
            <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-none md:hidden" aria-controls="navbar-search" aria-expanded="false">
                <a href="#">
                    <img src="assets/icons/menu.png" height="25" width="25">
                </a>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium font-bold md:flex-row md:space-x-8 md:mt-0">
            </ul>
        </div>
    </div>
</nav>