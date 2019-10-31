import VueRouter from 'vue-router'
import ForgotPassword from "../pages/Auth/ForgotPassword";
import ResetPassword from "../pages/Auth/ResetPassword";
import Register from '../pages/Auth/Register';
import Login from '../pages/Auth/Login';
import HomePage from '../pages/Home';
import Verify from "../pages/Auth/Verify";
import Profile from "../pages/Profile";
import store from "../store"

//Errors
import AccessDeniedComponent from '../pages/errors/403';
import NoFoundComponent from '../pages/errors/404';

//variables
import {authLayout, appLayout, errorLayout} from '../common/variables/layout';
import beforeEach from "../common/module/websanovaRoueterBeforeEach";

const routes = [
    {
        path: '/',
        name: 'home-page',
        component: HomePage,
        meta: { auth: false, layout: appLayout }
    },
    {
        path: '/verify/:token',
        name: 'email-verify',
        component: Verify,
        meta: { auth: false, layout: authLayout }
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: { auth: false, layout: authLayout }
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        meta: { auth: false, layout: authLayout }
    },
    {
        path: '/forgot-password',
        name: 'forgot',
        component: ForgotPassword,
        meta: { auth: false, layout: authLayout }
    },
    {
        path: '/reset-password/:token',
        name: 'reset_password',
        component: ResetPassword,
        meta: {
            auth: false,
            layout: authLayout
        }
    },
    {
        path: '/profile',
        name: 'profile',
        component: Profile,
        meta: { auth: true, layout: authLayout }
    },
    //Errors
    {
        path: '/403',
        name: '403',
        component: AccessDeniedComponent,
        meta: { auth: undefined, layout: errorLayout, user_roles: [], title: '403' }
    },
    {
        path: '*',
        name: '404',
        component: NoFoundComponent,
        meta: { auth: undefined, layout: errorLayout, user_roles: [], title: '404' }
    }
];

const router = new VueRouter({
    history: true,
    mode: 'history',
    linkExactActiveClass: 'is-active',
    routes
});

export default router;
