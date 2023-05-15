<script setup>
import { useActivitiesStore } from '../../Stores/activitiesStore';
import { onMounted, ref  } from "@vue/runtime-core";

let activities = ref(null);

// let activitiesByDist = ref(null);
// let activitiesByDate = ref(null);

let maxDistKm = ref(100);

const currentDate = new Date();

let props = defineProps({
    title: String,
    sort: String,
});

function redirectToDetails(id) {
    const url = route(activity.show, {id: activity.id})
    window.location.href = url;
}

function formatDate(date){
    return new Date(date).toLocaleDateString('fr-FR', {month: 'long', day: 'numeric'});
}

onMounted(async () => {
    const activitiesStore = useActivitiesStore();;
    
    if(props.sort == "distance") {
        activities.value = activitiesStore.getActivitiesSortedByDistance;
    } else if(props.sort == "date") {
        activities.value = activitiesStore.getActivitiesSortedByDate;
        maxDistKm.value = Infinity;
    }
    console.log(activitiesStore.getCategories);
});



</script>
<template>
        <section class="mt-12">
            <h2 class="text-white font-bold mb-4">{{title}}</h2>
            <div class="flex overflow-x-scroll gap-4">
                <article v-for="activity in activities" class="">
                    <div v-if="activity.distance <= maxDistKm" class="w-56 bg-myblue-darker shadow-md rounded-lg overflow-hidden shrink-0">
                        <div class="h-28 bg-myblue-light w-full overflow-hidden flex items-center relative">
                            <div class="absolute top-2 left-2 bg-white py-1 px-2 rounded-xl text-sm font-bold text-myblue-darker">{{activity.category.nom}}</div>
                            <img class="w-full" :src=" activity.image_url " alt="">
                            <span class="absolute bottom-0 right-0 bg-slate-900 text-white bg-opacity-80 p-2 rounded-tl-md">{{formatDate(activity.date)}}</span>
                        </div>
                        <div class="px-2 py-3 text-white">
                            <h3 class="font-bold whitespace-nowrap overflow-ellipsis max-w-full overflow-hidden">{{activity.title}}</h3>
                            <ul class="text-sm">
                                <li class="text-green-500 mb-1"><i class="fa-solid fa-location-dot mr-2"></i>{{activity.city}}, {{ Math.round(activity.distance) }} Km</li>
                                <li class="mb-1"><i class="fa-solid fa-user mr-2"></i>{{ activity.user.name }}</li>
                                <li class="mb-2"><i class="fa-solid fa-users mr-1"></i>{{activity.participants_count}}/{{activity.nb_attendees}} Participants</li>
                            </ul>
                            <div class="w-full flex justify-center">
                                <router-link class="bg-green-500 text-white py-1 w-1/2 rounded-full text-center text-sm" :to="{ name: 'showActivity', params: { activityId: activity.id } }"> Infos</router-link>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
</template>