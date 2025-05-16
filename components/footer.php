 <!-- Footer Section -->
<footer class="bg-gonpay-purple border-gray-200">
    <div class="container mx-auto px-4 py-8">
        <!-- Logo & Social Icons Row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <!-- Logo Column (Left-aligned) -->
            <div class="flex justify-start">
                <a class="flex items-center" href="index.php">
                    <img alt="GoNpay Logo" class="h-10" src="images/logo.png" />
                </a>
            </div>

            <!-- Middle Column (Centered layout) -->
            <div class="flex justify-center">
                <!-- Reserved -->
            </div>

            <!-- Social Icons Column (Left-aligned) -->
            <div class="flex flex-col items-start item-end ml-40">
                <div class="flex items-center space-x-1">
                    <span class="text-gray-800 font-semibold mr-4">
                        <?= $translations['follow_us'] ?? "Follow Us:" ?>
                    </span>
                    <div class="flex items-center gap-3">
                        <a class="text-gray-600 hover:text-gonpay-orange transition-colors" href="https://www.facebook.com/gonpay"><i class="fab fa-facebook-f"></i></a>
                        <a class="text-gray-600 hover:text-gonpay-orange transition-colors" href="https://www.linkedin.com/company/gonpay/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="text-gray-600 hover:text-gonpay-orange transition-colors" href="https://www.instagram.com/gonpay_eu/"><i class="fab fa-instagram"></i></a>
                        <a class="text-gray-600 hover:text-gonpay-orange transition-colors" href="https://www.youtube.com/@gonpaywallet"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="flex items-center space-x-1 mt-2">
                    <span class="text-gray-800 font-semibold mr-4">
                        <?= $translations['contact_us_3'] ?? "Contact us:" ?>
                    </span>
                    <div class="flex items-center gap-3">
                        <a class="text-gray-600 hover:text-gonpay-orange transition-colors" href="mailto:info@gonpay.com"><i class="fas fa-envelope"></i></a>
                        <a class="text-gray-600 hover:text-gonpay-orange transition-colors" href="tel:+37062344974"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter / Links / Help Row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-20">
            <!-- Newsletter Column (Left-aligned) -->
            <div class="flex flex-col">
               <h3 class="text-gray-800 text-xl font-bold mb-4 text-left">
                   <?= $translations['subscribe_to_our_newsletter'] ?? "Subscribe To Our Newsletter" ?> 
       </h3>
    
                <div class="flex flex-col pe-12">
                    <div class="flex items-center border-b border-gray-300 pb-2 mb-4">
                 <input 
  class="w-full bg-transparent focus:outline-none text-gray-700" 
  placeholder="<?= $translations['emailPlaceholder'] ?? 'Email address' ?>" 
  type="email" 
/>
                        <button class="bg-gonpay-orange text-white font-medium py-1 px-4 rounded-full hover:bg-opacity-90 transition-colors ml-2">
                            <?= $translations['subscribe'] ?? "Subscribe" ?>
                        </button>
                    </div>
                    <p class="text-gray-500 text-sm mt-2 text-left">
                       <a href="/legal_agreement.php"> <?= $translations['by_subscribing_you_agree_to_our_privacy_policy_and'] ?? "By subscribing, you agree to our Privacy Policy and consent to receive updates from us." ?></a>
                    </p>
                </div>
            </div>

            <!-- Our Links Column (Centered layout, left-aligned content) -->
            <div class="flex flex-col items-start mx-auto">
                <h3 class="text-gray-800 text-xl font-bold mb-4">
                    <?= $translations['our_links'] ?? "Our Links" ?>
                </h3>
                <ul class="space-y-3 text-left">
                    <li><a class="text-gray-600 hover:text-gonpay-orange transition-colors" href="/index.php"><?= $translations['explore_loyalty_2'] ?? "Explore loyalty" ?></a></li>
                    <li><a class="text-gray-600 hover:text-gonpay-orange transition-colors" href="business.php"><?= $translations['for_business'] ?? "For Business" ?></a></li>
                    <li><a class="text-gray-600 hover:text-gonpay-orange transition-colors" href="company.php"><?= $translations['about_us_3'] ?? "About us" ?></a></li>
                </ul>
            </div>

            <!-- Help Column (Left-aligned) -->
            <div class="flex flex-col items-start ml-40">
                <h3 class="text-gray-800 text-xl font-bold mb-4">
                    <?= $translations['help'] ?? "Help" ?>
                </h3>
                <ul class="space-y-3 text-left">
                    <li><a class="text-gray-600 hover:text-gonpay-orange transition-colors" href="legal_agreement.php"><?= $translations['legal_agreement'] ?? "Legal Agreement" ?></a></li>
                    <?php 
                        $currentPage = basename($_SERVER['PHP_SELF']);
                        $faqLink = ($currentPage === 'business.php') ? '#faqs' : '/index.php#faqs';
                    ?>
                    <li><a class="text-gray-600 hover:text-gonpay-orange transition-colors" href="<?= $faqLink ?>"><?= $translations['faq'] ?? "FAQ" ?></a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="pt-6 border-t border-gray-200 text-center">
            <p class="text-gray-500">
                <?= $translations['2025_gonpay_all_rights_reserved'] ?? "© 2025 GoNpay. All Rights Reserved" ?>
            </p>
        </div>
    </div>
