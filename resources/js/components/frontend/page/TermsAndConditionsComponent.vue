<template>
    <div>
        <div class="hero-section">
            <img
                src="https://bunky.fun/images/assets/aboutus/terms-and-conditions.png"
                alt="Expert Solutions"
            />
        </div>
        
        <div class="mx-auto p-6 space-y-8 termsandconditions-main pb-20">
            <div class="grid grid-cols-1 gap-8 items-center">
                <div class="content">
                    <h3 class="sub-section-heading">Contract for the Supply of Products or Services</h3>
                    
                    <h4 class="sub-sub-section-heading">1. Price and Ordering:</h4>
                    <ul class="list-disc pl-5 mb-4">
                        <li>The price for goods is stated on the website at the time of ordering.</li>
                        <li>No contract for the supply of products or goods will be deemed to exist between you and Plumb Distribution Limited unless, and until, an order confirmation email from info@plumbdistribution.co.uk has been sent to you.</li>
                        <li>The Company will indicate acceptance of the Customer’s order, and hence a contract between the Customer and the Company. The Company has included this term to protect against a mistake in pricing, where the Company has inadvertently under-priced goods, or the Company is no longer able to supply a particular product for whatever reason.</li>
                        <li>The company may contact the customer regarding changes in price or product availability.</li>
                        <li>Visa, Mastercard, and American Express are accepted payment methods.</li>
                        <li>Payment is made at the time of ordering, and the customer can cancel the order if items are back-ordered or unavailable.</li>
                    </ul>

                    <h4 class="sub-sub-section-heading">2. Orders Received:</h4>
                    <ul class="list-disc pl-5 mb-4">
                        <li>Orders placed before 12pm will be processed and dispatched the next day, subject to stock availability.</li>
                        <li>Orders placed during weekends or bank holidays will be processed on the following working day.</li>
                        <li>Orders placed after 12pm on Friday will be processed on the following Monday.</li>
                    </ul>

                    <h4 class="sub-sub-section-heading">3. Availability of Goods:</h4>
                    <ul class="list-disc pl-5 mb-4">
                        <li>Goods advertised for sale are subject to availability.</li>
                        <li>If an item is unavailable, the customer will be notified, and the order will be dispatched as soon as possible.</li>
                    </ul>

                    <h4 class="sub-sub-section-heading">4. Deliveries:</h4>
                    <ul class="list-disc pl-5 mb-4">
                        <li>Delivery is not available to Scotland, Wales, or Northern Ireland.</li>
                        <li>Delivery areas include London, North West, South West, North East, South East, East Midlands, West Midlands, East of England, and Yorkshire.</li>
                        <li>UPN, Parcel Force, and Royal Mail are used as couriers.</li>
                        <li>The company is not responsible for delivery delays due to adverse weather or conditions beyond their control.</li>
                        <li>If delivery attempts fail due to the customer's fault (e.g., wrong or incomplete address), the customer is responsible for rescheduling and any associated fees.</li>
                        <li>If a free post and packaging offer was used, a 30% deduction will be made from the refund.</li>
                    </ul>

                    <h4 class="sub-sub-section-heading">5. Prices:</h4>
                    <ul class="list-disc pl-5 mb-4">
                        <li>Prices displayed on the site are correct at the time of display.</li>
                        <li>Prices may be subject to change without notice, but once an order is accepted, the price remains the same.</li>
                        <li>Bulk purchases may be eligible for discounted prices.</li>
                    </ul>

                    <h4 class="sub-sub-section-heading">6. VAT:</h4>
                    <ul class="list-disc pl-5 mb-4">
                        <li>All orders within the UK are subject to a 20.0% VAT charge.</li>
                    </ul>

                    <h4 class="sub-sub-section-heading">7. Refunds:</h4>
                    <ul class="list-disc pl-5 mb-4">
                        <li>The customer is responsible for the cost of returning goods, except for incorrect or defective items.</li>
                        <li>Upon receipt of the returned goods, the customer will receive a refund for the value of the goods returned, excluding postage and packaging costs.</li>
                    </ul>

                    <h4 class="sub-sub-section-heading">8. Liability:</h4>
                    <ul class="list-disc pl-5 mb-4">
                        <li>The company does not accept responsibility for damage to goods caused by the customer.</li>
                        <li>The company is not liable for any damage or loss resulting from the use of goods.</li>
                        <li>The information on the website is provided without warranty, and the company does not guarantee accuracy, completeness, uninterrupted use, or error-free operation.</li>
                        <li>The company is not responsible for claims related to availability, eCommerce engine, website, or sales success.</li>
                        <li>Any defect in the goods should be reported on receipt, and delivery should be refused. Failure to do so may result in the customer being liable for the full payment.</li>
                        <li>If a defect is identified, the customer can choose a replacement or a full refund.</li>
                        <li>If no defect is identified, the goods will be returned to the customer at their cost.</li>
                        <li>The company is not liable for any indirect or consequential loss or damage, and their liability is restricted to the value of the defective goods.</li>
                    </ul>

                    <h4 class="sub-sub-section-heading">9. Force Majeure:</h4>
                    <ul class="list-disc pl-5 mb-4">
                        <li>The company is not liable for any failure or delay in supply or delivery caused by events beyond their reasonable control.</li>
                    </ul>

                    <h4 class="sub-sub-section-heading">10. Returns:</h4>
                    <ul class="list-disc pl-5 mb-4">
                        <li>Certain goods cannot be returned once opened.</li>
                        <li>Check our Delivery and Returns Policy.</li>
                    </ul>

                    <h4 class="sub-sub-section-heading">11. Opening Times:</h4>
                    <ul class="list-disc pl-5 mb-4">
                        <li>The company is closed during the Christmas period from December 20th to January 5th. Orders will resume processing afterward.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "TermsAndConditions",
};
</script>

<style scoped>
@tailwind base;
@tailwind components;
@tailwind utilities;

.hero-section {
  /* background-image: url("https://bunky.fun/images/assets/aboutus/terms-and-conditions.png"); */
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

.terms-and-conditions {
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

.sub-sub-section-heading {
    font-size: 1.25rem;
    font-weight: bold;
    margin-top: 1.25rem;
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

.hero-termsandconditions-header {
    color: #00446a;
    font-size: 1.5rem;
    line-height: 2.5rem;
    font-weight: bold;
}

.termsandconditions-main {
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
