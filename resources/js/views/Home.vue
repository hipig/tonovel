<template>
  <div class="mt-48 flex justify-center items-center">
    <div class="max-w-3xl w-full px-4 sm:px-8">
      <div class="mb-8 sm:mb-14">
        <h1 class="text-center text-5xl font-extrabold text-gray-900">
          <a href="/">toNovel</a>
        </h1>
        <h2 class="sm:mt-4 text-center text-xl sm:text-2xl leading-9 text-gray-500">
          做最简洁，最干净的小说聚合网站
        </h2>
      </div>
      <div class="flex items-center">
        <div class="flex-1 pr-3 sm:pr-6">
          <input type="text" v-model="searchValue" placeholder="请输入小说名称..." class="appearance-none block w-full py-3 px-4 leading-none sm:leading-normal border-2 border-transparent placeholder-gray-500 rounded-lg focus:outline-none focus:border-gray-400 focus:shadow-outline-gray focus:z-10 sm:px-5 text-sm sm:text-lg" @keyup.enter="search">
        </div>
        <button class="inline-flex items-center px-4 border-2 border-transparent font-medium rounded-lg text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:border-gray-900 active:bg-gray-900 focus:shadow-outline-gray transition duration-150 ease-in-out py-3 sm:px-6 leading-none sm:leading-normal text-sm sm:text-lg" @click="search">
          <svg viewBox="0 0 20 20" class="-ml-1 mr-1 h-4 w-4 sm:h-6 sm:w-6 fill-current"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
          <span>搜索</span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
  import { mapActions } from "vuex"

  export default {
    name: 'Home',
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
