<template>
    <div class="player-title px-12 relative z-2">
        <div class="md:w-full h-24 relative rounded-xl">
            <h1 class="uppercase"> {{ title }}</h1>
        </div>
    </div>
</template>

<script>
    export default {
        name: "TitleBar",
        props: {
            title: String
        }
    }
</script>

<style scoped>

</style>