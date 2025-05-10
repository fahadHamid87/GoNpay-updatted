<?php 
$pageTitle = 'Edit Profile - GoNpay';
include 'components/header.php';
?>

<div class="min-h-screen bg-gray-50 pb-16">
    <!-- Profile Header Banner -->
    <div class="w-full h-80 bg-gonpay-orange relative"> 
        <img src="images/dash_banner.png" alt="Dashboard Banner" class="w-full h-full object-cover">
        <div class="absolute -bottom-20 left-12 w-40 h-40 z-10"> 
            <div class="w-full h-full rounded-full border-4 border-white shadow-md relative bg-white"> 
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&h=200&q=80" 
                     alt="Profile Picture" 
                     class="w-full h-full object-cover rounded-full">
                <div class="absolute bottom-0 right-0 w-10 h-10 bg-gonpay-orange rounded-full flex items-center justify-center shadow-md border-2 border-white cursor-pointer hover:bg-gonpay-orange-dark transition-colors z-20"> 
                    <i class="fas fa-camera text-white"></i> 
                </div> 
            </div> 
        </div> 
    </div>

    <!-- Profile Form Section -->
    <div class="container mx-auto px-4 pt-28 pb-8">
        <div class="bg-white rounded-lg shadow-sm p-8">
            <h2 class="text-2xl font-bold text-gonpay-dark mb-8"><?= $translations['profile'] ?? "Profile" ?></h2>
            
            <form action="profile.php" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-8">
                    <!-- First Name -->
                    <div>
                        <label for="firstName" class="block text-gonpay-dark font-medium mb-2"><?= $translations['first_name'] ?? "First Name" ?></label>
                        <input type="text" id="firstName" name="firstName" value="John"
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors">
                    </div>

                    <!-- Last Name -->
                    <div>
                        <label for="lastName" class="block text-gonpay-dark font-medium mb-2"><?= $translations['last_name'] ?? "Last Name" ?></label>
                        <input type="text" id="lastName" name="lastName" value="Doe"
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors">
                    </div>

                    <!-- Birth Date -->
                    <div>
                        <label for="birthDate" class="block text-gonpay-dark font-medium mb-2"><?= $translations['birth_date'] ?? "Birth Date" ?></label>
                        <input type="text" id="birthDate" name="birthDate" value="August 23, 2004"
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors">
                    </div>

                    <!-- Gender -->
                    <div>
                        <label for="gender" class="block text-gonpay-dark font-medium mb-2"><?= $translations['gender'] ?? "Gender" ?></label>
                        <div class="relative">
                            <select id="gender" name="gender"
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange appearance-none">
                                <option value="male" selected><?= $translations['male'] ?? "Male" ?></option>
                                <option value="female"><?= $translations['female'] ?? "Female" ?></option>
                                <option value="other"><?= $translations['other'] ?? "Other" ?></option>
                                <option value="prefer-not-to-say"><?= $translations['prefer_not_to_say'] ?? "Prefer not to say" ?></option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Country -->
                    <div>
                        <label for="country" class="block text-gonpay-dark font-medium mb-2"><?= $translations['country'] ?? "Country" ?></label>
                        <div class="relative">
                            <select id="country" name="country"
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange appearance-none">
                                <option value="usa" selected><?= $translations['united_state'] ?? "United State" ?></option>
                                <option value="canada"><?= $translations['canada'] ?? "Canada" ?></option>
                                <option value="uk"><?= $translations['united_kingdom'] ?? "United Kingdom" ?></option>
                                <option value="australia"><?= $translations['australia'] ?? "Australia" ?></option>
                                <option value="germany"><?= $translations['germany'] ?? "Germany" ?></option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- City -->
                    <div>
                        <label for="city" class="block text-gonpay-dark font-medium mb-2"><?= $translations['city'] ?? "City" ?></label>
                        <div class="relative">
                            <select id="city" name="city"
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange appearance-none">
                                <option value="new-york" selected><?= $translations['new_york'] ?? "New York" ?></option>
                                <option value="los-angeles"><?= $translations['los_angeles'] ?? "Los Angeles" ?></option>
                                <option value="chicago"><?= $translations['chicago'] ?? "Chicago" ?></option>
                                <option value="houston"><?= $translations['houston'] ?? "Houston" ?></option>
                                <option value="miami"><?= $translations['miami'] ?? "Miami" ?></option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div>
                        <label for="address" class="block text-gonpay-dark font-medium mb-2"><?= $translations['address'] ?? "Address" ?></label>
                        <input type="text" id="address" name="address" value="123 5th Ave Apt 4B New York, NY 10010, USA"
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors">
                    </div>

                    <!-- Postal Code -->
                    <div>
                        <label for="postalCode" class="block text-gonpay-dark font-medium mb-2"><?= $translations['postal_code'] ?? "Postal Code" ?></label>
                        <input type="text" id="postalCode" name="postalCode" value="10001"
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors">
                    </div>
                </div>

                <!-- Save Button -->
                <div class="mt-12 flex justify-end">
                    <button type="submit"
                        class="bg-gonpay-orange text-white px-10 py-3 rounded-full font-medium hover:bg-gonpay-orange-dark transition-all duration-300 btn-orange">
                        <?= $translations['save'] ?? "Save" ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>
