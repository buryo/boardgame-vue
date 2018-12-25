<template>
    <div id="main">
        <Navbar/>
        <div class="content">
            <transition-page>
                <router-view></router-view>
            </transition-page>
        </div>
    </div>
</template>

<script>
    import Navbar from "./Navbar";
    import TransitionPage from "./partials/TransitionPage";

    export default {
        name: "main-app",
        components: {Navbar, TransitionPage},
    }
</script>

<style scoped>
    .fade-enter-active,
    .fade-leave-active {
        transition-duration: 0.3s;
        transition-property: height, opacity;
        transition-timing-function: ease;
        overflow: hidden;
    }

    .fade-enter,
    .fade-leave-active {
        opacity: 0
    }
</style>