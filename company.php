<?php 
$pageTitle = 'About Us - GoNpay';
include 'components/header.php';
?>

<div class="overflow-hidden bg-gray-50 py-12 mt-24">
    <!-- About Company Section -->
    <section class="container mx-auto px-4 sm:px-6 pt-16 pb-12" data-aos="fade-up" data-aos-duration="1000">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold text-gonpay-dark mb-4"><?= $translations['about'] ?? "About" ?>
                <span class="text-gonpay-orange"><?= $translations['company'] ?? "Company" ?></span>
            </h1>
            <p class="text-gray-600 text-lg">
                <?= $translations['our_company_is_dedicated_to_revolutionizing_the_wa'] ?? "Our company is dedicated to revolutionizing the way businesses and customers interact through our innovative loyalty platform app. With a focus on convenience and rewards, we aim to create a seamless experience that benefits both businesses and customers alike." ?>
            </p>
        </div>
    </section>
    <!-- Image Section -->
    <section class="container mx-auto px-4 sm:px-6 py-8" data-aos="fade-up" data-aos-duration="1000">
        <div class="relative">
            <!-- Dotted Background -->
            <div class="absolute -top-10 left-0 w-32 h-32 opacity-20"
                style="background-image: radial-gradient(#CCCCCC 2px, transparent 2px); background-size: 10px 10px;">
            </div>
            <!-- Image Container -->
            <div class="rounded-3xl overflow-hidden relative z-10">
                <div class="flex px-4 sm:px-12 md:px-20">
                    <!-- Added responsive padding -->
                    <!-- Left Image -->
                    <!-- <div class="w-1/2"> -->
                    <img alt="Analytics Dashboard" class="w-full h-full object-cover" src="images/p3_sect1.png" />
                    <!-- </div> -->
                    <!-- Diagonal Divider -->
                    <!-- Right Image -->
                    <!-- <div class="w-1/2">
                        <img src="images/business-meeting.jpg" alt="Business Meeting" class="w-full h-full object-cover">
                    </div> -->
                </div>
            </div>
            <!-- Dotted Background (Bottom Right) with animation added -->
            <div class="absolute -bottom-10 right-0 w-40 h-40 opacity-20 animate-dotted"
                style="background-image: radial-gradient(#CCCCCC 2px, transparent 2px); background-size: 10px 10px;">
            </div>
        </div>
    </section>
    <!-- Our Mission Section -->
    <section class="container mx-auto px-4 sm:px-6 py-16">
        <div class="flex flex-col md:flex-row items-start">
            <div class="md:w-1/3 mb-8 md:mb-0" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-3xl md:text-4xl font-bold text-gonpay-dark mb-4"><?= $translations['our'] ?? "Our" ?>
                    <span class="text-gonpay-orange"><?= $translations['mission'] ?? "Mission" ?></span>
                </h2>
            </div>
            <div class="md:w-2/3" data-aos="fade-left" data-aos-duration="1000">
                <p class="text-gray-600 leading-relaxed">
                    <?= $translations['our_mission_is_to_revolutionize_how_businesses_eng'] ?? "Our mission is to revolutionize how businesses engage with their customers through cutting-edge, user-friendly loyalty solutions that enhance efficiency and transparency. We aim to provide companies with the tools they need to make data-driven decisions, optimize customer engagement, and drive long-term growth. Through innovation, reliability, and a customer-centric approach, we are committed to empowering businesses of all sizes to achieve their loyalty and growth goals with confidence and ease." ?>
                </p>
            </div>
        </div>
    </section>
    <!-- Our Journey Section -->
    <!--<section class="container mx-auto px-4 sm:px-6 py-16">-->
    <!-- Card wrapper with shadow -->
    <!--    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">-->
    <!--        <div class="flex flex-col md:flex-row items-start">-->
    <!-- Left Side: Loyalty Card Image -->
    <!--            <div class="md:w-2/5 mb-8 md:mb-0 relative" data-aos="fade-right" data-aos-duration="1000">-->
    <!-- Image -->
    <!--                <div class="relative bg-white11 p-4 z-0 rounded-lg rotate-2 mt-12 inline-block">-->
    <!--                    <img src="images/p3_sect2.png" alt="Loyalty Cards" class="rounded">-->
    <!--                </div>-->
    <!-- Orange Blob -->
    <!--                <div class="absolute bottom-0 right-0 w-40 h-40 bg-gonpay-orange rounded-full -z-10 opacity-20 animate-blob"></div>-->
    <!--            </div>-->
    <!-- Right Side: Timeline -->
    <!--            <div class="md:w-3/5 pl-0 sm:pl-2 z-10" data-aos="fade-left" data-aos-duration="1000">-->
    <!--                <h2 class="text-3xl md:text-4xl font-bold text-gonpay-dark mb-8">-->
    <!--                    Our Journey & <span class="text-gonpay-orange">Achievements</span>-->
    <!--                </h2>-->
    <!-- Timeline container with continuous vertical line -->
    <!--                <div class="relative pl-12 sm:pl-16 md:pl-12">-->
    <!-- Continuous vertical line that spans entire timeline -->
    <!-- <div class="absolute left-0 top-8 bottom-0 w-0.5 bg-gray-200"></div> -->
    <!-- Timeline Items -->
    <!--                    <div class="space-y-12 sm:space-y-16 md:space-y-20 relative">-->
    <!-- Timeline Item 1 -->
    <!--                        <div class="relative">-->
    <!-- Circle marker with medal icon -->
    <!--                            <div class="absolute left-[-8px] sm:left-[-10px] md:left-[-8px] top-0">-->
    <!--                                <div class="w-14 h-14 sm:w-16 sm:h-16 bg-orange-100 rounded-full flex items-center justify-center z-10">-->
    <!--                                    <div class="w-6 h-6 sm:w-8 sm:h-8 bg-gonpay-orange rounded-full flex items-center justify-center">-->
    <!--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 sm:w-6 sm:h-6 text-white">-->
    <!-- Medal circle -->
    <!--                                            <circle cx="12" cy="8" r="4" />-->
    <!-- Ribbon/bow tie shape -->
    <!--                                            <path d="M8.5 12L12 14.5 15.5 12 14 16 10 16z" />-->
    <!--                                        </svg>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!-- Content with responsive margins -->
    <!--                            <div class="ml-16 sm:ml-20 md:ml-20">-->
    <!--                                <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-1">2016</h3>-->
    <!--                                <p class="text-sm sm:text-base text-gray-600">-->
    <!--                                    GoNpay was founded in 2016 by Jonathan Stevens, Andrea Pusztahazi, and Deividas Valaitis, with the vision to simplify loyalty programs and create a better user experience for consumers.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!-- Timeline Item 2 -->
    <!--                        <div class="relative">-->
    <!-- Circle marker with medal icon -->
    <!--                            <div class="absolute left-[-8px] sm:left-[-10px] md:left-[-8px] top-0">-->
    <!--                                <div class="w-14 h-14 sm:w-16 sm:h-16 bg-orange-100 rounded-full flex items-center justify-center z-10">-->
    <!--                                    <div class="w-6 h-6 sm:w-8 sm:h-8 bg-gonpay-orange rounded-full flex items-center justify-center">-->
    <!--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 sm:w-6 sm:h-6 text-white">-->
    <!-- Medal circle -->
    <!--                                            <circle cx="12" cy="8" r="4" />-->
    <!-- Ribbon/bow tie shape -->
    <!--                                            <path d="M8.5 12L12 14.5 15.5 12 14 16 10 16z" />-->
    <!--                                        </svg>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!-- Content with responsive margins -->
    <!--                            <div class="ml-16 sm:ml-20 md:ml-20">-->
    <!--                                <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-1">2018-2020</h3>-->
    <!--                                <p class="text-sm sm:text-base text-gray-600">-->
    <!--                                    2018-2020 the company sign first contracts and began expanding its user base across Baltics, quickly becoming one of the most innovative loyalty card apps in the region.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!-- Timeline Item 3 -->
    <!--                        <div class="relative">-->
    <!-- Circle marker with medal icon -->
    <!--                            <div class="absolute left-[-8px] sm:left-[-10px] md:left-[-8px] top-0">-->
    <!--                                <div class="w-14 h-14 sm:w-16 sm:h-16 bg-orange-100 rounded-full flex items-center justify-center z-10">-->
    <!--                                    <div class="w-6 h-6 sm:w-8 sm:h-8 bg-gonpay-orange rounded-full flex items-center justify-center">-->
    <!--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 sm:w-6 sm:h-6 text-white">-->
    <!-- Medal circle -->
    <!--                                            <circle cx="12" cy="8" r="4" />-->
    <!-- Ribbon/bow tie shape -->
    <!--                                            <path d="M8.5 12L12 14.5 15.5 12 14 16 10 16z" />-->
    <!--                                        </svg>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!-- Content with responsive margins -->
    <!--                            <div class="ml-16 sm:ml-20 md:ml-20">-->
    <!--                                <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-1">Milestone Three</h3>-->
    <!--                                <p class="text-sm sm:text-base text-gray-600">-->
    <!--                                    GoNpay surpassed 100K users in Baltics, establishing its position as a leading loyalty card app.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!-- Timeline Item 4 -->
    <!--                        <div class="relative">-->
    <!-- Circle marker with medal icon -->
    <!--                            <div class="absolute left-[-8px] sm:left-[-10px] md:left-[-8px] top-0">-->
    <!--                                <div class="w-14 h-14 sm:w-16 sm:h-16 bg-orange-100 rounded-full flex items-center justify-center z-10">-->
    <!--                                    <div class="w-6 h-6 sm:w-8 sm:h-8 bg-gonpay-orange rounded-full flex items-center justify-center">-->
    <!--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 sm:w-6 sm:h-6 text-white">-->
    <!-- Medal circle -->
    <!--                                            <circle cx="12" cy="8" r="4" />-->
    <!-- Ribbon/bow tie shape -->
    <!--                                            <path d="M8.5 12L12 14.5 15.5 12 14 16 10 16z" />-->
    <!--                                        </svg>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!-- Content with responsive margins -->
    <!--                            <div class="ml-16 sm:ml-20 md:ml-20">-->
    <!--                                <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-1">2017</h3>-->
    <!--                                <p class="text-sm sm:text-base text-gray-600">-->
    <!--                                    2021 introduced a mobile payment feature, allowing users to make payments directly through the app, further simplifying their shopping experience.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <section class="container mx-auto px-4 sm:px-6 py-16">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Left: Image Block -->
            <div class="md:w-1/2 relative">
                <div class="rounded-lg overflow-hidden">
                    <img alt="Loyalty Cards" class="rounded" src="images/p3_sect2.png" />
                </div>
            </div>
            <!-- Right: Content Block -->
            <div class="md:w-1/2 flex flex-col justify-center">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">
                    <?= $translations['our_journey'] ?? "Our Journey &amp;" ?> <span
                        class="text-orange-500 font-bold"><?= $translations['achievements'] ?? "Achievements" ?></span>
                </h2>
                <div class="space-y-6 text-sm md:text-base">
                    <!-- Item 1 -->
                    <div class="flex items-start gap-3">
                        <div class="mt-1 text-orange-500">
                            <svg fill="none" height="48" viewbox="0 0 63 48" width="63"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="31.5" cy="24" fill="#FFEBD6" r="20"></circle>
                                <path
                                    d="M31.5 27C35.2279 27 38.25 24.0899 38.25 20.5C38.25 16.9101 35.2279 14 31.5 14C27.7721 14 24.75 16.9101 24.75 20.5C24.75 24.0899 27.7721 27 31.5 27Z"
                                    fill="#FF8400"></path>
                                <path
                                    d="M35.29 27.6101C35.62 27.4401 36 27.6901 36 28.0601V32.9101C36 33.8101 35.37 34.2501 34.59 33.8801L31.91 32.6101C31.68 32.5101 31.32 32.5101 31.09 32.6101L28.41 33.8801C27.63 34.2401 27 33.8001 27 32.9001L27.02 28.0601C27.02 27.6901 27.41 27.4501 27.73 27.6101C28.86 28.1801 30.14 28.5001 31.5 28.5001C32.86 28.5001 34.15 28.1801 35.29 27.6101Z"
                                    fill="#FF8400"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800"><?= $translations['2016'] ?? "2016" ?></p>
                            <p class="text-gray-600">
                                <?= $translations['gonpay_was_founded_in_2016_by_giedrius_voveris_ari'] ?? "Gonpay was founded in 2016 by Giedrius Voveris, Aridas Puočizinas and Deividas Valaitis, with the vision to simplify loyalty program management for consumers." ?>
                            </p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="flex items-start gap-3">
                        <div class="mt-1 text-orange-500">
                            <svg fill="none" height="48" viewbox="0 0 63 48" width="63"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="31.5" cy="24" fill="#FFEBD6" r="20"></circle>
                                <path
                                    d="M31.5 27C35.2279 27 38.25 24.0899 38.25 20.5C38.25 16.9101 35.2279 14 31.5 14C27.7721 14 24.75 16.9101 24.75 20.5C24.75 24.0899 27.7721 27 31.5 27Z"
                                    fill="#FF8400"></path>
                                <path
                                    d="M35.29 27.6101C35.62 27.4401 36 27.6901 36 28.0601V32.9101C36 33.8101 35.37 34.2501 34.59 33.8801L31.91 32.6101C31.68 32.5101 31.32 32.5101 31.09 32.6101L28.41 33.8801C27.63 34.2401 27 33.8001 27 32.9001L27.02 28.0601C27.02 27.6901 27.41 27.4501 27.73 27.6101C28.86 28.1801 30.14 28.5001 31.5 28.5001C32.86 28.5001 34.15 28.1801 35.29 27.6101Z"
                                    fill="#FF8400"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800"><?= $translations['2018'] ?? "2018" ?></p>
                            <p class="text-gray-600">
                                <?= $translations['20182020_the_company_signs_first_contracts_and_beg'] ?? "2018–2020 the company signs first contracts and began expanding its user base across Baltics, quickly becoming one of the most downloaded loyalty card apps in the region." ?>
                            </p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="flex items-start gap-3">
                        <div class="mt-1 text-orange-500">
                            <svg fill="none" height="48" viewbox="0 0 63 48" width="63"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="31.5" cy="24" fill="#FFEBD6" r="20"></circle>
                                <path
                                    d="M31.5 27C35.2279 27 38.25 24.0899 38.25 20.5C38.25 16.9101 35.2279 14 31.5 14C27.7721 14 24.75 16.9101 24.75 20.5C24.75 24.0899 27.7721 27 31.5 27Z"
                                    fill="#FF8400"></path>
                                <path
                                    d="M35.29 27.6101C35.62 27.4401 36 27.6901 36 28.0601V32.9101C36 33.8101 35.37 34.2501 34.59 33.8801L31.91 32.6101C31.68 32.5101 31.32 32.5101 31.09 32.6101L28.41 33.8801C27.63 34.2401 27 33.8001 27 32.9001L27.02 28.0601C27.02 27.6901 27.41 27.4501 27.73 27.6101C28.86 28.1801 30.14 28.5001 31.5 28.5001C32.86 28.5001 34.15 28.1801 35.29 27.6101Z"
                                    fill="#FF8400"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800"><?= $translations['2018'] ?? "2018" ?></p>
                            <p class="text-gray-600">
                                <?= $translations['gonpay_surpassed_100k_users_in_baltics_solidifying'] ?? "Gonpay surpassed 100k users in Baltics, solidifying its position as a leading loyalty card app." ?>
                            </p>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="flex items-start gap-3">
                        <div class="mt-1 text-orange-500">
                            <svg fill="none" height="48" viewbox="0 0 63 48" width="63"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="31.5" cy="24" fill="#FFEBD6" r="20"></circle>
                                <path
                                    d="M31.5 27C35.2279 27 38.25 24.0899 38.25 20.5C38.25 16.9101 35.2279 14 31.5 14C27.7721 14 24.75 16.9101 24.75 20.5C24.75 24.0899 27.7721 27 31.5 27Z"
                                    fill="#FF8400"></path>
                                <path
                                    d="M35.29 27.6101C35.62 27.4401 36 27.6901 36 28.0601V32.9101C36 33.8101 35.37 34.2501 34.59 33.8801L31.91 32.6101C31.68 32.5101 31.32 32.5101 31.09 32.6101L28.41 33.8801C27.63 34.2401 27 33.8001 27 32.9001L27.02 28.0601C27.02 27.6901 27.41 27.4501 27.73 27.6101C28.86 28.1801 30.14 28.5001 31.5 28.5001C32.86 28.5001 34.15 28.1801 35.29 27.6101Z"
                                    fill="#FF8400"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800"><?= $translations['2021'] ?? "2021" ?></p>
                            <p class="text-gray-600">
                                <?= $translations['2021_introduced_a_mobile_payment_feature_allowing_'] ?? "2021 introduced a mobile payment feature, allowing users to make payments directly through the app, further integrating their shopping experience." ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Easy To Manage Section -->
    <section class="container mx-auto px-4 sm:px-6 py-16">
        <div class="flex flex-col md:flex-row items-center">
            <!-- Left Side: Mobile App Image -->
            <div class="md:w-1/2 mb-8 md:mb-0" data-aos="fade-right" data-aos-duration="1000">
                <img alt="GoNpay Mobile App" class="" src="images/p3_sect3.png" />
            </div>
            <!-- Right Side: Text Content -->
            <div class="md:w-1/2 md:pl-16" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-3xl md:text-4xl font-bold text-gonpay-dark mb-6">
                    <?= $translations['easy_to'] ?? "Easy To" ?> <span
                        class="text-gonpay-orange"><?= $translations['manage'] ?? "Manage" ?></span>
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    <?= $translations['our_loyalty_card_platform_empowers_businesses_to_s'] ?? "Our loyalty card platform empowers businesses to streamline customer rewards and boost engagement. With intuitive tools, it's easy to track points, monitor customer spending, and generate insightful reports. Whether you're a small business or a growing enterprise, our user-friendly interface ensures seamless rewards management and customer satisfaction." ?>
                </p>
            </div>
        </div>
    </section>
    <!-- Our Core Values Section -->
    <section class="container mx-auto px-4 sm:px-6 py-16" data-aos="fade-up" data-aos-duration="1000">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gonpay-dark mb-6">
                <?= $translations['our_core'] ?? "Our Core" ?> <span
                    class="text-gonpay-orange"><?= $translations['values'] ?? "Values" ?></span>
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
            <!-- Added responsive gap -->
            <!-- Value Card 1 -->
            <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="w-14 h-14 bg-gonpay-orange rounded-xl flex items-center justify-center text-white mb-6">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm10-10V7a4 4 0 00-8 0v4h8z"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4"><?= $translations['advance_security'] ?? "Advance Security" ?></h3>
                <p class="text-gray-600">
                    <?= $translations['our_platform_offers_robust_security_features_inclu'] ?? "Our platform offers robust security features, including encryption, multi-factor authentication, and continuous monitoring, to ensure your financial information stays protected." ?>
                </p>
            </div>
            <!-- Value Card 2 -->
            <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="w-14 h-14 bg-gonpay-orange rounded-xl flex items-center justify-center text-white mb-6">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 0 012 2v10m-6 0a2 2 0 002 2h2a2 0 002-2m0 0V5a2 2 0 012-2h2a2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4"><?= $translations['robust_analytics'] ?? "Robust Analytics" ?></h3>
                <p class="text-gray-600">
                    <?= $translations['gain_deep_insights_into_your_business_with_powerfu'] ?? "Gain deep insights into your business with powerful analytics tools that provide detailed reports on cash flow, expenses, and revenue trends." ?>
                </p>
            </div>
            <!-- Value Card 3 -->
            <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="w-14 h-14 bg-gonpay-orange rounded-xl flex items-center justify-center text-white mb-6">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4"><?= $translations['instant_transfers'] ?? "Instant Transfers" ?></h3>
                <p class="text-gray-600">
                    <?= $translations['experience_the_convenience_of_realtime_transaction'] ?? "Experience the convenience of real-time transactions with our app, designed to make sending and receiving funds faster and easier than ever." ?>
                </p>
            </div>
        </div>
    </section>
    <section class="container mx-auto px-4 sm:px-6 py-16" data-aos="fade-up" data-aos-duration="1000">
        <div class="mx-auto bg-white shadow-xl ring-1 ring-gray-950/5 rounded-2xl overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 md:border-r border-gray-200 p-6 md:p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h4a1 1 0 011 1v5M9 21l3-3 3 3"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-900">
                            <?= $translations['company_details'] ?? "Company Details" ?></h2>
                    </div>
                    <div class="space-y-4">
                        <div
                            class="flex flex-col sm:flex-row justify-between items-start sm:items-center pb-3 border-b border-gray-200">
                            <span
                                class="text-sm text-gray-500 font-medium mb-2 sm:mb-0"><?= $translations['company_name'] ?? "Company Name" ?></span>
                            <span
                                class="text-gray-800 font-semibold"><?= $translations['mobilli_zona_uab'] ?? "'Mobilli zona' UAB" ?></span>
                        </div>
                        <div
                            class="flex flex-col sm:flex-row justify-between items-start sm:items-center pb-3 border-b border-gray-200">
                            <span
                                class="text-sm text-gray-500 font-medium mb-2 sm:mb-0"><?= $translations['company_code'] ?? "Company Code" ?></span>
                            <span
                                class="text-gray-800 font-semibold"><?= $translations['304255777'] ?? "304255777" ?></span>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                            <span
                                class="text-sm text-gray-500 font-medium mb-2 sm:mb-0"><?= $translations['vat_code'] ?? "VAT Code" ?></span>
                            <span
                                class="text-gray-800 font-semibold"><?= $translations['lt100010213217'] ?? "LT100010213217" ?></span>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 p-6 md:p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gonpay-orange/20 rounded-full flex items-center justify-center mr-4">
                            <svg class="h-6 w-6 text-gonpay-orange" fill="none" stroke="currentColor"
                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1c-8.284 0-15-6.716-15-15V5z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-900">
                            <?= $translations['contact_information'] ?? "Contact Information" ?></h2>
                    </div>
                    <div class="space-y-4">
                        <div
                            class="flex flex-col sm:flex-row justify-between items-start sm:items-center pb-3 border-b border-gray-200">
                            <div class="flex items-center space-x-3 mb-2 sm:mb-0">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1c-8.284 0-15-6.716-15-15V5z"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                                <span class="text-sm text-gray-500"><?= $translations['phone'] ?? "Phone" ?></span>
                            </div>
                            <a class="text-gray-800 font-semibold hover:text-gonpay-orange transition-colors"
                                href="tel:+37062344974"><?= $translations['370_623_44974'] ?? "+370 623 44974" ?></a>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                            <div class="flex items-center space-x-3 mb-2 sm:mb-0">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                                <span class="text-sm text-gray-500"><?= $translations['email'] ?? "Email" ?></span>
                            </div>
                            <a class="text-gray-800 font-semibold hover:text-gonpay-orange transition-colors"
                                href="mailto:info@gonpay.com"><?= $translations['infogonpaycom'] ?? "info@gonpay.com" ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add responsive styles -->
