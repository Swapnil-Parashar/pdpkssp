<template>
    <div class="category-bar" v-if="isLargeScreen">
      <!-- Add your category list code here -->
      <ul class="category-list">
        <li v-for="(category, index) in categories" :key="index">
          <router-link
            :to="{ name: 'frontend.product', query: { category: category.slug } }"
            class="category-link"
          >
            {{ category.name }}
          </router-link>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    name: "TopCategoryComponent",
    data() {
      return {
        isLargeScreen: false,
        categories: [] // Replace this with your actual categories data
      };
    },
    mounted() {
      this.isLargeScreen = window.innerWidth >= 1024; // Adjust the breakpoint as needed
      window.addEventListener("resize", this.handleResize);
    },
    methods: {
      handleResize() {
        this.isLargeScreen = window.innerWidth >= 1024; // Adjust the breakpoint as needed
      }
    },
    beforeUnmount() {
      window.removeEventListener("resize", this.handleResize);
    }
  };
  </script>
  
  <style scoped>
  .category-bar {
    background-color: orange;
    /* Add any other styles you want for the category bar */
  }
  
  .category-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .category-link {
    color: white; /* Adjust the color as needed */
    text-decoration: none;
    padding: 10px;
    display: block;
  }
  
  .category-link:hover {
    background-color: rgba(255, 255, 255, 0.1); /* Adjust the hover color as needed */
  }
  </style>
  