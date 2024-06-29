<template>
    <div>
        <div class="hero-section">
            <img
                src="https://bunky.fun/images/assets/aboutus/delivery-and-return.png"
                alt="Expert Solutions"
            />
        </div>
       
        <div class="mx-auto p-6 space-y-8 deliveryandreturn-main pb-20">
            <div class="grid grid-cols-1 gap-8 items-center">
                <div class="content">
                    <p class="text-paragraph text-lg mb-6">
                        <h3 class="sub-section-heading">Carriage will be chargeable on:</h3>
                        <ul class="list-disc pl-5 mb-4">
                            <li>All orders over the values of £300.00 (excluding VAT)</li>
                            <li>Any order of any size on timed delivery (i.e., pre 9am, pre Noon, etc.)</li>
                            <li>Any orders of any size for Saturday delivery</li>
                        </ul>
                        <h3 class="sub-section-heading">Carriage charges are as follows:</h3>
                        <ul class="list-disc pl-5 mb-4">
                            <li>Standard Next Day Service - £15.00+VAT</li>
                            <li>Priority Service (Pre-10.30am) - £25.00+VAT</li>
                            <li>Saturday Service - £35.00+VAT</li>
                        </ul>
                        <h3 class="sub-section-heading">Product Warranties</h3>
                        <p class="text-paragraph mb-4">
                            If circumstances arise where an item is believed to be faulty and is within the warranty period offered by Plumb
                            Distribution Limited (detailed below), Plumb Distribution Limited will arrange for the item to be tested and a
                            replacement and/or credit if necessary.
                        </p>
                        <h3 class="sub-section-heading">Returns</h3>
                        <p class="text-paragraph mb-4">
                            Please note that unless agreed otherwise, any items returned will be subject to a restocking fee of 30% and
                            return carriage costs are the responsibility of the buyer.
                            Any goods returned as surplus to requirements must meet the following before a credit can be raised:
                        </p>
                        <ul class="list-disc pl-5">
                            <li>Item(s) must have been purchased within the last 6 months from Plumb Distribution Limited</li>
                            <li>Items must be returned in their original condition and packaging</li>
                            <li>When required, proof of purchase must be produced</li>
                            <li>Surplus Heatmiser products must have been purchased within the last 12 months otherwise these
                                cannot be returned due to the manufacturer's warranty expiry</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "DeliveryAndReturnPolicy",
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
    /* background-image: url("https://bunky.fun/images/assets/aboutus/delivery-and-return.png"); */
    background-size: cover; /* Use contain for exact fit */
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    /* height: 100vh;  */
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

.delivery-and-return {
    text-align: center;
    padding: 2rem;
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

ul {
    list-style-type: disc;
    padding-left: 1.5rem;
    margin-bottom: 1rem;
}

li {
    margin-bottom: 0.5rem;
}

.hero-deliveryandreturn-header {
    color: #00446a;
    font-size: 1.5rem;
    line-height: 2.5rem;
    font-weight: bold;
}

.deliveryandreturn-main {
    background-color: #f2f7f9;
}

@media (max-width: 768px) {
    .grid-cols-1 {
        grid-template-columns: 1fr;
    }

    .grid-cols-2 {
        grid-template-columns: 1fr;
    }

    .md\:order-first {
        order: 1;
    }

    .md\:order-last {
        order: 2;
    }
}
</style>
