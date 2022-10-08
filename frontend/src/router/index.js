import Vue from "vue";
import VueRouter from "vue-router";
import LoginPage from "../components/pages/LoginPage";
import DakokuPage from "../components/pages/DakokuPage";
import { requestAuthCheck } from "@/api/AuthApi";
import store from "../store";

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

router.beforeEach(async (to, from, next) => {
    const authCheck = await requestAuthCheck();
    console.log(store.getters["AuthorizedUsers/isAuthorized"]);
    if (store.getters["AuthorizedUsers/isAuthorized"] && authCheck) {
        if (to.name === "Login") {
            next({ name: "Dakoku" });
        }
        next();
    } else if (to.name === "Login") {
        next();
    } else {
        next({ name: "Login" });
    }
});

export default router;
