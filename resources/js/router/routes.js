import MainLayout from '@/layout/MainLayout'
import BlankLayout from '@/layout/BlankLayout'

import Home from '@/views/Home'
import BookSearch from '@/views/book/Search'

export default [
  {
    path: '',
    name: 'blank',
    component: BlankLayout,
    children: [
      {
        path: '/',
        name: 'home',
        component: Home
      }
    ]
  },
  {
    path: '/book',
    name: 'blank',
    component: MainLayout,
    children: [
      {
        path: 'search',
        name: 'book.search',
        component: BookSearch
      }
    ]
  }
]
