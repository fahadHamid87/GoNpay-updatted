<?php if (!empty($faqs)): ?>
<!-- FAQ Section -->
<section class="py-20 bg-white" id="faqs">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/3 mb-10 lg:mb-0">
                <div class="sticky top-32">
                    <span
                        class="text-gonpay-orange uppercase tracking-wider font-medium"><?= $translations['faq'] ?? "FAQ" ?></span>
                    <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-6">
                        <?= $translations['need_help'] ?? "Need Help?" ?></h2>
                    <p class="text-gray-600 mb-10">
                        <?= $translations['learn_how_to_download_and_sign_up_for_our_app'] ?? "Learn how to download and sign up for our app" ?>
                    </p>
                    <h3 class="text-xl font-bold mb-4">
                        <?= $translations['still_have_questions'] ?? "Still Have Questions?" ?></h3>
                    <p class="text-gray-600 mb-6">
                        <?= $translations['contact_our_support_team_for_further_assistance'] ?? "Contact our support team for further assistance." ?>
                    </p>
                    <a class="btn-orange bg-gonpay-orange text-white font-medium py-3 px-8 rounded-full inline-block"
                        href="mailto:info@gonpay.com"><?= $translations['contact_us_2'] ?? "Contact us" ?></a>
                </div>
            </div>
            <div class="lg:w-2/3 lg:pl-20">
                <div class="space-y-4" id="faq-container">
                    <?php foreach ($faqs as $index => $faq): ?>
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button
                            class="faq-toggle w-full flex items-center justify-between px-6 py-5 bg-white hover:bg-gray-50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span
                                class="text-left font-semibold text-lg"><?= htmlspecialchars($faq['question']) ?></span>
                            <svg class="faq-icon w-5 h-5 text-gray-500 transform <?= $index === 1 ? 'rotate-180' : '' ?>"
                                fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"></path>
                            </svg>
                        </button>
                        <div class="faq-content px-6 py-4 bg-gray-50 <?= $index === 1 ? 'block' : 'hidden' ?>">
                            <p class="text-gray-600"><?= htmlspecialchars($faq['answer']) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
function toggleFaq(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('.faq-icon');
    content.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}
</script>
<?php endif; ?>