
import {createWebHistory, createRouter} from "vue-router";

import Home from '../admin/pages/Home';
import Login from '../admin/pages/Login';
import Dashboard from '../admin/pages/Dashboard';
import Posts from '../admin/components/Posts';
import Subscribers from '../admin/components/Subscribers';
import EditPost from '../admin/components/EditPost';
import AddPost from '../admin/components/AddPost';
import AdminLayout from '../admin/Layout';
import MainLayout from '../frontend/Layout';


export const routes = [
    {
        name: 'main',
        path: '/',
        component: MainLayout,
    },
    {
        name: 'admin',
        path: '/admin',
        component: AdminLayout,
        children: [
            {
                name: 'adminHome',
                path: 'home',
                component: Home
            },
            {
                name: 'login',
                path: 'login',
                component: Login
            },
            {
                name: 'dashboard',
                path: 'dashboard',
                component: Dashboard
            },
            {
                name: 'posts',
                path: 'posts',
                component: Posts
            },
            {
                name: 'addpost',
                path: 'posts/add',
                component: AddPost
            },
            {
                name: 'editpost',
                path: 'posts/edit/:id',
                component: EditPost
            },
            {
                name: 'subscribers',
                path: 'subscribers',
                component: Subscribers
            },
        ]   
    },
    
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
