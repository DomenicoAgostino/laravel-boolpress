import Vue from 'vue';

import VueRouter from 'vue-router';


Vue.use(VueRouter);

import HomeComponent from './components/pages/HomeComponent';
import AboutComponent from './components/pages/AboutComponent';





const router = new VueRouter({
    mode: 'history',
    routes:[
        {
            path: '/',
            name: 'home',
            component: HomeComponent
        },

        {
            path: '/chi-siamo',
            name: 'about',
            component: AboutComponent
        },

        {
            path: '/contatti',
            name: 'concats',
            component: ContactsComponent
        },

        {
            path: '/blog',
            name: 'blog',
            component: BlogComponent
        },


    ]

});

export default router;

