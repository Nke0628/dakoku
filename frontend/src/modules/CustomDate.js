import dayjs from "dayjs";
import "dayjs/locale/ja";
dayjs.locale("ja");

export const day = (time = "") => {
    return time === "" ? dayjs() : dayjs(time);
};
