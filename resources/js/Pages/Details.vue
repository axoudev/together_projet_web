<script setup>
import { useActivitiesStore } from '../Stores/activitiesStore';
import { ref, onMounted } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();
const activityId = route.params.activityId;
console.log('activityId' + activityId);

const activitiesStore = useActivitiesStore();


const activity = ref(activitiesStore.getActivityById(route.params.activityId));

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
    <header class="relative">
        <img :src="activity.image_url" alt="">
        <div class="absolute bottom-4 left-8">
            <h1 class="font-bold text-white">{{activity.title}}</h1>
            <div class="bg-white px-2 rounded-md text-myblue-light font-bold">{{activity.city}}, à {{Math.round(activity.distance)}} km</div>
        </div>
    </header>
    <div class="bg-myblue-darker text-white">
        <p>{{activity.date}} {{ activity.category.nom}}</p>
    </div>
    <section>
        <p>{{activity.title}}</p>
        <p>{{activity.description}}</p>
    </section>
    <section>
        <p>{{activity.street}}, {{activity.house_number}}</p>
        <p>{{activity.zip_code}} {{activity.city}}</p>
    </section>
    <section>
        <img :src="activity.user.profile_photo_url" alt="">
        <p>Organisé par: {{activity.user.name}}</p>
    </section>
    <!-- <img :src="props.image" alt="">
    {{ props.activityId }}

    {{ activity }} -->
</template>   