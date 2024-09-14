<template>
    <div>
        <div class="hero-section">
            <img
                src="https://bunky.fun/images/assets/money-back-hero.png"
                alt="Money Back Guarantee"
            />
        </div>

        <div class="mx-auto p-6 space-y-8 deliveryandreturn-main pb-20">
            <div class="grid grid-cols-1 gap-8 items-center">
                <div class="content">
                    <h2 class="section-heading">Money Back Guarantee</h2>
                    <p class="text-paragraph text-lg mb-6">
                        At Plumb Distribution, we are committed to your satisfaction and stand behind the quality of our products. We understand that sometimes circumstances change, and you may need to return or exchange an item. That's why we offer a hassle-free Money Back Guarantee within 30 days of your purchase.
                    </p>
                    <h3 class="sub-section-heading">Our Guarantee to You:</h3>
                    <ul class="list-disc pl-5 mb-4">
                        <li><strong>Quality Assurance:</strong> We take great pride in the quality of our products and are confident that you will be satisfied with your purchase. Each item in our inventory undergoes rigorous testing and inspection to ensure it meets our high standards of excellence.</li>
                        <li><strong>Customer Satisfaction:</strong> Your satisfaction is our top priority. If for any reason you are not completely satisfied with your purchase, you can return the item within 30 days for a full refund or exchange, no questions asked.</li>
                        <li><strong>Hassle-Free Returns:</strong> We understand that returning items can be inconvenient, which is why we strive to make the process as simple and straightforward as possible. To initiate a return, simply contact our customer service team, and we will guide you through the process.</li>
                    </ul>
                    <h3 class="sub-section-heading">How It Works:</h3>
                    <ol class="list-decimal pl-5 mb-4">
                        <li><strong>Contact Us:</strong> If you wish to return an item, please contact our customer service team within 30 days of receiving your order. You can reach us via phone, email, or through our website's contact form.</li>
                        <li><strong>Return Authorization:</strong> Once we receive your return request, we will provide you with a Return Authorization (RA) number and instructions on how to return the item.</li>
                        <li><strong>Return the Item:</strong> Pack the item securely in its original packaging, along with any accessories or documentation. Be sure to include the RA number on the package. You are responsible for the cost of return shipping.</li>
                        <li><strong>Processing Your Refund:</strong> Once we receive the returned item and verify its condition, we will process your refund within 5-7 business days. Refunds will be issued to the original form of payment.</li>
                    </ol>
                    <h3 class="sub-section-heading">Conditions of the Money Back Guarantee:</h3>
                    <ul class="list-disc pl-5">
                        <li>Items must be returned in their original condition, unused, and with all original packaging and accessories.</li>
                        <li>The Money Back Guarantee is valid for 30 days from the date of purchase.</li>
                        <li>Certain items may be subject to restocking fees or return shipping charges. Please refer to our Returns Policy for more information.</li>
                    </ul>
                    <p class="text-paragraph mb-4">
                        At Plumb Distribution, we are committed to providing you with a positive shopping experience. If you have any questions or concerns about our Money Back Guarantee or the return process, please don't hesitate to contact us. We're here to help!
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "MoneyBackGuarantee",
};
</script>

<style scoped>
@tailwind base;
@tailwind components;
@tailwind utilities;

.container {
    @apply min-w-3xl;
}

.hero-section {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.hero-heading {
    position: relative;
    color: white;
    font-size: 2.5rem;
    text-align: left;
    max-width: 70%;
}

.primary-color {
    color: rgb(var(--primary));
}

.deliveryandreturn-main {
    text-align: left;
    padding: 2rem;
    background-color: #f2f7f9;
}

.section-heading {
    font-size: 1.75rem;
    font-weight: bold;
    margin-bottom: 1rem;
    color: #00446a;
}

.sub-section-heading {
    font-size: 1.5rem;
    font-weight: bold;
    margin-top: 1.5rem;
    margin-bottom: 0.5rem;
    color: #1f2937;
}

.text-paragraph {
    font-size: 1rem;
    line-height: 1.5rem;
    color: #333333;
}

ul, ol {
    list-style-position: inside;
    margin-bottom: 1rem;
}

li {
    margin-bottom: 0.5rem;
}

@media (max-width: 768px) {
    .grid-cols-1 {
        grid-template-columns: 1fr;
    }

    .grid-cols-2 {
        grid-template-columns: 1fr;
    }
}
</style>
