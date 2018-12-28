<template>
    <div>
        <TopTitle :title="topTitle"/>
        <div
            class="game-form w-full py-8 h-auto md:h-32 bg-white-darker md:flex md:items-center md:justify-center mb-24">
            <form action="" class="md:flex">
                <div class="border-b-4 border-grey-dark my-5 mx-6 md:mr-16 relative">
                    <select
                        class="h-12 bg-transparent appearance-none border-none w-full md:min-w-50 text-grey-darker py-1 pl-4 leading-tight focus:outline-none"
                        name="select_game" id="">
                        <option default selected value="">Select Game</option>
                        <option value="">Carcasonne</option>
                        <option value="">Football</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>

                <div class="fieldset border-b-4 my-5 mx-6 border-grey-dark md:mr-16">
                    <form action="#" method="post" @submit.prevent="searchPlayer">
                        <input class="h-12 md:min-w-50 flex w-full py-1 bg-transparent focus:outline-none pl-4" id="url"
                               type="text" v-model="nickname" @keyup="searchPlayer">
                        <label class="pl-4" for="url">Player</label>
                        <div class="after"></div>
                    </form>
                </div>
            </form>
        </div>

        <CardTitle :title="title"/>

        <div class="bg-white-darker justify-center px-4 overflow-x-auto md:px-13 pt-20 pb-10 game-form relative z-1">
            <table class="md:w-full min-w-650 players-table">
                <thead>
                <tr class="text-left border-b-2 border-grey pb-16">
                    <th class="w-1/3 pl-4">Nickname</th>
                    <th class="w-1/3">Name</th>
                    <th class="w-1/3">Last name</th>
                    <th class="w-1/3">Score</th>
                </tr>
                </thead>
                <tr v-for="user in users">
                    <td class="pl-4">{{ user.attributes.nickname }}</td>
                    <td>{{ user.attributes.first_name }}</td>
                    <td>{{ user.attributes.last_name }}</td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
    import CardTitle from "./partials/CardTitle";
    import TopTitle from "./partials/TopTitle";

    export default {
        name: "Home",
        components: {TopTitle, CardTitle},
        data() {
            return {
                nickname: '',
                title: "Player",
                topTitle: "Highscore",
                users: []
            }
        },
        mounted() {
            axios.get('/api/users')
                .then(res => this.users = res.data.data)
        },
        methods: {
            searchPlayer() {
                axios.post('/api/players', {
                    nickname: this.nickname
                }).then(res => this.users = res.data.data)
                    .catch(err => console.log(err))
            }
        }
    }
</script>

<style scoped>

</style>
