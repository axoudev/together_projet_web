<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Index from './Index.vue';
import { useActivitiesStore } from '../Stores/activitiesStore';
import { ref, onMounted } from 'vue';


// let isLoaded = ref(false);
// console.log(isLoaded.value);
// const activitiesStore = useActivitiesStore();
// await activitiesStore.fetchActivities();
// console.log(activitiesStore.activities);
// isLoaded.value = true;
// console.log(isLoaded.value);


defineProps({
    activities: Array
})

    
   

</script>

<template>
    <AppLayout title="Dashboard">
    <router-view/>
    <div class="pt-16"></div>
    <foot class="fixed w-full bottom-0 bg-white h-16">
        <nav class="w-full py-4 text-gray-800">
            <ul class="flex w-full justify-around text-4xl">
                <li><router-link :to="{name:'index'}"><i class="fa-solid fa-house"></i></router-link></li>
                <li><a href=""><i class="fa-solid fa-user"></i></a></li>
                <li><a href=""><i class="fa-solid fa-bookmark"></i></a></li>
                <li><a href="/activity/create"><i class="fa-solid fa-gear"></i></a></li>
            </ul>
        </nav>
    </foot>
    </AppLayout>
</template>
