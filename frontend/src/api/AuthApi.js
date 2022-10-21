import { AjaxRequest } from "@/modules/AjaxRequest";

// ログイン
const requestLogin = async (data) => {
    const response = await new AjaxRequest().post("/login", data);
    const { login, user } = response.data.result;
    return {
        login,
        user,
    };
};

const requestAuthCheck = async (data) => {
    const response = await new AjaxRequest().post("/auth_check", data);
    const login = response.data.result.login;
    return login;
};

export { requestLogin, requestAuthCheck };
