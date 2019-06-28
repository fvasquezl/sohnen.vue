import Vue from 'vue'
import Router from 'vue-router';
Vue.use(Router);

import ProductCatalog from './views/ProductCatalog';
import Dashboard from './views/Dashboard';
import Users from './views/Users';
import NotFound from './views/404';


export default new Router({
    mode:'history',
    routes:[
        {
            path:"/",
            name:"ProductCatalog",
            component: ProductCatalog
        },

        {
            path:"/dashboard",
            name:"dashboard",
            component: Dashboard
        },
        {
            path:"/users",
            name: "users",
            component: Users
        },
        {
            path:"*",
            component: NotFound
        }
    ]
})