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
    <Index/>
</template>
