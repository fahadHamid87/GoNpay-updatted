<?php 
$pageTitle = 'Legal Agreement - GoNpay';
include 'components/header.php';
?>

<div class="overflow-hidden1 bg-gray-50 pt-24">
    <!-- Added pt-24 for proper spacing -->
    <!-- Hero Section with Handshake Image -->
    <section class="relative mb-12">
        <div class="h-84 md:h-80 w-full overflow-hidden1">
            <img alt="Legal Agreement Handshake" class="w-full h-full object-cover" src="images/legal-handshake.png" />
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <div class="text-center px-4">
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        <?= $translations['legal_agreement'] ?? "Legal Agreement" ?></h1>
                    <p class="text-white text-lg max-w-2xl mx-auto">
                        <?= $translations['welcome_to_our_legal_agreement_page_here_we_provid'] ?? "Welcome to our legal agreement page, here we provide detailed important information about our terms and conditions to ensure that your rights are protected." ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Legal Content Section -->
    <section class="container mx-auto px-4 sm:px-6 py-8 mb-16">
        <div class="flex flex-col lg:flex-row gap-10 relative">
            <!-- Sidebar Navigation - Fixed on Desktop -->
            <div class="lg:w-1/4 order-2 lg:order-1">
                <div class="bg-white rounded-lg shadow-sm p-6 lg:sticky lg:top-28"
                    style="max-height: calc(100vh - 140px); overflow-y: auto;">
                    <h3 class="text-lg font-bold mb-4 border-l-4 border-gonpay-orange pl-3">
                        <?= $translations['sections'] ?? "Sections" ?></h3>
                    <nav class="nav-sections">
                        <ul class="space-y-3">
                            <?php
                            // Legal sections data
                            $legalSections = [
                                $translations['introduction_section'] ?? '1. Introduction',
                                $translations['definitions_section'] ?? '2. Definitions',
                                $translations['managing_your_account_section'] ?? '3. Opening And Managing Your Account',
                                $translations['operation_of_mobile_wallet'] ?? '4. Operation Of Mobile Wallet',
                                $translations['loyalty_benefits_section'] ?? '5. Loyalty Benefits',
                                $translations['payment_services_section'] ?? '6. Payment Services',
                                $translations['consumer_data_protection'] ?? '7. Data Protection For The Consumer',
                                $translations['protection_personal_data_section'] ?? '8. Protection Of Personal Data',
                                $translations['security_procedures_section'] ?? '9. Security Procedures',
                                $translations['avalibility_of_services_section'] ?? '10. Availability Of Services',
                                $translations['rights_and_oligations_section'] ??'11. Rights And Obligations',
                                $translations['disputes_and_remedies_section'] ??'12. Disputes And Remedies',
                                $translations['agreement_validity_section'] ??'13. Agreement Validity And Amendments'
                            ];
                            
                            // Generate sidebar navigation
                            foreach ($legalSections as $index => $section): 
                                $isActive = $index === 0 ? 'text-gonpay-orange bg-orange-50' : 'text-gray-600';
                            ?>
                            <li>
                                <a class="nav-link text-sm block py-2 px-3 rounded-lg transition-all duration-200 hover:bg-gray-50 <?php echo $index + 1; ?>"
                                    data-section="section-<?php echo $isActive; ?>"
                                    href="#section-<?php echo $index + 1; ?>">
                                    <?php echo $section; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Main Content - Scrollable -->
            <div class="lg:w-3/4 order-1 lg:order-2 overflow-y-auto">
                <div class="bg-white rounded-lg shadow-sm p-6 md:p-8">
                    <div class="mb-10">
                        <h2 class="text-2xl md:text-3xl font-bold mb-6 text-gonpay-dark">
                            <?= $translations['gonpay_consumer_agreement'] ?? "GoNpay Consumer Agreement" ?></h2>
                        <p class="text-gray-600 mb-4">
                            <?= $translations['this_agreement_outlines_the_terms_and_conditions_u'] ?? "This agreement outlines the terms and conditions under which legal services will be provided to clients. It details the scope of services, fees, responsibilities, and obligations of both parties, ensuring clarity and mutual understanding. Designed to protect the interests of both the legal service provider and the client, this agreement serves as a foundation for a professional relationship built on trust and transparency." ?>
                        </p>
                    </div>

                    <?php
                    // Legal content sections with dummy data
                    $legalContent = [
                        [
                            'id' => 'section-1',
                            'title' => $translations['introduction_section'] ?? '1. Introduction',
                            'content' => $translations['content_section_1'] ?? '"“Mobili zona” UAB, company code 304255777, registered in the Republic of Lithuania (hereinafter referred to as GoNpay) is supplier and executor of this this agreement (hereinafter referred to as the Agreement).',
                             'sub_sections' => [
                                [
                                    'title'=>'',
                                    'content' => $translations['section_1_subcontent'] ?? 'This Agreement applies to Consumers of GoNpay provided services.'
                                ]
                              
                              
            
                            ]
                                ],
                        [
                            'id' => 'section-2',
                            'title' => $translations['definitions_section'] ?? '2. Definitions',
                            'content' => '',
                            'sub_sections' => [
                                [
                                    'title' =>  $translations['GoNpay'] ?? 'Gonpay',
                                    'content' => $translations['section_2_subcontent_1'] ?? 'The brand of “Mobili zona” UAB with internet address www.gonpay.eu. GoNpay also means the Provider of services in this Agreement.'
                                ],
                                [
                                    'title' =>   $translations['Merchant'] ?? 'Merchant',
                                    'content' => $translations['section_2_subcontent_2'] ?? 'A customer of services provided by GoNpay, which uses GoNpay services to advertise and sell its own good and services.'
                                ],
                                [
                                    'title' => $translations['Consumer'] ?? 'Consumer',
                                    'content' => $translations['section_2_subcontent_3'] ?? 'A private individual, which is end user, buyer and receiver of goods and services at the Merchant using GoNpay services.'
                                ],
                                [
                                    'title' => $translations['Agreement'] ?? 'Agreement',
                                    'content' => $translations['section_2_subcontent_4'] ?? 'A legally binding contract concluded between GoNpay and the Consumer/Merchant whereby the Consumer/Merchant agrees to comply to the Merchant Service vs. offers of the Merchant.'
                                ]
                                ]
                                ],
                        
                        [
                        'id' => 'section-3',
                        'title' => $translations['managing_your_account_section'] ?? '3. Opening And Managing Your Account',
                        "content" => $translations['content_section_3'] ?? "Rules regarding eligibility, agreement acceptance, and direct marketing consent for account creation.",
                        "sub_sections" => [
                            [
                                "title" => "",
                                "content" => $translations['section_3_subcontent_1'] ??  "The Consumer has to open the personal account in GoNpay system before starting to use the Mobile wallet. A personal User account is opened in the Mobile wallet."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_3_subcontent_2'] ??  "It is considered that by activating the personal User account the Consumer agrees with all terms and conditions of this Agreement and signs this Agreement."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_3_subcontent_3'] ??  "The Consumer must be not younger than 18 years old in order to use GoNpay services with exception by cases approved by his/her representatives according to the legislation (parents, tutors, etc.). GoNpay has right to ask for a written approval of respective representative and the Consumer must provide it, otherwise GoNpay has right to terminate/not open the User account."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_3_subcontent_4'] ??  "The Consumer confirms that all data provided by him/her by opening User account is correct and he/she is responsible for updating it timely. GoNpay has right to terminate the User account if GoNpay has grounded suspicion that provided the Consumer data is not correct."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_3_subcontent_5'] ??  "The User who has given his/her consent for direct marketing can terminate his/her consent at any time in the Consumer self-service portal, in the Mobile wallet or by other provided methods."
                            ]
                        ]
                    ],
                    [
                        "id" => "section-4",
                        "title" => $translations['operation_of_mobile_wallet'] ?? '4. Operation Of Mobile Wallet',
                        "content" => $translations['content_section_4'] ?? "Details about using the Mobile wallet with internet and supported devices.",
                        "sub_sections" => [
                            [
                                "title" => "",
                                "content" => $translations['section_4_subcontent_1'] ??   "The Consumer could use the Mobile wallet in a mobile device, which meets minimum technical requirements, set by GoNpay."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_4_subcontent_2'] ??   "An internet connection (provided by a mobile operator or via a wireless “wi-fi” network) is mandatory for the Mobile wallet to be fully operational therefore before using the Mobile wallet the Consumer must make sure that internet connection is turned on and works in his/her mobile device each time. The Consumer understands and agrees with the fact that data is transmitted via internet while using the Mobile wallet."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_4_subcontent_3'] ??   "The Consumer must identify himself/herself in order to use the Mobile wallet for Loyalty services and/or Payment services at a Sales point. Identification can be done by one of the following methods:"
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_4_subcontent_4'] ??   "Using functionality in the Mobile wallet to scan Identification code located at a Sales point;"
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_4_subcontent_5'] ??   "Showing to a Merchant Identification code stored in the Mobile wallet. A Merchant scans this code using a special code scanner;"
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_4_subcontent_6'] ??   "Using other functionality available in the Mobile wallet that is accepted by a Merchant."
                            ]
                        ]
                    ],
                    [
                        "id" => "section-5",
                        "title" => $translations['loyalty_benefits_section'] ?? '5. Loyalty Benefits',
                        "content" => $translations['content_section_5'] ?? "Terms for using loyalty programs with the Mobile wallet.",
                        "sub_sections" => [
                            [
                                "title" => "",
                                "content" => $translations['section_5_subcontent_1'] ??   "The Consumer can use Loyalty programs and their offered benefits of those Merchants which have agreement with GoNpay."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_5_subcontent_2'] ?? "The Merchant is entirely responsible for appropriate functioning of Loyalty program and for offering respective benefits to the Consumer. GoNpay is responsible for timely and precise transmission of the Consumer information to the Merchant."
                            ],
                            [
                                "title" => $translations['method'] ?? "Methods to use the Loyalty programs",
                                "content" => $translations['section_5_subcontent_3'] ?? "The Mobile wallet developed and maintained by GoNpay;\n\nThe Merchant’s mobile application developed and maintained by the respective Merchant or its contractor;\n\nThe Loyalty card issued by the Merchant.\n\nUsage of each method is described and provided in the Merchant’s Loyalty program’s terms and conditions."
                            ],
                            [
                                "title" => $translations['lyCard'] ?? "Adding the existing Loyalty card",
                                "content" => $translations['section_5_subcontent_4'] ?? "The Consumer can add data of his/her used Loyalty card into the Mobile wallet. In such case the Consumer does not lose his/her benefits accumulated according to terms and conditions of the respective Merchant’s Loyalty program. The Merchant will continue to provide possibility to participate in its Loyalty program to the Consumer. Mandatory condition to add the Consumer’s used Loyalty card – the Merchant must have a respective agreement with GoNpay. Up to date list of such Merchants is published in GoNpay Mobile wallet."
                            ],
                            [
                                "title" => $translations['ordering'] ?? "Ordering a new Loyalty card",
                                "content" => $translations['section_5_subcontent_5'] ?? "The Consumer can order/ create a new virtual Merchant Loyalty card at any moment in the Mobile wallet. Up to date list of the Merchants, which allows to order virtual the Loyalty cards, is published in the Mobile wallet. While ordering a new virtual Loyalty card the Consumer must accept respective Merchant’s Loyalty program’s terms and conditions. Additionally, the Consumer can give his/her consent for direct marketing."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_5_subcontent_6'] ?? "Possibility to use the Loyalty and/or the virtual Loyalty card in the Mobile wallet at the same time is determined by respective Merchant’s Loyalty program’s terms and conditions."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_5_subcontent_7'] ?? "The Consumer who is willing to use Merchant’s Loyalty program must identify himself/herself at the Sales point using one of the provided method."
                            ]
                        ]
                    ],
                    [
                        "id" => "section-6",
                        "title" => $translations['payment_services_section'] ?? '6. Payment Services',
                        "content" => $translations['content_section_6'] ?? "Conditions for registering and using payment cards in GoNpay.",
                        "sub_sections" => [
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_1'] ?? "Payment cards must be verified and authorized before use in the Mobile wallet."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_2'] ?? "Payments are processed via GoNpay's system, and may require PIN input or bank authorization."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_3'] ?? "GoNpay reserves the right to reject suspicious transactions."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_4'] ?? "The Consumer must register the Payment card(s) in his/her User account before making a payment for the Merchant’s goods and/or services using GoNpay system."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_5'] ?? "GoNpay checks if the Consumer has right to use respective Payment card when he/she registers a new Payment card for the first time. Furthermore, as a mandatory part for this action GoNpay directs the Consumer to payment system provider where the Consumer inputs required card identification details. Additionally the Consumer could be required confirm the card details through card issuing bank authorization system. The Payment card in Mobile wallet can be used for payments only after GoNpay receives confirmation from the bank about the Consumer’s right to use the Payment card which is being registered. GoNpay has right to ask the Consumer to provide additional information related to the respective Payment card for identification and security purpose."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_6'] ?? "The Consumer who is willing to use the Mobile wallet for payment must identify himself/herself at the Sales point using one of the provided methods."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_7'] ?? "The Merchant is ultimately responsible for inputting correct payment information (payment amount, name of purchased item, etc.) into GoNpay system."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_8'] ?? "GoNpay reflects the following payment information in the Consumer’s Mobile wallet:\n\n- name of the Sales point;\n- payment amount;\n- other additional information."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_9'] ?? "For a payment confirmation the Consumer must input his/her personal PIN code which is registered in the User account. Such confirmation is considered as appropriate for a payment authorization and entitles GoNpay to process this payment. GoNpay may not ask to input the personal PIN code for small payment amounts up to 30 EUR."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_10'] ?? "A Payment amount for purchases at the Sales point is debited using the Payment card registered in the Consumer’s account and transferred to GoNpay Payment account. The respective funds are transferred to the Merchant from this account afterwards. GoNpay immediately informs the Merchant about successful or unsuccessful payment using the Consumer’s Mobile wallet. The Consumer can choose which Payment card to use for a payment with the Mobile wallet if there are several Payment cards registered in his/her account."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_11'] ?? "GoNpay collects payment history and reflects it in the User account. Details of a payment depend on the Merchant’s technical capabilities. Due to this reason GoNpay may show different amount of information for each payment in the User account."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_12'] ?? "Payments using the Payment cards are being processed according to regulations and terms of conditions defined by VISA and/or MasterCard, the bank’s (payment institution’s), which issued Payment card and other, related organizations."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_6_subcontent_13'] ?? "GoNpay has right to reject or stop processing of a payment order if it looks suspicious, unusual and has right to inform respective authorities, as it is required by respective legislation."
                            ]
                        ]
                    ],

                        [
                        "id" => "section-7",
                        "title" => $translations['communication_and_consultations'] ?? '7. Communication and consultations',
                        "content" => $translations['content_section_7'] ?? "How Consumers and Merchants interact with GoNpay support.",
                        "sub_sections" => [
                            [
                                "title" => "",
                                "content" => $translations['section_7_subcontent_1'] ?? "GoNpay handles questions about its app and services; Merchants manage loyalty program issues."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_7_subcontent_2'] ?? "Feedback may be collected via the app and passed anonymously to Merchants."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_7_subcontent_3'] ?? "The Consumer has to approach the Merchant for any information about the Merchant’s Loyalty program."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_7_subcontent_4'] ?? "The Consumer has to approach GoNpay for any information about the Mobile wallet and other GoNpay services. This can be done via channels described in GoNpay website."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_7_subcontent_5'] ?? "GoNpay has right to communicate with the Consumer via all GoNpay channels and products, which have respective technical capabilities, also via the email and the phone number as provided in the User account."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_7_subcontent_6'] ?? "GoNpay provides technical possibility in the Mobile wallet for the Consumer to evaluate his/her buying experience at the Sales point. This Consumer’s feedback is provided to the Merchant anonymously without disclosure of the Consumer’s identity. Evaluation can be provided as a simplified or as advanced option. In case of advanced evaluation the Consumer has possibility to write a free text to the Merchant. The Consumer who provides advanced evaluation to the Merchant agrees to receive respective Merchant’s response to the Consumer’s User account. The Consumer’s identity is not disclosed to the Merchant unless the Consumer discloses it to the Merchant himself/herself."
                            ]
                        ]
                    ],

                    [
                        "id" => "section-8",
                        "title" => $translations['info_for_consumer'] ??  "8. Information for the Consumer",
                        "content" => $translations['content_section_8'] ?? "The Consumer can see history of his/her purchases in the Mobile wallet when using GoNpay services.",
                        "sub_sections" => [
                            [
                                "title" => "",
                                "content" => $translations['section_8_subcontent_1'] ?? "GoNpay shows history of payments as detailed as it is possible technically and taking into account what information is provided by the respective Merchant. Due to this reason amount of information might differ when making purchases from different Merchants."
                            ]
                        ]
                    ],
                        
                        
                    [
                        "id" => "section-9",
                        "title" => $translations['protection_personal_data_section_9'] ?? '9. Protection Of Personal Data',
                        "content" => $translations['content_section_9'] ?? "The Consumer agrees that GoNpay maintains and administers his/her personal data for the purpose to offer selected services and execute related obligations. Personal Data is an information collected by GoNpay regarding its Clients, which can be used to determine the Client’s identity and is stored electronically or in any other way.",
                        "sub_sections" => [
                            [
                                "title" => "",
                                "content" => $translations['section_9_subcontent_1'] ?? "GoNpay commits to maintain and administer only as much personal data as it is necessary to fulfill its all obligations. The Customer registering in GoNpay platform and agreeing to the Terms and Conditions , providing the following personal data:"
                            ],
                            [
                                "title" =>  $translations['register'] ?? "Registration using Facebook, Google or Apple ID",
                                "content" => $translations['section_9_subcontent_2'] ?? "- name;\n- surname;\n- email address."
                            ],
                            [
                                "title" => "",
                                "content" => $translations['section_9_subcontent_3'] ?? "The received data from Facebook, Google or Apple ID is used to create Users account."
                            ],
                          
                            [
                                "title" => $translations['info'] ?? "Additionally provided information (optional)",
                                "content" => $translations['section_9_subcontent_5'] ?? "- phone number (if Consumer inputted himself/herself);\n- date of birth (if Consumer inputted himself/herself);\n- sex (if Consumer inputted himself/herself);\n- address (if Consumer inputted himself/herself)."
                            ],
                            [
                                "title" => $translations['payment'] ?? "Payment Card Data",
                                "content" => $translations['section_9_subcontent_6'] ?? "If the User wishes to make payments using the GoNpay mobile app, he must enter the payment card data (cardholder's name, card number, card expiry date, CVV code) in the \"Payment cards\" section. The card data is entered into and transferred to the payment service provider's environment. Card information is not stored in Users account."
                            ],
                            [
                                "title" => $translations['automated'] ?? "9.2.5. Automated Processing",
                                "content" => $translations['section_9_subcontent_7'] ?? "GoNpay constantly makes every effort to make the app, loyalty cards and merchant promotions as user-friendly as possible. GoNpay uses automated data analysis to conduct statistics, research consumer behavior, and generate business reports. Non-personalized data is used during the analysis and we do not process the User's name, contact information and other personal information. GoNpay may collect statistics about User Actions:\n- Statistics of reviews of trader's offers and information notices;\n- Evaluation of point-of-sale shopping;\n- Other relevant data."
                            ],
                            [
                                "title" => $translations['datasource'] ?? "9.3 Data Sources",
                                "content" => $translations['section_9_subcontent_8'] ?? "GoNpay receives almost all personal data directly from the Consumer. Consumer submits the questionnaire data directly to the User account, for example, when filling in the registration, the data of the loyalty cards - by entering them in the mobile application, the purchase data - using the Services.\n\nWe also receive Consumers data directly when a Consumer makes a request in any of the chosen ways: by writing an email, making a call, or using the GoNpay mobile application features.\n\nIf, in order to qualitatively and objectively examine the Consumer's request, GoNpay may need to gather additional information or conduct a study of significant circumstances, we may link the Consumer's request data to the data we have and / or collected during the Consumer's request, e.g. GoNpay may use purchase transaction data, Consumer account usage history and etc."
                            ],
                            [
                                "title" => $translations['thirdparty'] ?? "9.4 Disclosure of User Data to Third Parties",
                                "content" => $translations['section_9_subcontent_9'] ?? "By using the GoNpay app, the user can become a participant in an individual merchant loyalty program and / or order a merchant loyalty card. The Consumer must agree to the rules of the Merchant Loyalty Program, provide consent / disagreement with direct marketing (if provided for in the Merchant Program) and provide the Merchant with the necessary personal data. In this case, the User data entered during registration in the loyalty program of a particular Merchant will be transferred to the Merchant in the intended manner. Subsequently, the User's personal data is processed in accordance with the rules of a particular Merchant and GoNpay is not responsible for the privacy policy, actions or practices of a particular Merchant."
                            ],
                            [
                                "title" => $translations['auth'] ?? "9.4.2 Service Providers and Authorities",
                                "content" => $translations['section_9_subcontent_10'] ?? "Your data may be disclosed to third parties who provide GoNpay services. GoNpay may use other service providers to provide specific services. These service providers undertake data processing procedures on behalf of GoNpay and in accordance with our instructions. GoNpay selects third parties who process personal data carefully and in accordance with applicable data protection legislation. Procedures on behalf of GoNpay include:\n- provision of technical infrastructure to the Platform and provision of space on servers;\n- usage analysis;\n- account and phone verification;\n- payment processing and secure settlement.\n\nIn certain circumstances, our external service providers may be granted access to your personal Data, but only for the specified purposes of data processing. Under the agreement, such third parties are obliged to ensure that their level of data protection is at least equivalent to that provided by GoNpay and applicable law. All Data processed on behalf of GoNpay remains under our control. We constantly monitor compliance with our instructions, data protection levels and contractual obligations with the data controller.\n\nData may also be provided to competent authorities or law enforcement agencies, such as the police or supervisory authorities, but only upon their request and only when required by applicable law or in the cases and procedures provided for by law to ensure our rights, consumers, employees and resource security, to make, file and defend legal claims.\n\nThe User confirms that he is aware of and agrees that GoNpay will transfer his personal data to third parties, if such transfer is required by the legislation of the respective country or necessary to ensure the interests of the User, including the provision of GoNpay services."
                            ],
                            [
                                "title" => $translations['dataretention'] ?? "9.5 Data Retention",
                                "content" => $translations['section_9_subcontent_11'] ?? "GoNpay stores the User's data in accordance with the terms provided by the relevant laws of the Republic of Lithuania and the legal acts of the European Union.\n\nWe process and store the User's request and related data until we review the Request, provide the User with a response and implement the decisions made, as well as for a further 12 months after the request is resolved.\n\nIf a legal dispute is initiated or there is a possibility of such a dispute due to the Request, the User's data may be stored for a longer period until the statute of limitations for filing a complaint or claim expires and / or the final decision enters into force.\n\nUpon expiration of the term of processing and storage of the User's data set forth in this Policy, GoNpay shall destroy or reliably and irrevocably depersonalize the User's data as soon as possible, within a reasonable and reasonable time required for such action."
                            ],
                            [
                                "title" => $translations['userrights'] ?? "9.6 User Rights",
                                "content" => $translations['section_9_subcontent_12'] ?? "Data protection legislation gives the User many rights that he is free to exercise, and GoNpay provides such an opportunity. Information on specific Consumer Rights and how to exercise them is provided below, please read it carefully."
                            ],
                            [
                                "title" => $translations['rightacess'] ?? "Right to Access",
                                "content" => $translations['section_9_subcontent_13'] ?? "The User has the right to access his/her personal data processed by GoNpay, in writing or in any other manner agreed between GoNpay and the User."
                            ],
                            [
                                "title" => $translations['rightrectify'] ?? "Right to Rectify",
                                "content" => $translations['section_9_subcontent_14'] ?? "If the data provided to us in the User's registration form has changed or the User considers that the information processed by us about it is inaccurate or incorrect, the User has the right to change, correct or correct this information. The User can make adjustments to his data in the mobile app. The user can also contact us in the ways indicated here and ask us to correct or clarify his data."
                            ],
                            [
                                "title" => $translations['withdraw'] ?? "Right to Withdraw Consent",
                                "content" => $translations['section_9_subcontent_15'] ?? "In cases where we process the User's data on the basis of his consent, the User has the right to revoke his consent at any time and the processing of data based on his consent will be terminated. In some cases, this may mean that we will no longer be able to allow the User to continue to use our Services."
                            ],
                            [
                                "title" => $translations['forgotten'] ?? "Right to be Forgotten",
                                "content" => $translations['section_9_subcontent_16'] ?? "The user has the right to request that GoNpay delete personal data. A user who wants to stop using GoNpay services and delete personal data about himself can apply by e-mail to info@gonpay.com. Contact must be from the same email address used in the User’s personal GoNpay account. GoNpay undertakes to delete the personal data within 30 calendar days unless required otherwise by law."
                            ],
                            [
                                "title" => $translations['directorMarketing'] ?? "Right to Object to Direct Marketing",
                                "content" => $translations['section_9_subcontent_17'] ?? "The consumer has the right at any time, without stating the reasons for his or her disagreement, to object or refuse to have his or her personal data processed by GoNpay for the purpose of direct marketing."
                            ],
                            [
                                "title" =>$translations['rightappeal'] ?? "Right to Appeal",
                                "content" => $translations['section_9_subcontent_18'] ?? "If the User believes that we process his data in violation of data protection legislation, we encourage you to contact us first. If unsatisfied, the User has the right to submit a complaint to the State Data Protection Inspectorate in Lithuania."
                            ],
                            [
                                "title" => $translations['contact'] ?? "Contact Information",
                                "content" => $translations['section_9_subcontent_19'] ?? "If you have any questions about your data management using the GoNpay platform or questions about your rights, please contact us: info@gonpay.com or +370 648 29788."
                            ],
                            [
                                "title" => $translations['legal'] ?? "Legal Compliance",
                                "content" => $translations['section_9_subcontent_20'] ?? "GoNpay undertakes to process personal data strictly and without any reservations in accordance with the Law of the Republic of Lithuania on the Legal Protection of Personal Data and EU legal acts."
                            ]
                        ]
                    ],

                        
                        
                        
                        
                        
                        [
                            "id" => "section-10",
                            "title" => $translations['security_procedures_section_10'] ?? '10. Security Procedures',
                            "content" => $translations['content_section_10'] ?? "The Consumer is ultimately responsible for his/her login information security while storing login data and making sure that the screen (usage) of a mobile device is protected with password.
                    ",
                            "sub_sections" => [
                                [
                                    "title" => "",
                                    "content" => $translations['section_10_subcontent_1'] ?? "The Consumer additionally creates numeric PIN code (the personal secret identification number).
                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_10_subcontent_1'] ?? "GoNpay never asks the Consumer to disclose his/her login password or PIN code (the personal secret identification number) therefore GoNpay is not responsible for any usage of the Mobile wallet without the Consumer’s knowledge.
                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_10_subcontent_1'] ?? "GoNpay does not store any Payment card data in a mobile device.
                    "
                                ]
                            ]
                        ],
                        [
                            "id" => "section-11",
                            "title" => $translations['avalibility_of_services_section_11'] ?? '11. Availability Of Services',
                            "content" => $translations['content_section_11'] ?? "The Consumer understands and agrees that some technical interference may occur in certain circumstances, which may have impact to provide GoNpay services.
                    ",
                            "sub_sections" => [
                                [
                                    "title" => "",
                                    "content" => $translations['section_11_subcontent_1'] ?? "The Consumer must inform the Merchant in case of unsuccessful usage of the Mobile wallet for making a purchase at its Sales point. In this case the Merchant will identify the problem and either will solve it by himself or will inform GoNpay. Furthermore, in order to successfully use the Mobile wallet for benefits of the Loyalty program again the Consumer must wait until the technical interference is solved. GoNpay is not responsible for any losses, which the Consumer may experience while being not able to use benefits of the Loyalty programs.
                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_11_subcontent_2'] ?? "The Consumer must approach GoNpay via the Mobile wallet, or via the contacts stated in GoNpay internet page in cases when he/she has questions related to usage of GoNpay services."
                                ]
                            ]
                        ],
                        [
                            "id" => "section-12",
                            "title" => $translations['rights_and_oligations_section_12'] ?? '12. Rights And Obligations',
                            "content" => $translations['content_section_12'] ?? "The Consumer commits to act fairly and according to terms and conditions of this Agreement, not to create more than one User account except the case when his/her login information to the User account became available to third parties. In any case the Consumer must block (delete) current the User account before creating a new one.
                    ",
                            "sub_sections" => [
                                [
                                    "title" => "",
                                    "content" => $translations['section_12_subcontent_1'] ?? "The Consumer is responsible for losses occurred due to:
                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_12_subcontent_2'] ?? "Unauthorized use of the Mobile wallet when the Consumer did not protect his/her User account’s password and/or PIN code and they became known and/or accessible to third parties;
                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_12_subcontent_3'] ?? "Usage of his/her lost or stolen mobile device when there was possibility to access the Mobile wallet due to the unsecured User account password and/or PIN code.
                    "
                                ]
                                ,
                                [
                                    "title" => "",
                                    "content" => $translations['section_12_subcontent_4'] ?? "The Consumer is solely responsible for all losses which occurred due to the Consumer’s negligence, dishonest or deliberate actions.

                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_12_subcontent_5'] ?? "The Consumer must immediately inform GoNpay and/or block the User account if his/her mobile device is stolen or lost and/or there is ground suspicion that third parties knows login information to the User account or any other Consumer’s information which may be used unauthorized.

                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_12_subcontent_6'] ?? "GoNpay has right to terminate usage of the User account and / or the Loyalty card and / or the Payment card in the Mobile wallet if:

                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_12_subcontent_7'] ?? "The Consumer violates terms and conditions of this Agreement and / or the Loyalty program provided by GoNpay or by the Merchant;

                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_12_subcontent_8'] ?? "There is ground to think that the Consumer and/or third parties are using the Loyalty cards and / or the Payment cards unauthorized;

                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_12_subcontent_9'] ?? " The Consumer use GoNpay services for malpractice, deals or fraud actions;

                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_12_subcontent_10'] ?? " GoNpay has right to use contractors (third parties) for providing services to Consumer.

                    "
                                ],
                            ]
                        ],
                        [
                            "id" => "section-13",
                            "title" => $translations['disputes_requests_13'] ?? '13. Disputes and requests',
                            "content" => $translations['content_section_13'] ?? "The Consumer has to address his/her requests, proposals or complaints respectively to GoNpay or to the Merchant depending on their nature and scope of responsibilities.
                    ",
                            "sub_sections" => [
                                [
                                    "title" => "",
                                    "content" => $translations['section_13_subcontent_1'] ??  "The Consumer can approach GoNpay and the Merchant via defined channels and methods.
                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_13_subcontent_2'] ??  "GoNpay investigates the Consumer’s request and provides answer within reasonable term as soon as possible.
                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_13_subcontent_3'] ??  "The Consumer must repeatedly approach GoNpay in case he/she disagrees with results of GoNpay’s reply to the Consumer’s issue. In such case the Consumer must provide argumentation for his/her disagreement.
                    "
                                ]
                            ]
                        ],
                        [
                            "id" => "section-14",
                            "title" => $translations['agreement_validity_amendments'] ?? "14. Agreement validity and amendments",
                            "content" => $translations['content_section_14'] ?? "The Consumer Agreement enters into effect from the moment when the Consumer creates and activates the personal User account and is valid until this the User account is deleted.",
                            "sub_sections" => [
                                [
                                    "title" => "",
                                    "content" => $translations['section_14_subcontent_1'] ??  "The Consent for direct marketing is valid for two years from the Consumer concern date.
                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_14_subcontent_2'] ??  "Appendixes of the Agreement are an integral part of this Agreement.
                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_14_subcontent_3'] ??  "The Consumer must inform GoNpay via channels and methods described in this Agreement in case he/she would like to stop using GoNpay services and to terminate the Consumer Agreement.
                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_14_subcontent_4'] ??  "GoNpay has right to unilaterally amend/change this Consumer Agreement while publicly announcing a new version in GoNpay Internet page or in the Mobile wallet. The Consumer can download or print the current version of the Consumer Agreement from Internet page.
                    .
                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_14_subcontent_5'] ??  "This Agreement is made, interpreted and its terms and conditions are executed according to legislation of Republic of Lithuania. Any disputes between parties of this Agreement are being solved by negotiations or according to legislation of Republic of Lithuania if negotiations fail.

                    "
                                ],
                                [
                                    "title" => "",
                                    "content" => $translations['section_14_subcontent_6'] ??  "Any unsolved disputes arising or related from/to this Agreement are being solved at a competent court in Vilnius.
                    "
                                ]
                            ]
                        ]
                    ];
                    
                    // Generate legal content sections
                    foreach ($legalContent as $section):
                    ?>
                    <div class="mb-12 scroll-mt-24" id="<?php echo $section['id']; ?>">
                        <h3 class="text-xl font-bold mb-4 text-gonpay-dark"><?php echo $section['title']; ?></h3>

                        <?php if (!empty($section['content'])): ?>
                        <p class="text-gray-600 mb-6"><?php echo $section['content']; ?></p>
                        <?php endif; ?>

                        <?php if (!empty($section['sub_sections'])): ?>
                        <div class="space-y-6 mt-6 pl-4 border-l-2 border-gray-200">
                            <?php foreach ($section['sub_sections'] as $subSection): ?>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2"><?php echo $subSection['title']; ?></h4>
                                <p class="text-gray-600"><?php echo $subSection['content']; ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add these styles -->
