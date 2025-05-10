<?php 
$pageTitle = 'Navigation - GoNpay';
include 'components/header.php';
?>

<div class="min-h-screen bg-gray-50 pt-24 pb-12">
    <div class="container mx-auto px-4">
        <!-- Navigation Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gonpay-dark mb-4">
                <?= $translations['gonpay_navigation'] ?? "GoNpay Navigation" ?></h1>
            <p class="text-gray-600">
                <?= $translations['quick_access_to_all_pages_within_the_gonpay_system'] ?? "Quick access to all pages within the GoNpay system" ?>
            </p>
        </div>
        <!-- Navigation Grid -->
        <div class="max-w-5xl mx-auto">
            <?= $translations['main_pages'] ?? "Main Pages" ?>
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gonpay-dark mb-4">
                    <?= $translations['main_pages'] ?? "Main Pages" ?></h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php
                    $mainPages = [
                        ['title' => 'Home', 'url' => 'index.php', 'icon' => 'fa-home'],
                        ['title' => 'About Us', 'url' => 'company.php', 'icon' => 'fa-building'],
                        ['title' => 'For Business', 'url' => 'business.php', 'icon' => 'fa-briefcase']
                    ];

                    foreach($mainPages as $page): ?>
                    <a class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 flex items-center group"
                        href="<?php echo $page['url']; ?>">
                        <i
                            class="fas <?php echo $page['icon']; ?> text-gonpay-orange text-xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium text-gray-700"><?php echo $page['title']; ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- User Account Pages -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gonpay-dark mb-4">
                    <?= $translations['account_profile'] ?? "Account &amp; Profile" ?></h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php
                    $accountPages = [
                        ['title' => 'Login', 'url' => 'login.php', 'icon' => 'fa-sign-in-alt'],
                        ['title' => 'Register', 'url' => 'register.php', 'icon' => 'fa-sign-up-alt'],
                        ['title' => 'Profile', 'url' => 'profile.php', 'icon' => 'fa-user'],
                        ['title' => 'Edit Profile', 'url' => 'edit_profile.php', 'icon' => 'fa-user-edit']
                    ];

                    foreach($accountPages as $page): ?>
                    <a class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 flex items-center group"
                        href="<?php echo $page['url']; ?>" target="_blank">
                        <i
                            class="fas <?php echo $page['icon']; ?> text-gonpay-orange text-xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium text-gray-700"><?php echo $page['title']; ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?= $translations['features_services'] ?? "Features &amp; Services" ?>
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gonpay-dark mb-4">
                    <?= $translations['features_services'] ?? "Features &amp; Services" ?></h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php
                    $featurePages = [
                        ['title' => 'Loyalty Card', 'url' => 'about.php', 'icon' => 'fa-credit-card'],
                        ['title' => 'Gift Shop', 'url' => 'eshop.php', 'icon' => 'fa-gift'],
                        ['title' => 'Legal Agreement', 'url' => 'legal_agreement.php', 'icon' => 'fa-file-contract']
                    ];

                    foreach($featurePages as $page): ?>
                    <a class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 flex items-center group"
                        href="<?php echo $page['url']; ?>">
                        <i
                            class="fas <?php echo $page['icon']; ?> text-gonpay-orange text-xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium text-gray-700"><?php echo $page['title']; ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Quick Navigation Tips -->
            <div class="bg-white rounded-xl p-6 mt-12">
                <div class="flex items-start">
                    <div class="bg-gonpay-orange bg-opacity-10 rounded-full p-3 mr-4">
                        <i class="fas fa-lightbulb text-gonpay-orange text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gonpay-dark mb-2">
                            <?= $translations['navigation_tips'] ?? "Navigation Tips" ?></h3>
                        <ul class="text-gray-600 space-y-2">
                            <li class="flex items-center">
                                <i
                                    class="fas fa-check text-gonpay-orange text-sm mr-2"></i><?= $translations['click_any_card_to_navigate_to_the_respective_page'] ?? "Click any card to navigate to the respective page" ?>
                            </li>
                            <li class="flex items-center">
                                <i
                                    class="fas fa-check text-gonpay-orange text-sm mr-2"></i><?= $translations['use_the_main_navigation_menu_for_quick_access_to_k'] ?? "Use the main navigation menu for quick access to key pages" ?>
                            </li>
                            <li class="flex items-center">
                                <i
                                    class="fas fa-check text-gonpay-orange text-sm mr-2"></i><?= $translations['all_pages_are_also_accessible_through_the_header_m'] ?? "All pages are also accessible through the header menu" ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
/* Hover effect for navigation cards */
.group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
}
</style>

<?php include 'components/footer.php'; ?>