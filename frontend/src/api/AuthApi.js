import { AjaxRequest } from "@/modules/AjaxRequest";

// ログイン
const requestLogin = async (data) => {
    const response = await new AjaxRequest().post("/login", data);
    const { login, user } = response.data.result;
    if (!login) {
        throw new Error("ログインに失敗しました");
    }
    return {
        login,
        user,
    };
};

const requestAuthCheck = async (data) => {
    try {
        const response = await new AjaxRequest().post("/auth_check", data);
        const login = response.data.result.login;
        return login;
    } catch (e) {
        alert("システムエラーです。管理者までご連絡おねがいします。");
    }
};

export { requestLogin, requestAuthCheck };
