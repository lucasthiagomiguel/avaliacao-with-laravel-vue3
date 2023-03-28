export default [
    {
      path: '/',
      name: 'login-padrao',
      component: () => import(/* webpackChunkName: "home" */ './Login'),
      meta: {
        requiresAuth:false,
        title: `Login`
      },
      path: '/login',
      name: 'login',
      component: () => import(/* webpackChunkName: "home" */ './Login'),
      meta: {
        requiresAuth:false,
        title: `Login`
      }
    }
    
  ]
