<script setup>
import { useActivitiesStore } from '../Stores/activitiesStore';
import { ref, onMounted } from 'vue';

const activity = ref(null);

const props = defineProps({
    activityId: {
      type: Number,
      required: true
    }
})

onMounted(async () => {
    const activitiesStore = useActivitiesStore();
    await activitiesStore.fetchActivities();
    
    activity.value = activitiesStore.getActivityById(props.activityId);
    console.log(activity.value);
});

</script>
<template>
{{ props.activityId }}
{{ activity }}
</template>   