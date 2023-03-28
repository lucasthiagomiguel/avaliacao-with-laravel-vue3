import { createWebHistory, createRouter } from 'vue-router'
import store from '@/store'

/* Guest Component */
const Login = () => import('@/components/Login.vue')

/* Guest Component */
const NewUsuario = () => import('@/components/NewUser.vue')
/* Layouts */
const DahboardLayout = () => import('@/components/Login.vue')
/* Layouts */

/* Authenticated Component */
const Dashboard = () => import('@/Pages/Dashboard.vue')
/* Authenticated Component */


const routes = [
    {
        name: "login",
        path: "/login",
        component: Login,
        meta: {
            middleware: "guest",
            title: `Login`
        }
    },
    {
        name: "login",
        path: "/",
        component: Login,
        meta: {
            middleware: "guest",
            title: `Login`
        }
    },
    {
        name: "usuarios",
        path: "/usuarios",
        component: NewUsuario,
        meta: {
            requiresAuth:true,
            title: `Usuarios`
        }
    },
    {
        name: " teste-desenpenho",
        path: "/teste-desenpenho",
        component: Login,
        meta: {
            requiresAuth:true,
            title: `Teste Desenpenho`
        }
    },
    {
        name: "financeiro",
        path: "/financeiro",
        component: Login,
        meta: {
            requiresAuth:true,
            title: `Financeiro`
        }
    },
    {
        name: "financeiro",
        path: "/teste-realizados",
        component: Login,
        meta: {
            requiresAuth:true,
            title: `Financeiro`
        }
    },
    {
        name: "dashboard",
        path: "/dashboard",
        component: Dashboard,
        meta: {
            requiresAuth:true,
            title: `Dashboard`
        }
    }
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,  
})

// router.beforeEach(async(to, from,next) => {
//     document.title = to.meta.title;
//     console.log(to.name );
//     if(to.name !== 'login' && !store.state.auth.authenticated){
//         console.log('test');
//         next({name: 'login'});
//     }
    
// })

router.beforeEach((to, from,next) => {
    document.title = to.meta.title
    if(to.meta?.requiresAuth){
        if(store.state.auth.authenticated){
            next();
        }else{
            next({name: 'login'});
        }
        console.log('passei aqui');
    }else{
        next();
    }

   
})

// router.beforeEach((to, from) => {
//     // instead of having to check every route record with
//     // to.matched.some(record => record.meta.requiresAuth)
//     console.log(store.state.auth.authenticated);
//     if (to.meta.requiresAuth && to.title == 'login') {
//         if(store.state.auth.authenticated){
//             return {
//                 path: '/dashboard',
//                 query: { redirect: to.fullPath },
//             }
//         }else{
//             return {
//                 path: '/login',
//                 query: { redirect: to.fullPath },
//             }
//         }
//       return {
//         path: '/login',
//         query: { redirect: to.fullPath },
//       }
//     }else if(to.meta.requiresAuth == false && store.state.auth.authenticated == true && to.title == 'login'){
//         return {
//             path: '/dashboard',
//             query: { redirect: to.fullPath },
//           }
//     }
// if (to.meta.requiresAuth == false) {
//     if (store.state.auth.authenticated) {
//         console.log("teste");
//         next()
//     }
//     next()
// } else {
//     if (to.meta.title == 'login' && store.state.auth.authenticated) {
//         next()
//     } else {
//         next()
//     }
// }
// })

export default router