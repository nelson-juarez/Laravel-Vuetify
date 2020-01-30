import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: () => require('../views/Home')
    //component: () => import(/* webpackChunkName: "planning" */ '../js/components/Home.vue')
  },
  {
    path: '/planning',
    name: 'planning',
    component: () => import(/* webpackChunkName: "planning" */ '../js/components/Home.vue')
  },
  {
    path: '/socios',
    name: 'socios',
    component: () => require('../views/Socios')
    //component: () => import(/* webpackChunkName: "socios" */ '../js/components/Socios.vue')
  }
]

const router = new VueRouter({
  routes,
  mode: 'history'
})

export default router