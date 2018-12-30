<template>
    <div>
        <nav class="items-center justify-between flex-wrap p-6 pin-t absolute z-10 pin-l pin-r pin-t">
            <div class="container mx-auto flex justify-between">
                <div class="logo">
                    <router-link to="/" class="">
                        <img class="select-none w-16 md:w-24 lg:w-32 h-auto" src="/media/img/logo.png" alt="">
                    </router-link>
                </div>

                <div class="nav_links text-white select-none hidden md:block">
                    <router-link to="/players" class="tracking-normal md:tracking-nav-a md:px-2 px-3 py-2 active">
                        players
                    </router-link>
                    <router-link to="/games" class="tracking-normal md:tracking-nav-a md:px-2 px-3 py-2">
                        Games
                    </router-link>
                    <router-link to="/battles" class="tracking-normal md:tracking-nav-a md:px-2 px-3 py-2">
                        Battles
                    </router-link>
                    <a class="tracking-normal md:tracking-nav-a md:px-2 px-3 py-2" href="/language">language</a>
                    <a class="tracking-normal md:tracking-nav-a md:px-2 px-3 py-2" href="/logout">logout</a>
                </div>

                <div v-on-clickaway="away" class="md:hidden">
                    <div v-if="buttonHidden" class="nav_links text-white select-none block md:hidden">
                        <a @click="openMenu" href="#">
                            <svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg>
                        </a>
                    </div>

                    <div v-bind:class="{ open:sideMenu  }"
                         class="block md:hidden side-menu h-full fixed z-99 pin-y pin-r bg-black-lighter opacity-95 overflow-x-hidden pt-6">
                        <a @click="openMenu"
                           class="block text-5xl hover:text-home text-white px-8 py-2 text-center border-b-2 mb-3 border-solid"
                           href="#">&times;</a>
                        <a class="block text-white hover:text-home px-8 py-2" href="#">Players</a>
                        <a class="block text-white hover:text-home px-8 py-2" href="#">Games</a>
                        <a class="block text-white hover:text-home px-8 py-2" href="#">Battles</a>
                        <a class="block text-white hover:text-home px-8 py-2" href="#">Language</a>
                        <a class="block text-white hover:text-home px-8 py-2" href="#">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
    import {mixin as clickaway} from 'vue-clickaway';

    export default {
        name: "navbar",
        mixins: [clickaway],
        data() {
            return {
                sideMenu: false,
                buttonHidden: true
            }
        },
        methods: {
            away() {
                if (this.sideMenu === true) {
                    this.sideMenu = false;
                    this.buttonHidden = true;
                }
            },
            openMenu() {
                this.sideMenu === false ? this.sideMenu = true : this.sideMenu = false;
                this.buttonHidden === true ? this.buttonHidden = false : this.buttonHidden = true;
            }
        }
    }
</script>

<style scoped>

</style>
