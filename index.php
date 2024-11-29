<!doctype html>
<html lang="fr">

<?php include("head.php") ?>

<body class=" px-5 flex flex-col gap-20">

<?php include("header.php") ?>

<section class=" my-16 flex justify-between w-full">
    <div class="flex flex-col">
        <h2 class=" uppercase text-6xl tracking-wide font-medium">Nouvelle <br> Collection</h2>
        <p class="text-gray-500 tracking-wider text-lg">Été 2024</p>
        <div class="flex justify-between mt-auto">
            <button class="flex items-center bg-gray-transp px-3 py-2 gap-7
            group hover:bg-black hover:text-white">Aller Au Magasin <img class="max-w-16" src="assets/images/big_arrow_forward.png" alt=""></button>
            <div class="flex gap-3 arrowNavParent" id="1">
                <button class="arrowNav hover:bg-black group arrow-left border border-gray-300 px-2"><img class="max-w-4" src="assets/images/Arrow_back.png" alt=""></button>
                <button class="arrowNav hover:bg-black group arrow-right border border-gray-300 px-2"><img class="max-w-4" src="assets/images/Arrow_forward.png" alt=""></button>
            </div>
        </div>
    </div>
    <div class=" overflow-x-hidden" style="max-width: 50rem;">
        <div class="flex gap-7" id="slider_container1" style="transform: translateX(0px);">
            <img class="max-w-96 max-h-96" src="assets/images/collection1.png" alt="">
            <img class="max-w-96 max-h-96" src="assets/images/collection2.png" alt="">
            <img class="max-w-96 max-h-96" src="assets/images/collection2.png" alt="">
            <img class="max-w-96 max-h-96" src="assets/images/collection2.png" alt="">
        </div>
    </div>
</section>

<section class=" my-16 flex flex-col justify-between w-full gap-8">
    <div class="flex items-center gap-8">
        <h2 class=" uppercase text-5xl tracking-wide font-medium">Nouveautés <br>cette semaine</h2>
        <p class="text-3xl font-medium text-slate-600">(50)</p>
    </div>
    <div class="flex flex-col relative">
        <a class=" absolute -top-3-5 right-0 cursor-pointer text-gray-500 hover:text-black">Tout voir</a>
        <div class=" overflow-x-hidden">
            <div class="flex gap-7" id="slider_container2" style="transform: translateX(0px);">
                <div class="flex flex-col">
                    <div class=" relative">
                        <img class="max-w-96 max-h-96" src="assets/images/collection1.png" alt="">
                        <div class="bg-gray-transp text-gray-600 absolute px-2 absolute-center-bot cursor-pointer hover:bg-gray-600 hover:text-gray-100">+</div>
                    </div>
                    <p class=" text-gray-500 mt-1 font-light">V-neck T-shirt</p>
                   <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
                </div>
                <div class="flex flex-col">
                    <div class=" relative">
                        <img class="max-w-96 max-h-96" src="assets/images/collection1.png" alt="">
                        <div class="bg-gray-transp text-gray-600 absolute px-2 absolute-center-bot cursor-pointer hover:bg-gray-600 hover:text-gray-100">+</div>
                    </div>
                    <p class=" text-gray-500 mt-1 font-light">V-neck T-shirt</p>
                   <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
                </div>
                <div class="flex flex-col">
                    <div class=" relative">
                        <img class="max-w-96 max-h-96" src="assets/images/collection1.png" alt="">
                        <div class="bg-gray-transp text-gray-600 absolute px-2 absolute-center-bot cursor-pointer hover:bg-gray-600 hover:text-gray-100">+</div>
                    </div>
                    <p class=" text-gray-500 mt-1 font-light">V-neck T-shirt</p>
                   <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
                </div>
                <div class="flex flex-col">
                    <div class=" relative">
                        <img class="max-w-96 max-h-96" src="assets/images/collection1.png" alt="">
                        <div class="bg-gray-transp text-gray-600 absolute px-2 absolute-center-bot cursor-pointer hover:bg-gray-600 hover:text-gray-100">+</div>
                    </div>
                    <p class=" text-gray-500 mt-1 font-light">V-neck T-shirt</p>
                   <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
                </div>
                <div class="flex flex-col">
                    <div class=" relative">
                        <img class="max-w-96 max-h-96" src="assets/images/collection1.png" alt="">
                        <div class="bg-gray-transp text-gray-600 absolute px-2 absolute-center-bot cursor-pointer hover:bg-gray-600 hover:text-gray-100">+</div>
                    </div>
                    <p class=" text-gray-500 mt-1 font-light">V-neck T-shirt</p>
                   <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
                </div>
                <div class="flex flex-col">
                    <div class=" relative">
                        <img class="max-w-96 max-h-96" src="assets/images/collection1.png" alt="">
                        <div class="bg-gray-transp text-gray-600 absolute px-2 absolute-center-bot cursor-pointer hover:bg-gray-600 hover:text-gray-100">+</div>
                    </div>
                    <p class=" text-gray-500 font-light mt-1">V-neck T-shirt</p>
                   <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
                </div>
            </div>
        </div>
        <div class="flex gap-3 m-auto my-4 arrowNavParent" id="2">
                <button class="arrowNav hover:bg-black group arrow-left border border-gray-300 p-2"><img class="max-w-4" src="assets/images/Arrow_back.png" alt=""></button>
                <button class="arrowNav hover:bg-black group arrow-right border border-gray-300 p-2"><img class="max-w-4" src="assets/images/Arrow_forward.png" alt=""></button>
            </div>
    </div>
