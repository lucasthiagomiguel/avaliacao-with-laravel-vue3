import { createWebHistory, createRouter } from 'vue-router'
import store from '@/store'


import routes from './routes'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,  
})




export default router