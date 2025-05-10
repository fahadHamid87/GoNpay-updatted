<?php 
$pageTitle = 'User Profile - GoNpay';
include 'components/header.php';
?>

<div class="min-h-screen bg-gray-50 pb-16">
    <!-- Profile Header Section - Complete redesign to match reference image -->
    <div class="relative" data-aos="fade-down" data-aos-duration="1000">
        <!-- Banner background -->
        <div class="w-full h-80 bg-gonpay-orange overflow-hidden">
            <img alt="Banner" class="w-full h-full object-cover opacity-50" src="images/dash_banner.png" />
            <!-- Diagonal gradient pattern overlay -->
            <!-- <div class="w-full h-full" style="background: linear-gradient(45deg, #ffab00, #ff7800); background-image: linear-gradient(135deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.1) 50%, rgba(255,255,255,0.1) 75%, transparent 75%, transparent); background-size: 120px 120px;"></div> -->
            <div class="absolute top-4 right-4 flex space-x-4">
                <a class="bg-white text-gonpay-orange px-6 py-2 rounded-full hover:bg-gray-100 transition-colors"
                    href="edit_profile.php"><?= $translations['edit_profile'] ?? "Edit Profile" ?></a>
                <a class="bg-white text-gonpay-orange px-6 py-2 rounded-full hover:bg-gray-100 transition-colors"
                    href="settings.php"><?= $translations['settings'] ?? "Settings" ?></a>
                <a class="bg-white text-red-500 px-6 py-2 rounded-full hover:bg-gray-100 transition-colors"
                    href="logout.php"><?= $translations['logout'] ?? "Logout" ?></a>
            </div>
        </div>
        <!-- White section below banner -->
        <div class="w-full bg-white pb-6">
            <!-- Profile content container -->
            <div class="container mx-auto px-4 relative">
                <!-- Profile picture - positioned to be half in banner, half below -->
                <div
                    class="absolute -top-20 left-12 w-40 h-40 rounded-full border-4 border-white shadow-md overflow-hidden">
                    <img alt="John Doe" class="w-full h-full object-cover"
                        src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=200&amp;h=200&amp;q=80" />
                </div>
                <!-- Profile info and edit button - positioned next to profile picture -->
                <div class="pt-4 pl-48 flex justify-between items-center">
                    <div>
                        <div class="flex items-center">
                            <h1 class="text-3xl font-bold text-gonpay-dark mr-2">
                                <?= $translations['john_doe'] ?? "John Doe" ?></h1>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-gonpay-orange">
                                <svg class="h-5 w-5 text-gonpay-orange" fill="none" stroke="currentColor"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 11c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2z"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    <path d="M12 22s8-6.5 8-12a8 8 0 10-16 0c0 5.5 8 12 8 12z" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                            </span>
                            <p class="text-gray-600 mt-1"><?= $translations['new_york_usa'] ?? "New York, USA" ?></p>
                        </div>
                    </div>
                    <a class="bg-white border border-gonpay-orange text-gonpay-orange px-5 py-2 rounded-full text-sm font-medium hover:bg-gonpay-orange hover:text-white transition-all duration-300"
                        href="edit_profile.php">
                        <i class="fas fa-pencil-alt mr-1"></i><?= $translations['edit_profile'] ?? "Edit Profile" ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick Links -->
    <div class="container mx-auto px-4 mt-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-all" href="#!"
                onclick="scrollToLoyaltyCards()">
                <h3 class="font-bold text-xl mb-2"><?= $translations['my_cards'] ?? "My Cards" ?></h3>
                <p class="text-gray-600">
                    <?= $translations['view_and_manage_your_loyalty_cards'] ?? "View and manage your loyalty cards" ?>
                </p>
            </a>
            <a class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-all" href="eshop.php">
                <h3 class="font-bold text-xl mb-2"><?= $translations['gift_shop'] ?? "Gift Shop" ?></h3>
                <p class="text-gray-600">
                    <?= $translations['browse_available_gift_cards_and_offers'] ?? "Browse available gift cards and offers" ?>
                </p>
            </a>
            <a class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-all" href="rewards.php">
                <h3 class="font-bold text-xl mb-2"><?= $translations['my_rewards'] ?? "My Rewards" ?></h3>
                <p class="text-gray-600">
                    <?= $translations['check_your_points_and_rewards'] ?? "Check your points and rewards" ?></p>
            </a>
        </div>
    </div>
    <!-- Main Content Section -->
    <div class="bg-gray-50 py-8">
        <div class="container mx-auto px-4">
            <!-- Profile Details Card -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-8" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-xl font-bold text-gonpay-dark mb-6"><?= $translations['profile'] ?? "Profile" ?></h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">
                                <?= $translations['first_name_2'] ?? "First Name:" ?></h3>
                            <p class="text-gonpay-dark"><?= $translations['john'] ?? "John" ?></p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">
                                <?= $translations['birth_date_2'] ?? "Birth Date:" ?></h3>
                            <p class="text-gonpay-dark"><?= $translations['august_23_2004'] ?? "August 23, 2004" ?></p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">
                                <?= $translations['address_2'] ?? "Address:" ?></h3>
                            <p class="text-gonpay-dark">
                                <?= $translations['123_5th_ave_apt_4b'] ?? "123 5th Ave Apt 4B" ?></p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">
                                <?= $translations['last_name_2'] ?? "Last Name:" ?></h3>
                            <p class="text-gonpay-dark"><?= $translations['doe'] ?? "Doe" ?></p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">
                                <?= $translations['country_2'] ?? "Country:" ?></h3>
                            <p class="text-gonpay-dark"><?= $translations['united_states'] ?? "United States" ?></p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500"><?= $translations['city_2'] ?? "City:" ?></h3>
                            <p class="text-gonpay-dark"><?= $translations['new_york'] ?? "New York" ?></p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500"><?= $translations['gender_2'] ?? "Gender:" ?>
                            </h3>
                            <p class="text-gonpay-dark"><?= $translations['male'] ?? "Male" ?></p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">
                                <?= $translations['postal_code_2'] ?? "Postal Code:" ?></h3>
                            <p class="text-gonpay-dark"><?= $translations['ny_10022'] ?? "NY 10022" ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Favorite Cards Section -->
            <div class="mb-8 bg-white rounded-lg shadow-sm p-6" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-xl font-bold text-gonpay-dark mb-6">
                    <?= $translations['favorite_cards'] ?? "Favorite Cards" ?></h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
                    <?php
                    // Card data - Using Unsplash links that match the screenshot brands
                    $favoriteCards = [
                        [
                            'name' => 'Amazon Loyalty Card',
                            'image' => 'images/amazon.png',
                            'description' => 'Lorem ipsum dolor sit amet'
                        ],
                        [
                            'name' => 'Starbucks Loyalty Card',
                            'image' => 'images/starbuck.png',
                            'description' => 'Lorem ipsum dolor sit amet'
                        ],
                        [
                            'name' => 'Walmart Loyalty Card',
                            'image' => 'images/walmart.png',
                            'description' => 'Lorem ipsum dolor sit amet'
                        ],
                        [
                            'name' => 'Amazon Loyalty Card',
                            'image' => 'images/amazon.png',
                            'description' => 'Lorem ipsum dolor sit amet'
                        ],
                        [
                            'name' => 'Starbucks Loyalty Card',
                            'image' => 'images/starbuck.png',
                            'description' => 'Lorem ipsum dolor sit amet'
                        ],
                        [
                            'name' => 'Walmart Loyalty Card',
                            'image' => 'images/walmart.png',
                            'description' => 'Lorem ipsum dolor sit amet'
                        ]
                    ];
                    
                    foreach($favoriteCards as $index => $card):
                    ?>
                    <a class="bg-gray-100 rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-md"
                        data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>" data-aos-duration="800"
                        href="about.php">
                        <div class="h-40 overflow-hidden">
                            <img alt="<?php echo $card['name']; ?>" class="w-full h-full object-cover"
                                src="<?php echo $card['image']; ?>" />
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-gonpay-dark mb-1"><?php echo $card['name']; ?></h3>
                            <p class="text-gray-500 text-sm"><?php echo $card['description']; ?></p>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- All Loyalty Cards Section -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-8" data-aos="fade-up" data-aos-duration="800"
                id="All-LoyaltyCards">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gonpay-dark">
                        <?= $translations['all_loyalty_cards'] ?? "All Loyalty Cards" ?></h2>
                    <button
                        class="bg-gonpay-orange text-white px-5 py-2 rounded-full text-sm font-medium hover:bg-gonpay-orange-dark transition-all duration-300"
                        id="openLoyaltyModal"><?= $translations['add_card'] ?? "Add Card" ?></button>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="text-left text-gray-500 border-b border-gray-200">
                                <th class="py-3 px-4 font-medium"><?= $translations['card'] ?? "Card" ?></th>
                                <th class="py-3 px-4 font-medium"><?= $translations['card_number'] ?? "Card Number" ?>
                                </th>
                                <!--<th class="py-3 px-4 font-medium">Available offers</th>-->
                                <th class="py-3 px-4 font-medium text-right">
                                    <?= $translations['actions'] ?? "Actions" ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Loyalty cards data
                            $loyaltyCards = [
                                [
                                    'name' => 'Amazon Loyalty Card',
                                    'number' => '**** **** **** 7086',
                                    // 'offers' => '59% Off',
                                    'icon' => 'amazon'
                                ],
                                [
                                    'name' => 'Starbucks Loyalty Card',
                                    'number' => '**** **** **** 7086',
                                    // 'offers' => '59% Off',
                                    'icon' => 'coffee'
                                ],
                                [
                                    'name' => 'Walmart Loyalty Card',
                                    'number' => '**** **** **** 7086',
                                    // 'offers' => '59% Off',
                                    'icon' => 'shopping-cart'
                                ]
                            ];
                            
                            foreach($loyaltyCards as $card):
                                $iconClass = '';
                                $iconColor = '';
                                
                                if($card['icon'] == 'amazon') {
                                    $iconColor = 'text-gray-800';
                                    $iconClass = 'fab fa-amazon';
                                }
                                else if($card['icon'] == 'coffee') {
                                    $iconColor = 'text-green-600';
                                    $iconClass = 'fas fa-coffee';
                                }
                                else if($card['icon'] == 'shopping-cart') {
                                    $iconColor = 'text-blue-500';
                                    $iconClass = 'fas fa-shopping-cart';
                                }
                            ?>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-4 px-4">
                                    <div class="flex items-center">
                                        <span
                                            class="w-8 h-8 flex items-center justify-center rounded-full mr-3 <?php echo $iconColor; ?>">
                                            <i class="<?php echo $iconClass; ?>"></i>
                                        </span>
                                        <span class="font-medium text-gonpay-dark"><?php echo $card['name']; ?></span>
                                    </div>
                                </td>
                                <td class="py-4 px-4"><?php echo $card['number']; ?></td>
                                <!--<td class="py-4 px-4"><?php echo $card['offers']; ?></td>-->
                                <td class="py-4 px-4 text-right">
                                    <button
                                        class="bg-red-100 text-red-500 font-medium px-4 py-1 rounded-full text-sm hover:bg-red-500 hover:text-white transition-all duration-300"><?= $translations['delete'] ?? "Delete" ?></button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Add Loyalty Card Modal -->
            <div class="fixed inset-0 z-50 hidden overflow-y-auto" id="loyaltyCardModal">
                <div class="flex items-center justify-center min-h-screen p-4">
                    <!-- Modal backdrop -->
                    <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity" id="loyaltyModalBackdrop">
                    </div>
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-xl w-full max-w-[780px] mx-auto">
                        <!-- Modal header -->
                        <div class="px-6 pt-6 pb-4 text-center relative">
                            <h3 class="text-2xl font-bold text-gray-900">
                                <?= $translations['add_loyalty_card'] ?? "Add Loyalty Card" ?></h3>
                            <p class="text-sm text-gray-600 mt-1">
                                <?= $translations['add_your_loyalty_card_today_and_enjoy_instant_rewa'] ?? "Add Your Loyalty Card Today And Enjoy Instant Rewards!" ?><br /><?= $translations['collect_points_get_exclusive_discounts'] ?? "Collect Points, Get Exclusive Discounts." ?>
                            </p>
                            <button
                                class="absolute top-4 right-4 bg-white rounded-full p-1 inline-flex items-center justify-center text-gray-800 hover:text-gray-500"
                                id="closeLoyaltyModal">
                                <!-- X icon SVG -->
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Loyalty Card Selection Section -->
                        <div class="px-8 pb-8">
                            <div class="flex justify-between items-center mb-4">
                                <h4 class="text-sm font-semibold text-gray-800">
                                    <?= $translations['select_card'] ?? "Select Card" ?></h4>
                                <!-- Search input -->
                                <div class="relative">
                                    <input
                                        class="pl-9 pr-4 py-2 w-64 bg-gray-100 border-none rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-gonpay-orange"
                                        placeholder="Search here..." type="text" />
                                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Loyalty Cards Grid -->
                            <div class="grid grid-cols-3 gap-4 mb-4">
                                <!-- Card 1 -->
                                <div
                                    class="loyalty-card-option cursor-pointer rounded-2xl overflow-hidden border-2 border-transparent hover:border-gonpay-orange">
                                    <img alt="Blossom &amp; Bloom Loyalty Card" class="w-full h-auto rounded-2xl"
                                        src="images/lc1.png" />
                                </div>
                                <!-- Card 2 -->
                                <div
                                    class="loyalty-card-option cursor-pointer rounded-2xl overflow-hidden border-2 border-transparent hover:border-gonpay-orange">
                                    <img alt="Colorful Loyalty Club Card" class="w-full h-auto rounded-2xl"
                                        src="images/lc2.png" />
                                </div>
                                <!-- Card 3 -->
                                <div
                                    class="loyalty-card-option cursor-pointer rounded-2xl overflow-hidden border-2 border-transparent hover:border-gonpay-orange">
                                    <img alt="Cafe Loyalty Card" class="w-full h-auto rounded-2xl"
                                        src="images/lc3.png" />
                                </div>
                                <!-- Card 4 -->
                                <div
                                    class="loyalty-card-option cursor-pointer rounded-2xl overflow-hidden border-2 border-transparent hover:border-gonpay-orange selected">
                                    <img alt="Premium Gold Loyalty Card" class="w-full h-auto rounded-2xl"
                                        src="images/lc4.png" />
                                </div>
                                <!-- Card 5 -->
                                <div
                                    class="loyalty-card-option cursor-pointer rounded-2xl overflow-hidden border-2 border-transparent hover:border-gonpay-orange">
                                    <img alt="Gold Wave Loyalty Card" class="w-full h-auto rounded-2xl"
                                        src="images/lc5.png" />
                                </div>
                                <!-- Card 6 -->
                                <div
                                    class="loyalty-card-option cursor-pointer rounded-2xl overflow-hidden border-2 border-transparent hover:border-gonpay-orange">
                                    <img alt="Coffee Loyalty Card" class="w-full h-auto rounded-2xl"
                                        src="images/lc6.png" />
                                </div>
                            </div>
                            <!-- View More Button -->
                            <div class="flex justify-center mb-6">
                                <button
                                    class="bg-orange-100 text-orange-500 px-6 py-2 rounded-full text-sm font-medium hover:bg-orange-200 transition-all duration-300"><?= $translations['view_more'] ?? "View More" ?></button>
                            </div>
                           <!-- Card Details Form -->
                            <form id="loyaltyCardForm" class="space-y-4">
                                <div class="grid grid-cols-3 gap-4">
                                    <!-- Card Name -->
                                    <div>
                                        <label for="cardName" class="block text-xs font-medium text-gray-500 mb-1">
                                            <?= $translations['card_name'] ?? "Card Name" ?>
                                        </label>
                                        <input type="text" id="cardName" name="cardName" value="Amazon Loyalty Card"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-gonpay-orange">
                                    </div>

                                    <!-- Card Number -->
                                    <div>
                                        <label for="cardNumber" class="block text-xs font-medium text-gray-500 mb-1">
                                            <?= $translations['card_number'] ?? "Card Number" ?>
                                        </label>
                                        <input type="text" id="cardNumber" name="cardNumber" value="9512 5630 9952 8418"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-gonpay-orange">
                                    </div>

                                    <!-- Barcode -->
                                    <div>
                                        <label for="barcode" class="block text-xs font-medium text-gray-500 mb-1">
                                            <?= $translations['enter_barcode'] ?? "Enter Barcode" ?>
                                        </label>
                                        <input type="text" id="barcode" name="barcode" value="515681555156851"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-gonpay-orange">
                                    </div>
                                </div>

                                <!-- Description -->
                                <div>
                                    <label for="description" class="block text-xs font-medium text-gray-500 mb-1">
                                        <?= $translations['description'] ?? "Description" ?>
                                    </label>
                                    <textarea id="description" name="description" rows="4"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-gonpay-orange"><?= $translations['xyz'] ?? "xyz..." ?></textarea>
                                </div>

                                <!-- Save button -->
                                <div class="flex justify-end pt-2">
                                    <button type="submit"
                                        class="w-32 bg-orange-500 hover:bg-orange-600 text-white font-medium py-3 px-4 rounded-full transition-colors duration-200">
                                        <?= $translations['save'] ?? "Save" ?>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <style>
            /* Custom styling for loyalty card selection */
            .loyalty-card-option {
                transition: all 0.2s ease-in-out;
                aspect-ratio: 16/10;
                padding: 4px;
                /* Added padding to show border properly */
                background: white;
                /* Added white background */
            }

            .loyalty-card-option:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            }

            .loyalty-card-option.selected {
                border-color: #FF6B00 !important;
                box-shadow: 0 10px 15px -3px rgba(255, 107, 0, 0.2), 0 4px 6px -2px rgba(255, 107, 0, 0.1);
            }

            .loyalty-card-option img {
                transition: all 0.2s ease-in-out;
            }

            .loyalty-card-option:hover img {
                transform: scale(1.02);
            }
            </style>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const modal = document.getElementById('loyaltyCardModal');
                const openModalBtn = document.getElementById('openLoyaltyModal');
                const closeModalBtn = document.getElementById('closeLoyaltyModal');
                const modalBackdrop = document.getElementById('loyaltyModalBackdrop');
                const loyaltyCards = document.querySelectorAll('.loyalty-card-option');

                // Open modal
                openModalBtn.addEventListener('click', function() {
                    modal.classList.remove('hidden');
                    document.body.classList.add('overflow-hidden');
                });

                // Close modal functions
                const closeModal = function() {
                    modal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                };

                closeModalBtn.addEventListener('click', closeModal);
                modalBackdrop.addEventListener('click', closeModal);

                // Prevent closing when clicking inside the modal content
                modal.querySelector('.relative').addEventListener('click', function(event) {
                    event.stopPropagation();
                });

                // Select loyalty card
                loyaltyCards.forEach(card => {
                    card.addEventListener('click', function() {
                        // Remove selected class from all cards
                        loyaltyCards.forEach(c => c.classList.remove('selected'));
                        // Add selected class to clicked card
                        this.classList.add('selected');
                    });
                });

                // Handle form submission
                document.getElementById('loyaltyCardForm').addEventListener('submit', function(event) {
                    event.preventDefault();
                    closeModal();
                    // Additional logic to save the loyalty card would go here
                });
            });
            </script>
            <!-- Payment Cards Section -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-8" data-aos="fade-up" data-aos-duration="800">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gonpay-dark">
                        <?= $translations['payment_cards'] ?? "Payment Cards" ?></h2>
                    <button
                        class="bg-gonpay-orange text-white px-5 py-2 rounded-full text-sm font-medium hover:bg-gonpay-orange-dark transition-all duration-300"
                        id="openAddCardModal"><?= $translations['add_card'] ?? "Add Card" ?></button>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="text-left text-gray-500 border-b border-gray-200">
                                <th class="py-3 px-4 font-medium"><?= $translations['select_2'] ?? "Select" ?></th>
                                <th class="py-3 px-4 font-medium"><?= $translations['card'] ?? "Card" ?></th>
                                <th class="py-3 px-4 font-medium"><?= $translations['card_number'] ?? "Card Number" ?>
                                </th>
                                <th class="py-3 px-4 font-medium"><?= $translations['expire'] ?? "Expire" ?></th>
                                <th class="py-3 px-4 font-medium text-right">
                                    <?= $translations['actions'] ?? "Actions" ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Payment cards data - Using cards shown in the screenshot
                            $paymentCards = [
                                [
                                    'name' => 'Master Card',
                                    'number' => '**** **** **** 7086',
                                    'expire' => '06/24',
                                    'icon' => 'cc-mastercard'
                                ],
                                [
                                    'name' => 'Master Card',
                                    'number' => '**** **** **** 7086',
                                    'expire' => '06/24',
                                    'icon' => 'cc-visa'
                                ],
                                [
                                    'name' => 'Master Card',
                                    'number' => '**** **** **** 7086',
                                    'expire' => '06/24',
                                    'icon' => 'cc-stripe'
                                ]
                            ];
                            
                            foreach($paymentCards as $index => $card):
                                $iconColor = '';
                                if($card['icon'] == 'cc-mastercard') $iconColor = 'text-red-500';
                                else if($card['icon'] == 'cc-visa') $iconColor = 'text-blue-600';
                                else if($card['icon'] == 'cc-stripe') $iconColor = 'text-purple-500';
                                
                                // Add a class for the selected row
                                $rowClass = $index === 0 ? 'bg-orange-50' : '';
                            ?>
                            <tr class="border-b border-gray-100 hover:bg-gray-50 cursor-pointer <?php echo $rowClass; ?>"
                                onclick="selectRow(this, <?php echo $index; ?>)">
                                <td class="py-4 px-4">
                                    <input
                                        class="form-radio h-4 w-4 text-gonpay-orange border-gray-300 focus:ring-gonpay-orange"
                                        id="card_<?php echo $index; ?>" name="selected_card" type="radio"
                                        value="<?php echo $index; ?>" <?php echo $index === 0 ? 'checked' : ''; ?>>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center">
                                        <span
                                            class="w-8 h-8 flex items-center justify-center rounded-full mr-3 <?php echo $iconColor; ?>">
                                            <i class="fab fa-<?php echo $card['icon']; ?>"></i>
                                        </span>
                                        <span class="font-medium text-gonpay-dark"><?php echo $card['name']; ?></span>
                                    </div>
                                </td>
                                <td class="py-4 px-4 text-gray-600"><?php echo $card['number']; ?></td>
                                <td class="py-4 px-4 text-gray-600"><?php echo $card['expire']; ?></td>
                                <td class="py-4 px-4 text-right">
                                    <button
                                        class="bg-red-100 text-red-500 font-medium px-4 py-1 rounded-full text-sm hover:bg-red-500 hover:text-white transition-all duration-300"
                                        onclick="event.stopPropagation()"><?= $translations['delete'] ?? "Delete" ?></button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Add Card Modal -->
            <div class="fixed inset-0 z-50 hidden overflow-y-auto" id="addCardModal">
                <div class="flex items-center justify-center min-h-screen p-4">
                    <!-- Modal backdrop -->
                    <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity" id="modalBackdrop"></div>
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-xl w-full max-w-[780px] mx-auto">
                        <!-- Modal header -->
                        <div class="px-6 pt-6 pb-4">
                            <div class="flex justify-between items-center">
                                <h3 class="text-2xl font-bold text-gray-900">
                                    <?= $translations['payment_card'] ?? "Payment Card" ?></h3>
                                <button
                                    class="bg-white rounded-full p-1 inline-flex items-center justify-center text-gray-800 hover:text-gray-500"
                                    id="closeModal">
                                    <!-- X icon SVG -->
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"></path>
                                    </svg>
                                </button>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">
                                <?= $translations['by_adding_card_you_agree_to_tc'] ?? "By adding card you agree to T&amp;C" ?>
                            </p>
                        </div>
                        <!-- Payment Method Section -->
                        <div class="px-8 pb-8">
                            <!-- Increased padding for wider content area -->
                            <h4 class="text-lg font-bold text-gray-900 mb-4">
                                <?= $translations['payment_method'] ?? "Payment Method" ?></h4>
                            <!-- Credit Card option -->
                            <div class="flex items-center mb-4">
                                <div class="flex items-center">
                                    <!-- Verified Badge -->
                                    <div class="gap-2 flex items-center">
                                        <svg class="w-5 h-5 text-green-500" fill="none" viewbox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"></path>
                                        </svg>
                                        <span
                                            class="text-base font-medium"><?= $translations['credit_card'] ?? "Credit Card" ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Form -->
                            <form class="space-y-6" id="cardForm">
                                <!-- Increased vertical spacing -->
                                <!-- Card info row -->
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-600 mb-1"
                                            for="cardNumber"><?= $translations['card_number'] ?? "Card Number" ?></label>
                                        <div class="relative">
                                            <input
                                                class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-gonpay-orange"
                                                id="cardNumber" name="cardNumber" type="text" />
                                            <div class="absolute top-1/2 left-3 transform -translate-y-1/2">
                                                <svg class="w-5 h-4" viewbox="0 0 32 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="10" cy="12" fill="#EB001B" r="7"></circle>
                                                    <circle cx="22" cy="12" fill="#F79E1B" r="7"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-600 mb-1"
                                            for="cardHolder"><?= $translations['card_holder'] ?? "Card Holder" ?></label>
                                        <input
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-gonpay-orange"
                                            id="cardHolder" name="cardHolder" type="text" />
                                    </div>
                                </div>
                                <!-- Expiry and CVV row -->
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-600 mb-1"
                                            for="expiryDate"><?= $translations['expiry_date'] ?? "Expiry Date" ?></label>
                                        <input
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-gonpay-orange"
                                            id="expiryDate" name="expiryDate" placeholder="MM / YYYY" type="text" />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-600 mb-1"
                                            for="cvv"><?= $translations['cvv'] ?? "CVV" ?></label>
                                        <input
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-gonpay-orange"
                                            id="cvv" maxlength="3" name="cvv" type="password" />
                                    </div>
                                </div>
                                <!-- Save button -->
                                <div class="pt-2">
                                    <button
                                        class="w-32 bg-orange-500 hover:bg-orange-600 text-white font-medium py-3 px-4 rounded-full transition-colors duration-200"
                                        type="submit"><?= $translations['save'] ?? "Save" ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Updated style tag with improved radio button styling -->
            <style>
            /* Custom radio button styling for table */
            .form-radio {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                width: 18px;
                height: 18px;
                border: 2px solid #D1D5DB;
                border-radius: 50%;
                outline: none;
                cursor: pointer;
                position: relative;
            }

            .form-radio:checked {
                border-color: #FF6B00;
                /* gonpay-orange color */
                border-width: 2px;
            }

            .form-radio:checked:after {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 10px;
                height: 10px;
                background-color: #FF6B00;
                /* gonpay-orange color */
                border-radius: 50%;
            }

            .form-radio:focus {
                box-shadow: 0 0 0 3px rgba(255, 107, 0, 0.3);
                /* Light orange focus ring */
            }

            .form-radio:hover:not(:checked) {
                border-color: #FF6B00;
                /* gonpay-orange color */
            }

            /* Modal custom radio button */
            .payment-radio:checked+.payment-radio-label {
                border-color: #10B981;
                /* Green color */
            }

            .payment-radio:checked+.payment-radio-label .payment-radio-dot {
                display: block;
            }

            /* Custom styling for orange elements */
            .bg-gonpay-orange {
                background-color: #FF6B00;
            }

            .hover\:bg-gonpay-orange-dark:hover {
                background-color: #E05A00;
            }

            .text-gonpay-orange {
                color: #FF6B00;
            }

            .focus\:ring-gonpay-orange:focus {
                --tw-ring-color: #FF6B00;
            }
            </style>
            <!-- JavaScript for modal and row selection -->
            <script>
            // When the page loads, the first radio button will be checked by default
            document.addEventListener('DOMContentLoaded', function() {
                const modal = document.getElementById('addCardModal');
                const openModalBtn = document.getElementById('openAddCardModal');
                const closeModalBtn = document.getElementById('closeModal');
                const modalBackdrop = document.getElementById('modalBackdrop');

                // Open modal
                openModalBtn.addEventListener('click', function() {
                    modal.classList.remove('hidden');
                    document.body.classList.add('overflow-hidden');
                });

                // Close modal functions
                const closeModal = function() {
                    modal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                };

                closeModalBtn.addEventListener('click', closeModal);
                modalBackdrop.addEventListener('click', closeModal);

                // Prevent closing when clicking inside the modal content
                modal.querySelector('.relative').addEventListener('click', function(event) {
                    event.stopPropagation();
                });

                // Handle form submission
                document.getElementById('cardForm').addEventListener('submit', function(event) {
                    event.preventDefault();
                    closeModal();
                    // Additional logic to save the card would go here
                });
            });

            function selectRow(row, index) {
                // Remove background from all rows
                document.querySelectorAll('tr.border-b').forEach(function(tr) {
                    tr.classList.remove('bg-orange-50');
                });

                // Add background to the selected row
                row.classList.add('bg-orange-50');

                // Check the radio button
                document.getElementById('card_' + index).checked = true;
            }
            </script>
        </div>
    </div>
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

        // Refresh AOS after dynamic content loads (like modals)
        const modals = ['loyaltyCardModal', 'addCardModal'];
        modals.forEach(modalId => {
            const modalTrigger = document.getElementById(`open${modalId.replace('Modal', '')}`);
            if (modalTrigger) {
                modalTrigger.addEventListener('click', () => {
                    setTimeout(() => {
                        AOS.refresh();
                    }, 100);
                });
            }
        });
    });
    </script>
    <script>
    function scrollToLoyaltyCards() {
        const target = document.getElementById('All-LoyaltyCards');
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 100, // adjust offset if you have sticky header
                behavior: 'smooth'
            });
        }
    }
    </script>
</div>
<?php include 'components/footer.php'; ?>