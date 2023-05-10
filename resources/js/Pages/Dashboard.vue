<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Categories from './partials/Categories.vue';
import Activities from './partials/Activities.vue';

defineProps({
    activities: Array
})

</script>

<template>
    <AppLayout title="Dashboard">
        <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template> -->

        <!-- <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>
            </div>
        </div> -->
        
        <div class="bg-gradient-to-br from-myblue-light to-myblue-dark min-h-screen container mx-auto pl-4 pt-20 pb-20">
        <h1 class="text-4xl text-white font-bold">Together</h1>

        <div class="flex items-center mt-8">
            <i class="icon fa fa-search absolute z-10 text-white pl-3"></i>
            <input class="flex-1 bg-myblue-darker border-none rounded-xl py-1 pl-10 text-white placeholder-white" type="search" placeholder="Chercher des activités">
            <i class="px-4 fa-solid fa-filter text-white text-xl"></i>
            <i class="px-4 fa-solid fa-map text-white text-xl"></i>
        </div>

        <Categorie/>
        <Activities :activities="activities" title="Activités à proximité"/>
        
        <!-- <Activities title="Prochaines activités"/> -->
    </div>
    <foot class="fixed w-full bottom-0 bg-white">
        <nav class="w-full py-4 text-gray-800">
            <ul class="flex w-full justify-around text-4xl">
                <li><a href=""><i class="fa-solid fa-house"></i></a></li>
                <li><a href=""><i class="fa-solid fa-user"></i></a></li>
                <li><a href=""><i class="fa-solid fa-bookmark"></i></a></li>
                <li><a href=""><i class="fa-solid fa-gear"></i></a></li>
            </ul>
        </nav>
    </foot>
    </AppLayout>
</template>
