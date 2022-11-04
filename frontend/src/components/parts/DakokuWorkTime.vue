<template>
    <b-row>
        <b-col cols="6">
            <template v-if="this.isDoneGoingWork">
                <b-button class="done-dakoku-button goingWork">
                    出勤<br />済
                </b-button>
            </template>
            <template v-else>
                <b-button
                    class="dakoku-button goingWork"
                    @click="this.onClickGoingDakokuButton"
                    >出勤</b-button
                >
            </template>
        </b-col>
        <b-col cols="6">
            <template v-if="this.isDoneLeavingWork">
                <b-button class="done-dakoku-button leavingWork">
                    退勤<br />済</b-button
                >
            </template>
            <template v-else>
                <b-button
                    class="dakoku-button leavingWork"
                    @click="this.onClickLeavingDakokuButton"
                    >退勤</b-button
                >
            </template>
        </b-col>
        <b-col cols="6" class="dakokuTime">
            {{ toWorkingTime }}
            <b-button
                class="text-decoration-none"
                v-show="isDoneGoingWork"
                variant="link"
                @click="this.onClickCancelGoingDakoku"
            >
                [取消]
            </b-button>
        </b-col>
        <b-col cols="6" class="dakokuTime">
            {{ toleavivngTime }}
            <b-button
                class="text-decoration-none"
                v-show="isDoneLeavingWork"
                variant="link"
                @click="this.onClickCancelLeavingDakoku"
            >
                [取消]
            </b-button>
        </b-col>
    </b-row>
</template>
<script>
import { day } from "@/modules/CustomDate.js";
export default {
    name: "DakokuWorkTime",
    props: {
        currentDateTime: {
            type: String,
            require: true,
        },
        goingWork: {
            type: Object,
            default: () => {},
        },
        leavingWork: {
            type: Object,
            default: () => {},
        },
    },
    computed: {
        toWorkingTime() {
            if (this.goingWork.time === "未") {
                return this.goingWork.time;
            } else {
                return day(this.goingWork.time).format("H:mm");
            }
        },
        toleavivngTime() {
            if (this.leavingWork.time === "未") {
                return this.leavingWork.time;
            } else {
                return day(this.leavingWork.time).format("H:mm");
            }
        },
        isDoneGoingWork() {
            return this.goingWork.time && this.goingWork.time !== "未";
        },
        isDoneLeavingWork() {
            return this.leavingWork.time && this.leavingWork.time !== "未";
        },
    },
    methods: {
        onClickGoingDakokuButton() {
            this.$emit("setApplyInfo");
            // TODO 打刻申請モーダル実装
        },
        onClickLeavingDakokuButton() {
            this.$emit("setApplyInfo");
            // TODO 打刻申請モーダル実装
        },
        onClickCancelGoingDakoku() {
            if (!confirm("出勤打刻を取り消しますか？")) {
                return;
            }
            this.$emit("cancelGoingDakoku", { id: this.goingWork.id });
        },
        onClickCancelLeavingDakoku() {
            if (!confirm("退勤打刻を取り消しますか？")) {
                return;
            }
            this.$emit("cancelLeavingDakoku", { id: this.leavingWork.id });
        },
    },
};
</script>
<style scoped>
.dakoku-button {
    padding: 3rem 2.6rem;
    font-size: 3rem;
}
.dakoku-button.goingWork {
    background-color: #007bff !important;
    border-color: #007bff !important;
    color: #fff !important;
}
.dakoku-button.goingWork:hover {
    background-color: #0069d9 !important;
    border-color: #0062cc !important;
    color: #fff !important;
}
.dakoku-button.leavingWork,
.dakoku-button.leavingWork:active {
    background-color: #ffc107 !important;
    border-color: #ffc107 !important;
    color: #212529 !important;
}
.dakoku-button.leavingWork:hover {
    background-color: #e0a800 !important;
    border-color: #d39e00 !important;
    color: #212529 !important;
}
.done-dakoku-button {
    padding: 1.1rem 2.6rem;
    font-size: 2.8rem;
    cursor: default !important;
}
.done-dakoku-button.goingWork,
.done-dakoku-button.goingWork:active {
    background-color: #fff !important;
    border-color: #007bff !important;
    color: #007bff !important;
}
.done-dakoku-button.leavingWork,
.done-dakoku-button.leavingWork:active {
    color: #ffc107 !important;
    border-color: #ffc107 !important;
    background-color: #fff !important;
}
.dakokuTime {
    font-size: 1.5rem;
}
</style>
