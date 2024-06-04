<template>
    <LoadingComponent :props="loading" />
    <section v-if="categories.length > 0" class="sm:mb-5">
        <div class="container min-md:mt-0">
            <!-- <h2 class="text-2xl sm:text-4xl font-bold -mb-10" style="margin-bottom: -3.5rem;">
                {{ $t("label.browse_by_categories") }}
            </h2> -->
            <Swiper
                dir="ltr"
                :speed="1000"
                :loop="true"
                :navigation="true"
                :modules="modules"
                class="navigate-swiper"
                :breakpoints="breakpoints"
            >
                <SwiperSlide
                    v-for="category in categories"
                    class="mobile:!w-24 mb-6"
                >
                    <router-link
                        :to="{
                            name: 'frontend.product',
                            query: { category: category.slug },
                        }"
                        class="w-full shadow-xs group flex flex-col justify-between"
                        style="box-shadow: 0 1px 3px 1px rgba(0,0,0,0.2); border-radius: 0.25rem;"
                    >
                        <img
                            class="w-full block"
                            :src="category.thumb"
                            alt="category"
                            loading="lazy"
                        />
                        <span
                            class="text-sm sm:text-xl font-medium capitalize text-center py-2 px-3 overflow-hidden block group-hover:text-primary flex-grow"
                        >
                            {{ category.name }}
                            <span v-if="category.name.length < 15" class="text-white" id="conditional">
                                ...............................
                            </span>
                        </span>
                    </router-link>
                </SwiperSlide>
            </Swiper>
        </div>
        <FlashSaleComponent />
    </section>
</template>

<script>
import { Navigation, Pagination, Autoplay } from "swiper/modules";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import statusEnum from "../../../enums/modules/statusEnum";
import LoadingComponent from "../components/LoadingComponent";
import FlashSaleComponent from "./FlashSaleComponent.vue";

export default {
    name: "CategoryComponent",
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
            settings: {
                itemsToShow: 6,
                wrapAround: false,
                snapAlign: "start",
            },
            breakpoints: {
                0: { slidesPerView: "auto", spaceBetween: 16 },
                640: { slidesPerView: 4, spaceBetween: 24 },
                768: { slidesPerView: 5, spaceBetween: 24 },
                1024: { slidesPerView: 6, spaceBetween: 24 },
            },
        };
    },
    computed: {
        categories: function () {
            return this.$store.getters["frontendProductCategory/lists"];
        },
    },
    mounted() {
        this.loading.isActive = true;
        this.$store
            .dispatch("frontendProductCategory/lists", {
                paginate: 0,
                order_column: "id",
                order_type: "asc",
                parent_id: null,
                status: statusEnum.ACTIVE,
            })
            .then((res) => {
                this.loading.isActive = false;
            })
            .catch((err) => {
                this.loading.isActive = false;
            });
    },
};
</script>