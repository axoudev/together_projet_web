<script setup>
import { useActivitiesStore } from '../Stores/activitiesStore';
import { ref, onMounted } from 'vue';
import { useRoute } from 'vue-router';
import AppLayout from '@/Layouts/AppLayout.vue';

const route = useRoute();
const activityId = route.params.activityId;
const activitiesStore = useActivitiesStore();
const activity = ref(activitiesStore.getActivityById(route.params.activityId));
// const categories = activitiesStore.getCategories;
// console.log(categories);

const date = new Date(activity.value.date);
const formatedDate = ref(date.toLocaleDateString('fr-FR', {month: 'long', day: 'numeric'}));
const formatedTime = ref(date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute:'2-digit'}));
console.log(formatedDate);


const props = defineProps({
    activityId: {
      type: Number,
      required: true
    },
    image:{
        type: String,
    },
})

</script>
<template>
    <AppLayout>
        <header class="relative">
            <img :src="activity.image_url" alt="" class="w-full">
            <div class="absolute bottom-4 left-6">
                <h1 class="font-bold text-white">{{activity.title}}</h1>
                <div class="bg-white px-2 rounded-md text-myblue-light font-bold"><i class="fa-solid fa-location-dot mr-2"></i>{{activity.city}}, à {{Math.round(activity.distance)}} km</div>
            </div>
        </header>
        <div class="bg-myblue-darker text-white py-4 px-6 -translate-y-1 flex justify-between items-center">
            <p>{{formatedDate}}</p>
            <span class="bg-white text-myblue-darker py-1 px-2 rounded-xl font-bold">{{ activity.category.nom}}</span>
        </div>
        <div class="bg-myblue-light -translate-y-1 py-12 px-6 text-white">
            <section class="mb-12">
                <p class="font-bold text-xl mb-3">{{activity.title}}</p>
                <p class="mb-3">{{formatedDate}} à {{formatedTime}}</p>
                <p>{{activity.description}}</p>
            </section>
            <section class="mb-12">
                <div class="flex items-center">
                    <i class="fa-solid fa-location-dot mr-2 fa-2x text-green-500 bg-white rounded-full"></i>
                    <div>
                        <p>{{activity.street}}, {{activity.house_number}}</p>
                        <p>{{activity.zip_code}} {{activity.city}}</p>
                    </div>
                </div>
            </section>
            <section class="mb-12">
                <p class="mb-2">Organisé par</p>
                <img :src="activity.user.profile_photo_url" alt="" class="rounded-full mb-2">
                <p>{{activity.user.name}}</p>
            </section>
            <section>
                <p>{{activity.participants_count}}/{{activity.nb_attendees}} participants</p>
            </section>
        </div>
    </AppLayout>
    <!-- <img :src="props.image" alt="">
    {{ props.activityId }}

    {{ activity }} -->
</template>   