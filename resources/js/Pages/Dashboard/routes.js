export default [
    {
      path: '/dashboard',
      name: 'dashboard',
      component: () => import(/* webpackChunkName: "home" */ './Dashboard'),
      meta: {
        requiresAuth:true,
        title: `Dashboard`
      }
    }
    
  ]
