<template>
    <LoadingComponent :props="loading" />

    <footer class="pt-12 bg-secondary mobile:hidden">
        <div class="container">
            <div class="container mt-8">
                <div class="flex justify-center items-center gap-6 mb-4">
                    <!-- Payment Method Logos -->
                    <img
                        src="data:image/jpeg;base64,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"
                        alt="Master Card"
                        class="h-12"
                    />
                    <img
                        src="data:image/png;base64,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"
                        alt="Visa"
                        class="h-12"
                    />
                    <img
                        src="https://source.unsplash.com/random/100x50"
                        alt="Payment Method"
                        class="h-12"
                    />
                    <!-- Add more payment method logos here -->
                </div>
            </div>
            <div class="row">
                <div class="col-12 md:col-4 lg:col-5 mb-6 md:mb-0">
                    <div
                        class="tablet:text-center tablet:mx-auto w-full max-w-xs"
                    >
                        <router-link :to="{ name: 'frontend.home' }">
                            <img
                                class="mb-8 w-36"
                                :src="setting.theme_footer_logo"
                                alt="logo"
                                loading="lazy"
                            />
                        </router-link>

                        <form
                            @submit.prevent="saveSubscription"
                            class="mt-5 mb-6 block"
                        >
                            <label class="mb-3 font-medium text-white">
                                {{ $t("message.subscribe_to_our_newsletter") }}
                            </label>
                            <div
                                class="flex w-full h-10 rounded-3xl p-1 bg-white"
                            >
                                <input
                                    type="email"
                                    v-model="subscriptionProps.post.email"
                                    :placeholder="
                                        $t('label.your_email_address')
                                    "
                                    class="w-full h-full pl-3 pr-2"
                                />
                                <button
                                    type="submit"
                                    class="text-xs font-semibold capitalize flex-shrink-0 px-3 h-full rounded-3xl bg-primary text-white"
                                >
                                    {{ $t("button.subscribe") }}
                                </button>
                            </div>
                        </form>
                        <nav
                            v-if="
                                setting.social_media_facebook ||
                                setting.social_media_twitter ||
                                setting.social_media_instagram ||
                                setting.social_media_youtube
                            "
                            class="flex flex-wrap items-center gap-6 tablet:justify-center"
                        >
                            <a
                                v-if="setting.social_media_facebook"
                                target="_blank"
                                :href="setting.social_media_facebook"
                                class="lab-fill-facebook w-7 h-7 !leading-7 text-center rounded-full text-sm text-secondary bg-white transition-all duration-300 hover:text-white hover:bg-primary"
                            ></a>
                            <a
                                v-if="setting.social_media_twitter"
                                target="_blank"
                                :href="setting.social_media_twitter"
                                class="lab-fill-x w-7 h-7 !leading-7 text-center rounded-full text-sm text-secondary bg-white transition-all duration-300 hover:text-white hover:bg-primary"
                            ></a>
                            <a
                                v-if="setting.social_media_instagram"
                                target="_blank"
                                :href="setting.social_media_instagram"
                                class="lab-fill-instagram w-7 h-7 !leading-7 text-center rounded-full text-sm text-secondary bg-white transition-all duration-300 hover:text-white hover:bg-primary"
                            ></a>
                            <a
                                v-if="setting.social_media_youtube"
                                target="_blank"
                                :href="setting.social_media_youtube"
                                class="lab-fill-youtube w-7 h-7 !leading-7 text-center rounded-full text-sm text-secondary bg-white transition-all duration-300 hover:text-white hover:bg-primary"
                            ></a>
                        </nav>
                    </div>
                </div>
                <div class="col-12 md:col-8 lg:col-7">
                    <div class="row">
                        <div class="col-6 sm:col-4 mb-4 sm:mb-0">
                            <h4
                                class="text-[22px] font-semibold capitalize mb-6 text-white"
                            >
                                {{ $t("label.support") }}
                            </h4>
                            <nav
                                v-if="supportPages.length > 0"
                                class="flex flex-col gap-4"
                            >
                                <router-link
                                    v-for="supportPage in supportPages"
                                    class="w-fit text-sm font-medium capitalize text-white transition-all duration-300 hover:text-primary"
                                    :to="{
                                        name: 'frontend.page',
                                        params: { slug: supportPage.slug },
                                    }"
                                >
                                    {{ supportPage.title }}
                                </router-link>
                            </nav>
                        </div>
                        <div class="col-6 sm:col-4 mb-4 sm:mb-0">
                            <h4
                                class="text-[22px] font-semibold capitalize mb-6 text-white"
                            >
                                {{ $t("label.legal") }}
                            </h4>
                            <nav
                                v-if="legalPages.length > 0"
                                class="flex flex-col gap-4"
                            >
                                <router-link
                                    v-for="legalPage in legalPages"
                                    class="w-fit text-sm font-medium capitalize text-white transition-all duration-300 hover:text-primary"
                                    :to="{
                                        name: 'frontend.page',
                                        params: { slug: legalPage.slug },
                                    }"
                                >
                                    {{ legalPage.title }}
                                </router-link>
                            </nav>
                        </div>
                        <div class="col-12 sm:col-4">
                            <h4
                                class="text-[22px] font-semibold capitalize mb-6 text-white"
                            >
                                {{ $t("label.contact") }}
                            </h4>
                            <ul class="flex flex-col gap-5">
                                <li class="flex gap-3">
                                    <i
                                        class="lab-fill-location text-sm flex-shrink-0 text-white"
                                    ></i>
                                    <span
                                        class="text-sm font-medium text-white"
                                        >{{ setting.company_address }}</span
                                    >
                                </li>
                                <li class="flex gap-3">
                                    <i
                                        class="lab-fill-mail text-sm flex-shrink-0 text-white"
                                    ></i>
                                    <span
                                        class="text-sm font-medium text-white"
                                        >{{ setting.company_email }}</span
                                    >
                                </li>
                                <li class="flex gap-3">
                                    <i
                                        class="lab-fill-calling text-sm flex-shrink-0 text-white"
                                    ></i>
                                    <span
                                        class="text-sm font-medium text-white"
                                        >{{ setting.company_phone }}</span
                                    >
                                </li>
                            </ul>

                            <dl class="mt-6">
                                <dd class="flex gap-3">
                                    <a
                                        target="_blank"
                                        class="router-link-active router-link-exact-active"
                                        v-if="setting.site_android_app_link"
                                        :href="setting.site_android_app_link"
                                    >
                                        <img
                                            class="h-8 rounded-lg"
                                            :src="setting.image_play_store"
                                            alt="app"
                                            loading="lazy"
                                        />
                                    </a>
                                    <a
                                        target="_blank"
                                        class="router-link-active router-link-exact-active"
                                        v-if="setting.site_ios_app_link"
                                        :href="setting.site_ios_app_link"
                                    >
                                        <img
                                            class="h-8 rounded-lg"
                                            :src="setting.image_app_store"
                                            alt="app"
                                            loading="lazy"
                                        />
                                    </a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="pt-4 pb-24 lg:py-4 mt-8 text-center border-t border-white/5"
        >
            <p class="text-xs font-medium text-white">
                {{ setting.site_copyright }}
            </p>
        </div>
    </footer>
