<template>
    <div class="">
        <label for="input-live">{{ labelWord }}</label>
        <b-form-input
            id="input-live"
            v-model="localValue"
            :type="type"
            aria-describedby="input-live-help input-live-feedback"
            placeholder="作業ID"
            trim
        ></b-form-input>
    </div>
</template>

<script>
export default {
    name: "InputWithLabel",
    props: {
        value: { type: String, required: true },
        type: { type: String, required: true },
        labelWord: { type: String, required: true },
    },
    computed: {
        localValue: {
            get() {
                return this.value;
            },
            set(value) {
                this.$emit("input", value);
            },
        },
    },
};
</script>

<style scoped></style>
