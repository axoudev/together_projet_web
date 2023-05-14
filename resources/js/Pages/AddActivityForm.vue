<script setup>

import { router, useForm } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import { useActivitiesStore } from '../Stores/activitiesStore'

const activitiesStore = useActivitiesStore();
const categories = activitiesStore.getCategories;
console.log(categories);

const data = useForm({
    title: null,
    description: null,
    street: null,
    house_number: null,
    city: null,
    zip_code: null,
    country: null,
    category_id: null,
    image: null,
    date: null,
    duration: null,
    nb_attendees: null,
    user_id: null,
});

function submitForm() {
    data.post('/activity/store');
    router.push('/dashboard');
}

// const data = reactive({
//     title: null,
//     description: null,
//     street: null,
//     house_number: null,
//     city: null,
//     zip_code: null,
//     country: null,
//     category_id: null,
//     image: null,
//     date: null,
//     duration: null,
//     nb_attendees: null,
//     user_id: null,
// });



// const submitForm = () => {
//     router.post('/activity/store', data);
// }

// const props = defineProps({
//     categories: Array
// });
</script>
<template>
    <AppLayout>
        <div>
            <!-- {{ props.categories }} -->
            <form @submit.prevent="submitForm" enctype="multipart/form-data" class="mt-12 px-6">
                <div class="mb-8">
                    <label for="title" class="block font-bold">Titre</label>
                    <input type="text" id="title" v-model="data.title" required class="bg-blue-100 border-none rounded-2xl w-full">
                </div>

                <div class="mb-7">
                    <span class="font-bold">Catégories</span>
                    <div class="flex flex-wrap">
                        
                        <div v-for="category in categories" class="w-fit">
                            <input class="hidden" type="radio" name="category" :id="category.id" :value="category.id" v-model="data.category_id">
                            <label :for="category.id">{{ category.nom }}</label>
                        </div>
                    </div>
                </div>

                <div class="mb-8">
                    <label for="date" class="block font-bold">Date de l'activité</label>
                    <input type="date" id="date" v-model="data.date" class="bg-blue-100 border-none rounded-2xl w-full" required>
                </div>
                
                <!-- <div class="mb-8">
                    <label for="time" class="block font-bold">Heure de l'activité</label>
                    <input type="time" id="time" v-model="data.date" class="bg-blue-100 border-none rounded-2xl w-full" required>
                </div> -->

                <div class="mb-8">
                    <label for="duration" class="block font-bold">Durée de l'activité</label>
                    <input type="time" id="duration" v-model="data.duration" class="bg-blue-100 border-none rounded-2xl w-full" required>
                </div>

                <div class="mb-8">
                    <label for="maxParticipants" class="block font-bold">Nombre de participants</label>
                    <input type="number" id="maxParticipants" v-model="data.nb_attendees" class="bg-blue-100 border-none rounded-2xl w-full" required>
                </div>

                <div class="mb-8">
                    <label for="" class="font-bold block">Adresse</label>
                    <div class="flex w-full">
                        <input type="text" id="street" placeholder="Rue" v-model="data.street" class="bg-blue-100 border-none rounded-2xl w-3/4 mr-2" required>
                        <input type="text" id="house_number" placeholder="N°" v-model="data.house_number" class="bg-blue-100 border-none rounded-2xl w-1/4" required>
                    </div>
                </div>

                <div class="mb-8">
                    <label for="cp" class="block font-bold">Code postal</label>
                    <input type="text" id="cp" v-model="data.zip_code" class="bg-blue-100 border-none rounded-2xl w-full" required>
                </div>

                <div class="mb-8">
                    <label for="city" class="block font-bold">Ville</label>
                    <input type="text" id="city" v-model="data.city" class="bg-blue-100 border-none rounded-2xl w-full" required>
                </div>

                <div class="mb-8">
                    <label for="address" class="block font-bold">Pays</label>
                    <input type="text" id="pays" v-model="data.country" class="bg-blue-100 border-none rounded-2xl w-full" required>
                </div>

                <div class="mb-8">
                    <label for="description" class="block font-bold">Description de l'activité</label>
                    <textarea id="description" v-model="data.description" class="bg-blue-100 border-none rounded-2xl w-full" required></textarea>
                </div>
                
                <!-- <label for="category">Catégorie</label>
                <select id="category" required v-model="data.category_id">
                    <option value="">Sélectionnez une catégorie</option>
                    <option v-for="category in props.categories" :value="category.id" :key="category.id">{{ category.nom }}</option>
                </select> -->

                <div class="mb-8">
                    <label for="image" class="block font-bold">Image</label>
                    <input type="file" @input="data.image = $event.target.files[0]"  class="bg-blue-100 border-none rounded-2xl w-full"/>
                </div>
    
                <button type="submit" class="bg-myblue-dark text-white font-bold mb-6 p-4 w-full">Ajouter</button>
            </form>
        </div>
    </AppLayout>
</template>
<style scoped>
input[type="radio"] + label {
    @apply bg-blue-100 border border-green-700 p-3 mr-3 mb-2 rounded-xl block;
}

input[type="radio"]:checked + label {
    @apply bg-green-700 text-white;
}
</style>