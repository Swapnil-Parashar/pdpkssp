<template>
  <div class="container flex flex-col lg:flex-row my-4 h-auto lg:h-96">
    <!-- Left Column -->
    <div class="w-full lg:w-1/3 bg-blue-100 p-2 lg:p-4 overflow-auto">
      <div 
        v-for="(benefit, index) in benefits" 
        :key="index" 
        @click="selectBenefit(index)"
        class="flex items-center mb-2 p-2 cursor-pointer hover:bg-blue-200 rounded transition"
      >
        <img :src="benefit.icon" alt="icon" class="w-16 h-16 mr-2 lg:mr-4" />
        <div>
          <h3 class="font-semibold text-sm lg:text-base">{{ benefit.title }}</h3>
          <p class="text-xs lg:text-sm">{{ benefit.description }}</p>
        </div>
      </div>
    </div>
    
    <!-- Right Column -->
    <div class="w-full lg:w-2/3 bg-white p-2 lg:p-4 flex items-center justify-center">
      <img :src="selectedImage" alt="Map" class="w-full h-full object-contain max-h-96" />
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      benefits: [
        {
          title: "Free Shipping",
          description: "Your shipping costs are always on us.",
          icon: "https://bunky.fun/images/assets/features/delivery.gif",
          image: "https://bunky.fun/images/assets/features/delivery.png",
        },
        {
          title: "Lower Prices",
          description: "Competitive advantage with discounts on every order",
          icon: "https://bunky.fun/images/assets/features/lowest.gif",
          image: "https://bunky.fun/images/assets/features/lowest.png",
        },
        {
          title: "Dedicated Phone Line",
          description: "Receive fast and friendly support.",
          icon: "https://bunky.fun/images/assets/features/support.gif",
          image: "https://bunky.fun/images/assets/features/support.png",
        },
        {
          title: "Free Returns",
          description: "We cover all return costs and fees",
          icon: "https://bunky.fun/images/assets/features/return.gif",
          image: "https://bunky.fun/images/assets/features/return.png",
        },
      ],
      selectedImage: "https://bunky.fun/images/assets/features/delivery.png",
    };
  },
  methods: {
    selectBenefit(index) {
      this.selectedImage = this.benefits[index].image;
    },
  },
};
</script>

<style>
/* Add any additional custom styling here */
</style>
