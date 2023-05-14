<script setup>
import { router } from '@inertiajs/vue3'
import { reactive } from 'vue'
import { useForm } from '@inertiajs/vue3'

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

const props = defineProps({
    categories: Array
});
</script>
<template>
    <div>
        {{ props.categories }}
        <h1>Ajouter une nouvelle activité</h1>
        <form @submit.prevent="submitForm" enctype="multipart/form-data">
            @csrf
            <label for="title">Titre</label>
            <input type="text" id="title" v-model="data.title" required>

            <label for="description">Description</label>
            <textarea id="description" v-model="data.description" required></textarea>

            <label for="address">Rue</label>
            <input type="text" id="street" v-model="data.street" required>

            <label for="address">numero</label>
            <input type="text" id="house_number" v-model="data.house_number" required>

            <label for="address">code postal</label>
            <input type="text" id="cp" v-model="data.zip_code" required>

            <label for="address">city</label>
            <input type="text" id="city" v-model="data.city" required>

            <label for="address">Pays</label>
            <input type="text" id="pays" v-model="data.country" required>

            <label for="category">Catégorie</label>
            <select id="category" required v-model="data.category_id">
                <option value="">Sélectionnez une catégorie</option>
                <option v-for="category in props.categories" :value="category.id" :key="category.id">{{ category.nom }}</option>
            </select>

            <label for="image">Image</label>
            <input type="file" @input="data.image = $event.target.files[0]" />

            <label for="date">Date de l'activité</label>
            <input type="date" id="date" v-model="data.date" required>

            <label for="duration">Durée (en heures)</label>
            <input type="number" id="duration" v-model="data.duration" required>

            <label for="maxParticipants">Nombre de participants max</label>
            <input type="number" id="maxParticipants" v-model="data.nb_attendees" required>

            <button type="submit">Ajouter</button>
        </form>
    </div>
</template>