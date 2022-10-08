import Vue from "vue";
import Vuex from "vuex";
import * as Cookies from "js-cookie";
import createPersistedState from "vuex-persistedstate";
import AuthorizedUsers from "./AuthorizedUsers";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        AuthorizedUsers,
    },
    plugins: [
        createPersistedState({
            key: "timecard",
            paths: ["AuthorizedUsers"],
            storage: {
                getItem: (key) => Cookies.get(key),
                setItem: (key, value) =>
                    Cookies.set(key, value, {
                        expires: 7,
                        secure: false,
                    }),
                removeItem: (key) => Cookies.remove(key),
            },
        }),
    ],
});
