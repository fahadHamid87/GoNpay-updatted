<?php 
$pageTitle = 'GoNpay - Manage Your Loyalty Cards Easily';
include 'components/header.php';
?>
<?php require_once 'core/lang.php'; ?>

<div class="overflow-hidden">
    <!-- Hero Section -->
    <section class="container mx-auto px-4 sm:px-6 py-12 mt-24">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 pr-0 lg:pr-8 px-4 sm:px-0" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gonpay-dark mb-8 leading-tight">
                    <?= $translations['manage_your'] ?? "Manage Your" ?><br />
                    <span
                        class="text-gonpay-orange"><?= $translations['loyalty_cards'] ?? "Loyalty Cards" ?></span><br /><?= $translations['easily'] ?? "Easily" ?>
                </h1>
                <p class="text-gray-600 text-lg mb-10 max-w-lg">
                    <?= $translations['join_gonpay_mobile_application_and_enjoy_exclusive'] ?? "Join Gonpay mobile application and enjoy exclusive benefits. Earn points for every purchase and redeem them for discounts and special offers." ?>
                </p>
                <a class="btn-orange bg-gonpay-orange text-white font-medium py-3.5 px-10 rounded-full inline-block text-lg"
                    href="register.php"><?= $translations['sign_up_3'] ?? "Sign up" ?></a>
            </div>
            <div class="lg:w-1/2 mt-12 lg:mt-0 relative px-4 sm:px-0" data-aos="fade-left" data-aos-duration="1000">
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gonpay-orange opacity-5 rounded-full -z-10">
                </div>
                <img alt="GoNpay App Demo"
                    class="w-full max-w-lg mx-auto drop-shadow-xl transition-all duration-500 hover:scale-105"
                    src="images/hero-img.png" />
            </div>
        </div>
    </section>
    <!-- Stats Section -->
    <section class="container mx-auto mt-20 mb-16" data-aos="fade-up" data-aos-duration="1000">
        <?php include 'components/loyalty_cards.php'; ?>
    </section>
    <!-- All You Loyalty Cards Section -->
    <section class="container mx-auto px-4 sm:px-6 py-24">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 relative px-4 sm:px-0" data-aos="fade-right" data-aos-duration="1000">
                <img alt="Decorative ring" class="absolute w-full h-full object-contain z-0 ring-spin"
                    src="images/ring.png" />
                <img alt="GoNpay App Multiple Cards"
                    class="relative z-10 max-w-sm mx-auto drop-shadow-xl transition-all duration-500 hover:scale-105 float"
                    src="images/sec2.png" />
            </div>
            <div class="lg:w-1/2 mt-12 lg:mt-0 lg:pl-12 px-4 sm:px-0" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gonpay-dark mb-6 leading-tight">
                    <?= $translations['all_you_loyalty_cards'] ?? "All You Loyalty Cards" ?><br /><?= $translations['in'] ?? "In" ?><span
                        class="text-gonpay-orange"> <?= $translations['one_app'] ?? "One App" ?></span>
                </h2>
                <p class="text-gray-600 text-lg mb-10 max-w-lg">
                    <?= $translations['get_all_your_loyalty_cards_in_one_app_from_biggest'] ?? "Get all your loyalty cards in one app. From biggest supermarket to your local bakery. Organising your cards has never been so easy." ?>
                </p>
                <a class="btn-orange bg-gonpay-orange text-white font-medium py-3.5 px-10 rounded-full inline-block text-lg"
                    href="register.php"><?= $translations['sign_up_3'] ?? "Sign up" ?></a>
            </div>
        </div>
    </section>
    <!-- Stay Updated Section -->
    <section class="container mx-auto px-4 sm:px-6 py-24">
        <div class="flex flex-col-reverse lg:flex-row items-center">
            <div class="lg:w-1/2 mt-12 lg:mt-0 lg:pr-12 px-4 sm:px-0" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gonpay-dark mb-6 leading-tight">
                    <?= $translations['stay_updated_with'] ?? "Stay Updated With" ?><br />
                    <span
                        class="text-gonpay-orange"><?= $translations['special_offers_and'] ?? "Special Offers And" ?><br /><?= $translations['events'] ?? "Events" ?></span>
                </h2>
                <p class="text-gray-600 text-lg mb-10 max-w-lg">
                    <?= $translations['stay_in_touch_with_your_favorite_retailers_and_rec'] ?? "Stay in touch with your favorite retailers and receive notifications on the latest offers, events or discounts!" ?>
                </p>
                <a class="btn-orange bg-gonpay-orange text-white font-medium py-3.5 px-10 rounded-full inline-block text-lg"
                    href="register.php"><?= $translations['sign_up_3'] ?? "Sign up" ?></a>
            </div>
            <div class="lg:w-1/2 relative px-4 sm:px-0" data-aos="fade-left" data-aos-duration="1000">
                <img alt="Decorative ring" class="absolute w-full h-full object-contain z-0 ring-spin"
                    src="images/ring.png" />
                <img alt="GoNpay App Special Offers"
                    class="relative z-10 max-w-sm mx-auto drop-shadow-xl transition-all duration-500 hover:scale-105 float"
                    src="images/sec3.png" />
            </div>
        </div>
    </section>
    <!-- Features Section -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 px-4 sm:px-0" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    <?= $translations['some_excellent'] ?? "Some Excellent" ?> <span
                        class="text-gonpay-orange"><?= $translations['features_for_you'] ?? "Features For You" ?></span>
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature Card 1 -->
                <div class="bg-white py-8 px-4 rounded-lg shadow-sm text-center transition-all duration-300 hover:shadow-md hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="text-gonpay-orange text-4xl mb-4 flex justify-center">
                        <i class="fa-solid fa-bell"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3"><?= $translations['stay_updated'] ?? "Stay Updated" ?></h3>
                    <p class="text-gray-600">
                        <?= $translations['with_special_offers_and_events_receive_notificatio'] ?? "with Special Offers and Events Receive notifications about new offers, events, &amp; exciting updates." ?>
                    </p>
                </div>
                <!-- Feature Card 2 -->
                <div class="bg-white py-8 px-4 rounded-lg shadow-sm text-center transition-all duration-300 hover:shadow-md hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="text-gonpay-orange text-4xl mb-4 flex justify-center">
                        <i class="fa-solid fa-wallet"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3"><?= $translations['discounts'] ?? "Discounts" ?></h3>
                    <p class="text-gray-600">
                        <?= $translations['use_the_benefits_that_belong_to_you'] ?? "Use the benefits that belong to you" ?>
                    </p>
                </div>
                <!-- Feature Card 3 -->
                <div class="bg-white py-8 px-4 rounded-lg shadow-sm text-center transition-all duration-300 hover:shadow-md hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="text-gonpay-orange text-4xl mb-4 flex justify-center">
                        <i class="fa-solid fa-gift"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3"><?= $translations['earn_rewards'] ?? "Earn Rewards" ?></h3>
                    <p class="text-gray-600">
                        <?= $translations['with_every_your_purchase_sign_up_for_our_loyalty_a'] ?? "with Every your Purchase Sign up for our loyalty app and start earning rewards today!" ?>
                    </p>
                </div>
                <!-- Feature Card 4 -->
                <div class="bg-white py-8 px-4 rounded-lg shadow-sm text-center transition-all duration-300 hover:shadow-md hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="text-gonpay-orange text-4xl mb-4 flex justify-center">
                        <i class="fa-solid fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3"><?= $translations['mobile_and_speed'] ?? "Mobile And Speed" ?>
                    </h3>
                    <p class="text-gray-600">
                        <?= $translations['and_it_takes_seconds_to_scan_and_enjoy_all_benefit'] ?? "and it takes seconds to scan and enjoy all benefits" ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- PHP Array for Testimonials -->
    <?php
    $testimonials = [
        [
            'name' => 'Kristina P.',
            'role' => 'Student',
            'text' => $translations['kristina_p'] ?? 'Gonpay is fantastic for managing a wide variety of cards, from memberships to coupons, all in one app! It\'s a must-have for staying organized and making life easier.',
            'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
            'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'
        ],
        [
            'name' => 'Michael T.',
            'role' => 'Business Owner',
            'text' => $translations['michael_t'] ?? 'As someone who carries multiple loyalty cards, this app has been a game-changer. I no longer forget which cards I have or miss out on rewards. Highly recommended!',
            'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
            'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'
        ],
        [
            'name' => 'David R.',
            'role' => 'Software Engineer',
            'text' => $translations['david_r'] ?? 'The UI is clean and intuitive. I appreciate how easy it is to add new cards and track my rewards. The notification feature for special offers is particularly useful.',
            'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
            'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'
        ],
        [
            'name' => 'Sarah J.',
            'role' => 'Marketing Specialist',
            'text' => $translations['sarah_j'] ?? 'Gonpay has simplified my shopping experience tremendously. The app is fast, reliable, and keeps all my loyalty cards in one place. The special offers are a nice bonus!',
            'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
            'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'
        ],
        [
            'name' => 'Alex K.',
            'role' => 'Retail Manager',
            'text' => $translations['alex_k'] ?? 'From both a customer and business perspective, this app delivers. It\'s streamlined my personal loyalty cards and given me insights into customer retention for my store.',
            'image' => 'https://images.unsplash.com/photo-1569913486515-b74bf7751574?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
            'avatar' => 'https://images.unsplash.com/photo-1569913486515-b74bf7751574?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'
        ]
    ];
