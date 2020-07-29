<template>
  <div class="py-10 px-4">
    <div class="max-w-6xl mx-auto">
      <div class="md:flex -mx-4">
        <div class="md:w-3/4 px-4">
          <div class="flex items-center mb-4">
            <input v-model="searchValue" placeholder="请输入小说名称..." class="px-4 py-2 leading-normal block w-full text-gray-800 bg-white text-left appearance-none outline-none rounded-lg border-2 border-gray-300 focus:outline-none focus:border-gray-400 focus:shadow-outline-gray" @keyup.enter="search">
          </div>
          <div>
            <div class="shadow w-full rounded-lg bg-white overflow-hidden w-full block mb-4 relative cursor-pointer">
              <div class="px-6 py-4 sm:px-6 sm:py-5">
                <div class="flex">
                  <div class="mr-5">
                    <img src="http://r.m.kuxiaoshuo.com/files/article/image/4/4456/4456s.jpg" alt="Cover" class="object-contain w-24 bg-gray-100 rounded-lg border p-1">
                  </div>
                  <div class="flex-1">
                    <div class="md:flex">
                      <div class="flex-1">
                        <div class="mb-2 sm:mb-1 pr-3">
                          <a href="#" class="inline-block text-2xl text-gray-700 font-semibold leading-normal">
                            大主宰
                          </a>
                        </div>
                        <div class="mb-2 sm:mb-1 leading-normal flex items-center">
                          <div class="text-gray-600 hidden sm:block">作者：</div>
                          <div class="text-gray-500">天蚕土豆</div>
                        </div>
                        <div class="mb-2 sm:mb-1 inline-block leading-normal flex items-center">
                          <div class="text-gray-600 hidden sm:block">最新章节：</div>
                          <div class="text-gray-500 truncate">第一千三十二章 七阳截天杖</div>
                        </div>
                      </div>
                      <div class="md:w-48 flex-col justify-between mt-1 hidden sm:block">
                        <div class="mb-1 md:flex-1 flex items-center">
                          <svg fill="none" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="stroke-current w-6 h-6 mr-2 text-gray-400">
                            <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                          </svg>
                          <p class="text-sm text-gray-600 leading-normal">54K</p>
                        </div>
                        <div class="mb-1 md:flex-1 flex items-center">
                          <svg fill="none" viewBox="0 0 24 24" class="stroke-current w-6 h-6 mr-2 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 8l3 5m0 0l3-5m-3 5v4m-3-5h6m-6 3h6m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                          </svg>
                          <p class="text-sm text-gray-600 leading-normal">连载中</p>
                        </div>
                        <div class="mb-1 md:flex-1 flex items-center">
                          <svg fill="none" viewBox="0 0 24 24" class="stroke-current w-6 h-6 mr-2 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                          </svg>
                          <p class="text-sm text-gray-600 leading-normal">2017-09-15</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="md:w-1/4 px-4 pt-5 md:pt-16">
          <div class="shadow w-full rounded-lg bg-white overflow-hidden w-full block mb-5 relative bg-orange-100 px-5 py-5">
            <div class="flex items-center mb-3">
              <div class="p-2 mr-2 leading-normal bg-orange-200 text-orange-800 flex justify-center items-center rounded-full">
                <svg fill="none" viewBox="0 0 24 24" class="stroke-current w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <h2 class="leading-tight text-gray-700 font-semibold text-gray-600 leading-normal">没有找到？</h2>
            </div>
            <p class="text-base text-gray-600 leading-normal">找不到您想看的小说？</p>
            <p class="mb-5 text-base text-gray-600 leading-normal">自己制作书源!</p>
            <a href="#" class="shadow bg-white hover:shadow-md text-gray-700 inline-flex items-center justify-center font-medium focus:outline-none rounded-lg px-4 py-2">制作书源</a>
          </div>
          <div class="shadow w-full rounded-lg bg-white overflow-hidden w-full block mb-5 relative bg-teal-100 px-5 py-5">
            <div class="flex items-center mb-3">
              <div class="p-2 mr-2 leading-normal bg-teal-200 text-teal-800 flex justify-center items-center rounded-full">
                <svg fill="none" viewBox="0 0 24 24" class="stroke-current w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
              </div>
              <h2 class="leading-tight text-gray-700 text-xl font-semibold text-base text-gray-600 leading-normal">联系我们</h2>
            </div>
            <p class="mb-5 text-base text-gray-600 leading-normal">需要优化，请提出您宝贵的建议。</p>
            <a href="#" class="shadow bg-white hover:shadow-md text-gray-700 inline-flex items-center justify-center font-medium focus:outline-none rounded-lg px-4 py-2">问题反馈</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import { mapActions } from "vuex"

  export default {
    name: 'BookSearch',
    computed: {
      searchValue: {
        get () {
          return this.$store.getters['search/value']
        },
        set (value) {
          this.updateValue(value)
        }
      }
    },
    created() {
      console.log(this.$store.getters['search/value'])
    },
    methods: {
      ...mapActions({
        'updateValue': 'search/updateValue'
      }),
      search() {
        const keywords = this.searchValue
        if (keywords !== '') {
          this.$router.push({ name: 'book.search', query: { keywords } })
        }
      }
    }
  }
</script>
