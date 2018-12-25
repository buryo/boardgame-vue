<template>
    <div>
        <TopTitle :title="topTitle"/>

        <CardTitle :title="title"/>

        <div class="bg-white-darker justify-center px-4 overflow-x-auto md:px-13 pt-20 pb-10 game-form relative z-1">
            <table class="md:w-full min-w-650 players-table">
                <thead>
                <tr class="text-left border-b-2 border-grey pb-16">
                    <th class="w-1/3 pl-4">Nickname</th>
                    <th class="w-1/4">Points</th>
                    <th class="w-1/2">Member Since</th>
                </tr>
                </thead>
                <tr>
                    <td class="pl-4">Goldenboy010</td>
                    <td>161</td>
                    <td>02-12-2017</td>
                </tr>
                <tr>
                    <td class="pl-4">Crispy_</td>
                    <td>91</td>
                    <td>18-09-2017</td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
    import TopTitle from "./partials/TopTitle";
    import CardTitle from "./partials/CardTitle";
    export default {
        name: "Games",
        components: {TopTitle, CardTitle},
        data(){
            return{
                topTitle: "999games",
                title: "Games"
            }
        }
    }
</script>

<style scoped>

</style>