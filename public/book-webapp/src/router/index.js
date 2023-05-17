import { createRouter, createWebHistory } from 'vue-router'
import { setTitle } from '@/router/guards/SetTitleGuard.mjs'
export const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('@/pages/HomePage.vue'),
      meta: {
        requiresAuth: false,
        title: 'Home'
      }
    },
    {
      path: '/mylist',
      name: 'mylist',
      component: () => import('@/pages/MyList.vue'),
      meta: {
        requiresAuth: false,
        title: 'My List'
      }
    },
    {
      path: '/community',
      name: 'community',
      component: () => import('@/pages/Community.vue'),
      meta: {
        requiresAuth: false,
        title: 'Community'
      }
    }
  ]
})

router.beforeEach(setTitle)
