import {requestLogin} from '@/api/AuthApi'

const state = {
    user : {
        id:"",
        name:"",
        email: ""
    }
};

const actions = {
    async actionRequestLogin({commit},data){
        const response = await requestLogin(data);
        commit('setUserProfile',response);
    }
}

const mutations = {
    setUserProfile(state, payload){
        state.user = payload
    }
}

export default {
    namespaced: true,
    state,
    actions,
    mutations
}
