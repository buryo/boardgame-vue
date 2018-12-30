import Home from "./components/Home";
import Games from "./components/Games";
import Battles from "./components/Battles/Battles";
import Battle_Create from "./components/Battles/Battle-Create";

export const routes = [
    {
        path:'/',
        component: Home
    },
    {
        path:'/players',
        component: Home
    },
    {
        path:'/games',
        component: Games
    },
    {
        path:'/battles',
        component: Battles
    },
    {
        path:'/battle/:id/create',
        component: Battle_Create,
        name: 'battleCreate',
    },
];
