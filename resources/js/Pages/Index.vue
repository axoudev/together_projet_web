<script setup>
import { onBeforeMount, onMounted, ref } from 'vue';
import { useActivitiesStore } from '../Stores/activitiesStore';
import Categories from './partials/Categories.vue';
import Activities from './partials/Activities.vue';
import AppLayout from '@/Layouts/AppLayout.vue';


const isLoaded = ref(false);


onMounted(async () => {
    const activitiesStore = useActivitiesStore();
    await activitiesStore.fetchActivities();
    isLoaded.value = true;
});
</script>
<template>
    <AppLayout>
        <div class="bg-gradient-to-br from-myblue-light to-myblue-dark min-h-screen container mx-auto pl-4 pt-6 pb-6">
            <h1 class="text-4xl text-white font-bold">Together</h1>

            <div class="flex items-center mt-8">
                <i class="icon fa fa-search absolute z-10 text-white pl-3"></i>
                <input class="flex-1 bg-myblue-darker border-none rounded-xl py-1 pl-10 text-white placeholder-white" type="search" placeholder="Chercher des activités">
                <i class="px-4 fa-solid fa-filter text-white text-xl"></i>
                <i class="px-4 fa-solid fa-map text-white text-xl"></i>
            </div>

            <Categories v-if="isLoaded" />
            <Activities v-if="isLoaded" title="Activités à proximité" sort="distance"/>
            <Activities v-if="isLoaded" title="Prochaines activités" sort="date"/>
            
            <!-- <Activities title="Prochaines activités"/> -->
        </div>
    </AppLayout>
</template>