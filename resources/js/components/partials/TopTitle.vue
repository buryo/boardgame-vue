<template>
    <div class="highscore mb-20">
        <div class="oval h-96 sm:h-96 md:h-96 lg:h-112">
            <h1 class="text-black text-center mb-6 uppercase text-2xl sm:text-3xl md:text-4xl">{{ title }}</h1>
        </div>
    </div>
</template>

<script>
    export default {
        name: "TopTitle",
        props: {
            title: String
        }
    }
</script>

<style scoped>

</style>