import { createWebHistory, createRouter } from 'vue-router'
import store from '@/store'


import routes from './routes'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,  
})

// router.beforeEach = (to, from, next) => {
//     const auth = to.meta.requiresAuth
  
//     // verifica se a rota requer autenticação
//     if (needAuth(auth)) {
//       // verifica se o usuário já está autenticado
//       if (!isAuthRoute(to) && !isLogged()) {
//         next('/login')
//       } else {
//         if (isLogged() && to.path === '/login') {
//           from()
//         }
//         next()
//       }
//     } else {
//       next()
//     }
//   }


export default router