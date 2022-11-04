<template>
    <b-container>
        <DakokuDateTime :current-date-time="currentDateTime" />
        <DakokuWorkTime
            :going-work="dakoku.goingWork"
            :leaving-work="dakoku.leavingWork"
        />
    </b-container>
</template>
<script>
import { getDakoku } from "@/api/DakokuApi.js";
import DakokuDateTime from "@/components/parts/DakokuDateTime.vue";
import DakokuWorkTime from "@/components/parts/DakokuWorkTime.vue";
export default {
    name: "DakokuPage",
    components: {
        DakokuDateTime,
        DakokuWorkTime,
    },
    async mounted() {
        try {
            const dakokuInfo = await getDakoku();
            this.$set(this, "currentDateTime", dakokuInfo.currentDateTime);
            this.$set(this, "dakoku", dakokuInfo.dakoku);
        } catch (e) {
            const errorMsg =
                e.response.data.result.message ||
                "システムエラーが発生しました。";
            alert(errorMsg);
        }
    },
    data() {
        return {
            currentDateTime: "",
            dakoku: {
                goingWork: {
                    id: 0,
                    dakokuType: 1,
                    time: "未",
                },
                leavingWork: {
                    id: 1,
                    dakokuType: 2,
                    time: "未",
                },
                inTime: [],
            },
        };
    },
};
</script>
