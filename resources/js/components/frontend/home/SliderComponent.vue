<template>
    <LoadingComponent :props="loading" />
    <section class="mb-5 sm:mb-3">
        <div class="bg-secondary mobile:hidden tablet:hidden laptop:hidden">
            <!-- <nav class="w-full flex items-center justify-center"> -->
            <nav class="container flex items-center justify-between gap-5">
                <router-link
                    v-for="(category, index) in categories"
                    :key="index"
                    :to="{
                        name: 'frontend.product',
                        query: { category: category.slug },
                    }"
                    @mouseover.prevent="activeTab = 'category_' + category.slug"
                    class="text-white capitalize text-sm font-semibold tracking-wide py-4 transition-all duration-300 relative before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-0.5 before:bg-primary"
                    :class="{
                        'text-white before:w-full before:transition-all before:duration-300':
                            activeTab === 'category_' + category.slug,
                        'hover:text-primary':
                            activeTab !== 'category_' + category.slug,
                    }"
                >
                    {{ category.name }}
                </router-link>
            </nav>
            <div v-for="category in categories">
                <div
                    v-if="category.children.length > 0"
                    :class="{
                        block: activeTab === 'category_' + category.slug,
                        hidden: activeTab !== 'category_' + category.slug,
                    }"
                    class="text-white flex items-start gap-5 pb-5 border-t border-gray-200"
                >
                    <div class="w-60 h-80 flex-shrink-0 pt-5 pl-5">
                        <img
                            class="w-full h-full object-top object-cover rounded-lg text-white"
                            :src="category.cover"
                            alt="category"
                            loading="lazy"
                        />
                    </div>
                    <div class="w-full h-80 thin-scrolling pt-5 pr-5 text-white">
                        <div class="w-full grid gap-5 grid-cols-3">
                            <div
                                v-for="children in category.children"
                                class="self-start"
                            >
                                <h3
                                    class="text-sm font-semibold capitalize pb-3 border-b border-slate-200 text-white"
                                >
                                    <router-link
                                        :to="{
                                            name: 'frontend.product',
                                            query: {
                                                category: children.slug,
                                            },
                                        }"
                                        class="hover:text-primary transition-all duration-300"
                                    >
                                        {{ children.name }}
                                    </router-link>
                                </h3>

                                <nav
                                    v-if="children.children.length > 0"
                                    class="flex flex-col mt-2"
                                >
                                    <MenuChildrenComponent
                                        :categories="children.children"
                                    />
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider">
            <Swiper
                v-if="sliders.length > 0"
                :slides-per-view="1"
                :speed="1000"
                :loop="true"
                :navigation="true"
                :pagination="{ clickable: true }"
                :autoplay="{ delay: 2500 }"
                :modules="modules"
                class="banner-swiper"
            >
                <SwiperSlide v-for="slider in sliders">
                    <div v-if="slider.link">
                        <a :href="slider.link">
                            <img
                                class="w-full"
                                :src="slider.image"
                                alt="banner0"
                                loading="lazy"
                            />
                        </a>
                    </div>
                    <div v-else>
                        <img
                            class="w-full h-96"
                            :src="slider.image"
                            alt="banner"
                            loading="lazy"
                        />
                    </div>
                </SwiperSlide>
            </Swiper>
        </div>
    </section>
</template>

<script>
import "swiper/css";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
import { Swiper, SwiperSlide } from "swiper/vue";
import statusEnum from "../../../enums/modules/statusEnum";
import LoadingComponent from "../components/LoadingComponent";

export default {
    name: "SliderComponent",
    components: {
        Swiper,
        SwiperSlide,
        LoadingComponent,
    },
    setup() {
        return {
            modules: [Navigation, Pagination, Autoplay],
        };
    },
    data() {
        return {
            loading: {
                isActive: false,
            },
            sliderProps: {
                search: {
                    paginate: 0,
                    order_column: "id",
                    order_type: "desc",
                    status: statusEnum.ACTIVE,
                },
            },
        };
    },
    computed: {
        sliders: function () {
            return this.$store.getters["frontendSlider/lists"];
        },
        categories: function () {
            return this.$store.getters["frontendProductCategory/trees"];
        },
    },
    mounted() {
        this.loading.isActive = true;
        this.$store
            .dispatch("frontendSlider/lists", this.sliderProps.search)
            .then((res) => {
                this.loading.isActive = false;
            })
            .catch((err) => {
                this.loading.isActive = false;
            });

        this.loading.isActive = true;
        this.$store
            .dispatch("frontendProductCategory/trees")
            .then((res) => {
                this.loading.isActive = false;
            })
            .catch((err) => {
                this.loading.isActive = false;
            });
    },
};
</script>