<style>
/* Improved sticky sidebar behavior */
html {
    scroll-behavior: smooth;
}

@media (min-width: 1024px) {
    .lg\:sticky {
        position: sticky;
        display: block;
    }
}

@media (max-width: 1023px) {
    .nav-sections {
        display: flex;
        overflow-x: auto;
        padding-bottom: 1rem;
        -webkit-overflow-scrolling: touch;
    }

    .nav-sections ul {
        display: flex;
        gap: 1rem;
        padding-right: 1rem;
    }

    .nav-sections li {
        flex: 0 0 auto;
    }
}

.nav-link.active {
    background-color: rgb(255 237 213);
    color: #FF7A00;
}

/* Ensure main content scrolls independently when needed */
.lg\:w-3\/4.overflow-y-auto {
    max-height: 100%;
}
</style>
<!-- Add this JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('[id^="section-"]');
    const navLinks = document.querySelectorAll('.nav-link');

    // Smooth scroll to section
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            const offset = 100; // Adjust scroll offset as needed

            window.scrollTo({
                top: targetSection.offsetTop - offset,
                behavior: 'smooth'
            });

            // Update active class immediately
            navLinks.forEach(navLink => navLink.classList.remove('active', 'text-gonpay-orange',
                'bg-orange-50'));
            link.classList.add('active', 'text-gonpay-orange', 'bg-orange-50');
        });
    });

    // Update active section on scroll
    function updateActiveSection() {
        const scrollPosition = window.scrollY;

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 150;
            const sectionBottom = sectionTop + section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                navLinks.forEach(link => {
                    link.classList.remove('active', 'text-gonpay-orange', 'bg-orange-50');
                    link.classList.add('text-gray-600');

                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.remove('text-gray-600');
                        link.classList.add('active', 'text-gonpay-orange', 'bg-orange-50');
                    }
                });
            }
        });
    }

    // Initial check and scroll event listener
    updateActiveSection();
    window.addEventListener('scroll', updateActiveSection);
});
</script>

<?php include 'components/footer.php'; ?>


