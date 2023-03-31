export default [
    {
      path: '/historico',
      name: 'historico',
      component: () => import(/* webpackChunkName: "home" */ './Historico'),
      meta: {
        requiresAuth:true,
        title: `Historico`
      }
    }
    
  ]
