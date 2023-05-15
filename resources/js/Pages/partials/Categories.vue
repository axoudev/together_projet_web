<script setup>
import { useActivitiesStore } from '../../Stores/activitiesStore';
import { onMounted, ref } from 'vue';


const categories = ref(null);

const activitiesStore = useActivitiesStore();
categories.value = activitiesStore.getCategories;

</script>

<template>
    <section class="flex flex-nowrap mt-8 text-sm text-white overflow-x-scroll">
            <article v-for="category in categories" class="flex flex-col items-center w-[20%] shrink-0">
                <div class="rounded-full overflow-hidden w-16 h-16">
                    <img  :src=" category.image " alt="" class="h-full w-full">
                </div>
                
                <span class="mt-2">{{category.nom}}</span>
            </article>
        </section>
</template>