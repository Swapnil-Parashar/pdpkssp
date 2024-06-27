<template>
    <section class="mb-10 sm:mb-20">
        <div class="container">
            <div v-if="page.title === 'About Us'">
                <AboutUsComponent />
            </div>
            <div v-else class="mb-6">
                <h2 class="text-[26px] leading-10 font-semibold capitalize mb-2">
                    {{ page.title }}
                </h2>
                <div v-if="page.image" class="w-full mb-6">
                    <img :src="page.image" alt="image" loading="lazy">
                </div>
                <div v-html="page.description">
                </div>
            </div>
            <TemplateManagerComponent :menuTemplateId="page.menu_template_id" />
        </div>
    </section>
</template>

<script>
import TemplateManagerComponent from "../components/TemplateManagerComponent.vue";
import AboutUsComponent from "./AboutUsComponent.vue";

export default {
    name: "PageComponent",
    components: {
        TemplateManagerComponent,
        AboutUsComponent
    },
    computed: {
        page() {
            return this.$store.getters['frontendPage/show'];
        }
    },
    mounted() {
        this.pageSetup();
    },
    methods: {
        pageSetup() {
            if (Object.keys(this.$route.params).length > 0 && typeof this.$route.params.slug === 'string') {
                this.$store.dispatch('frontendPage/show', this.$route.params.slug).then().catch()
            }
        }
    },
    watch: {
        $route() {
            this.pageSetup();
        }
    }
}
</script>
