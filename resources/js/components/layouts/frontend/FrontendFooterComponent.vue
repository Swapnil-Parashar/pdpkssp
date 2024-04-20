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
                        src="data:image/png;base64,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"
                        alt="Maestro"
                        class="h-12"
                    />
                    <img
                        src="data:image/png;base64,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"
                        alt="Payment Method"
                        class="h-12"
                    />
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUoAAACZCAMAAAB+KoMCAAAAgVBMVEX///8AAAAoKCjs7OyFhYWysrLZ2dmSkpKLi4ve3t6rq6vAwMAuLi709PTd3d3m5uaamprMzMy4uLjGxsYeHh74+Ph+fn50dHRvb2+goKDS0tJaWlrLy8vw8PBAQECmpqZRUVETExM2NjY+Pj5lZWVLS0sLCwtGRkYZGRkjIyN5eXlzXTIcAAAKyklEQVR4nO2d6VYqOxCFaZFJBlEEBeQKHvF4eP8HvKAC2ZWpqjragvnW8o9Nd5JNhkpVpanVMplMJpPJZDKZTCaTyWQymUwmk8lkToXFzaDqKpwFj5vXorisuhZnwHSr45Z21fU4eRrFJ1nKciz+2ytZDKuuy2kzKo7cVl2Zk6ZhKFlcV12bU+bWVLKQ3tyI0735Jd/PDJR8EN69Knj0Hq7OXs8+NnkkvP2CKeWOi2H9S5rwU1hic6W3S6Tc8tL8ijb8DLrY1Kn0fqGURTE/2565Ktcp5VIqvq7ToIGtbIgfoJCy+Nv/gpZUTg/bKH+ARsqi6KRvSdUMsIUL+RN0Uhbnt/q0oH2PiicopTw/Lf8zW6fafWulLM5tITfb1lU9QS3lXeKmVMy10TRlIAKlnF5Rntr3z24t79O2pWJm5duFUnrWrdmlS0vN1Pxj2fspl/rYGErpnwBv7ywpX9WF/kDee+VFq4zLhitlrTa1tHwqUe5PYzx6bJbcefClrHUsLcsVXSWL62Yn1NjB7bA9aU27kuEukJL68041+DG6/LufGIcuqepT09u2HnIHvURKsBh2/CdtRfUMNtiEtxa2eXz1xxp8z7wuI5KSxD5OL5DUmVs6bfvm0SK/eXBc37LiGO0yKWtrLOLEFp6JW6ii2Dz2a+NZe+W7vtV7HH26UMomFrBO0sJvovPmV4rBLPZ8oZQ1MpMkaeP3QOINcmKDXCrlFT7+dBxExEmuIRKClEpJFvGg277eHO3C7N1Zp3q3O10wVYStTKmUtVe4wZfstWhM0Asyb3m+02HLJJ7xBB9vc0cFJguoCa49YinRnHBmMPSnbmfS3GWftQWV3VKXfXxfo9IivtMLGn9iKdFJtLQ/0PHYZu+0rbaTGSNmDT/Bp1/i9X2HJAsoiWQBi6Ucwg09ern/EqmPNYTRJoiJg6Iw3d1JJsriKlKKWErsFtTRRhZ4F2+D0AMj5tVY8uEDGuEsol+bWEoiFl507cts8Osl6oQtDuxfm3h1d+BAUhLfh5fslSvz0pgbKMJ1H/UPy4PTx028ujvEsjloxYspOVeavqHxil0x0JJsQwSqxGu7I4FxzkrWEEuJTqqlcQUzRcLAcMFLob3uCD7JPMFge83kcJI1xFLiEjo5XgjZQDamhXYPV0JDCV07PBc3dbJqYJ2VEEvpK8PlLbibTy4n906jzhwxuBX5xy38gtM+y0JQwSpIKiXxsh0tBKv4l9HBHF/c2ku7aVvgFf+WAgtnHqvhWRVBeCVJpSSGxeEGGo98ILPLNe2bpnGPm0d//iamSDFTbUpIuIeX1iaVcoWFHP6PXg6XdUgHmrG8YCzTv1pe8D4G2HFSMUwHt1BKMiMekkIe8f/OMUqMe2PFIou/zyWHC0hsH/dJgk0jM81ZKCXJ0ThMeLi0euwZXONN6x6nB58TFPs10ymUYKsTDUV8IJOyRQo5XPhn/nfiuZtsEY0ZaAEX5p77/3I+RPGGxvgwHdciKUekjMMmD0XyFo0GpDmf4qLkvhudjtwcyAT+NWZJEiktV/QhJR3mdr+fDL8KM/KLM5rbpYEbQGb7sCurWMULeUcgpbWXXR4uNVe9A3d+Hwq6wE1rDbu1O8XxJf4RB3YGnpRnZklsKR0+XXkqItwOW2hckuI3s5M7SyvJ3VVxpay37SKkJ1Npu8C/j9aUa83E2UFXpA5mSSile8EYPK1dJTCtEW+7Lv2XXD6fjf/eEOVSMvRSXrYJl5u5z3cmPeO7IyAlhN9cZwbgXn4qAxwi0cHcoapPSKhedwJPQCnRVWFvl+C64HiGc0DJYHYarZRcCxmBR5BBCkut7Ytphy97QVtWBbPXKKVUnKbcAc8gUsIOz06Chf2UIK/TsV5KsSLUbnRSsvtk/7rzOGpcDVub++UfMusSKdFZQf1acFWSbcwIJ0fhfXMqKX2b7D3j5u3wfvn8Gn4KXYVhgaAuDXB4SDJk6WZXA2+Ea6QMhoTHo4k7Y8iCSgm7KdrvIdYlSYwjSUY6vkjKecin3I3luRhQKXHziNfAlSFb8sQNdMDqllIpe6EdmywiZZnZ8DWg5wd6rOyMSwJriDdbyqRch0wsqb/akhJc9OivgFiXSEnLx6qC49IQSPkcPgwkjuzZmz+4bF6AsS/c+6dYd1jpSTwp3+btbjjsVo8s1w5sKcHjbbo0oL8Kd6zEd68lHuBBKW86lMH2j7FgatZJW8qZ7zJsWQQyvpNgF74jqiXrPHiU6Df/evH35aGN0TCHd8fs2qbz2rwtZtRaJJks3fUFxIkuTpwBlPV9e9joPnauj706VjVo9fENPNBbxedbyGtv9ETer5RESnvtXrvfKxiTEraHR5+FuY/mRloM5NO4j2DsPYmUK1Lig2+pj0lZMzdKRwPEdN8yckYpCTwae3qBQGcKKWkSmz8ZNyolGPn72kA8U3HYN0Guy4E//mJSSEksykBjo1LCBnE/nEz3Gzf8BzCdAhwCQzyFlFhYKNYflRK+luXn/0xXhurYdApH2yeBgFYCKTGUEPQlxqWEFeyj3pAFozstmUzJ0E4rgZSYahBa5HDScttp5ic+/BZmn1pqKkiPwJUglImVQErMFQu9jxEHmltKM7fgow+YY1754hNM79ITnKkTSIm2RmgEor/LLeWN+ZHdP8b0HxoSBMt2BL/J75SSnFXwbMTMj+zMKtPUUiSEfJDElx6JGSeXMjDAidHkkdKc13b7bXPEa9IYPiDvxNERnl4SSIlOCv+yQy15j5SwNtWwl2qq90GKE+GRIG4CKXEH7jWGrDHm87SYVWrC3Cl2Chl8fSJ1AinJvsxjotuzlU9Ks5cPYbwzk8LdlE60jB1VT7/bcT/E8fIKn5Sm5XJhPrzcWx5Lvz4jtjtIISU93ejoPC4b2etKNW0mMzKjcAqZlEzwj75zPoWUViBqgt74vnue8krpO3Vc9m3spYZ4PPj+Jf7KbcGNT//QuPlkuNh56aae8IbKKWRSyp2e/J1sbtzd6LX35x/+ZwL2kD9W4k7xKP/bFSVWcYZFmya2wzxVj3aTX0p36FobwzNQH+LhmGFppOQdXx9g9w1E8Fx3L5V1A5RhnoDv/EgaKVnvp+jW2FK6Flv5r7Y4UL6ygOUlTSQlYxrame5cKZuO+xUHMhyorEtNqmqJH4aIZbG9G5tcKR1HRLjvDIuhSCFiHvVKJmX4+/6MxrOltDu57icyePVcTmfv9VvcDB1ZMVxzNp2UIf/qfp5jS2nPaaVqBtTRRLt7gqmjTvJi1uyJJaWUtWv3C3KOBiFbSuvlQMx3hvEw+vyLI2h/eyw8cPbVAq2D0j+i03+iI+TBNG4huBO01Wi8tZRTyPH43S7gedPwdLn61WZ98TxviUptAilWyfFoOlnubPbn5eUVyZVamIUF10Uyws/qpz++GWKo5l8910O2eGf4E33fBXEOcU+3Z2xIxuaZ/qDpt0DivAmcQr8VkpiiOzGd2UHydPWZBL8eEv9XpJ9nPiEBiRP7VZ+fBH0XZtX1OV2og03wooyMSccKZVVdoxNjMasv+ovrm6n9NrokMZ1fhP/XrkonEvw2/FKe2u8bVo5XymwISfFJqU4+/714pFxWXa8TxC1ldmMocErJf0ll5ohDyhXzh4kyiC1lXrqV0B9UyB5KNYOH+bL3tvq3nt+3brNVnslkMplMJpPJZDKZr+N/Rj189d5qUr0AAAAASUVORK5CYII="
                        alt="Payment Method"
                        class="h-12"
                    />
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
