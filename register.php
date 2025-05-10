<?php 
$pageTitle = 'Register - GoNpay';
include 'components/header.php';
?>

<div class="min-h-screen mt-24 bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
    <div class="max-w-7xl w-full mx-auto flex flex-col lg:flex-row rounded-3xl overflow-hidden shadow-xl">
        <!-- Left Panel - Registration Form -->
        <div class="w-full lg:w-1/2 bg-white p-8 lg:p-12">
            <div class="max-w-md mx-auto">
                <h1 class="text-3xl font-bold text-gonpay-dark mb-6">
                    <?= $translations['create_account'] ?? "Create Account" ?></h1>
                <p class="text-gray-600 mb-8">
                    <?= $translations['create_an_account_to_access_exclusive_benefits'] ?? "Create an account to access exclusive benefits" ?>
                </p>
                <!-- Social Login Options -->
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <a class="flex items-center justify-center py-2.5 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors"
                        href="https://accounts.google.com" target="_blank">
                        <svg class="w-5 h-5 mr-2" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                fill="#4285F4"></path>
                            <path
                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                fill="#34A853"></path>
                            <path
                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                                fill="#FBBC05"></path>
                            <path
                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                fill="#EA4335"></path>
                        </svg>
                        <span class="text-gray-700 font-medium"><?= $translations['google'] ?? "Google" ?></span>
                    </a>
                    <a class="inline-flex items-end justify-center py-2.5 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors"
                        href="https://appleid.apple.com" target="_blank">
                        <i class="fab fa-apple text-xl mr-2"></i>
                        <span class="text-gray-700 font-medium"><?= $translations['apple'] ?? "Apple" ?></span>
                    </a>
                </div>
                <!-- Divider -->
                <div class="flex items-center mb-8">
                    <div class="flex-grow border-t border-gray-200"></div>
                    <span
                        class="mx-4 text-sm text-gray-500"><?= $translations['or_continue_with'] ?? "Or Continue With" ?></span>
                    <div class="flex-grow border-t border-gray-200"></div>
                </div>
                <!-- Registration Form -->
                <form action="profile.php" method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gonpay-dark font-medium mb-2"
                                for="first_name"><?= $translations['first_name'] ?? "First Name" ?></label>
                            <input
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-all duration-300"
                                id="first_name" name="first_name" placeholder="<?= $translations['enter_first_name'] ?? 'John' ?>" type="text" />
                        </div>
                        <div>
                            <label class="block text-gonpay-dark font-medium mb-2"
                                for="last_name"><?= $translations['last_name'] ?? "Last Name" ?></label>
                            <input
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-all duration-300"
                                id="last_name" name="last_name" placeholder="<?= $translations['enter_last_name'] ?? 'Doe' ?>" type="text" />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gonpay-dark font-medium mb-2"
                            for="email"><?= $translations['email'] ?? "Email" ?></label>
                        <input
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-all duration-300"
                            id="email" name="email" placeholder="<?= $translations['enter_your_email'] ?? 'Enter your email' ?>" type="email" />
                    </div>
                    <div class="mb-6">
                        <label class="block text-gonpay-dark font-medium mb-2"
                            for="password"><?= $translations['password'] ?? "Password" ?></label>
                        <div class="relative">
                            <input
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-all duration-300 pr-10"
                                id="password" name="password" placeholder="<?= $translations['enter_your_password'] ?? 'Enter your Password' ?>" type="password" />
                            <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500"
                                type="button">
                                <i class="far fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mb-8">
                        <div class="flex items-start">
                            <input class="h-4 w-4 text-gonpay-orange border-gray-300 rounded focus:ring-gonpay-orange"
                                id="terms" name="terms" type="checkbox" />
                            <label class="ml-2 block text-sm text-gray-600"
                                for="terms"><?= $translations['by_subscribing_you_agree_to_our'] ?? "By subscribing, you agree to our" ?>
                                <a class="text-gonpay-orange hover:text-gonpay-orange-dark"
                                    href="legal_agreement.php"><?= $translations['privacy_policy'] ?? "Privacy Policy" ?></a>
                                <?= $translations['and_consent_to_receive_updates_from_our_company'] ?? "and consent to receive updates from our company." ?></label>
                        </div>
                    </div>
                    <button
                        class="w-full py-3 px-4 bg-gonpay-orange text-white font-semibold rounded-full hover:bg-gonpay-orange-dark transition-all duration-300 btn-orange uppercase"
                        type="submit"><?= $translations['sign_up'] ?? "SIGN UP" ?></button>
                </form>
                <div class="mt-8 text-center">
                    <p class="text-gray-600">
                        <?= $translations['already_have_an_account'] ?? "Already have an account?" ?> <a
                            class="text-gonpay-orange hover:text-gonpay-orange-dark font-medium transition-all duration-300"
                            href="login.php"><?= $translations['login_2'] ?? "Login" ?></a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Right Panel - Welcome Banner -->
        <div class="w-full lg:w-1/2 bg-gonpay-orange p-8 lg:p-0 relative hidden lg:block">
            <!-- Dot Pattern Background -->
            <div class="absolute inset-0 animate-dots"
                style="background-image: radial-gradient(rgba(255, 255, 255, 0.2) 1px, transparent 1px); background-size: 20px 20px;">
            </div>
            <div class="relative h-full flex items-center justify-center p-8">
                <div
                    class="bg-white bg-opacity-10 backdrop-blur-sm rounded-3xl px-8 pt-8 max-w-md mx-auto relative overflow-hidden animate-content">
                    <div class="relative z-10">
                        <h2 class="text-4xl font-bold text-white mb-6">
                            <?= $translations['welcome_to_gonpay'] ?? "Welcome to GoNpay!" ?></h2>
                        <div class="flex items-center">
                            <div class="mr-4 mt-2">
                                <div
                                    class="w-14 h-14 bg-white bg-opacity-20 rounded-full flex items-center justify-center animate-pulse-slow">
                                    <i class="fas fa-bolt text-yellow-300 text-2xl"></i>
                                </div>
                            </div>
                            <div class="animate-float -mb-12">
                                <img alt="Business woman with tablet" class="max-w-xs" src="images/lr_side.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Decoration Elements -->
            <div class="absolute top-20 left-16 w-16 h-16 rounded-full bg-white bg-opacity-5 animate-float-delay-1">
            </div>
            <div class="absolute bottom-32 right-24 w-8 h-8 rounded-full bg-white bg-opacity-10 animate-float-delay-2">
            </div>
            <div class="absolute top-1/3 right-10 w-4 h-4 rounded-full bg-yellow-300 opacity-70 animate-float-delay-3">
            </div>
        </div>
    </div>
</div>
<style>
/* Animation for floating elements */
@keyframes float {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-15px);
    }
}

@keyframes floatSlow {

    0%,
    100% {
        transform: translateY(0) scale(1);
    }

    50% {
        transform: translateY(-10px) scale(1.05);
    }
}

@keyframes contentFade {
    from {
        opacity: 0;
        transform: translateX(30px);
    }

    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes dotsMove {
    0% {
        background-position: 0 0;
    }

    100% {
        background-position: 20px 20px;
    }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delay-1 {
    animation: float 7s ease-in-out infinite;
    animation-delay: 0.5s;
}

.animate-float-delay-2 {
    animation: float 5s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-float-delay-3 {
    animation: float 4s ease-in-out infinite;
    animation-delay: 1.5s;
}

.animate-pulse-slow {
    animation: floatSlow 3s ease-in-out infinite;
}

.animate-content {
    animation: contentFade 1s ease-out forwards;
}

.animate-dots {
    animation: dotsMove 30s linear infinite;
}
</style>

<?php include 'components/footer.php'; ?>