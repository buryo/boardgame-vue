<template>
    <div>
        <h2 v-text="countFrom" @click="countDown"></h2>
    </div>
</template>

<script>
    export default {
        name: "counter",
        data() {
            return {
                countFrom: 10
            }
        },
        methods: {
            countDown () {
                this.countFrom -= 1
            }
        }
    }
</script>

<style scoped>

</style>
