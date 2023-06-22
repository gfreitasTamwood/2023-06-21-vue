<template>
  <section class="app-nav-search">
    <NavBar/>
    <SearchBar :search="searchBookList"/>
  </section>
  <BooksTable :books="this.bookList" v-if="!this.typed"/>
  <BooksTable :books="this.searchResult" v-else/>

  <div v-show="false" class="alert alert-success" role="alert">
    Book included successfully!
  </div>
  <div v-show="false" class="alert alert-warning" role="alert">
    Book not found!
  </div>
</template>

<script>
import BooksTable from './components/BooksTable.vue';
import NavBar from './components/NavBar.vue';
import SearchBar from './components/SearchBar.vue';

export default {
  name: 'App',
  components: {
    NavBar,
    SearchBar,
    BooksTable
  },
  data() {
    return {
      typed: false,
      userInput: '',
      searchResult: [],
      bookList: [],
      bookApi: "http://localhost:80/api-vue/api/rest/V1/book-api.php"
    }
  },
  methods: {
    async getBooks(){
      let result = await fetch(this.bookApi);
      this.bookList = await result.json();
    },
    searchBookList(){
      if (this.userInput !== "") {
        this.typed = true;
      }
      this.searchResult = this.bookList.filter(
        (book) => book.title.toLowerCase().includes(this.userInput.toLowerCase())
      );
      // foreach(book in this.bookList){
      //   if(book.title.toLowerCase().includes(this.userInput.toLowerCase())) {
      //     this.searchResult.push(book);
      //   }
      // }
      return this.searchResult;
    }
  },
  created() {
    this.getBooks();
  }

}
</script>

<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css");

.app-nav-search {
  display: flex;
  justify-content: space-between;
  background-color: #f8f9fa;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
