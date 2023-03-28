import { createWebHistory, createRouter } from 'vue-router'
import store from '@/store'


import routes from './routes'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,  
})



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
export default router