?>


    <!-- Testimonials Section with Swiper -->
    <section class="py-24">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0">
                    <div class="testimonial-image-container relative mx-auto" style="max-width: 400px;">
                        <!-- Swiper container for testimonial images -->
                        <div class="swiper testimonialImageSwiper rounded-full overflow-hidden border-4 border-white shadow-xl"
                            style="width: 400px; height: 400px;">
                            <div class="swiper-wrapper">
                                <?php foreach($testimonials as $index => $testimonial): ?>
                                <div class="swiper-slide">
                                    <img alt="<?= $testimonial['name'] ?>" class="w-full h-full object-cover"
                                        src="<?= $testimonial['image'] ?>" />
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-white rounded-full px-4 py-2 shadow-lg flex items-center justify-center z-10">
                            <!-- Testimonial avatars -->
                            <?php foreach($testimonials as $index => $testimonial): ?>
                            <div class="relative <?= $index > 0 ? '-ml-2' : '' ?>">
                                <img alt="<?= $testimonial['name'] ?>"
                                    class="w-8 h-8 rounded-full border-2 border-white object-cover cursor-pointer testimonial-avatar shadow-sm z-1"
                                    data-index="<?= $index ?>" src="<?= $testimonial['avatar'] ?>" />
                            </div>
                            <?php endforeach; ?>
                            <span
                                class="ml-2 text-xs font-semibold bg-gray-200 rounded-full w-6 h-6 flex items-center justify-center shadow-sm"><?= $translations['100'] ?? "+100" ?></span>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 lg:pl-16">
                    <!-- Swiper container for testimonial content -->
                    <div class="swiper testimonialContentSwiper h-full mt-12">
                        <div class="swiper-wrapper">
                            <?php foreach($testimonials as $testimonial): ?>
                            <div class="swiper-slide">
                                <div class="testimonial-content transition-opacity duration-500">
                                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                                        <?= $translations['what_our_happy'] ?? "What Our Happy" ?><br />
                                        <span
                                            class="text-gonpay-orange"><?= $translations['users_say'] ?? "Users Say" ?></span>
                                    </h2>
                                    <p class="testimonial-text text-gray-600 mb-8">
                                        <?= $testimonial['text'] ?>
                                    </p>
                                    <div class="mb-2">
                                        <h3 class="testimonial-name text-xl font-bold"><?= $testimonial['name'] ?></h3>
                                        <p class="testimonial-role text-gray-500"><?= $testimonial['role'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Custom pagination -->
                        <div class="flex space-x-2 mt-8 testimonial-pagination">
                            <?php foreach($testimonials as $index => $testimonial): ?>
                            <span class="w-3 h-3 rounded-full bg-gray-200 testimonial-dot cursor-pointer"
                                data-index="<?= $index ?>"></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="py-20 mb-16">
        <div class="container mx-auto px-6">
            <div class="bg-gonpay-orange rounded-3xl relative">
                <div class="flex flex-col lg:flex-row">
                    <div class="lg:w-1/2 p-10 lg:p-16 flex flex-col justify-center relative z-10">
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
                            <?= $translations['why_you_are_waiting_for'] ?? "Why You Are Waiting For," ?><br /><?= $translations['lets_register_now'] ?? "Let's Register Now" ?>
                        </h2>
                        <p class="text-white text-lg mb-10">
                            <?= $translations['or_download_our_app_and_start_earning_rewards_toda'] ?? "or download our app and start earning rewards today!" ?>
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a class="bg-black text-white rounded-lg flex items-center py-3 px-5 hover:opacity-90 transition duration-300"
                                href="https://play.google.com/store/apps/details?id=eu.gonpay.mobile&amp;pli=1">
                                <img alt="Google Play" class="h-8"
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/2560px-Google_Play_Store_badge_EN.svg.png" />
                            </a>
                            <a class="bg-black text-white rounded-lg flex items-center py-3 px-5 hover:opacity-90 transition duration-300"
                                href="https://apps.apple.com/lt/app/gonpay-your-mobile-wallet/id1159036102">
                                <img alt="App Store" class="h-8"
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/1280px-Download_on_the_App_Store_Badge.svg.png" />
                            </a>
                        </div>
                    </div>
                    <div
                        class="lg:w-1/2 lg:absolute lg:right-0 lg:top-1/2 lg:-translate-y-1/2 flex items-center justify-center py-8 lg:py-0">
                        <img alt="GoNpay App Login Screen"
                            class="max-w-xs lg:max-w-sm relative z-10 drop-shadow-2xl transform hover:scale-105 transition-transform duration-500"
                            src="images/sect4.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section -->
    <?php
$faqs = [
    [
        'question' => $translations['new_loyalty_card'] ?? 'How do I add a new loyalty card?',
        'answer' => $translations['new_loyalty_card_answer'] ?? 'Adding a new loyalty card is quick and easy! Just open the app, tap the "+" or "Add Card" button, then either scan the barcode on your card or enter the card number manually. You can also take a photo of the card for easy reference. Once saved, your card will be available anytime right from your phone.'
    ],
    [
        'question' => $translations['existing_loyalty_card'] ?? 'How do I view my existing loyalty cards?',
        'answer' => $translations['existing_loyalty_card_answer'] ?? 'To view your saved loyalty cards, just open the app and head to the "Cards" section. You’ll see a list of all your added cards—tap any card to view its barcode, number, and other details. It\'s like having your whole wallet in your pocket, minus the bulk!'
    ],
    [
        'question' => $translations['delete_loyalty_card'] ?? 'Can I delete a loyalty card?',
        'answer' => $translations['delete_loyalty_card_answer'] ?? 'Yes, you can delete any card whenever you like. Just go to the "Cards" section, tap on the card you want to remove, then look for the "More Options" (three dots) and afterwards "Delete". Confirm the deletion, and the card will be permanently removed from your app.'
    ],
    [
        'question' => $translations['lose_loyalty_card'] ?? 'What happens if I lose my loyalty card?',
        'answer' => $translations['lose_loyalty_card_answer'] ?? 'No worries—if you\'ve added your card to the app, you can still use it without the physical version. Just open the app, find your card, and scan the barcode at the store. If you haven’t saved it yet, you may need to contact the loyalty program provider to recover your account or get a replacement.'
    ],
    [
        'question' => $translations['loyalty_card_info'] ?? 'How do I update my loyalty card information?',
        'answer' => $translations['loyalty_card_info_answer'] ?? 'To update your card details, go to the "Cards" section and tap on the card you want to edit. Then, choose the "Edit" or pencil icon to update the card number, name, or any other info. Don’t forget to save your changes when you’re done!'
    ],
    [
        'question' => $translations['loyalty_card_redeem_earning'] ?? 'Where can I redeem my earnings?',
        'answer' => $translations['loyalty_card_redeem_earning_answer'] ??  'You can redeem your earnings directly through the app, as long as the loyalty program supports it. Just tap on the relevant card, scan the barcode, and redeem your points just like you would with a physical card. If the app redirects you to the store or brand’s website, simply follow the on-screen instructions to complete your redemption.'
    ],
];

include 'components/faq.php';
?>

</div>

<?php include 'components/footer.php'; ?>