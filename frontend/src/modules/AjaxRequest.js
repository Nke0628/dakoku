import axios from 'axios';

export class AjaxRequest {
    constructor(timeout = 600000) {

    this.request = axios.create({
        baseURL: process.env.VUE_APP_BASE_URL,
        timeout,
        withCredentials: true
        });
    }

    get(url, data) {
        return this.request.get(url, {params:data});
    }

    post(url, data) {
        return this.request.post(url, data);
    }
}


