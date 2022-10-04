<template>
    <div class="card">
        <div class="cardLeft"></div>
        <div class="cardRight" :class="{ EditCard: isEdit }">
            <div :class="{ SagyoLabelGroupArea: isEdit }">
                <span :class="{ companyTheme: isCompanyTheme }">TX0001</span
                ><br />
                <span>SE0000-0001</span><br />
                <span>カーネルアプリケーション作業</span>
            </div>
            <div v-if="isEdit" :class="{ SagyoTimeInputArea: isEdit }">
                <input
                    class="SagyoTimeInput"
                    type="text"
                    name=""
                    id=""
                    value="3:45"
                />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SagyoCard",
    props: {
        isCompanyTheme: { type: Boolean, require: true },
        isEdit: { tyep: Boolean, require: true },
    },
};
</script>

<style scoped>
.card {
    width: 100%;
    border: 1px solid #ced4da;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
}
.cardLeft {
    width: 10px;
    margin-right: 10px;
    border-radius: 5px 0 0 5px;
    border-right: 1px solid #ced4da;
    background-color: #f79c6a;
}
.companyTheme {
    color: #f79c6a;
}
.EditCard {
    width: 100%;
    display: flex;
    justify-content: space-between;
}
.SagyoLabelGroupArea {
    width: 80%;
}
.SagyoTimeInputArea {
    width: 20%;
    margin: auto 10px;
}
.SagyoTimeInput {
    width: 100%;
    text-align: right;
}
</style>
