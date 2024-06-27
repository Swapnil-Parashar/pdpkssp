<template>
    <section class="mb-10 sm:mb-20">
        <div>
            <div v-if="page.title === 'About Us'">
                <AboutUsComponent />
            </div>
            <div v-if="page.title === 'Delivery And Return Policy'">
                <DeliveryAndReturnComponent />
            </div>
            <!-- <div v-if="page.title === 'Terms And Conditions'">
                <AboutUsComponent />
            </div>
            <div v-if="page.title === 'Privacy Policy'">
                <AboutUsComponent />
            </div> -->
            <div v-else class="container">
                <div class="mb-6">
                    <h2
                        class="text-[26px] leading-10 font-semibold capitalize mb-2"
                    >
                        {{ page.title }}
                    </h2>
                    <div v-if="page.image" class="w-full mb-6">
                        <img :src="page.image" alt="image" loading="lazy" />
                    </div>
                    <div v-html="page.description"></div>
                </div>
                <TemplateManagerComponent
                    :menuTemplateId="page.menu_template_id"
                />
            </div>
        </div>
    </section>
</template>

<script>
import TemplateManagerComponent from "../components/TemplateManagerComponent.vue";
import AboutUsComponent from "./AboutUsComponent.vue";
import DeliveryAndReturnComponent from "./DeliveryAndReturnComponent.vue";

export default {
    name: "PageComponent",
    components: {
        TemplateManagerComponent,
        AboutUsComponent,
        DeliveryAndReturnComponent,
    },
    computed: {
        page() {
            return this.$store.getters["frontendPage/show"];
        },
    },
    mounted() {
        this.pageSetup();
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
    watch: {
        $route() {
            this.pageSetup();
        },
    },
};
</script>
