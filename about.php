<?php 
$pageTitle = 'Caffeine Loyalty Card - GoNpay';
include 'components/header.php';
?>

<div class="overflow-hidden bg-white pb-16 mt-24">
    <!-- Hero Section with Card Display -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <!-- Left Content: Title and Description -->
                <div class="lg:w-1/2 mb-12 lg:mb-0 pr-0 lg:pr-8" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="text-4xl lg:text-5xl font-bold text-gonpay-orange mb-2 tracking-wide">
                        <a href="about.php"><?= $translations['caffeine'] ?? "CAFFEINE" ?></a>
                    </h1>
                    <h2 class="text-5xl lg:text-6xl font-bold text-gonpay-dark mb-6 tracking-tight">
                        <?= $translations['loyalty_card'] ?? "LOYALTY CARD" ?></h2>
                    <p class="text-gray-600 text-lg max-w-md">
                        <?= $translations['caffeine_loyalty_card_offers_exclusive_rewards_for'] ?? "Caffeine Loyalty Card offers exclusive rewards for frequent customers." ?>
                    </p>
                </div>
                <!-- Right Content: Card Images -->
                <div class="lg:w-1/2 relative mt-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="relative w-80 h-64 md:w-96 md:h-72 mx-auto">
                        <!-- Third Card (Bottom) -->
                        <div class="absolute w-full h-full bg-black rounded-3xl shadow-xl transform translate-x-4 -translate-y-4 z-0 border-2 border-gonpay-orange/10"
                            data-aos="zoom-in" data-aos-delay="400"
                            style="transform: rotate(24deg) translate(16px, -16px);"></div>
                        <!-- Second Card (Middle) -->
                        <div class="absolute w-full h-full bg-black rounded-3xl shadow-xl transform z-10 border-2 border-gonpay-orange/10"
                            data-aos="zoom-in" data-aos-delay="200"
                            style="transform: rotate(12deg) translate(8px, -8px);"></div>
                        <!-- Main Card (Top) -->
                        <div class="absolute w-full h-full bg-black rounded-3xl shadow-xl transform z-20 overflow-hidden border-2 border-gonpay-orange/20 float"
                            style="transform: rotate(-8deg);">
                            <img alt="Caffeine Loyalty Card" class="w-full h-full object-cover"
                                src="images/caffeine-card.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card Info Bar -->
    <section class="bg-gonpay-orange text-white py-6 mb-10">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <!-- Brand Logo and Name -->
                <div class="flex items-center mb-6 md:mb-0" data-aos="fade-right" data-aos-duration="800">
                    <div class="w-32 h-32 rounded-md overflow-hidden flex items-center justify-center mr-4">
                        <img alt="Caffeine Logo" class="object-contain" src="images/caffeine-logo.png" />
                    </div>
                    <span
                        class="font-bold text-xl tracking-wide"><?= $translations['caffeine_2'] ?? "Caffeine" ?></span>
                </div>
                <?= $translations['card_number'] ?? "Card Number" ?>
                <div class="flex items-center mb-6 md:mb-0" data-aos="fade-up" data-aos-duration="800">
                    <div>
                        <span
                            class="text-sm text-white/80 block md:inline-block mb-1 md:mb-0 md:mr-2"><?= $translations['your_card_number'] ?? "Your Card Number:" ?></span>
                        <span
                            class="font-bold text-lg tracking-wide"><?= $translations['9912_1011_3094_8000'] ?? "9912 1011 3094 8000" ?></span>
                    </div>
                </div>
                <!-- Barcode -->
                <div class="w-36 md:w-48 bg-white p-2 rounded-sm shadow-md" data-aos="fade-left"
                    data-aos-duration="800">
                    <img alt="Barcode" class="w-full h-16 object-contain" src="images/barcode.png" />
                </div>
            </div>
        </div>
    </section>
    <!-- Card Content Area -->
    <section class="py-10">
        <div class="container mx-auto px-4 sm:px-6">
            <!-- Caffeine Loyalty Card Section -->
            <div class="bg-gray-50 rounded-lg p-6" data-aos="fade-up" data-aos-duration="800">
                <!-- Header Section -->
                <div class="flex justify-between items-center mb-5">
                    <h3 class="text-2xl font-bold text-gray-900">
                        <?= $translations['caffeine_loyalty_card'] ?? "Caffeine Loyalty Card" ?></h3>
                    <div class="text-right">
                        <span class="text-base text-gray-600"><?= $translations['balance'] ?? "Balance:" ?></span>
                        <span class="text-lg font-semibold"><?= $translations['439'] ?? "4.39" ?></span>
                    </div>
                </div>
                <!-- Transaction Header -->
                <div class="flex justify-between items-center mb-4">
                    <h4 class="text-base font-medium text-gray-800">
                        <?= $translations['loyalty_card_transactions'] ?? "Loyalty Card Transactions" ?></h4>
                    <div class="flex items-center text-sm text-gray-500">
                        <span><?= $translations['filters'] ?? "Filters" ?></span>
                        <svg class="h-4 w-4 ml-1" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <!-- Transaction Table Header -->
                <div class="grid grid-cols-4 text-sm text-gray-500 px-4 py-2">
                    <div><?= $translations['date'] ?? "Date" ?></div>
                    <div><?= $translations['total_paid'] ?? "Total Paid" ?></div>
                    <div><?= $translations['received_points'] ?? "Received Points" ?></div>
                    <div class="text-right"><?= $translations['spent_points'] ?? "Spent Points" ?></div>
                </div>
                <!-- Transaction Rows -->
                <div class="space-y-1">
                    <!-- Each transaction is in a white card with shadow -->
                    <?php
                    $transactions = [
                        ['date' => 'August 15, 2024', 'paid' => '€ 0.00', 'received' => '0.00', 'spent' => '0.06'],
                        ['date' => 'August 15, 2024', 'paid' => '€ 0.00', 'received' => '0.00', 'spent' => '0.06'],
                        ['date' => 'August 15, 2024', 'paid' => '€ 0.00', 'received' => '0.00', 'spent' => '0.06'],
                        ['date' => 'August 15, 2024', 'paid' => '€ 0.00', 'received' => '0.00', 'spent' => '0.06'],
                        ['date' => 'August 15, 2024', 'paid' => '€ 0.00', 'received' => '0.00', 'spent' => '0.06'],
                        ['date' => 'August 15, 2024', 'paid' => '€ 0.00', 'received' => '0.00', 'spent' => '0.06']
                    ];
                    
                    foreach($transactions as $index => $transaction):
                        $delay = $index * 100;
                    ?>
                    <div class="bg-white rounded shadow-sm" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                        <div class="grid grid-cols-4 px-4 py-4 text-base">
                            <div class="font-semibold text-gray-900"><?php echo $transaction['date']; ?></div>
                            <div class="text-gray-800 font-medium"><?php echo $transaction['paid']; ?></div>
                            <div class="text-gray-800 font-medium"><?php echo $transaction['received']; ?></div>
                            <div class="text-gray-800 font-medium text-right"><?php echo $transaction['spent']; ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="py-10">
        <div class="container mx-auto px-4 sm:px-6">
            <!-- Offers Section -->
            <div class="bg-gray-50 p-8 rounded-xl mb-10" data-aos="fade-up" data-aos-duration="800">
                <h3 class="text-2xl font-bold text-gonpay-dark mb-6"><?= $translations['offers'] ?? "Offers" ?></h3>
                <div class="space-y-6">
                    <?php
                    // Offers data
                    $offers = [
                        [
                            'image' => 'images/clb1.png',
                            'title' => 'Keisk vienkartinį į daugkartinį – rinkis ECOFFEE CUP!',
                            'description' => '-25% nuolaida Ecoffee Cup Puodeliams!',
                            'date' => 'October 14, 2024'
                        ],
                        [
                            'image' => 'images/clb2.png',
                            'title' => 'Neliktinio skonio naujiena - Spicy Zest Latte!',
                            'description' => '',
                            'date' => 'September 04, 2024'
                        ],
                        [
                            'image' => 'images/clb3.png',
                            'title' => 'Rudens skonis – kriauŝių pyrago MATCHA',
                            'description' => 'Neliktinio skonio naujiena - Spicy Zest Latte!',
                            'date' => 'September 04, 2024'
                        ]
                    ];
                    
                    foreach($offers as $index => $offer):
                        $delay = $index * 200;
                    ?>

                    <div class="bg-white rounded-lg shadow-sm overflow-hidden p-4" data-aos="fade-up"
                        data-aos-delay="<?php echo $delay; ?>">
                        <!-- Offer Image -->
                        <div class="w-full p-4">
                            <img src="<?php echo $offer['image']; ?>" alt="<?php echo $offer['title']; ?>" class="w-full object-cover rounded-lg shadow-lg hover:scale-105 transition-all duration-500" data-aos="zoom-in" data-aos-delay="<?php echo $delay + 100; ?>">
                        </div>
                        <!-- Offer Info -->
                        <div class="flex justify-between items-center p-4">
                            <div>
                                <h4 class="font-medium text-gray-800 mb-1"><?php echo $offer['title']; ?></h4>
                                <p class="text-gray-500 text-sm"><?php echo $offer['date']; ?></p>
                            </div>
                            <!-- Vendor badge -->
                            <div class="flex-shrink-0">
                                <div class="bg-black text-white px-3 py-1.5 rounded font-medium text-sm flex items-center justify-center"
                                    style="width: 80px; height: 30px;">
                                    <span class="text-xs"><?= $translations['amazon'] ?? "amazon" ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Add navigation links to cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <a class="bg-white rounded-lg shadow-sm overflow-hidden p-4" href="eshop.php">
            <!-- existing code for card content -->
        </a>
    </div>
</div>
<!-- Make sure to include AOS JS initialization at the end of the file or in your footer -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS with custom settings
    AOS.init({
        once: false,
        offset: 100,
        duration: 800,
        easing: 'ease-in-out'
    });
});
</script>

<?php include 'components/footer.php'; ?>