<style>
/* Keyframes to animate dotted background */
@keyframes dottedPulse {
    0% {
        transform: scale(1);
        opacity: 0.2;
    }

    50% {
        transform: scale(1.1);
        opacity: 0.4;
    }

    100% {
        transform: scale(1);
        opacity: 0.2;
    }
}

.animate-dotted {
    animation: dottedPulse 3s ease-in-out infinite;
}

/* Orange Blob animations */
@keyframes blobAnimate {
    0% {
        transform: translate(0px, 0px) scale(1);
        opacity: 0.2;
    }

    33% {
        transform: translate(10px, -10px) scale(1.1);
        opacity: 0.25;
    }

    66% {
        transform: translate(-10px, 10px) scale(0.9);
        opacity: 0.2;
    }

    100% {
        transform: translate(0px, 0px) scale(1);
        opacity: 0.2;
    }
}

.animate-blob {
    animation: blobAnimate 8s ease-in-out infinite;
}

/* Responsive adjustments */
@media (max-width: 640px) {
    .space-y-8 {
        margin-top: 2rem;
    }

    .rotate-3 {
        transform: rotate(0deg);
        /* Remove rotation on mobile */
    }
}

@media (max-width: 768px) {
    .timeline-item {
        padding-left: 1rem;
    }

    .text-4xl {
        font-size: 2rem;
    }

    .text-3xl {
        font-size: 1.75rem;
    }
}
</style>



<?php include 'components/footer.php'; ?>