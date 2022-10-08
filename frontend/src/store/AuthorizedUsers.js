import { requestLogin } from "@/api/AuthApi";

const state = {
    login: false,
    user: {
        id: "",
        name: "",
        mailAddress: "",
    },
};

const getters = {
    isAuthorized: (state) => state.login,
};

const actions = {
    async actionRequestLogin({ commit }, data) {
        const response = await requestLogin(data);
        commit("setAuthorized", response.login);
        commit("setUserProfile", response.user);
    },
};

const mutations = {
    setAuthorized(state, payload) {
        state.login = payload;
    },
    setUserProfile(state, payload) {
        state.user = payload;
    },
};

export default {
    namespaced: true,
    getters,
    state,
    actions,
    mutations,
};
