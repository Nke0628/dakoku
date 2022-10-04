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

export { requestLogin };
