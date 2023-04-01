import Login from '@/Pages/Auth/Login.vue'

export default [
    {
      path: '/',
      name: 'login-padrao',
      component: Login,
      meta: {
        requiresAuth:false,
        title: `Login`
      },
      path: '/login',
      name: 'login',
      component: Login,
      meta: {
        requiresAuth:false,
        title: `Login`
      }
    }
    
  ]
