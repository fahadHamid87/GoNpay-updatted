<?php 
$pageTitle = 'Gift Coupons - GoNpay';
include 'components/header.php';
?>

<div class="overflow-hidden bg-gray-50 pb-16">
    <!-- Hero Section -->
    <section class="w-full bg-gonpay-orange bg-gonpay-orange-heffect mb-10" data-aos="fade-down"
        data-aos-duration="1000">
        <div class="container mx-auto px-4 py-8 relative">
            <img alt="Gift Cards and Coupons" class="w-full max-w-4xl mx-auto h-auto object-contain"
                src="images/p5_hero.png" />
        </div>
    </section>
    <!-- Trending Stores Section -->
    <section class="container mx-auto px-4 mb-12" data-aos="fade-up" data-aos-duration="800">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg font-semibold text-gray-800"><?= $translations['trending_stores'] ?? "Trending Stores" ?>
            </h2>
            <a class="text-gray-600 text-sm hover:text-gonpay-orange transition-colors flex items-center"
                href="about.php"><?= $translations['all_stores'] ?? "ALL STORES" ?><i
                    class="fas fa-chevron-right text-xs ml-1"></i>
            </a>
        </div>
        <div class="relative bg-white rounded-lg shadow-sm py-6">
            <!-- Swiper Container -->
            <div class="swiper trendingStoresSwiper">
                <div class="swiper-wrapper">
                    <?php
                    // Store data with Unsplash images
                    $stores = [
                        ['name' => 'Fresh Grade', 'logo' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?w=200&q=80'],
                        ['name' => 'Greater', 'logo' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=200&q=80'],
                        ['name' => 'Blog', 'logo' => 'https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?w=200&q=80'],
                        ['name' => 'Macroroad', 'logo' => 'https://images.unsplash.com/photo-1518640467707-6811f4a6ab73?w=200&q=80'],
                        ['name' => 'NatureFirst', 'logo' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=200&q=80'],
                        ['name' => 'Paradise', 'logo' => 'https://images.unsplash.com/photo-1518640467707-6811f4a6ab73?w=200&q=80'],
                        ['name' => 'Gonpay', 'logo' => 'https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?w=200&q=80'],
                        ['name' => 'Shopify', 'logo' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?w=200&q=80'],
                        ['name' => 'Ebay', 'logo' => 'https://images.unsplash.com/photo-1518640467707-6811f4a6ab73?w=200&q=80'],
                        ['name' => 'Amazon', 'logo' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=200&q=80']
                    ];
                    
                    foreach ($stores as $index => $store):
                    ?>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                        <a class="flex items-center justify-center px-4 transition-transform hover:scale-105 group"
                            href="about.php">
                            <img alt="<?php echo $store['name']; ?>"
                                class="h-16 w-16 object-cover rounded-lg shadow-sm group-hover:shadow-md transition-shadow"
                                src="<?php echo $store['logo']; ?>" />
                            <span
                                class="ml-3 text-gray-700 font-medium group-hover:text-gonpay-orange transition-colors"><?php echo $store['name']; ?></span>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Navigation Buttons -->
            <button
                class="swiper-button-prev-trending absolute left-2 top-1/2 transform -translate-y-1/2 w-8 h-8 bg-white shadow-md rounded-full flex items-center justify-center text-gray-500 hover:text-gray-800 z-10 transition-all hover:shadow-lg">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button
                class="swiper-button-next-trending absolute right-2 top-1/2 transform -translate-y-1/2 w-8 h-8 bg-white shadow-md rounded-full flex items-center justify-center text-gray-500 hover:text-gray-800 z-10 transition-all hover:shadow-lg">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </section>
    <!-- Main Content Area -->
    <section class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Sidebar - Search -->
            <div class="lg:w-1/4" data-aos="fade-right" data-aos-duration="800">
                <div class="mb-8">
                    <h3 class="text-gray-800 font-semibold mb-4">
                        <?= $translations['search_coupons'] ?? "Search Coupons" ?></h3>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="mb-6">
                            <h4 class="text-gray-600 uppercase text-xs font-medium mb-4">
                                <?= $translations['search_for'] ?? "SEARCH FOR" ?></h4>
                            <div class="grid grid-cols-3 gap-3">
                                <div
                                    class="flex flex-col items-center bg-gray-50 rounded-lg p-3 cursor-pointer hover:bg-gray-100 transition-colors border border-transparent hover:border-gray-200">
                                    <div class="w-8 h-8 flex items-center justify-center mb-2">
                                        <i class="fas fa-gift text-gray-600"></i>
                                    </div>
                                    <span
                                        class="text-xs text-gray-600 text-center"><?= $translations['gift_cards'] ?? "GIFT CARDS" ?></span>
                                </div>
                                <div
                                    class="flex flex-col items-center bg-gray-50 rounded-lg p-3 cursor-pointer hover:bg-gray-100 transition-colors border border-transparent hover:border-gray-200">
                                    <div class="w-8 h-8 flex items-center justify-center mb-2">
                                        <i class="fas fa-ticket-alt text-gray-600"></i>
                                    </div>
                                    <span
                                        class="text-xs text-gray-600 text-center"><?= $translations['coupons'] ?? "Coupons" ?></span>
                                </div>
                                <div
                                    class="flex flex-col items-center bg-gray-50 rounded-lg p-3 cursor-pointer hover:bg-gray-100 transition-colors border border-transparent hover:border-gray-200">
                                    <div class="w-8 h-8 flex items-center justify-center mb-2">
                                        <i class="fas fa-clock text-gray-600"></i>
                                    </div>
                                    <span
                                        class="text-xs text-gray-600 text-center"><?= $translations['online_sales'] ?? "ONLINE SALES" ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h4 class="text-gray-600 uppercase text-xs font-medium mb-4">
                                <?= $translations['keyword'] ?? "KEYWORD" ?></h4>
                            <div class="mb-6">
                                <div class="relative">
                                    <input
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-transparent"
                                        placeholder="Search..." type="text" />
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <i class="fas fa-search text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div>
                                    <label
                                        class="text-gray-600 uppercase text-xs font-medium mb-2 block"><?= $translations['category'] ?? "CATEGORY" ?></label>
                                    <div class="relative">
                                        <select
                                            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm appearance-none bg-white focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-transparent">
                                            <option><?= $translations['select'] ?? "- Select -" ?></option>
                                            <option><?= $translations['food_beverage'] ?? "Food &amp; Beverage" ?>
                                            </option>
                                            <option><?= $translations['fashion'] ?? "Fashion" ?></option>
                                            <option><?= $translations['electronics'] ?? "Electronics" ?></option>
                                            <option><?= $translations['home_garden'] ?? "Home &amp; Garden" ?></option>
                                        </select>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <i class="fas fa-chevron-down text-xs"></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label
                                        class="text-gray-600 uppercase text-xs font-medium mb-2 block"><?= $translations['store'] ?? "STORE" ?></label>
                                    <div class="relative">
                                        <select
                                            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm appearance-none bg-white focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-transparent">
                                            <option><?= $translations['select'] ?? "- Select -" ?></option>
                                            <option><?= $translations['fresh_grade'] ?? "Fresh Grade" ?></option>
                                            <option><?= $translations['greater'] ?? "Greater" ?></option>
                                            <option><?= $translations['blog'] ?? "Blog" ?></option>
                                            <option><?= $translations['macroroad'] ?? "Macroroad" ?></option>
                                            <option><?= $translations['naturefirst'] ?? "NatureFirst" ?></option>
                                        </select>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <i class="fas fa-chevron-down text-xs"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="w-full bg-gonpay-orange bg-gonpay-orange-heffect text-white font-medium py-3.5 px-10 rounded-full inline-block text-lg hover:bg-gonpay-orange-dark transition-colors">
                                <i class="fas fa-search mr-2"></i><?= $translations['search'] ?? "Search" ?></button>
                        </div>
                    </div>
                </div>
                <!-- Submit Coupons -->
                <div
                    class="bg-gonpay-orange bg-gonpay-orange-heffect rounded-lg p-6 text-center mb-8 relative overflow-hidden">
                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-white bg-opacity-10 rounded-full"></div>
                    <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-white bg-opacity-5 rounded-full"></div>
                    <div
                        class="w-20 h-20 bg-white bg-opacity-20 rounded-full mx-auto flex items-center justify-center mb-4 relative z-10">
                        <i class="fas fa-tag text-white text-4xl"></i>
                    </div>
                    <h3 class="text-white font-bold text-xl uppercase mb-4 relative z-10">
                        <?= $translations['submit_coupons'] ?? "SUBMIT COUPONS!" ?></h3>
                    <p class="text-white text-sm mb-4 relative z-10">
                        <?= $translations['promote_your_business'] ?? "Promote Your Business" ?></p>
                    <a class="bg-white text-gonpay-orange font-medium py-2 px-6 rounded-full inline-block hover:bg-gray-100 transition-colors relative z-10 shadow-md hover:shadow-lg"
                        href="#"><?= $translations['learn_more'] ?? "Learn More" ?></a>
                </div>
                <?= $translations['latest_coupons'] ?? "Latest Coupons" ?>
                <div class="bg-white rounded-lg shadow-sm p-4 mb-6 hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-2">
                        <div class="w-10 h-10 bg-gonpay-orange rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-bolt text-white"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800">
                                <?= $translations['latest_coupons'] ?? "Latest Coupons" ?></h3>
                            <p class="text-xs text-gray-500">
                                <?= $translations['we_have_all_the_coupons_first'] ?? "We have all the coupons first" ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?= $translations['fresh_updates'] ?? "Fresh Updates" ?>
                <div class="bg-white rounded-lg shadow-sm p-4 hover:shadow-md transition-shadow">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gonpay-orange rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-sync-alt text-white"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800"><?= $translations['fresh_updates'] ?? "Fresh Updates" ?>
                            </h3>
                            <p class="text-xs text-gray-500">
                                <?= $translations['coupons_are_updated_regularly'] ?? "Coupons are updated regularly" ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Content - Coupons -->
            <div class="lg:w-3/4" data-aos="fade-left" data-aos-duration="800">
                <!-- Coupon Tabs -->
                <div class="mb-6 flex">
                    <a class="bg-gonpay-orange text-white py-2 px-4 rounded-l-lg flex items-center" href="#">
                        <i class="fas fa-gift mr-2"></i><?= $translations['gift_cards_2'] ?? "Gift Cards" ?></a>
                    <a class="bg-white text-gray-600 py-2 px-4 rounded-r-lg flex items-center border-t border-r border-b border-gray-200 hover:bg-gray-50 transition-colors"
                        href="#">
                        <i class="fas fa-ticket-alt mr-2"></i><?= $translations['coupons'] ?? "Coupons" ?></a>
                </div>
                <!-- Coupons List -->
                <div class="space-y-6">
                    <?php
                    // Coupons data
                    $coupons = [
                        [
                            'title' => 'Gift Voucher',
                            'description' => 'Šios kortelės gali būti papildomos tik nurodyta pinigų suma ... ',
                            'date' => 'November 14, 2338',
                            'image' => 'https://images.unsplash.com/photo-1549465220-1a8b9238cd48?w=500&q=80'
                        ],
                        [
                            'title' => 'Gift Voucher',
                            'description' => 'Šios kortelės gali būti papildomos tik nurodyta pinigų suma ... ',
                            'date' => 'November 14, 2338',
                            'image' => 'https://images.unsplash.com/photo-1561715276-a2d087060f1d?w=500&q=80'
                        ],
                        
                        [
                            'title' => 'Gift Voucher',
                            'description' => 'Šios kortelės gali būti papildomos tik nurodyta pinigų suma ... ',
                            'date' => 'November 14, 2338',
                            'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=500&q=80'
                        ],
                        [
                            'title' => 'Gift Voucher',
                            'description' => 'Šios kortelės gali būti papildomos tik nurodyta pinigų suma ... ',
                            'date' => 'November 14, 2338',
                            'image' => 'https://images.unsplash.com/photo-1549465220-1a8b9238cd48?w=500&q=80'
                        ],
                        [
                            'title' => 'Gift Voucher',
                            'description' => 'Šios kortelės gali būti papildomos tik nurodyta pinigų suma ... ',
                            'date' => 'November 14, 2338',
                            'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=500&q=80'
                        ]
                    ];
                    
                    // Generate coupons list
                    foreach ($coupons as $index => $coupon):
                    ?>
                    <div class="bg-white rounded-lg shadow-sm p-0 hover:shadow-md transition-shadow relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>" data-aos-duration="800">
                        <!-- Coupon Content -->
                        <div class="flex flex-col md:flex-row items-center justify-between">
                            <!-- Coupon Image -->
                            <div class="md:w-1/6 p-4">
                                <img alt="Gift Cards" class="w-full rounded-lg shadow-sm"
                                    src="<?php echo $coupon['image']; ?>" />
                            </div>
                            <!-- Coupon Info -->
                            <div class="md:w-3/6 p-4 md:pl-0">
                                <h3 class="font-bold text-lg text-gray-800 mb-2"><?php echo $coupon['title']; ?></h3>
                                <p class="text-gray-600 text-sm mb-2">
                                    <?php echo $coupon['description']; ?>
                                    <a class="text-gonpay-orange font-medium hover:underline"
                                        href="#"><?= $translations['read_more'] ?? "Read More" ?></a>
                                </p>
                            </div>
                            <!-- Date and CTA -->
                            <div
                                class="md:w-2/6 bg-gray-50 md:bg-white p-4 flex flex-col justify-between w-full md:w-auto">
                                <div class="flex items-center text-gray-500 mb-4">
                                    <i class="far fa-clock mr-2"></i>
                                    <span class="text-sm"><?php echo $coupon['date']; ?></span>
                                </div>
                                <button
                                    class="bg-gonpay-orange text-white font-medium py-3 px-8 rounded-full hover:bg-gonpay-orange-dark transition-colors shadow-sm hover:shadow-md w-full md:w-auto"><?= $translations['buy_coupon'] ?? "Buy Coupon" ?></button>
                            </div>
                        </div>
                        <!-- Social Actions -->
                        <div class="border-t border-gray-100 flex justify-end p-2 space-x-2">
                            <button class="hover:text-gonpay-orange transition-colors p-1">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="hover:text-gonpay-orange transition-colors p-1">
                                <i class="far fa-comment"></i>
                            </button>
                            <button class="hover:text-gonpay-orange transition-colors p-1">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- Pagination -->
                <div class="mt-10 flex justify-center">
                    <div class="flex items-center space-x-2">
                        <a class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition-colors"
                            href="#">
                            <i class="fas fa-angle-double-left text-xs"></i>
                        </a>
                        <a class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition-colors"
                            href="#">
                            <i class="fas fa-angle-left text-xs"></i>
                        </a>
                        <a class="w-8 h-8 rounded-full border bg-gonpay-orange text-white border-gonpay-orange flex items-center justify-center"
                            href="#"><?= $translations['1'] ?? "1" ?></a>
                        <a class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition-colors"
                            href="#"><?= $translations['2'] ?? "2" ?></a>
                        <a class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition-colors"
                            href="#"><?= $translations['3'] ?? "3" ?></a>
                        <a class="text-gray-500" href="#"><?= $translations['_3'] ?? "..." ?></a>
                        <a class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition-colors"
                            href="#"><?= $translations['10'] ?? "10" ?></a>
                        <a class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition-colors"
                            href="#">
                            <i class="fas fa-angle-right text-xs"></i>
                        </a>
                        <a class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition-colors"
                            href="#">
                            <i class="fas fa-angle-double-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Additional CSS for specific improvements -->
<style>
/* Enhanced gift card display */
.coupon-item {
    transition: all 0.3s ease;
}

.coupon-item:hover {
    transform: translateY(-3px);
}

/* Orange button glow effect */
.bg-gonpay-orange-heffect {
    position: relative;
    overflow: hidden;
}

.bg-gonpay-orange-heffect:hover:after {
    content: '';
    position: absolute;
    top: -10%;
    left: -10%;
    width: 120%;
    height: 120%;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    transform: scale(0);
    animation: ripple 0.6s linear;
    z-index: 1;
}

@keyframes ripple {
    0% {
        transform: scale(0);
        opacity: 1;
    }

    100% {
        transform: scale(1);
        opacity: 0;
    }
}
</style>
<!-- Start Your Journey CTA Section -->
<section class="container mx-auto px-4 sm:px-6 py-20">
    <?php include 'components/journey_cta.php'; ?>
</section>
<!-- FAQ Section -->
<?php include 'components/faq.php'; ?>

<!-- Initialize Swiper -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const trendingStoresSwiper = new Swiper('.trendingStoresSwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next-trending',
            prevEl: '.swiper-button-prev-trending',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
            1280: {
                slidesPerView: 5,
            }
        }
    });
});
</script>
<!-- Initialize AOS -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS with custom settings
    AOS.init({
        duration: 800,
        once: true,
        offset: 100,
        easing: 'ease-in-out'
    });
});
</script>



<?php include 'components/footer.php'; ?>