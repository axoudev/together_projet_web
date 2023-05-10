<script setup>
</script>
<template>
    <div class="bg-gradient-to-br from-myblue-light to-myblue-dark min-h-screen container mx-auto pl-4 pt-8 pb-20">
        <h1 class="text-4xl text-white font-bold">Together</h1>
        <div class="flex items-center mt-8">
            <i class="icon fa fa-search absolute text-white pl-3"></i>
            <input class="flex-1 bg-myblue-darker border-none rounded-xl py-1 pl-10 text-white placeholder-white" type="search" placeholder="Chercher des activités">
            <i class="px-4 fa-solid fa-filter text-white text-xl"></i>
            <i class="px-4 fa-solid fa-map text-white text-xl"></i>
        </div>
        <section class="flex flex-nowrap mt-8 text-sm text-white overflow-x-scroll">
            <article class="flex flex-col items-center w-[20%] shrink-0">
                <div class="rounded-full overflow-hidden w-10/12">
                    <img  src="https://fastly.picsum.photos/id/995/200/200.jpg?hmac=C_VYf8uWBpaP3GWRI8MP0fMrXh0CR4Y9EgSf7hYhX1E" alt="">
                </div>
                <span class="mt-2">Randonnée</span>
            </article>
            <article class="flex flex-col items-center w-[20%] shrink-0">
                <div class="rounded-full overflow-hidden w-10/12">
                    <img src="https://fastly.picsum.photos/id/995/200/200.jpg?hmac=C_VYf8uWBpaP3GWRI8MP0fMrXh0CR4Y9EgSf7hYhX1E" alt="">
                </div>
                <span class="mt-2">Vélo</span>
            </article>
            <article class="flex flex-col items-center w-[20%] shrink-0">
                <div class="rounded-full overflow-hidden w-10/12">
                    <img src="https://fastly.picsum.photos/id/995/200/200.jpg?hmac=C_VYf8uWBpaP3GWRI8MP0fMrXh0CR4Y9EgSf7hYhX1E" alt="">
                </div>
                <span class="mt-2">Moto</span>
            </article>
            <article class="flex flex-col items-center w-[20%] shrink-0">
                <div class="rounded-full overflow-hidden w-10/12">
                    <img src="https://fastly.picsum.photos/id/995/200/200.jpg?hmac=C_VYf8uWBpaP3GWRI8MP0fMrXh0CR4Y9EgSf7hYhX1E" alt="">
                </div>
                <span class="mt-2">Pêche</span>
            </article>
            <article class="flex flex-col items-center w-[20%] shrink-0">
                <div class="rounded-full overflow-hidden w-10/12">
                    <img src="https://fastly.picsum.photos/id/995/200/200.jpg?hmac=C_VYf8uWBpaP3GWRI8MP0fMrXh0CR4Y9EgSf7hYhX1E" alt="">
                </div>
                <span class="mt-2">Pêche</span>
            </article>
            <article class="flex flex-col items-center w-[20%] shrink-0">
                <div class="rounded-full overflow-hidden w-10/12">
                    <img src="https://fastly.picsum.photos/id/995/200/200.jpg?hmac=C_VYf8uWBpaP3GWRI8MP0fMrXh0CR4Y9EgSf7hYhX1E" alt="">
                </div>
                <span class="mt-2">Pêche</span>
            </article>
            <article class="flex flex-col items-center w-[20%] shrink-0">
                <div class="rounded-full overflow-hidden w-10/12">
                    <img src="https://fastly.picsum.photos/id/995/200/200.jpg?hmac=C_VYf8uWBpaP3GWRI8MP0fMrXh0CR4Y9EgSf7hYhX1E" alt="">
                </div>
                <span class="mt-2">Pêche</span>
            </article>
        </section>
        <section class="mt-12">
            <h2 class="text-white font-bold mb-4">Activités à proximité</h2>
            <div class="flex overflow-x-scroll gap-4">
                <article class="w-1/2 bg-myblue-darker shadow-md rounded-lg overflow-hidden shrink-0">
                    <div class="h-28 bg-red-500 w-full overflow-hidden flex items-center relative">
                        <div class="absolute top-2 left-2 bg-white py-1 px-2 rounded-xl text-sm font-bold text-myblue-darker">Randonnée</div>
                        <img class="w-full" src="https://picsum.photos/300/200" alt="">
                    </div>
                    <div class="px-2 py-3 text-white">
                        <h3 class="font-bold">Randonnée charmante</h3>
                        <ul class="text-sm">
                            <li class="text-green-500 mb-1"><i class="fa-solid fa-location-dot mr-2"></i>Ninglinspo, 10 Km</li>
                            <li class="mb-1"><i class="fa-solid fa-user mr-2"></i>Partick</li>
                            <li class="mb-2"><i class="fa-solid fa-users mr-1"></i>1/5 Participants</li>
                        </ul>
                        <div class="w-full flex justify-center">
                            <a class="bg-green-500 text-white py-1 w-1/2 rounded-full text-center text-sm" href="">Infos</a>
                        </div>
                    </div>
                </article>
                <article class="w-1/2 bg-myblue-darker shadow-md rounded-lg overflow-hidden shrink-0">
                    <div class="h-28 bg-red-500 w-full overflow-hidden flex items-center relative">
                        <div class="absolute top-2 left-2 bg-white py-1 px-2 rounded-xl text-sm font-bold text-myblue-darker">Randonnée</div>
                        <img class="w-full" src="https://picsum.photos/300/200" alt="">
                    </div>
                    <div class="px-2 py-3 text-white">
                        <h3 class="font-bold">Randonnée charmante</h3>
                        <ul class="text-sm">
                            <li class="text-green-500 mb-1"><i class="fa-solid fa-location-dot mr-2"></i>Ninglinspo, 10 Km</li>
                            <li class="mb-1"><i class="fa-solid fa-user mr-2"></i>Partick</li>
                            <li class="mb-2"><i class="fa-solid fa-users mr-1"></i>1/5 Participants</li>
                        </ul>
                        <div class="w-full flex justify-center">
                            <a class="bg-green-500 text-white py-1 w-1/2 rounded-full text-center text-sm" href="">Infos</a>
                        </div>
                    </div>
                </article>
                <article class="w-1/2 bg-myblue-darker shadow-md rounded-lg overflow-hidden shrink-0">
                    <div class="h-28 bg-red-500 w-full overflow-hidden flex items-center relative">
                        <div class="absolute top-2 left-2 bg-white py-1 px-2 rounded-xl text-sm font-bold text-myblue-darker">Randonnée</div>
                        <img class="w-full" src="https://picsum.photos/300/200" alt="">
                    </div>
                    <div class="px-2 py-3 text-white">
                        <h3 class="font-bold">Randonnée charmante</h3>
                        <ul class="text-sm">
                            <li class="text-green-500 mb-1"><i class="fa-solid fa-location-dot mr-2"></i>Ninglinspo, 10 Km</li>
                            <li class="mb-1"><i class="fa-solid fa-user mr-2"></i>Partick</li>
                            <li class="mb-2"><i class="fa-solid fa-users mr-1"></i>1/5 Participants</li>
                        </ul>
                        <div class="w-full flex justify-center">
                            <a class="bg-green-500 text-white py-1 w-1/2 rounded-full text-center text-sm" href="">Infos</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <section class="mt-12">
            <h2 class="text-white font-bold mb-4">Prochaines activités</h2>
            <div class="flex overflow-x-scroll gap-4">
                <article class="w-1/2 bg-myblue-darker shadow-md rounded-lg overflow-hidden shrink-0">
                    <div class="h-28 bg-red-500 w-full overflow-hidden flex items-center relative">
                        <div class="absolute top-2 left-2 bg-white py-1 px-2 rounded-xl text-sm font-bold text-myblue-darker">Randonnée</div>
                        <img class="w-full" src="https://picsum.photos/300/200" alt="">
                    </div>
                    <div class="px-2 py-3 text-white">
                        <h3 class="font-bold">Randonnée charmante</h3>
                        <ul class="text-sm">
                            <li class="text-green-500 mb-1"><i class="fa-solid fa-location-dot mr-2"></i>Ninglinspo, 10 Km</li>
                            <li class="mb-1"><i class="fa-solid fa-user mr-2"></i>Partick</li>
                            <li class="mb-2"><i class="fa-solid fa-users mr-1"></i>1/5 Participants</li>
                        </ul>
                        <div class="w-full flex justify-center">
                            <a class="bg-green-500 text-white py-1 w-1/2 rounded-full text-center text-sm" href="">Infos</a>
                        </div>
                    </div>
                </article>
                <article class="w-1/2 bg-myblue-darker shadow-md rounded-lg overflow-hidden shrink-0">
                    <div class="h-28 bg-red-500 w-full overflow-hidden flex items-center relative">
                        <div class="absolute top-2 left-2 bg-white py-1 px-2 rounded-xl text-sm font-bold text-myblue-darker">Randonnée</div>
                        <img class="w-full" src="https://picsum.photos/300/200" alt="">
                    </div>
                    <div class="px-2 py-3 text-white">
                        <h3 class="font-bold">Randonnée charmante</h3>
                        <ul class="text-sm">
                            <li class="text-green-500 mb-1"><i class="fa-solid fa-location-dot mr-2"></i>Ninglinspo, 10 Km</li>
                            <li class="mb-1"><i class="fa-solid fa-user mr-2"></i>Partick</li>
                            <li class="mb-2"><i class="fa-solid fa-users mr-1"></i>1/5 Participants</li>
                        </ul>
                        <div class="w-full flex justify-center">
                            <a class="bg-green-500 text-white py-1 w-1/2 rounded-full text-center text-sm" href="">Infos</a>
                        </div>
                    </div>
                </article>
                <article class="w-1/2 bg-myblue-darker shadow-md rounded-lg overflow-hidden shrink-0">
                    <div class="h-28 bg-red-500 w-full overflow-hidden flex items-center relative">
                        <div class="absolute top-2 left-2 bg-white py-1 px-2 rounded-xl text-sm font-bold text-myblue-darker">Randonnée</div>
                        <img class="w-full" src="https://picsum.photos/300/200" alt="">
                    </div>
                    <div class="px-2 py-3 text-white">
                        <h3 class="font-bold">Randonnée charmante</h3>
                        <ul class="text-sm">
                            <li class="text-green-500 mb-1"><i class="fa-solid fa-location-dot mr-2"></i>Ninglinspo, 10 Km</li>
                            <li class="mb-1"><i class="fa-solid fa-user mr-2"></i>Partick</li>
                            <li class="mb-2"><i class="fa-solid fa-users mr-1"></i>1/5 Participants</li>
                        </ul>
                        <div class="w-full flex justify-center">
                            <a class="bg-green-500 text-white py-1 w-1/2 rounded-full text-center text-sm" href="">Infos</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
    <footer>
        
    </footer>
</template>
<style scoped>
</style>