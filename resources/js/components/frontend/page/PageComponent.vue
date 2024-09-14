<template>
    <section class="mb-10 sm:mb-20">
        <div>
            <div v-if="page.title === 'About Us'">
                <AboutUsComponent />
            </div>
            <div v-else>
                <div v-if="page.title === 'Delivery And Return Policy'">
                    <DeliveryAndReturnComponent />
                </div>
                <div v-else>
                    <div v-if="page.title === 'Terms And Conditions'">
                        <TermsAndConditionsComponent />
                    </div>
                    <div v-else>
                        <div v-if="page.title === 'Privacy Policy'">
                            <PrivacyPolicyComponent />
                        </div>
                        <div v-else>
                            <div v-if="page.title === 'Money Back Guarantee'">
                                <MoneyBackComponent />
                            </div>
                            <div v-else class="container">
                                <div class="mb-6">
                                    <h2
                                        class="text-[26px] leading-10 font-semibold capitalize mb-2"
                                    >
                                        {{ page.title }}
                                    </h2>
                                    <div v-if="page.image" class="w-full mb-6">
                                        <img
                                            :src="page.image"
                                            alt="image"
                                            loading="lazy"
                                        />
                                    </div>
                                    <div v-html="page.description"></div>
                                </div>
                                <TemplateManagerComponent
                                    :menuTemplateId="page.menu_template_id"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import TemplateManagerComponent from "../components/TemplateManagerComponent.vue";
import AboutUsComponent from "./AboutUsComponent.vue";
import DeliveryAndReturnComponent from "./DeliveryAndReturnComponent.vue";
import TermsAndConditionsComponent from "./TermsAndConditionsComponent.vue";
import PrivacyPolicyComponent from "./PrivacyPolicyComponent.vue";
import MoneyBackComponent from "./MoneyBackComponent.vue";

export default {
    name: "PageComponent",
    components: {
        TemplateManagerComponent,
        AboutUsComponent,
        DeliveryAndReturnComponent,
        TermsAndConditionsComponent,
        PrivacyPolicyComponent,
        MoneyBackComponent,
    },
    computed: {
        page() {
            return this.$store.getters["frontendPage/show"];
        },
    },
    methods: {
        pageSetup() {
            if (
                Object.keys(this.$route.params).length > 0 &&
                typeof this.$route.params.slug === "string"
            ) {
                this.$store
                    .dispatch("frontendPage/show", this.$route.params.slug)
                    .then()
                    .catch();
            }
        },
    },
    mounted() {
        this.pageSetup();
    },
    watch: {
        $route() {
            this.pageSetup();
        },
    },
};
</script>
