<template>
    <div>
        <div class="hero-section"></div>
        <div class="delivery-and-return">
            <p class="text-lg hero-deliveryandreturn-header pt-8 pb-8">
                Welcome to Plumb Distribution, your go-to source for top-notch
                underfloor heating systems and plumbing fittings. We take great
                pride in providing solutions that are not only technically
                advanced but also user-friendly, ensuring that you can enjoy the
                unparalleled comfort and convenience of underfloor heating in
                both residential and commercial settings.
            </p>
        </div>
        <div class="mx-auto p-6 space-y-8 deliveryandreturn-main">
            <div class="grid grid-cols-1 gap-8 items-center">
                <div class="content">
                    <h2 class="section-heading">Delivery, Returns & Warranty Information</h2>
                    <p class="text-paragraph text-lg mb-6">
                        Carriage will be chargeable on:
                        <ul class="list-disc pl-5">
                            <li>All orders over the values of £300.00 (excluding VAT)</li>
                            <li>Any order of any size on timed delivery (i.e., pre 9am, pre Noon, etc.)</li>
                            <li>Any orders of any size for Saturday delivery</li>
                        </ul>
                        Carriage charges are as follows:
                        <ul class="list-disc pl-5">
                            <li>Standard Next Day Service - £15.00+VAT</li>
                            <li>Priority Service (Pre-10.30am) - £25.00+VAT</li>
                            <li>Saturday Service - £35.00+VAT</li>
                        </ul>
                        Product Warranties
                        <br />
                        If circumstances arise where an item is believed to be faulty and is within the warranty period offered by Plumb
                        Distribution Limited (detailed below), Plumb Distribution Limited will arrange for the item to be tested and a
                        replacement and/or credit if necessary.
                        <br /><br />
                        Returns
                        <br />
                        Please note that unless agreed otherwise, any items returned will be subject to a restocking fee of 30% and
                        return carriage costs are the responsibility of the buyer.
                        Any goods returned as surplus to requirements must meet the following before a credit can be raised:
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
    /* background-image: url("https://bunky.fun/images/assets/deliveryandreturn/hero.png"); */
    background-image: url("https://bunky.fun/images/assets/aboutus/hero.png");
    background-size: cover;
    background-position: center;
    /* height: 50vh; */
    width: 100vw;
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
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 1rem;
}

.image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 300px;
    max-width: 100%;
}

.image-container img {
    width: auto;
    height: auto;
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
}

.stats-main {
    background-color: #dbeafe;
}

.deliveryandreturn-main {
    background-color: #f2f7f9;
}

.statistic {
    text-align: center;
}

.hero-deliveryandreturn-header {
    color: #00446a;
    font-size: 1.5rem;
    line-height: 2.5rem;
    font-weight: bold;
}

.statistic-number {
    font-size: 3rem;
    font-weight: bold;
    color: #00446a;
    margin-bottom: 0.5rem;
}

.statistic-description {
    font-size: 1rem;
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
