<section class="flex flex-wrap justify-center" id="search_box">
    <div class="block">
        <div class="relative mt-40" id="search">
            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                <b>
                    <svg class="w-5 h-5 text-white" aria-hidden="true" fill="#000" class="text-gray-600" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </b>
            </div>
            <input type="text" id="searchbbar" class="block w-full p-3 pl-10 bg-white text-1xl shadow-lg font-normal border border-gray-100 rounded-full bg-transparent" placeholder="Rechercher un bien..." style="width:90%;min-width:600px;z-index:999;">
        </div> 
        <p class="text-white text-center mt-3">Entrer les mots en fonction de la catégorie de bien que vous désirez</p>
    </div>
</section>
<style>
    section
    {
        background-image: var(--rgba), 
        url("assets/img/building.jpg");
        background-size: cover;
        background-attachment: fixed;
        height: 300px;
    }
    input
    {
        color: #0e0e0eee;
        caret-color: #ecc94b;
        outline: none;
    }
    input::placeholder
    {
        color: #0e0e0eee;
    }
</style>