</template>

<script>
import statusEnum from "../../../enums/modules/statusEnum";
import axios from "axios";
import alertService from "../../../services/alertService";
import LoadingComponent from "../../frontend/components/LoadingComponent";
import menuSectionEnum from "../../../enums/modules/menuSectionEnum";
import _ from "lodash";

export default {
    name: "FrontendFooterComponent",
    components: { LoadingComponent },
    data() {
        return {
            loading: {
                isActive: false,
            },
            legalPages: [],
            supportPages: [],
            enums: {
                statusEnum: statusEnum,
                menuSectionEnum: menuSectionEnum,
            },
            subscriptionProps: {
                post: {
                    email: "",
                },
            },
        };
    },
    computed: {
        setting: function () {
            return this.$store.getters["frontendSetting/lists"];
        },
    },
    mounted() {
        this.loading.isActive = true;
        this.$store
            .dispatch("frontendPage/lists", {
                paginate: 0,
                order_column: "id",
                order_type: "asc",
                status: this.enums.statusEnum.ACTIVE,
            })
            .then((res) => {
                if (res.data.data.length > 0) {
                    _.forEach(res.data.data, (page) => {
                        if (
                            page.menu_section_id ===
                            this.enums.menuSectionEnum.LEGAL
                        ) {
                            this.legalPages.push(page);
                        } else {
                            this.supportPages.push(page);
                        }
                    });
                }
                this.loading.isActive = false;
            })
            .catch((err) => {
                this.loading.isActive = false;
            });
    },
    methods: {
        saveSubscription: function () {
            const url = "/frontend/subscriber";
            this.loading.isActive = true;
            axios
                .post(url, this.subscriptionProps.post)
                .then((res) => {
                    this.loading.isActive = false;
                    this.subscriptionProps.post.email = "";
                    alertService.success(this.$t("message.subscribe"));
                })
                .catch((err) => {
                    this.loading.isActive = false;
                });
        },
    },
};
</script>
