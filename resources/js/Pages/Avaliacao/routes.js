export default [
    {
      path: '/avaliacao',
      name: 'avaliacao',
      component: () => import(/* webpackChunkName: "home" */ './Avaliacao'),
      meta: {
        requiresAuth:true,
        title: `Avaliacao`
      }
    }
    
  ]
