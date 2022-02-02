<template>
    <b-container class="LoginPage">
        <b-row>
            <b-col cols="12" class="main-title">
                <h1>出退勤打刻</h1>
            </b-col>
        </b-row>
        <b-row class="mt-4">
            <b-col cols="12" class="text-left">
                アカウントとパスワードでログインしてください。<br>
            </b-col>
        </b-row>
        <b-row class="mt-3 font-weight-bold">
            <b-col cols="12" class="title-text">email</b-col>
            <b-col cols="12">
                <b-input
                    v-model="loginForm.email"
                />
            </b-col>
        </b-row>
        <b-row class="mt-3 font-weight-bold">
            <b-col cols="12" class="title-text">password</b-col>
            <b-col cols="12">
                <b-input
                    v-model="loginForm.password"
                    type="password"
                />
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <b-button
                    @click="handleLogin"
                    :disabled="loadingLogin"
                    block
                    class="mt-5"
                    variant="primary"
                >ログイン
                    <b-spinner small v-if="loadingLogin"/>
                </b-button>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
import {mapActions} from "vuex";
export default {
    name: "LoginPage",
    data() {
        return {
            loginForm: {
                email: '',
                password: ''
            },
            loadingLogin: false
        }
    },
    methods: {
        ...mapActions({
            actionRequestLogin: 'AuthorizedUsers/actionRequestLogin'
        }),
        async handleLogin() {
            if ( this.loginForm.email === '' ) {
                alert('emailが入力されておりません。');
                return;
            }
            if ( this.loginForm.password === '' ) {
                alert('パスワードが入力されておりません。');
                return;
            }
            this.loadingLogin = true;
            await this.actionRequestLogin(this.loginForm);
            this.loadingLogin = false;
        },
    }
}
</script>

<style scoped>
    .LoginPage {
        margin-top: 2rem;
    }

    h1 .main-title {
        text-align: center;
    }

    .title-text {
        text-align: left;
    }
</style>
