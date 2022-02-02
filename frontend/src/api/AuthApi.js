import {AjaxRequest} from "@/modules/AjaxRequest";

// ログイン
const requestLogin = async (data) => {
    const response = await (new AjaxRequest()).post('/login', data);
    return response.data;
};

export {
    requestLogin
};
