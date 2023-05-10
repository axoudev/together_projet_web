import axios from 'axios';
import { defineStore } from 'pinia';
import {useLocationStore} from './locationStore';

export const useActivitiesStore = defineStore({
  id: 'activities',
  state: () => ({
    activities: [],
  }),
  getters: {
    getActivitiesSortedByDistance: (state) => {
      // Tri des activités par distance
       
        return JSON.parse(JSON.stringify(state.activities)).slice().sort((a, b) => a.distance - b.distance);
    },
    getActivitiesSortedByDate: (state) => {
      // Tri des activités par date
      const sortedActivities = [...state.activities].sort((a, b) => {
        const dateA = new Date(a.date);
        const dateB = new Date(b.date);
        return dateA.getTime() - dateB.getTime();
      });
      return sortedActivities;
    },
  },
  actions: {
    async fetchActivities() {
        const LocationStore = useLocationStore();
        await LocationStore.fetch();
        console.log(LocationStore.getLatitude, LocationStore.getLongitude);
      try {
        // Récupération des activités depuis le serveur
        const response = await axios.get(`/api/getActivitiesWithDistances?lat=${LocationStore.getLatitude}&lon=${LocationStore.getLongitude}`)
        .then(response => {
            // Gérer la réponse
            // Mise à jour du store avec les activités récupérées
            console.log('sjns');
            console.log(response.data);
            this.activities = response.data;
        })
        .catch(error => {
            // Gérer les erreurs
        });
      } catch (error) {
        console.error('Error fetching activities:', error);
      }
    },
  },
});

function calculateDistance(lat1, lon1) {
    const earthRadius = 6371; // Rayon de la Terre en kilomètres
  
    // Convertir les degrés en radians
    const dLat = toRadians(lat2 - lat1);
    const dLon = toRadians(lon2 - lon1);
  
    // Convertir les latitudes en radians
    const lat1Rad = toRadians(lat1);
    const lat2Rad = toRadians(lat2);
  
    // Calcul des différences de latitude et de longitude en radians
    const a =
      Math.sin(dLat / 2) * Math.sin(dLat / 2) +
      Math.sin(dLon / 2) * Math.sin(dLon / 2) * Math.cos(lat1Rad) * Math.cos(lat2Rad);
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  
    // Calcul de la distance en kilomètres
    const distance = earthRadius * c;
  
    return distance;
  }
  
  // Fonction utilitaire pour convertir des degrés en radians
  function toRadians(degrees) {
    return degrees * (Math.PI / 180);
  }