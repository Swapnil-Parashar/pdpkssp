<template>
    <div
        v-if="products.length > 0"
        v-for="product in products"
        class="sm:p-2 sm:shadow-card transition-all duration-300 sm:hover:shadow-hover group bg-white"
        style="
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.2);
            border-radius: 0.25rem;
        "
    >
        <div class="relative overflow-hidden isolate">
            <label
                class="capitalize text-xs font-semibold py-1 px-2 shadow-badge absolute top-3 left-3 z-10 bg-secondary text-white"
                v-if="product.is_offer && product.flash_sale"
                >{{ $t("label.flash_sale") }}</label
            >

            <button
                type="button"
                @click.prevent="
                    wishlist(product, (product.wishlist = !product.wishlist))
                "
                :class="
                    product.wishlist
                        ? 'lab-fill-heart text-primary'
                        : 'lab-line-heart'
                "
                class="w-7 h-7 leading-7 text-center text-base shadow-badge absolute top-3 right-3 z-10 bg-white"
            ></button>

            <router-link
                class="overflow-hidden w-full block"
                :to="{
                    name: 'frontend.product.details',
                    params: { slug: product.slug },
                }"
            >
                <div class="image-container w-full h-64 sm:h-56">
                    <img
                        :src="
                            product.cover
                                .replace('/conversions/', '/')
                                .replace('-cover', '')
                        "
                        alt="product"
                        class="w-full h-full object-cover transition-all duration-300 group-hover:scale-105 group-hover:rotate-3"
                        loading="lazy"
                    />
                </div>
            </router-link>
        </div>

        <div class="px-1 sm:px-0 pt-4 pb-2">
            <h3
                class="capitalize text-base font-semibold transition-all duration-300 hover:text-primary"
            >
                <router-link
                    class="block overflow-hidden"
                    :to="{
                        name: 'frontend.product.details',
                        params: { slug: product.slug },
                    }"
                >
                    {{ product.name }}
                </router-link>
            </h3>

            <div
                class="flex flex-wrap-reverse items-center gap-x-3 gap-y-1"
                v-if="product.is_offer"
            >
                <h3 class="text-lg sm:text-[18px] font-semibold">
                    <span>{{ product.discounted_price }}</span>
                </h3>
                <h4
                    class="text-sm sm:text-base font-semibold text-shopperz-red"
                >
                    <del>{{ product.currency_price }}</del>
                </h4>
            </div>
            <h4 class="text-lg sm:text-[18px] font-semibold" v-else>
                <span>{{ product.currency_price }}</span>
                <span class="text-sm text-gray-500 ml-2">(exc. VAT)</span>
            </h4>
        </div>
    </div>
</template>

<script>
import starRating from "vue-star-rating";
import router from "../../../router";
export default {
    name: "ProductListComponent",
    components: {
        starRating,
    },
    props: {
        products: "object",
    },
    data() {
        return {
            rating: [],
        };
    },
    methods: {
        wishlist: function (product, toggle) {
            this.$store
                .dispatch("frontendWishlist/toggle", {
                    product_id: product.id,
                    toggle: toggle,
                })
                .then((res) => {})
                .catch((err) => {
                    if (err.response.status === 401) {
                        product.wishlist = false;
                        router.push({ name: "auth.login" });
                    }
                });
        },
    },
};
</script>
