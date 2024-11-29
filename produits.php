<!doctype html>
<html lang="fr">
    
<?php include("head.php") ?>

<body class=" px-5 flex flex-col gap-20">

<?php include("header.php") ?>

<div class="flex justify-around">
    <section class="flex flex-col gap-5">
        <h3 class=" text-2xl">Filtres</h3>    
        <div>
            <h4 class=" mb-2">Tailles</h4>
            <div class="flex gap-2">
                <button class=" bg-transparent py-1 px-2 hover:bg-black hover:text-white border-stone-800 border">XS</button>
                <button class=" bg-transparent py-1 px-2 hover:bg-black hover:text-white border-stone-800 border">S</button>
                <button class=" bg-transparent py-1 px-2 hover:bg-black hover:text-white border-stone-800 border">M</button>
                <button class=" bg-transparent py-1 px-2 hover:bg-black hover:text-white border-stone-800 border">L</button>
                <button class=" bg-transparent py-1 px-2 hover:bg-black hover:text-white border-stone-800 border">XL</button>
                <button class=" bg-transparent py-1 px-2 hover:bg-black hover:text-white border-stone-800 border">2XL</button>
            </div>
        </div>
        <div class=" max-h-8 overflow-y-hidden">
            <h4 class="flex mb-2 items-center px-2 py-1 cursor-pointer filterCategory bg-gray-transp">Disponibilité <i class="fa-solid fa-chevron-down ml-auto"></i></h4>
            <div class="px-2">
                <label for="disponible" class="flex gap-3">
                    <input type="checkbox" name="disponible">
                    <p>Disponible <span class=" text-blue-900">(130)</span></p>
                </label>
                <label for="horsStock" class="flex gap-3">
                    <input type="checkbox" name="horsStock">
                    <p>Hors Stock <span class=" text-blue-900">(7)</span></p>
                </label>
            </div>
        </div>
        <div class=" max-h-8 overflow-y-hidden">
            <h4 class="flex mb-2 items-center px-2 py-1 cursor-pointer filterCategory bg-gray-transp">Catégories<i class="fa-solid fa-chevron-down ml-auto"></i></h4>
            <div class="px-2">
                <label for="tShirt" class="flex gap-3">
                    <input type="checkbox" name="tShirt">
                    <p>T-Shirts</p>
                </label>
                <label for="pantalons" class="flex gap-3">
                    <input type="checkbox" name="pantalons">
                    <p>Pantalons</p>
                </label>
                <label for="pull" class="flex gap-3">
                    <input type="checkbox" name="pull">
                    <p>Pull</p>
                </label>
            </div>
        </div>
        <div class=" max-h-8 overflow-y-hidden">
            <h4 class="flex mb-2 items-center px-2 py-1 cursor-pointer filterCategory bg-gray-transp">Couleurs<i class="fa-solid fa-chevron-down ml-auto"></i></h4>
            <div class="px-2">
                <label for="noir" class="flex gap-3">
                    <input type="checkbox" name="noir">
                    <p>Noir</p>
                </label>
                <label for="beige" class="flex gap-3">
                    <input type="checkbox" name="beige">
                    <p>Beige</p>
                </label>
                <label for="marron" class="flex gap-3">
                    <input type="checkbox" name="marron">
                    <p>Marron</p>
                </label>
                <label for="gris" class="flex gap-3">
                    <input type="checkbox" name="gris">
                    <p>Gris</p>
                </label>
            </div>
        </div>
        <div class=" max-h-8 overflow-y-hidden">
            <h4 class="flex mb-2 items-center px-2 py-1 cursor-pointer filterCategory bg-gray-transp">Prix<i class="fa-solid fa-chevron-down ml-auto"></i></h4>
            <div class="px-2">
                <label for="50" class="flex gap-3">
                    <input type="checkbox" name="50">
                    <p>0-50€</p>
                </label>
                <label for="100" class="flex gap-3">
                    <input type="checkbox" name="100">
                    <p>50-100€</p>
                </label>
                <label for="150" class="flex gap-3">
                    <input type="checkbox" name="150">
                    <p>100-150€</p>
                </label>
                <label for="150plus" class="flex gap-3">
                    <input type="checkbox" name="150plus">
                    <p>150+€</p>
                </label>
            </div>
        </div>
        <div class=" max-h-8 overflow-y-hidden">
            <h4 class="flex mb-2 items-center px-2 py-1 cursor-pointer filterCategory bg-gray-transp">Collections<i class="fa-solid fa-chevron-down ml-auto"></i></h4>
            <div class="px-2">
                <label for="ete24" class="flex gap-3">
                    <input type="checkbox" name="ete24">
                    <p>Été 2024</p>
                </label>
                <label for="hiver24" class="flex gap-3">
                    <input type="checkbox" name="hiver24">
                    <p>Hiver 2024</p>
                </label>
                <label for="ete23" class="flex gap-3">
                    <input type="checkbox" name="ete23">
                    <p>Été 2023</p>
                </label>
                <label for="hiver23" class="flex gap-3">
                    <input type="checkbox" name="hiver23">
                    <p>Hiver 2023</p>
                </label>
            </div>
        </div>
        <div class=" max-h-8 overflow-y-hidden">
            <h4 class="flex mb-2 items-center px-2 py-1 cursor-pointer filterCategory bg-gray-transp">Notes<i class="fa-solid fa-chevron-down ml-auto"></i></h4>
            <div class="px-2">
                <label for="1etoile" class="flex gap-3">
                    <input type="checkbox" name="1etoile">
                    <p><i class="fa-solid fa-star text-yellow-300"></i></p>
                </label>
                <label for="2etoile" class="flex gap-3">
                    <input type="checkbox" name="2etoile">
                    <p><i class="fa-solid fa-star text-yellow-300"></i><i class="fa-solid fa-star text-yellow-300"></i></p>
                </label>
                <label for="3etoile" class="flex gap-3">
                    <input type="checkbox" name="3etoile">
                    <p><i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i><i class="fa-solid fa-star text-yellow-300"></i></p>
                </label>
                <label for="4etoile" class="flex gap-3">
                    <input type="checkbox" name="4etoile">
                    <p><i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i></p>
                </label>
                <label for="5etoile" class="flex gap-3">
                    <input type="checkbox" name="5etoile">
                    <p><i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i></p>
                </label>
            </div>
        </div>
    </section>

    <section class=" w-8/12">
        <h3 class="uppercase text-5xl tracking-wide font-medium">Nos Produits</h3>
        <div>
            <div class="flex flex-col max-w-80 max-h-80">
                <img src="assets/images/collection1.png" alt="">
                <div class="flex items-center mt-1 gap-4">
                    <p class=" text-gray-500 font-light">V-neck T-shirt</p>
                    <div class="flex items-center group gap-1 max-w-9 overflow-x-hidden hover:max-w-full">
                        <div class=" border-gray-300 bg-slate-100 border p-2 cursor-pointer"></div>
                        <div class=" border-gray-300 bg-slate-700 border hidden group-hover:block p-2 cursor-pointer"></div>
                        <div class=" border-gray-300 bg-red-700 border hidden group-hover:block p-2 cursor-pointer"></div>
                        <div class=" border-gray-300 bg-orange-500 border hidden group-hover:block p-2 cursor-pointer"></div>
                        <div class=" border-gray-300 bg-violet-500 border hidden group-hover:block p-2 cursor-pointer"></div>
                        <div class=" border-gray-300 bg-pink-600 border hidden group-hover:block p-2 cursor-pointer"></div>
                        <p class=" text-gray-500 font-extralight text-xs group-hover:hidden">+5</p>
                    </div>
                </div>
                <div class="flex"><p>Embroidered Seersucker Shirt</p><p class=" ml-auto">$99</p></div>
            </div>
        </div>
    </section>
</div>

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

</body>
<script src="assets/slider.js" type="text/javascript"></script>
<script src="assets/filters.js" type="text/javascript"></script>
</html>