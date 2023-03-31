export default [
    {
      path: '/colaboradores',
      name: 'colaboradores',
      component: () => import(/* webpackChunkName: "home" */ './Colaboradores'),
      meta: {
        requiresAuth:true,
        title: `Colaboradores`
      }
    }
    
  ]
