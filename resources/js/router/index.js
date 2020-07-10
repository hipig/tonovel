import Vue from 'vue'
import routes from './routes'
import Router from 'vue-router'
import NProgress from 'nprogress'
import '@/assets/css/nprogress.css'

NProgress.configure({ showSpinner: false, speed: 350 })

Vue.use(Router)

const router = createRouter()

router.beforeEach(before)
router.afterEach(after)

export default router

function createRouter () {
  return new Router({
    mode: 'history',
    base: '/',
    routes
  })
}

function before(to, from, next) {
  NProgress.start()
  next()
}

function after() {
  NProgress.done()
}
