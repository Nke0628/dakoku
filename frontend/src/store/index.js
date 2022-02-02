import Vue from 'vue'
import Vuex from 'vuex'
import AuthorizedUsers from './AuthorizedUsers';

Vue.use(Vuex)

export default new Vuex.Store({
    modules : {
        AuthorizedUsers
    }
})
