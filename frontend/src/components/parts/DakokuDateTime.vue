<template>
    <b-row class="currentTimeDisplay">
        <b-col cols="12">
            <p class="currentDate">{{ displayDate }}</p>
        </b-col>
        <b-col cols="12">
            <p class="currentTime">{{ displayTime }}</p>
        </b-col>
    </b-row>
</template>
<script>
import { day } from "@/modules/CustomDate.js";
export default {
    name: "DakokuDateTime",
    props: {
        currentDateTime: {
            type: String,
            required: true,
        },
    },
    computed: {
        displayDate() {
            return day(this.currentDateTime).format("M月D日(ddd)");
        },
        displayTime() {
            return day(this.currentDateTime).format("H:mm");
        },
    },
};
</script>
<style scoped>
.currentTimeDisplay {
    margin-top: 2em;
    color: #333333;
}
.currentDate {
    font-size: 2rem;
    margin-bottom: 0;
}
.currentTime {
    font-size: 4rem;
    margin-bottom: 0;
}
</style>
