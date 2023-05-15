import { createRouter, createWebHistory } from "vue-router";
import Index from "../Pages/Index.vue";
import Details from "../Pages/Details.vue";
import LandingPage from "../Pages/LandingPage.vue";
import AddActivityForm from "../Pages/AddActivityForm.vue";

const routeInfos = [
    {
        path : "/",
        name : "landingPage",
        component : LandingPage
    },
    {
        path : "/index",
        name: "index",
        component : Index
    },
    {
        path : "/activity/show",
        name : "showActivity",
        component : Details
    },
    {
        path : "/activity/create",
        name : "createActivity",
        component : AddActivityForm
    }
]

const router = createRouter({
    history : createWebHistory(),
    routes : routeInfos
})

export default router;