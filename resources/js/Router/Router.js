import { createRouter, createWebHistory } from "vue-router";
import Index from "../Pages/Index.vue";
import Details from "../Pages/Details.vue";

const routeInfos = [
    {
        path : "/dashboard",
        name: "index",
        component : Index
    },
    {
        path : "/activity/show",
        name : "showActivity",
        component : Details
    },
]

const router = createRouter({
    history : createWebHistory(),
    routes : routeInfos
})

export default router;