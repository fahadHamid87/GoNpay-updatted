<?php 
$pageTitle = 'GoNpay - Modern Loyalty System For Your Business';
include 'components/header.php';
?>

<div class="overflow-hidden bg-white">
    <!-- Hero Section -->
    <section class="container mx-auto px-4 sm:px-6 py-12 mt-24">
        <div class="flex flex-col lg:flex-row items-center">
            <!-- Image Section (Left Side) -->
            <div class="lg:w-1/2 relative px-4 sm:px-0" data-aos="fade-right" data-aos-duration="1000">
                <div class="relative">
                    <!-- Rounded Rectangle Background -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[95%] h-[95%] bg-[#FFF6E8] rounded-3xl -z-10">
                    </div>
                    <!-- Background Dots Pattern (Right side) -->
                    <div class="absolute top-0 right-0 w-1/3 h-full -z-5 opacity-20">
                        <div class="w-full h-full"
                            style="background-image: radial-gradient(#CCCCCC 2px, transparent 2px); background-size: 18px 18px;">
                        </div>
                    </div>
                    <!-- Main Image -->
                    <img alt="Woman with Smartphone" class="relative z-10 max-w-md mx-auto" src="images/p2_sect1.png" />
                    <!-- Orange Box with 85K -->
                    <div
                        class="absolute top-[15%] right-[5%] bg-gonpay-orange rounded-xl shadow-md p-4 flex items-center text-white z-20">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                        <div class="flex items-center">
                            <span class="font-bold text-2xl mr-1"><?= $translations['85k'] ?? "85K" ?></span>
                            <span class="text-xs"><?= $translations['total_users'] ?? "Total Users" ?></span>
                        </div>
                    </div>
                    <!-- Circular Progress 74% -->
                    <div
                        class="absolute bottom-[20%] left-[5%] z-20 bg-white rounded-xl shadow-md p-3 flex items-center gap-3">
                        <div class="relative w-16 h-16">
                            <svg class="w-16 h-16" viewbox="0 0 36 36">
                                <path d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#EEEEEE" stroke-width="3">
                                </path>
                                <path d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#FF7A00"
                                    stroke-dasharray="74, 100" stroke-width="3"></path>
                            </svg>
                            <div
                                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-baseline">
                                <span class="text-xl font-bold"><?= $translations['74'] ?? "74" ?></span>
                                <span class="text-xs"><?= $translations[''] ?? "%" ?></span>
                            </div>
                        </div>
                        <span
                            class="text-sm font-medium text-gray-600"><?= $translations['customer_retention'] ?? "Customer Retention" ?></span>
                    </div>
                    <!-- Small Orange Dot -->
                    <div class="absolute bottom-[15%] left-[25%] z-20 bg-gonpay-orange w-2 h-2 rounded-full"></div>
                </div>
            </div>
            <!-- Text Section (Right Side) -->
            <div class="lg:w-1/2 px-4 sm:px-6 lg:pl-12 mt-12 lg:mt-0" data-aos="fade-left" data-aos-duration="1000">
                <h1 class="text-3xl md:text-4xl font-bold text-gonpay-dark mb-6 leading-tight">
                    <?= $translations['modern_loyalty_system'] ?? "Modern Loyalty System" ?><br /><?= $translations['adapted_to'] ?? "Adapted To" ?>
                    <span
                        class="text-gonpay-orange"><?= $translations['your_business'] ?? "Your Business" ?><br /><?= $translations['specifics'] ?? "Specifics" ?></span>
                </h1>
                <p class="text-gray-600 text-lg mb-8 max-w-lg">
                    <?= $translations['all_microelements_built_so_it_has_never_been_easie'] ?? "All micro-elements built so it has never been easier to increase sales!" ?>
                </p>
                <!-- Benefits Checklist -->
                <div class="mb-8">
                    <?php
                    $benefits = array(
                        $translations['getting_more_loyalty_levels'] ?? 'Getting more loyalty levels',
                        $translations['getting_sales_and_personalized_offers'] ?? 'Getting sales and personalized offers',
                        $translations['increasing_customer_return'] ?? 'Increasing customer return',
                        $translations['setting_up_loyalty_and_payment_cards'] ?? 'Setting up loyalty and payment cards',
                        $translations['membership_discounts_and_discount_groups'] ?? 'Membership discounts and discount groups',
                        $translations['earning_points_redeeming_and_sales_points'] ?? 'Earning points, redeeming and sales points'
                    );

                    foreach ($benefits as $benefit) : ?>
                    <div class="flex items-start mb-3">
                        <div class="mr-3 mt-1">
                            <img alt="Check" class="w-5 h-5" src="images/check-icon.png" />
                        </div>
                        <div>
                            <p class="text-gray-700"><?php echo $benefit; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a class="btn-orange bg-gonpay-orange text-white font-medium py-3 px-8 rounded-full inline-block"
                    href="register.php"><?= $translations['get_started'] ?? "Get Started" ?></a>
            </div>
        </div>
    </section>
    <!-- Why GoNpay Section -->
    <section class="container mx-auto px-4 sm:px-6 py-16 mt-8">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl md:text-4xl font-bold text-gonpay-dark"><?= $translations['why'] ?? "Why" ?> <span
                    class="text-gonpay-orange"><?= $translations['gonpay'] ?? "GoNpay?" ?></span>
            </h2>
            <p class="text-gray-600 text-lg mt-4 max-w-2xl mx-auto">
                <?= $translations['because_it_is_the_market_leading_solution'] ?? "Because it is the market leading solution" ?>
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $featureCards = array(
                array(
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />',
                    'title' => $translations['new_buyers'] ?? 'New Buyers',
                    'description' => $translations['new_buyers_desc'] ?? 'Attract new customers by offering a modern loyalty system. Today\'s consumers expect a good loyalty program when they choose where to shop.'
                ),
                array(
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />',
                    'title' => $translations['increase_sales'] ?? 'Increasing Sales',
                    'description' => $translations['increase_sales_desc'] ?? 'Get your customers to spend more by creating tiered loyalty levels and rewarding bigger purchases.'
                ),
                array(
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
                    'title' => $translations['increase_connection'] ?? 'Increase Connection',
                    'description' => $translations['increase_connection_desc'] ?? 'Build stronger connections with your customers through personalized offers and communications.'
                ),
                array(
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />',
                    'title' => $translations['customizable_loyalty_program'] ?? 'Customizable Loyalty Programs',
                    'description' => $translations['customizable_loyalty_program_desc'] ?? 'Create loyalty programs that fit your specific business needs with flexible options.'
                ),
                array(
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />',
                    'title' => $translations['track_customer_engagement'] ?? 'Track Customer Engagement',
                    'description' => $translations['track_customer_engagement_desc'] ?? 'Get detailed insights into how customers engage with your loyalty program.'
                ),
                array(
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />',
                    'title' => $translations['card_management_made_simple'] ?? 'Card Management Made Simple',
                    'description' => $translations['card_management_made_simple_desc'] ?? 'Our intuitive dashboard makes it easy to create and manage loyalty cards.'
                )
            );
            
            foreach ($featureCards as $index => $card) {
                $delay = ($index + 1) * 100;
            ?>
            <div class="bg-white rounded-xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-[0_8px_17px_-8px_rgba(0,0,0,0.3)] transition-all duration-300 overflow-hidden"
                data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                <div class="p-6">
                    <div class="w-12 h-12 bg-gonpay-orange rounded-lg flex items-center justify-center text-white mb-6">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <?php echo $card['icon']; ?>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3"><?php echo $card['title']; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $card['description']; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <style>
    /* Animation for phones floating effect */
    @keyframes phoneFloat {
        0% {
            transform: translateY(-50%) translateX(0);
        }

        50% {
            transform: translateY(-53%) translateX(0);
        }

        100% {
            transform: translateY(-50%) translateX(0);
        }
    }

    @keyframes phoneFloatSlow {
        0% {
            transform: translateY(-50%) translateX(0);
        }

        50% {
            transform: translateY(-52%) translateX(0);
        }

        100% {
            transform: translateY(-50%) translateX(0);
        }
    }

    /* Animation for orange circle pulse */
    @keyframes circlePulse {
        0% {
            transform: scale(1);
            opacity: 0.9;
        }

        50% {
            transform: scale(1.05);
            opacity: 1;
        }

        100% {
            transform: scale(1);
            opacity: 0.9;
        }
    }

    .phone-float {
        animation: phoneFloat 4s ease-in-out infinite;
    }

    .phone-float-slow {
        animation: phoneFloatSlow 5s ease-in-out infinite;
    }

    .phone-background-circle {
        animation: circlePulse 10s ease-in-out infinite;
    }
    </style>
    <!-- Smart Management System Section -->
    <section class="container mx-auto px-4 sm:px-6 py-24 mt-12">
        <div class="flex flex-col lg:flex-row items-center">
            <!-- Mobile Phones Image (Left Side) -->
            <div class="lg:w-1/2 relative px-4 sm:px-0 mb-12 lg:mb-0" data-aos="fade-right" data-aos-duration="1000">
                <div class="relative w-full flex justify-center items-center">
                    <!-- Large Orange Circle Background with animation -->
                    <div
                        class="absolute w-[420px] h-[340px] bg-gonpay-orange rounded-full -z-10 phone-background-circle">
                    </div>
                    <!-- Mobile Phones Container -->
                    <div class="relative" style="height: 500px; width: 400px;">
                        <!-- Phone 1 (Left white iPhone) - with slight floating animation -->
                        <div class="absolute top-1/2 transform -translate-y-1/2 left-0 z-10 phone-float-slow">
                            <img alt="GoNpay Mobile App QR Code" class="h-[400px] w-auto" src="images/phone-back.png" />
                        </div>
                        <!-- Phone 2 (Right iPhone with orange content) - with floating animation -->
                        <div class="absolute top-1/2 transform -translate-y-1/2 left-[120px] z-20 phone-float">
                            <img alt="GoNpay Mobile App Dashboard" class="h-[450px] w-auto"
                                src="images/phone-front.png" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Text Content (Right Side) -->
            <div class="lg:w-1/2 px-4 lg:pl-16" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-3xl md:text-4xl font-bold text-gonpay-dark mb-3">
                    <?= $translations['smart_management'] ?? "Smart Management" ?><br />
                    <span class="text-gonpay-orange"><?= $translations['system'] ?? "System" ?></span>
                </h2>
                <div class="text-gray-600 space-y-4 mb-8">
                    <p><?= $translations['accessible_via_internet_and_a_mobile_phone_designe'] ?? "Accessible via Internet and a mobile phone Designed for maintaining a single or hundreds of point of sales" ?>
                    </p>
                    <p><?= $translations['adapted_to_service_a_hundred_as_well_as_a_million_'] ?? "Adapted to service a hundred as well as a million buyers. If you already have a loyalty system, then let you customers access it from a mobile phone. We will connect GoNpay mobile wallet to your existing loyalty solution." ?>
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                    <!-- Checkout Feature Box -->
                    <div class="bg-gonpay-orange rounded-xl p-6 text-white">
                        <h3 class="text-xl font-bold mb-3"><?= $translations['checkout'] ?? "Checkout" ?></h3>
                        <p class="text-sm">
                            <?= $translations['avoid_slowdowns_by_sharing_the_link'] ?? "Avoid slowdowns by sharing the link" ?>
                        </p>
                    </div>
                    <!-- Integration Feature Box -->
                    <div class="bg-white border border-gray-200 rounded-xl p-6">
                        <h3 class="text-xl font-bold text-indigo-900 mb-3">
                            <?= $translations['integration'] ?? "Integration" ?></h3>
                        <p class="text-sm text-gray-600">
                            <?= $translations['accept_payments_by_store_integration'] ?? "Accept payments by store integration" ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What Our Client Say Section -->
    <section class="container mx-auto px-4 sm:px-6 py-24 mt-12">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl md:text-4xl font-bold text-gonpay-dark">
                <?= $translations['what_our_client_say'] ?? "What Our Client Say" ?> <span
                    class="text-gonpay-orange"><?= $translations['about_us_2'] ?? "About Us?" ?></span>
            </h2>
        </div>
        <div class="max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            <!-- Testimonial Slider Container -->
            <div class="relative testimonial-container">

                <?php
                // Testimonial data
               
                $testimonials = [
                    [
                        'name' => 'Cameron Williamson',
                        'position' => $translations['CEO'] ?? 'CEO & Owner, Vision Trust',
                        'quote' => $translations['cameron_williamson'] ??  'Our experience with the company has been exceptional. Their loyalty program has helped us retain customers and increase sales.',
                        'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80'
                    ],
                    [
                        'name' => 'Esther Howard',
                        'position' => $translations['marketingDirector'] ?? 'Marketing Director, Elevate Brands',
                        'quote' => $translations['esther_howard'] ?? 'The loyalty system from GoNpay has transformed how we interact with our customers. The ease of setup and the robust features have made it an invaluable tool for our business.',
                        'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80'
                    ],
                    [
                        'name' => 'Robert Fox',
                        'position' => $translations['founderTechInnovations'] ?? 'Founder, Tech Innovations',
                        'quote' => $translations['robert_fox'] ?? "We've seen a dramatic increase in customer retention since implementing GoNpay. The mobile app integration was seamless, and our customers love the convenience it provides.",
                        'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80'
                    ]
                ];
                ?>

                <style>
                        .img1 {
                                width: 50px;
                                height: 50px;
                                margin-right : 20px
                                                        }
                                                          .img2 {
        width: 50px;
        height: 50px;
        margin-right : 20px
    }
       .img3 {
        width: 50px;
        height: 50px;
        margin-right : 20px
    }
                </style>

                <!-- Swiper Testimonial Slides -->
                <div class="swiper testimonialSwiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($testimonials as $index => $testimonial): ?>
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center testimonial-content">
                                <!-- Client Image -->
                                <div class="mb-8">
                                    <img src="<?php echo $testimonial['image']; ?>"
                                        class="w-20 h-20 rounded-full object-cover border-4 border-gray-100"
                                        alt="<?php echo $testimonial['name']; ?>" />
                                </div>
                                <!-- Quote Content with Quote Marks -->
                                <div class="relative">
                                    <!-- Left Quote Mark -->
                                    <div class="absolute -left-10 -top-6">
                                        <span
                                            class="text-gonpay-orange text-6xl"><?= $translations['_4'] ?? "“" ?></span>
                                    </div>
                                    <p class="text-gray-700 text-center text-lg max-w-2xl mb-8">
                                        <?php echo $testimonial['quote']; ?>
                                    </p>
                                    <!-- Right Quote Mark -->
                                    <div class="absolute -right-8 bottom-0">
                                        <span
                                            class="text-gonpay-orange text-6xl"><?= $translations['_5'] ?? "”" ?></span>
                                    </div>
                                </div>
                                <!-- Client Info -->
                                <div class="text-center">
                                    <h4 class="font-bold text-xl text-gonpay-dark"><?php echo $testimonial['name']; ?>
                                    </h4>
                                    <p class="text-gray-500"><?php echo $testimonial['position']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Swiper Pagination -->
                    <div class="swiper-pagination mt-8"></div>
                </div>
                <!-- Testimonial Navigation -->
                <div class="flex justify-center items-center mt-12 space-x-3">
                    <!-- Previous Button -->
                    <button
                        class="swiper-button-prev-custom w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gonpay-dark hover:bg-gray-50 transition-colors">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            </path>
                        </svg>
                    </button>
                    <!-- View All Button -->
                    <a class="bg-gonpay-orange text-white py-2 px-6 rounded-full font-medium hover:bg-gonpay-orange-dark transition-colors"
                        href="#"><?= $translations['view_all'] ?? "View All" ?></a>
                    <!-- Next Button -->
                    <button
                        class="swiper-button-next-custom w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gonpay-dark hover:bg-gray-50 transition-colors">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Trusted Partners Section -->
    <section class="container mx-auto px-4 sm:px-6 py-24 mt-12">
        <div class="flex flex-col md:flex-row items-start">
            <!-- Left Content -->
            <div class="md:w-1/2 pr-0 md:pr-12 mb-12 md:mb-0" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-3xl md:text-4xl font-bold text-gonpay-dark mb-6">
                    <?= $translations['see_our'] ?? "See Our" ?> <span
                        class="text-gonpay-orange"><?= $translations['trusted'] ?? "Trusted" ?><br /><?= $translations['partners'] ?? "Partners" ?></span>
                </h2>
                <p class="text-gray-600 mb-6"><?= $translations['vero_homero_perfecto_mei_ut_sonet_aperiam_an_nec_n'] ?? "Vero homero perfecto mei ut, sonet aperiam an nec. Ni
                nec dict altera legimu. Me vita de lege ndos expet end is ad.
                Ex 
                mei omita aliu mi ando" ?></p>
                <a class="bg-gonpay-orange text-white py-3 px-8 rounded-full font-medium hover:bg-gonpay-orange-dark transition-colors inline-block"
                    href="mailto:info@gonpay.com"><?= $translations['contact_us'] ?? "Contact Us" ?></a>
            </div>
            <!-- Right Content - Partner Logos arranged in rows -->
            <div class="md:w-1/2" data-aos="fade-left" data-aos-duration="1000">
                <div class="w-full">
                    <!-- Top row - 3 logos in one line -->
                    <div class="flex justify-center gap-8 mb-12">
                        <!-- Partner Logo 1 (Blue/Red/Yellow X) - Largest -->
                        <a class="transform transition-transform duration-300 hover:-translate-y-2 cursor-pointer"
                            href="#" title="Partner 1">
                            <img alt="Partner 1" class="w-32 h-32 animate-float" src="images/trust1.png"
                                style="animation-delay: 0s; animation-duration: 4s;" />
                        </a>
                        <!-- Partner Logo 2 (Green Circle) - Medium-Large -->
                        <a class="transform transition-transform duration-300 hover:-translate-y-2 cursor-pointer"
                            href="#" title="Partner 2">
                            <img alt="Partner 2" class="w-28 h-28 animate-float" src="images/trust2.png"
                                style="animation-delay: 1.5s; animation-duration: 5s;" />
                        </a>
                        <!-- Partner Logo 3 (Small blue circle) - Smallest -->
                        <a class="transform transition-transform duration-300 hover:-translate-y-2 cursor-pointer"
                            href="#" title="Partner 3">
                            <img alt="Partner 3" class="w-20 h-20 animate-float" src="images/trust4.png"
                                style="animation-delay: 0.5s; animation-duration: 3.5s;" />
                        </a>
                    </div>
                    <!-- Bottom row - 1 logo centered -->
                    <div class="flex justify-center">
                        <!-- Partner Logo 4 (Square) - Average Size -->
                        <a class="transform transition-transform duration-300 hover:-translate-y-2 cursor-pointer"
                            href="#" title="Partner 4">
                            <img alt="Partner 4" class="w-24 h-24 animate-float" src="images/trust3.png"
                                style="animation-delay: 1s; animation-duration: 4.5s;" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
    /* Only keeping the floating animation that's not easily achievable with Tailwind */
    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .animate-float {
        animation-name: float;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .flex.justify-center.gap-8 {
            gap: 1.25rem;
        }


     

    }
    </style>
    <!-- Pricing Section -->
    <section class="container mx-auto px-4 sm:px-6 py-24 mt-12 bg-gray-50">
        <!-- Pricing Label -->
        <div class="text-center mb-3">
            <span
                class="inline-block text-gonpay-orange uppercase tracking-wider font-medium"><?= $translations['pricing'] ?? "PRICING" ?></span>
        </div>
        <!-- Pricing Heading -->
        <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gonpay-dark">
                <?= $translations['simple_transparent_pricing'] ?? "Simple, Transparent Pricing" ?></h2>
        </div>
        <!-- Subheading -->
        <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="1000">
            <p class="text-gray-600">
                <?= $translations['choose_the_plan_that_suits_your_business_needs'] ?? "Choose the plan that suits your business needs" ?>
            </p>
        </div>
        <!-- Pricing Cards -->
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Basic Plan Card -->
                <div class="bg-white group hover:bg-gonpay-orange transition-colors duration-300 rounded-3xl overflow-hidden shadow-sm hover:shadow-md flex flex-col"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="p-8 flex-grow">
                        <div class="flex items-center mb-4">
                           <div>
                            <img  class = "img1" src="images/Paper.png" alt="" srcset="" >
                           </div>
                            <div>
                                <span
                                    class="text-gray-500 text-sm block group-hover:text-white transition"><?= $translations['free'] ?? "Free" ?></span>
                                <h3 class="text-xl font-bold text-gray-800 group-hover:text-white transition">
                                    <?= $translations['basic_plan'] ?? "Basic Plan" ?></h3>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm mb-8 group-hover:text-white transition">
                            <?= $translations['Basic'] ?? " Perfect for individuals and small businesses starting out.
Showcase your brand with a digital design card, service details, and basic customer loyalty features — all at no cost." ?>
                        </p>
                        <div class="text-4xl font-bold mb-8 text-gray-900 group-hover:text-white transition">
                            <?= $translations['free'] ?? "Free" ?></div>
                        <div>
                            <h4 class="font-semibold mb-4 text-gray-800 group-hover:text-white transition">
                                <?= $translations['whats_included'] ?? "What's Included" ?></h4>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="mr-3 mt-1">
                                        <div
                                            class="w-5 h-5 bg-gonpay-orange rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white">
                                            <svg class="h-3 w-3 text-white transition-colors duration-300 group-hover:text-gonpay-orange"
                                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span
                                        class="text-gray-600 text-sm group-hover:text-white transition"><?= $translations['your_design_card_in_gonpay'] ?? "Your design card in GoNpay" ?></span>
                                </li>
                                <li class="flex items-start">
                                    <div class="mr-3 mt-1">
                                        <div
                                            class="w-5 h-5 bg-gonpay-orange rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white">
                                            <svg class="h-3 w-3 text-white transition-colors duration-300 group-hover:text-gonpay-orange"
                                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span
                                        class="text-gray-600 text-sm group-hover:text-white transition"><?= $translations['information_about_your_services'] ?? "Information about your services" ?></span>
                                </li>
                                <li class="flex items-start">
                                    <div class="mr-3 mt-1">
                                        <div
                                            class="w-5 h-5 bg-gonpay-orange rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white">
                                            <svg class="h-3 w-3 text-white transition-colors duration-300 group-hover:text-gonpay-orange"
                                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span
                                        class="text-gray-600 text-sm group-hover:text-white transition"><?= $translations['discounts_and_loyalty_points_to_your_customers'] ?? "Discounts and loyalty points to your customers" ?></span>
                                </li>
                                <li class="flex items-start">
                                    <div class="mr-3 mt-1">
                                         <div
                                         class="w-5 h-5 bg-gonpay-orange rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white">
                                            <svg class="h-3 w-3 text-white transition-colors duration-300 group-hover:text-gonpay-orange"
                                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                   <span
                                        class="text-gray-600 text-sm group-hover:text-white transition"><?= $translations['customizable_loyalty_rewards'] ?? "Customizable loyalty rewards" ?></span> 
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-8 pt-0 mt-auto">
                        <a class="block w-full text-center py-4 px-4 bg-gonpay-orange text-white font-medium rounded-full transition-colors duration-300 group-hover:bg-white group-hover:text-gonpay-orange"
                            href="register.php"><?= $translations['get_started'] ?? "Get Started" ?></a>
                    </div>
                </div>
                <!-- Business Plan Card -->
                <div class="bg-white group hover:bg-gonpay-orange transition-colors duration-300 rounded-3xl overflow-hidden shadow-md hover:shadow-lg transform md:-translate-y-2 z-10 flex flex-col"
                    data-aos="fade-up">
                    <div class="p-8 flex-grow">
                        <div class="flex items-center mb-4">
                             <div>
                            <img class = "img2" src="images/paperplan.png" alt="" srcset="">
                           </div>
                            <div>
                                <span
                                    class="text-gray-500 text-sm block group-hover:text-white transition"><?= $translations['paid'] ?? "Paid" ?></span>
                                <h3 class="text-xl font-bold text-gray-800 group-hover:text-white transition">
                                    <?= $translations['business_plan'] ?? "Business Plan" ?></h3>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm mb-8 group-hover:text-white transition">
                            <?= $translations['Business'] ?? "Ideal for growing businesses ready to scale.
Unlock powerful tools like advanced analytics, automated campaigns, and personalized notifications to engage and convert more customers.." ?>
                        </p>
                        <div class="text-4xl font-bold mb-8 text-gray-900 group-hover:text-white transition">
                            <?= $translations['49'] ?? "€49" ?></div>
                        <div>
                            <h4 class="font-semibold mb-4 text-gray-800 group-hover:text-white transition">
                                <?= $translations['whats_included'] ?? "What's Included" ?></h4>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="mr-3 mt-1">
                                        <div
                                            class="w-5 h-5 bg-gonpay-orange rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white">
                                            <svg class="h-3 w-3 text-white transition-colors duration-300 group-hover:text-gonpay-orange"
                                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span
                                        class="text-gray-600 text-sm group-hover:text-white transition"><?= $translations['advanced_analytics_dashboard'] ?? "Advanced analytics dashboard" ?></span>
                                </li>
                                <li class="flex items-start">
                                    <div class="mr-3 mt-1">
                                        <div
                                            class="w-5 h-5 bg-gonpay-orange rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white">
                                            <svg class="h-3 w-3 text-white transition-colors duration-300 group-hover:text-gonpay-orange"
                                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span
                                        class="text-gray-600 text-sm group-hover:text-white transition"><?= $translations['automated_marketing_campaigns'] ?? "Automated marketing campaigns" ?></span>
                                </li>
                                <li class="flex items-start">
                                    <div class="mr-3 mt-1">
                                      <div
                                            class="w-5 h-5 bg-gonpay-orange rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white">
                                            <svg class="h-3 w-3 text-white transition-colors duration-300 group-hover:text-gonpay-orange"
                                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span
                                        class="text-gray-600 text-sm group-hover:text-white transition"><?= $translations['customer_segmentation_tools'] ?? "Customer segmentation tools" ?></span>
                                </li>
                                <li class="flex items-start">
                                    <div class="mr-3 mt-1">
                                        <div
                                            class="w-5 h-5 bg-gonpay-orange rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white">
                                            <svg class="h-3 w-3 text-white transition-colors duration-300 group-hover:text-gonpay-orange"
                                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span
                                        class="text-gray-600 text-sm group-hover:text-white transition"><?= $translations['personalized_notifications'] ?? "Personalized notifications" ?></span>
                                </li>
                            </ul>
                        </div> 
                    </div> 
                    <div class="p-8 pt-0 mt-auto">
                        <a class="block w-full text-center py-4 px-4 bg-gonpay-orange text-white font-medium rounded-full transition-colors duration-300 group-hover:bg-white group-hover:text-gonpay-orange"
                            href="register.php"><?= $translations['get_started'] ?? "Get Started" ?></a>
                    </div>
                </div>
                <!-- Corporate Plan Card -->
                <div class="bg-white group hover:bg-gonpay-orange transition-colors duration-300 rounded-3xl overflow-hidden shadow-sm hover:shadow-md flex flex-col"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="p-8 flex-grow">
                        <div class="flex items-center mb-4">
                           <div>
                            <img class = "img3" src="images/paperplan2.png" alt="" srcset="">
                          </div>
                            <div>
                                <span
                                    class="text-gray-500 text-sm block group-hover:text-white transition"><?= $translations['paid'] ?? "Paid" ?></span>
                                <h3 class="text-xl font-bold text-gray-800 group-hover:text-white transition">
                                    <?= $translations['corporate_plan'] ?? "Corporate Plan" ?></h3>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm mb-8 group-hover:text-white transition">
                            <?= $translations['corporate-plan'] ?? "Tailored for large teams and enterprises.
Take advantage of professional segmentation tools, in-depth marketing automation, and priority support to optimize customer engagement at scale." ?>
                        </p>
                        <div class="text-4xl font-bold mb-8 text-gray-900 group-hover:text-white transition">
                            <?= $translations['special_offer'] ?? "Special offer" ?></div>
                        <div>
                            <h4 class="font-semibold mb-4 text-gray-800 group-hover:text-white transition">
                                <?= $translations['whats_included'] ?? "What's Included" ?></h4>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="mr-3 mt-1">
                                        <div
                                            class="w-5 h-5 bg-gonpay-orange rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white">
                                            <svg class="h-3 w-3 text-white transition-colors duration-300 group-hover:text-gonpay-orange"
                                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span
                                        class="text-gray-600 text-sm group-hover:text-white transition"><?= $translations['advanced_analytics_dashboard'] ?? "Advanced analytics dashboard" ?></span>
                                </li>
                                <li class="flex items-start">
                                    <div class="mr-3 mt-1">
                                        <div
                                            class="w-5 h-5 bg-gonpay-orange rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white">
                                            <svg class="h-3 w-3 text-white transition-colors duration-300 group-hover:text-gonpay-orange"
                                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span
                                        class="text-gray-600 text-sm group-hover:text-white transition"><?= $translations['automated_marketing_campaigns'] ?? "Automated marketing campaigns" ?></span>
                                </li>
                                <li class="flex items-start">
                                    <div class="mr-3 mt-1">
                                        <div
                                            class="w-5 h-5 bg-gonpay-orange rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white">
                                            <svg class="h-3 w-3 text-white transition-colors duration-300 group-hover:text-gonpay-orange"
                                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span
                                        class="text-gray-600 text-sm group-hover:text-white transition"><?= $translations['customer_segmentation_tools'] ?? "Customer segmentation tools" ?></span>
                                </li>
                                <li class="flex items-start">
                                    <div class="mr-3 mt-1">
                                        <div
                                            class="w-5 h-5 bg-gonpay-orange rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white">
                                            <svg class="h-3 w-3 text-white transition-colors duration-300 group-hover:text-gonpay-orange"
                                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span
                                        class="text-gray-600 text-sm group-hover:text-white transition"><?= $translations['priority_customer_support'] ?? "Priority customer support" ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-8 pt-0 mt-auto">
                        <a class="block w-full text-center py-4 px-4 bg-gonpay-orange text-white font-medium rounded-full transition-colors duration-300 group-hover:bg-white group-hover:text-gonpay-orange"
                            href="register.php"><?= $translations['get_started'] ?? "Get Started" ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Your Journey CTA Section -->
    <section class="container mx-auto px-4 sm:px-6 py-20">
        <?php include 'components/journey_cta.php'; ?>
    </section>
    <!-- FAQ Section -->
    <?php
    $faqs = [
        [
            'question' => $translations['what_is_gonpay_for_business'] ?? 'What is Gonpay for Business?',
            'answer' => $translations['gonpay_for_business_answer'] ?? 'Gonpay for Business is a digital loyalty platform that allows companies to easily create, manage, and distribute loyalty cards and rewards directly to customers’ smartphones. It helps you increase engagement, drive repeat visits, and modernize your loyalty program.'
        ],
        [
            'question' => $translations['how_can_my_business_add_loyalty_card'] ?? 'How can my business add its loyalty card to Gonpay?',
            'answer' => $translations['add_loyalty_card_answer'] ?? 'Simply register your business through our B2B portal. Once you\'re set up, you can create your digital card by uploading your logo, setting card details, and linking your barcode or card number system. Our team can assist with integration if needed.'
        ],
        [
            'question' => $translations['api_integration_pos_system'] ?? 'Is there an API or integration available for our POS system?',
            'answer' => $translations['api_integration_answer'] ?? 'Yes, we offer API access and integration options to connect your POS system directly to your loyalty program managed in the digital Gonpay platform. This enables automatic syncing of customer points, card status, and real-time updates at checkout.'
        ],
        [
            'question' => $translations['track_customer_activity_campaign_performance'] ?? 'Can we track customer activity or campaign performance?',
            'answer' => $translations['track_activity_answer'] ?? 'Absolutely. The Gonpay Business Dashboard gives you access to real-time analytics, including customer scans, usage trends, and reward redemptions. This helps you optimize campaigns and understand customer behavior.'
        ],
        [
            'question' => $translations['how_do_customers_use_our_card_in_app'] ?? 'How do customers use our card in the app?',
            'answer' => $translations['use_card_answer'] ?? 'Customers simply download the Gonpay app, add your loyalty card by scanning or selecting it from the app, and show the barcode at checkout to collect or redeem points—just like they would with a physical card.'
        ],
        [
            'question' => $translations['cost_for_businesses_to_use_gonpay'] ?? 'Is there a cost for businesses to use Gonpay?',
            'answer' => $translations['cost_answer'] ?? 'We offer flexible pricing plans depending on your business size and needs, including options for small retailers, franchises, and enterprise partners. Contact our sales team for a custom quote.'
        ],
        [
            'question' => $translations['how_secure_is_data_shared_with_gonpay'] ?? 'How secure is the data shared with Gonpay?',
            'answer' => $translations['data_security_answer'] ?? 'Security is our top priority. We use encrypted data transmission, secure cloud storage, and GDPR-compliant practices to ensure your business and customer information is protected at all times.'
        ],
        [
            'question' => $translations['can_we_run_promotions_targeted_campaigns'] ?? 'Can we run promotions or targeted campaigns through Gonpay?',
            'answer' => $translations['promotions_campaigns_answer'] ?? 'Yes! You can create special promotions, discounts, or reward boosts targeted at specific customer segments. Notifications can be sent through the app to increase visibility and engagement.'
        ],
        [
            'question' => $translations['support_for_business_partners'] ?? 'What support is available for business partners?',
            'answer' => $translations['support_answer'] ?? 'We provide dedicated onboarding, technical support, and account management to ensure your success. Whether you\'re launching your first digital card or scaling up a national program, we\'re here to help.'
        ],
    ];
?>

    <!-- FAQ Section -->
    <?php include 'components/faq.php'; ?>




</div>

<?php include 'components/footer.php'; ?>