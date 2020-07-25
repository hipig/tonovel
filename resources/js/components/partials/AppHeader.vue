<template>
  <div class="bg-white px-4 relative z-30" :class="{'shadow-sm': currentRouteName !== 'home'}">
    <div class="md:flex items-center justify-between mx-auto max-w-6xl">
      <div class="flex justify-between md:flex-none items-center">
        <a href="/" class="flex items-center py-2">
          <span class="text-2xl font-semibold text-gray-900">toNovel</span>
        </a>
        <div class="-mr-2 flex items-center md:hidden">
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-700 transition duration-150 ease-in-out">
            <svg class="h-6 w-6 stroke-current" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
      <div class="hidden md:block">
        <a href="/jobs" class="mr-6 py-5 inline-block font-medium hover:text-gray-600 text-gray-800">更新日志</a>
        <a href="#" class="mr-6 py-5 inline-block font-medium hover:text-gray-600 focus:text-gray-800">捐赠</a>
        <a href="#" class="mr-6 py-5 inline-block font-medium hover:text-gray-600 focus:text-gray-800">GitHub</a>
      </div>
      <div class="hidden md:block">
        <a href="/auth/login" class="px-6 py-1 mr-1 inline-block font-medium hover:text-gary-600 focus:text-gray-800">登录</a>
        <a href="/auth/register" class="base-button inline-flex items-center justify-center font-medium focus:outline-none rounded-full px-6 py-1 border-2 border-gray-800 bg-gray-800 hover:bg-gray-700 hover:border-gray-700 focus:outline-none focus:border-gray-900 active:bg-gray-900 focus:shadow-outline-gray text-white">注册</a>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "AppHeader",
    data () {
      return {
        currentRouteName: '',
      }
    },
    watch: {
      $route: {
        handler: function(route) {
          this.currentRouteName = route.name
        },
        immediate: true
      }
    },
  }
</script>

<style lang="scss" scoped>
  .menu-active {
    position: relative;
    &:after {
      bottom: 0;
      position: absolute;
      left: 0;
      right: 0;
      display: block;
      margin-left: auto;
      margin-right: auto;
      content: "";
      height: 3px;
      width: 100%;
      border-radius: 1000px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
      background-color: #319795;
    }
  }
</style>
