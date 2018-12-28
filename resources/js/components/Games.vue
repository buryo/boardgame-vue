<template>
    <div>
        <TopTitle :title="topTitle"/>

        <CardTitle :title="title"/>

        <div class="bg-white-darker justify-center px-4 overflow-x-auto md:px-13 pt-20 pb-10 game-form relative z-1">
            <table class="md:w-full min-w-650 players-table">
                <thead>
                <tr class="text-left border-b-2 border-grey pb-16">
                    <th class="w-1/3 pl-4">Game</th>
                    <th class="w-1/3">Description</th>
                    <th class="w-1/3">min. players</th>
                    <th class="w-1/3">max. players</th>
                </tr>
                </thead>
                <tr v-for="game in games">
                    <td class="pl-4">{{ game.attributes.name }}</td>
                    <td>{{ game.attributes.description }}</td>
                    <td>{{ game.attributes.minPlayers }}</td>
                    <td>{{ game.attributes.maxPlayers }}</td>
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
                title: "Games",
                games: [],
            }
        },
        mounted() {
            axios.get('/api/games')
                .then( res => this.games = res.data.data )
        }
    }
</script>

<style scoped>

</style>
