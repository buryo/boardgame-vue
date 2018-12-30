<template>
    <div>
        <TopTitle :title="topTitle"/>

        <CardTitle :title="title"/>

        <div class="bg-white-darker flex justify-center px-4 overflow-x-auto md:px-13 pt-20 pb-10 game-form relative z-1 min-h-24">
            <form class="w-full max-w-md">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            type="text" name="game" placeholder="" disabled :value="game.attributes.name">
                    </div>
                </div>
                <div v-if="playersAmount" class="flex flex-wrap -mx-3 mb-2">
                    <div v-for="index in parseInt(playersAmount)" :key="index" class="w-full md:w-1/2 px-3 mb-6 md:mb-5">
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                            type="text" :placeholder="'Player ' + index + ' Name'">
                        <input type="text" class="mx-auto mt-1 appearance-none block bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" placeholder="score">
                    </div>
                </div>
            </form>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <input
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        type="number" name="game" placeholder="Hoeveel spelers?" v-model="playersAmount" :disabled="disableNumberInput" @change="playersAmountChanged" @click="playersAmountChanged" @keyup="playersAmountChanged">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import TopTitle from "../partials/TopTitle";
    import CardTitle from "../partials/CardTitle";

    export default {
        name: "Battle-Create",
        components: {TopTitle, CardTitle},
        data() {
            return {
                topTitle: '',
                game: [],
                title: "",
                playersAmount: 0,
                disableNumberInput: false,
            }
        },
        mounted() {
            axios.get(`/api/games/${this.$route.params.id}`)
                .then(res => {this.game = res.data.data ; this.title = res.data.data.attributes.name ; this.playersAmount = res.data.data.attributes.minPlayers})
                .catch(err => {console.log(err)});
        },
        methods: {
            playersAmountChanged(){
                if (this.playersAmount < this.game.attributes.minPlayers){
                    this.playersAmount = this.game.attributes.minPlayers;
                }

                if (this.playersAmount > this.game.attributes.maxPlayers){
                    this.playersAmount = this.game.attributes.maxPlayers
                }

                this.playersAmount > 0 ? this.showInputs = true : this.showInputs = false;
            }
        }
    }
</script>

<style scoped>
</style>
