import Home from "./components/Home";
import Games from "./components/Games";

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
];