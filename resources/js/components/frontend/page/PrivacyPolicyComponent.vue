<template>
  <div>
      <div class="hero-section">
        <img
                src="https://bunky.fun/images/assets/aboutus/privacy-policy.png"
                alt="Expert Solutions"
            />
      </div>
     
      <div class="mx-auto p-6 space-y-8 privacy-policy-main pb-20">
          <div class="grid grid-cols-1 gap-8 items-center">
              <div class="content">
                  <p class="text-paragraph text-lg mb-6">
                      <h3 class="sub-section-heading">1. Who is responsible for managing my information?</h3>
                      <p class="text-paragraph mb-4">
                          We are responsible for the collection and proper management of any personal information you submit. We will keep your personal details secure and use the information you provide consistently with applicable privacy and data protection laws and the terms of this Privacy Policy.
                      </p>

                      <h3 class="sub-section-heading">2. What information do we collect?</h3>
                      <p class="text-paragraph mb-4">
                          Certain areas of the website are inaccessible without retrieving some personal details from you. Some of the details we may collect include:
                      </p>
                      <ul class="list-disc pl-5 mb-4">
                          <li>Name and Job Title</li>
                          <li>Contact Information including email addresses</li>
                          <li>Addresses and Postcodes</li>
                          <li>Other information relevant to customer surveys and/or offers</li>
                      </ul>

                      <h3 class="sub-section-heading">3. How do we use your information?</h3>
                      <p class="text-paragraph mb-4">
                          When using the site, personal data may be collected and processed for various purposes such as internal record keeping, responding to enquiries, sending relevant correspondence, and improving our products and services.
                      </p>

                      <h3 class="sub-section-heading">4. Who will we share your information with?</h3>
                      <p class="text-paragraph mb-4">
                          In order to provide you with the products and services offered, we may share your information with transportation networks, IT & Software providers, suppliers/manufacturers, and trusted installers as necessary.
                      </p>

                      <h3 class="sub-section-heading">5. When can we contact you in the future?</h3>
                      <p class="text-paragraph mb-4">
                          We may contact you via post, telephone, email, or SMS for marketing purposes if you have given consent. You can update your preferences at any time.
                      </p>

                      <h3 class="sub-section-heading">6. How long will we hold your information for?</h3>
                      <p class="text-paragraph mb-4">
                          We have retention periods in place to ensure your information is stored only as long as necessary or required by law.
                      </p>

                      <h3 class="sub-section-heading">7. Cookies</h3>
                      <p class="text-paragraph mb-4">
                          Our website uses Cookies to improve your browsing experience and for analytical purposes. You can manage your cookie preferences in your browser settings.
                      </p>

                      <h3 class="sub-section-heading">8. What are Cookies and will they harm my computer?</h3>
                      <p class="text-paragraph mb-4">
                          Cookies are small text files that help us tailor our website to your needs and preferences. They do not give us access to your computer or personal information unless you choose to provide such information.
                      </p>

                      <h3 class="sub-section-heading">9. How can you access and update your information?</h3>
                      <p class="text-paragraph mb-4">
                          You have the right to request a copy of the information we hold about you. Contact us for more details.
                      </p>

                      <h3 class="sub-section-heading">10. Does the Policy apply to linked websites?</h3>
                      <p class="text-paragraph mb-4">
                          Our Privacy Policy applies to our website only. We are not responsible for the privacy practices of linked websites.
                      </p>

                      <h3 class="sub-section-heading">11. How do we update this Privacy Policy?</h3>
                      <p class="text-paragraph mb-4">
                          We regularly review our Privacy Policy and post updates on our website. Last updated: 1st May 2023.
                      </p>

                      <h3 class="sub-section-heading">12. Who can you contact if you have any queries about this privacy policy?</h3>
                      <p class="text-paragraph mb-4">
                          For questions about our Privacy Policy or your information, contact us at <a href="mailto:info@plumbdistribution.co.uk" class="text-primary underline">info@plumbdistribution.co.uk</a> or write to us at the address provided.
                      </p>
                  </p>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
export default {
  name: "PrivacyPolicy",
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

.hero-deliveryandreturn-header {
  color: #00446a;
  font-size: 1.5rem;
  line-height: 2.5rem;
  font-weight: bold;
}

.privacy-policy {
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

.text-primary {
  color: rgb(var(--primary));
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
