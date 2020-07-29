import MainLayout from '@/layout/MainLayout'
import BlankLayout from '@/layout/BlankLayout'

import Home from '@/views/Home'
import BookSearch from '@/views/book/Search'
import BookDetail from '@/views/book/Detail'

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
    name: 'book',
    component: MainLayout,
    children: [
      {
        path: 'search',
        name: 'book.search',
        component: BookSearch
      },
      {
        path: 'detail',
        name: 'book.detail',
        component: BookDetail
      }
    ]
  }
]
