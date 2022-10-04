import Vue from "vue";
import VueRouter from "vue-router";
import LoginPage from "../components/pages/LoginPage";
import DakokuPage from "../components/pages/DakokuPage";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "Login",
        component: LoginPage,
    },
    {
        path: "/dakoku",
        name: "Dakoku",
        component: DakokuPage,
    },
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes,
});

export default router;
