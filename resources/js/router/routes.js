import MainLayout from '@/layout/MainLayout'
import BlankLayout from '@/layout/BlankLayout'

import Home from '@/views/Home'


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
  }
]
