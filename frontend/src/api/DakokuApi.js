import { AjaxRequest } from "@/modules/AjaxRequest";

// 打刻情報
const getDakoku = async (data) => {
    const response = await new AjaxRequest().get("/api/dakoku", data);
    return response.data.result;
};

export { getDakoku };
