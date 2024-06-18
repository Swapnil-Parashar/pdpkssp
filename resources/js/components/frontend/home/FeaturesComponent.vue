<template>
  <div class="flex h-screen">
    <!-- Left Column -->
    <div class="w-1/3 bg-blue-100 p-4">
      <h2 class="text-2xl font-bold mb-4">Being a Pro Has Its Perks!</h2>
      <div 
        v-for="(benefit, index) in benefits" 
        :key="index" 
        @click="selectBenefit(index)"
        class="flex items-center mb-4 p-2 cursor-pointer hover:bg-blue-200 rounded transition"
      >
        <img :src="benefit.icon" alt="icon" class="w-8 h-8 mr-4" />
        <div>
          <h3 class="font-semibold">{{ benefit.title }}</h3>
          <p>{{ benefit.description }}</p>
        </div>
      </div>
    </div>
    
    <!-- Right Column -->
    <div class="w-2/3 bg-white p-4 flex items-center justify-center">
      <img :src="selectedImage" alt="Map" class="w-full h-full object-contain" />
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
          description: "Your shipping costs are always on the house",
          icon: "https://www.supplyhouse.com/6ec2dc46664299309414346d53140316.gif",
          image: "https://www.supplyhouse.com/4f699beb8ebb2e1ead85c99001fce326.png",
        },
        {
          title: "Lower Prices",
          description: "Competitive advantage with discounts on every order",
          icon: "https://www.supplyhouse.com/6ec2dc46664299309414346d53140316.gif",
          image: "https://www.supplyhouse.com/4f699beb8ebb2e1ead85c99001fce326.png",
        },
        {
          title: "Free Returns",
          description: "We cover all return costs and fees",
          icon: "https://www.supplyhouse.com/6ec2dc46664299309414346d53140316.gif",
          image: "https://www.supplyhouse.com/4f699beb8ebb2e1ead85c99001fce326.png",
        },
        {
          title: "Exclusive Gear",
          description: "Get free TradeMaster merchandise with select orders",
          icon: "https://www.supplyhouse.com/6ec2dc46664299309414346d53140316.gif",
          image: "https://www.supplyhouse.com/4f699beb8ebb2e1ead85c99001fce326.png",
        },
        {
          title: "Dedicated Phone Line",
          description: "Receive fast and friendly support exclusively for pros",
          icon: "https://www.supplyhouse.com/6ec2dc46664299309414346d53140316.gif",
          image: "https://www.supplyhouse.com/4f699beb8ebb2e1ead85c99001fce326.png",
        },
      ],
      selectedImage: "https://www.supplyhouse.com/4f699beb8ebb2e1ead85c99001fce326.png",
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