</footer>



<!-- Mobile Navigation -->
<div
    class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-gonpay-border py-3 px-4 flex justify-around z-50 shadow-lg">
    <a class="flex flex-col items-center text-gonpay-orange" href="index.php">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 12l2-2m0 0l7-7 7 7m-14 0l2 2m0 0l7 7 7-7m-7 7V3" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2"></path>
        </svg>
        <span class="text-xs mt-1"><?= $translations['home'] ?? "Home" ?></span>
    </a>
    <a class="flex flex-col items-center text-gonpay-gray hover:text-gonpay-orange transition-colors" href="about.php">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
        </svg>
        <span class="text-xs mt-1"><?= $translations['cards'] ?? "Cards" ?></span>
    </a>
    <a class="flex flex-col items-center text-gonpay-gray hover:text-gonpay-orange transition-colors" href="eshop.php">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2"></path>
        </svg>
        <span class="text-xs mt-1"><?= $translations['shop'] ?? "Shop" ?></span>
    </a>
    <a class="flex flex-col items-center text-gonpay-gray hover:text-gonpay-orange transition-colors"
        href="profile.php">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2"></path>
        </svg>
        <span class="text-xs mt-1"><?= $translations['profile'] ?? "Profile" ?></span>
    </a>
</div>
<!-- Back to top button -->
<button
    class="fixed bottom-24 right-6 bg-gonpay-orange text-white p-3 rounded-full shadow-lg hidden z-50 transition-all hover:bg-[#E56D00]"
    id="back-to-top">
    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M5 15l7-7 7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
    </svg>
</button>
<!-- JavaScript for interactive elements -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu toggle with animation
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    let isMenuOpen = false;

    mobileMenuButton.addEventListener('click', () => {
        if (!isMenuOpen) {
            mobileMenu.classList.remove('hidden');
            // Add a small delay to trigger the animation
            setTimeout(() => {
                mobileMenu.classList.add('opacity-100');
                mobileMenu.classList.remove('opacity-0');
            }, 50);
        } else {
            mobileMenu.classList.add('opacity-0');
            mobileMenu.classList.remove('opacity-100');
            // Wait for animation to finish before hiding
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
        }
        isMenuOpen = !isMenuOpen;

        // Animate hamburger to X
        mobileMenuButton.innerHTML = isMenuOpen ?
            '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>' :
            '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>';
    });

    // Header shadow on scroll
    const header = document.getElementById('main-header');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            header.classList.add('header-shadow');
        } else {
            header.classList.remove('header-shadow');
        }
    });

    // Back to top button
    const backToTopButton = document.getElementById('back-to-top');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopButton.classList.remove('hidden');
        } else {
            backToTopButton.classList.add('hidden');
        }
    });

    backToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

});
</script>
<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS
    AOS.init({
        once: false,
        offset: 100,
        duration: 800,
        easing: 'ease-in-out'
    });

    // Existing JavaScript code...
    // ...existing code...
});
</script>



<?php include 'components/scripts.php'; ?>