</section>

<section class="flex flex-col gap-5">
    <h2 class=" uppercase text-5xl tracking-wide font-medium">Collection <br> 2023-2024</h2>
    <div class="flex gap-3 relative py-2 after:w-full after:h-0.5 after:bg-black after:bottom-0 after:absolute">
        <p class=" text-gray-500 selected cursor-pointer hover:text-slate-800">(Tout)</p>
        <p class=" text-gray-500 cursor-pointer hover:text-slate-800">Homme</p>
        <p class=" text-gray-500 cursor-pointer hover:text-slate-800">Femme</p>
        <p class=" text-gray-500 cursor-pointer hover:text-slate-800">Enfant</p>
        <p class=" ml-auto cursor-pointer">Filtres</p>
        <p class=" cursor-pointer">Trier</p>
    </div>
    <div class="flex flex-wrap gap-8 overflow-y-hidden max-h-96 overflow-scroll justify-around relative" id="moreContainer">
        <div class="flex flex-col">
            <div class=" relative">
                <img class="max-w-80 max-h-80" src="assets/images/collection1.png" alt="">
                <div class="bg-gray-transp text-gray-600 absolute px-2 absolute-center-bot cursor-pointer hover:bg-gray-600 hover:text-gray-100">+</div>
            </div>
            <p class=" text-gray-500 font-light mt-1">V-neck T-shirt</p>
            <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
        </div>
        <div class="flex flex-col">
            <div class=" relative">
                <img class="max-w-80 max-h-80" src="assets/images/collection1.png" alt="">
                <div class="bg-gray-transp text-gray-600 absolute px-2 absolute-center-bot cursor-pointer hover:bg-gray-600 hover:text-gray-100">+</div>
            </div>
            <p class=" text-gray-500 font-light mt-1">V-neck T-shirt</p>
            <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
        </div>
        <div class="flex flex-col">
            <div class=" relative">
                <img class="max-w-80 max-h-80" src="assets/images/collection1.png" alt="">
                <div class="bg-gray-transp text-gray-600 absolute px-2 absolute-center-bot cursor-pointer hover:bg-gray-600 hover:text-gray-100">+</div>
            </div>
            <p class=" text-gray-500 font-light mt-1">V-neck T-shirt</p>
            <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
        </div>
        <div class="flex flex-col">
            <div class=" relative">
                <img class="max-w-80 max-h-80" src="assets/images/collection1.png" alt="">
                <div class="bg-gray-transp text-gray-600 absolute px-2 absolute-center-bot cursor-pointer hover:bg-gray-600 hover:text-gray-100">+</div>
            </div>
            <p class=" text-gray-500 font-light mt-1">V-neck T-shirt</p>
            <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
        </div>
        <div class="flex flex-col">
            <div class=" relative">
                <img class="max-w-80 max-h-80" src="assets/images/collection1.png" alt="">
                <div class="bg-gray-transp text-gray-600 absolute px-2 absolute-center-bot cursor-pointer hover:bg-gray-600 hover:text-gray-100">+</div>
            </div>
            <p class=" text-gray-500 font-light mt-1">V-neck T-shirt</p>
            <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
        </div>
        <div class="flex flex-col">
            <div class=" relative">
                <img class="max-w-80 max-h-80" src="assets/images/collection1.png" alt="">
                <div class="bg-gray-transp text-gray-600 absolute px-2 absolute-center-bot cursor-pointer hover:bg-gray-600 hover:text-gray-100">+</div>
            </div>
            <p class=" text-gray-500 font-light mt-1">V-neck T-shirt</p>
            <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
        </div>
    </div>
    <button onclick="showMore()" class="w-full text-center leading-4 group hover:text-slate-950 text-slate-600">Voir Plus <br> <i class="fa-solid fa-chevron-down"></i></button>
</section>

<section class="flex flex-col items-center gap-10">
    <h3 class="uppercase text-4xl tracking-wide">Notre approche sur la mode</h3>
    <p class=" font-extralight tracking-wide max-w-xl text-center">Nous associons créativité et artisanat pour créer une mode qui transcende les tendances
         et résiste à l'épreuve du temps chaque modèle est méticuleusement confectionné, garantissant une finition 
         exquise de la plus haute qualité</p>
    <div class="flex gap-4 flex-wrap justify-around">
        <img class=" max-h-80" src="assets/images/imgMode.png" alt="">
        <img class=" max-h-80 mt-24" src="assets/images/imgMode.png" alt="">
        <img class=" max-h-80" src="assets/images/imgMode.png" alt="">
        <img class=" max-h-80 mt-24" src="assets/images/imgMode.png" alt="">
    </div>
</section>

</body>
<script src="assets/slider.js" type="text/javascript"></script>
</html>