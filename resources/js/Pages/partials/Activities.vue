<script setup>
import { useLocationStore } from '../../Stores/locationStore';
import { useActivitiesStore } from '../../Stores/activitiesStore';
import { computed,onMounted, ref  } from "@vue/runtime-core";

let activitiesByDist = ref(null);

defineProps({
    title: String,
    activities: Array
});

// const LocationStore = useLocationStore();


onMounted(async () => {
    const activitiesStore = useActivitiesStore();
    await activitiesStore.fetchActivities();
    
    activitiesByDist.value = activitiesStore.getActivitiesSortedByDistance;
    console.log(activitiesByDist);

//   console.log('Fetching location...');
//   try {
    // await LocationStore.fetch();
    // axios.get(`/api/getActivitiesWithDistances?lat=${LocationStore.getLatitude}&lon=${LocationStore.getLongitude}`)
    //     .then(response => {
    //         // Gérer la réponse
    //         console.log(response.data);
    //     })
    //     .catch(error => {
    //         // Gérer les erreurs
    //         console.error(error);
    //     });
//     console.log('Location fetched:', LocationStore.getLatitude, LocationStore.getLongitude);
//   } catch (error) {
//     console.error('Error fetching location:', error);
//   }
});



</script>
<template>
    <section class="mt-12">
            <h2 class="text-white font-bold mb-4">{{title}}</h2>
            <div class="flex overflow-x-scroll gap-4">
                <article v-for="activity in activitiesByDist" class="w-1/2 bg-myblue-darker shadow-md rounded-lg overflow-hidden shrink-0">
                    <div class="h-28 bg-red-500 w-full overflow-hidden flex items-center relative">
                        <div class="absolute top-2 left-2 bg-white py-1 px-2 rounded-xl text-sm font-bold text-myblue-darker">{{activity.category.nom}}</div>
                        <img class="w-full" :src=" activity.image_path " alt="">
                    </div>
                    <div class="px-2 py-3 text-white">
                        <h3 class="font-bold whitespace-nowrap overflow-ellipsis max-w-full overflow-hidden">{{activity.title}}</h3>
                        <ul class="text-sm">
                            <li class="text-green-500 mb-1"><i class="fa-solid fa-location-dot mr-2"></i>Ninglinspo, 10 Km</li>
                            <li class="mb-1"><i class="fa-solid fa-user mr-2"></i>{{ activity.user.name }}</li>
                            <li class="mb-2"><i class="fa-solid fa-users mr-1"></i>{{activity.participants_count}}/{{activity.nb_attendees}} Participants</li>
                        </ul>
                        <div class="w-full flex justify-center">
                            <a class="bg-green-500 text-white py-1 w-1/2 rounded-full text-center text-sm" href="">Infos</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
</template>