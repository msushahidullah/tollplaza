<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TermsSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('terms_settings')->delete();
        
        \DB::table('terms_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'user-register-term',
                'title' => 'User Agreement',
                'description' => '<h1><span style="color:#000000;">Terms &amp; Conditions</span></h1>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Private Limited.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">1) Introduction</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">This following sets out the terms and conditions on which you may use the content on</span><br /><span style="color:#000000;">business-standard.com website, business-standard.com\'s mobile browser site, Business Standard instore Applications and other digital publishing services (www.smartinvestor.in, www.bshindi.com and www.bsmotoring,com) owned by Business Standard Private Limited, all the services herein will be referred to as Business Standard Content Services.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">2) Registration Access and Use</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">We welcome users to register on our digital platforms. We offer the below mentioned registration services which may be subject to change in the future. All changes will be appended in the terms and conditions page and communicated to existing users by email.</span></p>
<p><span style="color:#000000;">Registration services are offered for individual subscribers only. If multiple individuals propose to access the same account or for corporate accounts kindly contact or write in to us. Subscription rates will vary for multiple same time access.</span></p>
<p><span style="color:#000000;">The nature and volume of Business Standard content services you consume on the digital platforms will vary according to the type of registration you choose, on the geography you reside or the offer you subscribe to.</span></p>
<p><span style="color:#000000;">a) Free Registration</span></p>
<p><span style="color:#000000;">b) Premium Registration</span></p>
<p><span style="color:#000000;">c) Special Offers</span></p>
<p><span style="color:#000000;">d) Combo registrations with partners</span></p>
<p><span style="color:#000000;">The details of the services and access offered for each account have been listed on</span><br /><span style="color:#000000;">www.business-standard.com/subscription-cart/product</span></p>
<p><span style="color:#000000;">We may in exceptional circumstances cease to provide subscription services. We will give you at least 7 days notice of this, if possible. If we do so, then we will have no further obligation to you.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">3) Privacy Policy and Registration</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">All information received by us from your registration on business-standard.com or other digital products of Business Standard will be used by Business Standard in accordance with our Privacy Policy. Kindly read the below mentioned details.</span></p>
<p><span style="color:#000000;">On registration, we expect you to provide Business Standard with an accurate and complete information of the compulsory fields. We also expect you to keep the information secure, specifically access passwords and payment information. Kindly update the information periodically to keep your account relevant. Business Standard will rely on any information you provide to us.</span></p>
<p><span style="color:#000000;">Each registration is for a single user only. On registration, you will choose a user name and password ("ID"). You are not allowed to share your ID or give access to your account to anyone else. Business Standard Premium subscription does not allow multiple users on a network or within an organization to use the same ID.</span></p>
<p><span style="color:#000000;">On knowledge, Business Standard may cancel or suspend your access to Business Standard premium services if it comes across you sharing your personal access without further obligation to you.</span></p>
<p><span style="color:#000000;">You are responsible for all the use of business-standard.com premium service made by you or anyone else using your ID and for preventing unauthorised use of your ID. If you believe there has been any breach of security such as the disclosure, theft or unauthorised use of your ID or any payment information, you must notify Business Standard immediately by e-mailing us at assist@bsmail.in. We recommend that you do not select an obvious user password (such as your name) and that you change it regularly.</span></p>
<p><span style="color:#000000;">If you provide Business Standard with an email address that will result in any messages Business Standard may send you being sent to you via a network or device operated or owned by a third party (e.g. your employer or college) then you promise that you are entitled to receive those messages. To ensure email\'s land in your inbox, you will add the bsmail receipt id to your safe list. You also agree that Business Standard may stop sending messages to you without notifying you.</span></p>
</li>
</ul>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">Important - Kindly note</span></p>
</li>
<li>
<p><span style="color:#000000;">(A) When you participate and choose to subscribe to joint content subscription offers that Business Standard partners with; your email id, access password and entered personal information will be shared with the participating content partner brand via an encrypted server to server protocol. This sharing is to facilitate your seamless access across the partner brand\'s platform. Once you login to the partner brand\'s platform, specific terms and privacy policies of the partner brand (mentioned on its website) will apply.</span></p>
</li>
<li>
<p><span style="color:#000000;">(B) Joint offers including special price offers are generally limited to new users on the partner sites. Clubbed Offers on partner sites will not be available to you should your email id be registered with the partner website.</span><br /><br /><span style="color:#000000;">You are advised to study the offer before you subscribe.</span><br /><br /><span style="color:#000000;">Merely subscribing to such a joint offer does not make you eligible to gain access to the partner platform. Business Standard does not take responsibility of providing you with an access on the partner site for existing users/subscribers of these sites.</span></p>
</li>
<li>
<p><span style="color:#000000;">(C) When you subscribe to joint offers supported by (non-content) brands; specific brands would ask you to share personal or private information in lieu of a value that the brand extends. By participating in such offers you implicitly and by confirming the terms of the offer you agree to share your registration information and personal data with the concerned brand. The brand or its associates may use this personal information to contact you with their promotional offers. Further by participating to such offers your will be additionally governed by the privacy policy and terms and conditions of the concerned brand. You are advised to go through them carefully before you decide to opt in.</span></p>
</li>
<li>
<p><span style="color:#000000;">As a registered user of or subscriber to business-standard.com you may choose to use business-standard.com\'s "Remember me" log in feature that enables you to be logged in automatically to business-standard.com whenever you visit business-standard.com without having to manually log in each time. We recommend that you do not enable this feature on any computer that is or may be used by anyone other than you in order to prevent unauthorized access by third parties to both your subscription details and features of business-standard.com personal to you.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">4. Personal Subscription Services</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">Personal subscription services include Business Standard premium access to behind the pay wall content. When you subscribe to Business Standard Premium access, you gain access to opinion pieces, comment and exclusive features specially chosen for you by the Business Standard editors.</span></p>
<p><span style="color:#000000;">The nature of content behind the pay wall is subject to change; the final decision of which lies with the Editor.</span></p>
</li>
<li>
<p><span style="color:#000000;">Types of subscription:</span></p>
<p><span style="color:#000000;">Services may differ from country to country and the device from which you subscribe. Subscriptions packages and price may also vary in time.</span></p>
</li>
<li>
<p><span style="color:#000000;">Contract formation:</span></p>
<p> </p>
<p><span style="color:#000000;">Business Standard will try to process your subscription promptly but does not guarantee that your subscription will be activated by any specified time. By submitting your payment and other subscription details, you are making an offer to us to buy a subscription. Your offer will only be accepted by us and a contract formed when we have successfully verified your payment details and email address, at which point we will provide you with access to your subscription. Business Standard reserves the right to reject any offer in its discretion, for any or no reason.</span></p>
<p><span style="color:#000000;">Business Standard may partner with third party content providers to offer bundled services, under which the payment for both the services will be collected by Business Standard. Business Standard will endeavor to provide a seamless access to all such third parties with a single one point access. There could be a gap in this seamless access due to a technology breakdown, temporary disconnection of the internet connection or any factors beyond the reasonable control of Business Standard. In such cases the contract will be formed once the access to the partner services are restored.</span></p>
<p><span style="color:#000000;">You are requested to read through the terms and conditions offered by content partners to Business Standard. Most partners offer bundled services for new users. Existing subscribers of partners are not eligible for bundled subscription. Should you happen to be one please note that the partner will be liable to reject your offer to subscribe under the bundled subscription not leading to contract formation as a result.</span></p>
</li>
<li>
<p><span style="color:#000000;">Payment details:</span></p>
<p><span style="color:#000000;">When you purchase a subscription, you must provide us with complete and accurate payment information. By submitting payment details you promise that you are entitled to purchase a subscription using those payment details. If we do not receive payment authorization or any authorization is subsequently cancelled, we may immediately terminate or suspend your access to your subscription. In suspicious circumstances we may contact the issuing bank/payment provider and/or law enforcement authorities or other appropriate third parties. If you are entitled to a refund under these terms and conditions we will credit that refund to the card or other payment method you used to submit payment, unless it has expired in which case we will contact you.</span></p>
<p><span style="color:#000000;">Business Standard will use the services of quality third party payment service providers to process your payment. Payment options are primarily through credit card. Business Standard may offer other payment mechanisms from time to time.</span></p>
</li>
<li>
<p><span style="color:#000000;">Pricing:</span></p>
<p><span style="color:#000000;">The subscription price will be made clear to you on our sign-up pages or otherwise during the sign-up process and may vary from time to time, by region or by country. You agree to pay the fees at the rates notified to you at the time you purchase your subscription. Subscription to premium services on Business Standard are generally of monthly frequency. Business Standard however may choose to offer fixed term or fixed payment frequency offers from time to time. The currency in which your subscription is payable will be specified during the order process, depending on the service and your country of residence. Eligibility for any discounts is ascertained at the time you subscribe and cannot be changed during the term of your subscription. We will always tell you in advance of any increase in the price of your subscription and offer you an opportunity to cancel it if you do not wish to pay the new price.</span></p>
</li>
<li>
<p><span style="color:#000000;">Taxes:</span></p>
<p><span style="color:#000000;">Subscription and access to content services fall under the purview of Service Tax as per the current indirect taxation policy, Government of India. Taxes are applicable for consumption of content on the website and other products of Business Standard uniformly for customers based in India and outside the country. Unless otherwise indicated, prices stated on our website are inclusive of applicable Service Tax, any applicable value added tax (VAT) or other sales taxes.</span></p>
</li>
<li>
<p><span style="color:#000000;">Pricing errors:</span></p>
<p><span style="color:#000000;">If we incorrectly state a price to you whether online or otherwise, we are not obliged to provide you with a subscription at that price, even if we have mistakenly accepted your offer to buy a subscription at that price, and we reserve the right to subsequently notify you of any pricing error. If we do this, you may cancel the subscription without any obligation to us and we will refund you any money you have paid us in full, or you may pay the correct price. If you refuse to exercise either of these choices then we may cancel your subscription and will refund you any money you have paid us in full. We will always act in good faith in determining whether a genuine pricing error has occurred.</span></p>
</li>
<li>
<p><span style="color:#000000;">Other costs:</span></p>
<p><span style="color:#000000;">In addition to any subscription fees you pay, you are responsible for paying any internet connection or other telecommunications charges that you may incur by accessing the premium services or using the services available on it. For example, if you use any of our mobile services then your network operator may charge you for data or messaging services.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">5. Subscription Period, Renewal and Cancellation of Personal Subscriptions</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">Renewals:</span></p>
<p><span style="color:#000000;">If you chose to pay monthly, your subscription will continue until you tell us that you no longer wish to receive it, in which case you will stop paying the monthly fees. We will notify you at least 7 days in advance of any changes to the price in your subscription that will apply upon next monthly renewal.</span></p>
<p><span style="color:#000000;">Please visit the "How to cancel" section below for details of how to cancel your monthly subscription.</span></p>
<p><span style="color:#000000;">Unless you notify us before the end of your chosen subscription period that you no longer wish to receive it, your subscription will renew for another period as applicable. We will charge the subscription using the same card or other payment method that you previously used.</span></p>
</li>
<li>
<p><span style="color:#000000;">Cancellation Policy</span></p>
<p> </p>
<p><span style="color:#000000;">For Digital subscriptions by placing your order you agree that we may start your subscription immediately upon our accepting your order. This means that you are not entitled to a refund if you change your mind after we have provided you with access to your subscription.</span></p>
<p><span style="color:#000000;">Except as set out in the previous section, you do not have any right to cancel your subscription or any part of it until the end of your then current subscription period.</span></p>
<p><span style="color:#000000;">Although you may notify us of your intention to cancel at any time, such notice will only take effect at the end of your then current subscription period, and you will not receive a refund</span></p>
</li>
<li>
<p><span style="color:#000000;">How to cancel?</span></p>
<p><span style="color:#000000;">You may notify us of your wish to cancel your subscription by contacting our Customer Services team at assist@bsmail.in. To enable us cancel your subscription please provide us with your complete name (as was in the subscription order form), Email address and Contact number clearly written out.</span></p>
</li>
<li>
<p><span style="color:#000000;">Cancellation by us:</span></p>
<p> </p>
<p><span style="color:#000000;">Business Standard reserves the right to suspend or terminate your subscription if you breach these terms and conditions, with or without notice and without further obligation to you. We may also suspend or terminate your subscription if we are prevented from providing services to you by circumstances beyond our control. If we terminate your subscription for any reason and/or permanently cease publishing business-standard.com, or cease to provide subscription services then, unless there are exceptional circumstances, we will provide you with a pro rata refund to your credit card. This means that we will refund you with any amounts that you have paid us in advance that relate to any remaining and unexpired period of your subscription.</span></p>
</li>
<li>
<p><span style="color:#000000;">Cancellation of your registration:</span></p>
<p> </p>
<p><span style="color:#000000;">If you are a registered user, but not a subscriber, then Business Standard reserves the right to suspend or terminate your registration at any time, with or without notice and without further obligation to you. If you would like to cancel your registration then please contact our customer services team at assist@bsmail.in.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">6. Who Your Personal Subscription Contract is with</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">If you buy a Business-standard.com digital subscription and are resident in any country, then you will be contracting with Business Standard Private Limited, Nehru House, 4, Bahadur Shah Zafar Marg, New Delhi - 110 002</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">7. User Generated Content</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">Business-standard.com includes comments sections, blogs and other interactive features that allow interaction between users and between users and Business Standard. We call the information posted by or contributed by users "User Generated Content" or "UGC".</span></p>
<p><span style="color:#000000;">If you wish to view or participate by way of UGC then you must comply with specific rules and guidelines. We also recommend that you read our Comments Guidelines which provide further guidance in relation to commenting on Business-standard.com.</span></p>
<p><span style="color:#000000;">You are responsible for all the content of any of your UGC that you or we publish. You are financially responsible to us for any claim against us by any third party that your UGC is not in accordance with the UGC policy</span></p>
<p><span style="color:#000000;">You further agree that you will:</span></p>
<p><span style="color:#000000;">* Only publish UGC that is your original content and will not infringe the copyright or other rights of any third party when publishing UGC. Not post, link to or otherwise publish any UGC containing any form of advertising or promotion for goods and services or any spam or other form of unsolicited communication.</span></p>
<p><span style="color:#000000;">* Not post, link to or otherwise publish any UGC with recommendations to buy or not buy a particular share or other investment or which contain confidential information of another party or which otherwise have the purpose of affecting the price or value of any share or other investment.</span></p>
<p><span style="color:#000000;">* Not post, link to or otherwise publish any UGC that is threatening, offensive, libellous, indecent or otherwise unlawful.</span></p>
<p><span style="color:#000000;">* Not post comments that are discriminatory in nature, for example, comments which make attacks on the grounds of race, religion, sex, gender, sexual orientation, disability or age.</span></p>
<p><span style="color:#000000;">* Respectfully challenge different points of view but not personally attack other commentators.</span></p>
<p><span style="color:#000000;">* Not disguise the origin of any UGC and not impersonate any person or entity (including Business Standard employees or Forum guests or hosts) or misrepresent any connection with any person or entity.</span></p>
<p><span style="color:#000000;">* Not post or otherwise publish any UGC unrelated to the Forum or the Forum\'s topic.</span></p>
<p><span style="color:#000000;">* Not post or transmit any UGC that contains software viruses, files or code designed to interrupt, destroy or limit the functionality of Business-Standard.com or any computer software or equipment.</span></p>
<p><span style="color:#000000;">* Not collect or store other users personal data.</span></p>
<p><span style="color:#000000;">* Not restrict or inhibit any other user from using the Forums.</span></p>
<p><span style="color:#000000;">* Comply with the guidelines for commenting set out in our Commenting FAQ.</span></p>
<p><span style="color:#000000;">It is not possible for Business Standard to fully monitor all UGC published on business-standard.com but where we have actually received notice of any UGC that is potentially misleading, untrue, offensive, unlawful, infringes third party rights or is potentially in breach of these terms and conditions, then we will review that UGC, decide whether to remove it from business-standard.com and act accordingly. This may include banning a user from participation in UGC on Business-standard.com. If you believe that any UGC published on business-standard.com infringes any legal rights that you may have or is not allowed under these terms and conditions, please notify us immediately with specific details by contacting us at assist@bsmail.in or feedback@bsmail.in</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">8. Third Party Sites and Services</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">Business-standard.com may contain links to other Internet websites or online and mobile services provided by independent third parties, including websites of our advertisers and sponsors (what we call "Third Party Sites"), either directly or through frames. Third Party Sites also include co-branded with Business Standard and so include Business Standard\'s trade marks.</span></p>
<p><span style="color:#000000;">It is your decision whether you purchase or use any third party products or services made available on or via Third Party Sites and you should read Section 9 below carefully. Our Privacy Policy does not apply to Third Party Sites.</span></p>
<p><span style="color:#000000;">Business-Standard.com contains advertising and sponsorship. Advertisers and sponsors are responsible for ensuring that material submitted for inclusion on Business-standard.com complies with international and national law. Business Standard is not responsible for any error or inaccuracy in advertising, incorrect links or sponsorship material.</span></p>
<p><span style="color:#000000;">Copyright in any software that is made available for download from Business-standard.com belongs to Business Standard or its suppliers or contributors. Your use of the software is governed by the terms of any licence agreement that may accompany or be included with the software. Do not install or use any of this software unless you agree to such licence agreement. Business Standard is not responsible for any technical or other issues that may happen if you download third party software.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">9. Our Responsibilities towards You</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">A summary of what this section means: this section is important and you should read it carefully. It makes clear to what extent, if any, Business Standard accepts responsibility (liability) to you for your use of Business-standard.com or in respect of any third party products or services that we refer to or advertisements or any other link to on business-standard.com. Unless you are a premium subscriber to Business-standard.com, we accept no financial responsibility to you arising from your use of business-standard.com or the content, advertisements and links published on business-standard.com. If you are a Business Standard premium service subscriber, we limit our financial responsibility to you arising from your use of Business-Standard.com and/or the Premium Services you consume on business-standard.com to the price you paid for your subscription.</span></p>
<p><span style="color:#000000;">In no circumstances do we accept responsibility for your use of Third Party Sites or services not limited to advertisements, links in respect of any Third Party Products. By Third Party Sites we mean websites, online or mobile services provided by third parties, including websites of advertisers and sponsors that may appear on business-standard.com. By Third Party Products we mean products or services provided by third parties.</span></p>
</li>
<li>
<p><span style="color:#000000;">Limitations of content published on Business-Standard.com:</span></p>
<p> </p>
<p><span style="color:#000000;">All content published on Business-Standard.com (including any information we publish regarding Third Party Products) is only for your general information and entertainment purposes and is not intended to address your particular requirements. In particular, Content created by Business Standard, its syndication partners and including UGC and any other content provided by third parties and distributed by business-standard.com, does not constitute any form of advice, recommendation, representation, endorsement or arrangement by Business Standard. It is not intended to be and should not be relied upon by users in making (or refraining from making) any specific investment, purchase, sale or other decisions. Appropriate independent advice should be obtained before making any such decision, such as from a qualified financial adviser.</span></p>
<p><span style="color:#000000;">Any agreements, transactions or other arrangements made between you and any third party named on (or linked to from) Business-Standard.com are at your own responsibility and entered into at your own risk. Any information that you receive via Business-standard.com, whether or not it is classified as "real time", may have stopped being current by the time it reaches you. Share price information may be rounded up/down and therefore may not be entirely accurate.</span></p>
</li>
<li>
<p><span style="color:#000000;">What we promise:</span></p>
<p> </p>
<p><span style="color:#000000;">Business Standard promises to develop and operate business-standard.com with reasonable skill and care and will use reasonable efforts to promptly remedy any faults of which it is aware or made aware of.</span></p>
</li>
<li>
<p><span style="color:#000000;">What we do not promise:</span></p>
<p> </p>
<p><span style="color:#000000;">Business Standard does not provide any promises or warranties other than defined above. The content is provided on an "as is" and "as available" basis. While the content creation team and its partners from whom content is syndicated make the best of their efforts to put together accurate, complete and authentic content, Business Standard and business-standard.com does not make any promises in respect of content published on its website and/or the services and functions available on or through business-standard.com or of the quality, completeness or accuracy of the information published on or linked to from business-standard.com other than as expressly stated above.</span></p>
<p><span style="color:#000000;">The above disclaimers apply to your use of Business-Standard.com. Without limiting the above, Business Standard is not liable for matters beyond its reasonable control. Business Standard does not control third party communications networks (including your internet service provider), the internet, acts of god or the acts of third parties.</span></p>
</li>
<li>
<p><span style="color:#000000;">Our financial responsibility to you:</span></p>
<p> </p>
<p><span style="color:#000000;">You agree that if we are in breach of these terms and conditions, we will only be responsible to you for any damages that you incur arising out of your use of Business-standard.com (to the extent that Business Standard\'s liability is not otherwise excluded by this section 9) as follows:</span></p>
<p><span style="color:#000000;">If you incur any loss as a result of using Business-Standard.com or any Content outside the scope of these terms and conditions, Business Standard accepts no responsibility (liability) to you for this.</span></p>
<p><span style="color:#000000;">You will be responsible for all claims, liabilities, damages, cost and expenses suffered or incurred as a result of your breach of these terms and conditions.</span></p>
<p><span style="color:#000000;">Business Standard will only be responsible for loss or damage you suffer which is the reasonably foreseeable result of Business-Standard\'s breach of a legal duty of care owed to you.</span></p>
<p><span style="color:#000000;">Business Standard will not be responsible to you for any loss or damage suffered by your business, such as lost data, lost profits or any business interruption.</span></p>
<p><span style="color:#000000;">If you have a premium subscription then you may terminate your subscription in writing to Business Standard. If business-standard.com is unavailable or inaccessible to you for more than 5 days in a 30 day period, as a result of the fault or failure of Business Standard, in which case we will refund you any amount that you have paid to us in advance that relates to any period which was still to run on your subscription. You may instead at your option receive a renewal to your subscription free-of-charge at the point of renewal.</span></p>
<p><span style="color:#000000;">The limitations of liability in this section 9 apply for the benefit of Business Standard, its affiliates, and all of their respective officers, directors, employees, agents or any company who we transfer our rights and obligations to in accordance with these terms and conditions.</span></p>
<p><span style="color:#000000;">To the full extent permitted by law you acknowledge and agree that our third party content and data suppliers have no liability whatsoever to you in respect of any of their data supplied to you as part of Business Standard.com</span></p>
<p><span style="color:#000000;">Business Standard\'s liability will not be limited in the case of death or personal injury directly caused by Business Standard\'s negligence in those countries where it is unlawful for Business Standard to seek to exclude such liability.</span></p>
</li>
<li> </li>
</ul>
<p> </p>
<h2><span style="color:#000000;">10. Choice of Law and Jurisdiction</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">If you are a user whose principal address or principal use of Business Standard Digital services occurs in any jurisdiction across the world then these terms and conditions will be subject to Indian law. In this case, to the extent possible in the applicable jurisdiction, both you and we agree that the competent courts in New Delhi, India will have non-exclusive jurisdiction to settle any dispute which may arise out of, under, or in connection with these terms and conditions.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">11. General</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">You may not license or transfer any of your rights under these terms and conditions. We may transfer any of our rights or obligations under these terms and conditions to any individual, organization or entity but if we do so we will ensure that any company/individual/entity to whom we transfer our rights or obligations will continue to honour your rights under them. Any resultant changes to the terms and conditions will be intimated to you via email and updated on this website.</span></p>
<p><span style="color:#000000;">If any provision of these terms and conditions is found to be invalid by any court having competent jurisdiction, the invalidity of that provision will not affect the validity of the remaining provisions of these terms and conditions, which will remain in full force and effect.</span></p>
<p><span style="color:#000000;">Failure by either party to exercise any right or remedy under these terms and conditions does not constitute a waiver of that right or remedy. Headings in these terms and conditions are for convenience only and will have no legal meaning or effect.</span></p>
<p><span style="color:#000000;">These terms and conditions constitute the entire agreement between you and Business Standard Private Limited for your use of the Business Standard website, Business Standard mobile and other digital products and services from Business Standard. They supersede all previous communications, representations and arrangements, either written or oral.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">12. Content ownership</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">All Content created and published on the digital platforms under the url https://www.business-standard.com the mobile browser site, applications, Business Standard E-paper belong to Business Standard Private Limited and its licensors who own all intellectual property rights (including copyright and database rights) No intellectual property rights in any of the content are transferred to you while you consume the content on this platform. "BS" and "Business Standard" are registered trade marks of Business Standard Private Limited and you may not use them without prior written permission from Business Standard. You are permitted to use the content on this platform only as set out in our Copyright Policy.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">13. Changes to Terms and Conditions and Validity</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">These terms and conditions were published on 1st June 2016 and replace with immediate effect the terms and conditions previously published.</span></p>
</li>
</ul>
<p> </p>',
'created_at' => '2020-08-28 22:08:42',
'updated_at' => '2021-10-27 04:34:17',
),
1 => 
array (
'id' => 2,
'key' => 'seller-register-term',
'title' => 'Seller Agreement',
'description' => '<h1><span style="color:#000000;">Terms &amp; Conditions</span></h1>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Private Limited.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">1) Introduction</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">This following sets out the terms and conditions on which you may use the content on</span><br /><span style="color:#000000;">business-standard.com website, business-standard.com\'s mobile browser site, Business Standard instore Applications and other digital publishing services (www.smartinvestor.in, www.bshindi.com and www.bsmotoring,com) owned by Business Standard Private Limited, all the services herein will be referred to as Business Standard Content Services.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">2) Registration Access and Use</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">We welcome users to register on our digital platforms. We offer the below mentioned registration services which may be subject to change in the future. All changes will be appended in the terms and conditions page and communicated to existing users by email.</span></p>
<p><span style="color:#000000;">Registration services are offered for individual subscribers only. If multiple individuals propose to access the same account or for corporate accounts kindly contact or write in to us. Subscription rates will vary for multiple same time access.</span></p>
<p><span style="color:#000000;">The nature and volume of Business Standard content services you consume on the digital platforms will vary according to the type of registration you choose, on the geography you reside or the offer you subscribe to.</span></p>
<p><span style="color:#000000;">a) Free Registration</span></p>
<p><span style="color:#000000;">b) Premium Registration</span></p>
<p><span style="color:#000000;">c) Special Offers</span></p>
<p><span style="color:#000000;">d) Combo registrations with partners</span></p>
<p><span style="color:#000000;">The details of the services and access offered for each account have been listed on</span><br /><span style="color:#000000;">www.business-standard.com/subscription-cart/product</span></p>
<p><span style="color:#000000;">We may in exceptional circumstances cease to provide subscription services. We will give you at least 7 days notice of this, if possible. If we do so, then we will have no further obligation to you.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">3) Privacy Policy and Registration</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">All information received by us from your registration on business-standard.com or other digital products of Business Standard will be used by Business Standard in accordance with our Privacy Policy. Kindly read the below mentioned details.</span></p>
<p><span style="color:#000000;">On registration, we expect you to provide Business Standard with an accurate and complete information of the compulsory fields. We also expect you to keep the information secure, specifically access passwords and payment information. Kindly update the information periodically to keep your account relevant. Business Standard will rely on any information you provide to us.</span></p>
<p><span style="color:#000000;">Each registration is for a single user only. On registration, you will choose a user name and password ("ID"). You are not allowed to share your ID or give access to your account to anyone else. Business Standard Premium subscription does not allow multiple users on a network or within an organization to use the same ID.</span></p>
<p><span style="color:#000000;">On knowledge, Business Standard may cancel or suspend your access to Business Standard premium services if it comes across you sharing your personal access without further obligation to you.</span></p>
<p><span style="color:#000000;">You are responsible for all the use of business-standard.com premium service made by you or anyone else using your ID and for preventing unauthorised use of your ID. If you believe there has been any breach of security such as the disclosure, theft or unauthorised use of your ID or any payment information, you must notify Business Standard immediately by e-mailing us at assist@bsmail.in. We recommend that you do not select an obvious user password (such as your name) and that you change it regularly.</span></p>
<p><span style="color:#000000;">If you provide Business Standard with an email address that will result in any messages Business Standard may send you being sent to you via a network or device operated or owned by a third party (e.g. your employer or college) then you promise that you are entitled to receive those messages. To ensure email\'s land in your inbox, you will add the bsmail receipt id to your safe list. You also agree that Business Standard may stop sending messages to you without notifying you.</span></p>
</li>
</ul>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">Important - Kindly note</span></p>
</li>
<li>
<p><span style="color:#000000;">(A) When you participate and choose to subscribe to joint content subscription offers that Business Standard partners with; your email id, access password and entered personal information will be shared with the participating content partner brand via an encrypted server to server protocol. This sharing is to facilitate your seamless access across the partner brand\'s platform. Once you login to the partner brand\'s platform, specific terms and privacy policies of the partner brand (mentioned on its website) will apply.</span></p>
</li>
<li>
<p><span style="color:#000000;">(B) Joint offers including special price offers are generally limited to new users on the partner sites. Clubbed Offers on partner sites will not be available to you should your email id be registered with the partner website.</span><br /><br /><span style="color:#000000;">You are advised to study the offer before you subscribe.</span><br /><br /><span style="color:#000000;">Merely subscribing to such a joint offer does not make you eligible to gain access to the partner platform. Business Standard does not take responsibility of providing you with an access on the partner site for existing users/subscribers of these sites.</span></p>
</li>
<li>
<p><span style="color:#000000;">(C) When you subscribe to joint offers supported by (non-content) brands; specific brands would ask you to share personal or private information in lieu of a value that the brand extends. By participating in such offers you implicitly and by confirming the terms of the offer you agree to share your registration information and personal data with the concerned brand. The brand or its associates may use this personal information to contact you with their promotional offers. Further by participating to such offers your will be additionally governed by the privacy policy and terms and conditions of the concerned brand. You are advised to go through them carefully before you decide to opt in.</span></p>
</li>
<li>
<p><span style="color:#000000;">As a registered user of or subscriber to business-standard.com you may choose to use business-standard.com\'s "Remember me" log in feature that enables you to be logged in automatically to business-standard.com whenever you visit business-standard.com without having to manually log in each time. We recommend that you do not enable this feature on any computer that is or may be used by anyone other than you in order to prevent unauthorized access by third parties to both your subscription details and features of business-standard.com personal to you.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">4. Personal Subscription Services</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">Personal subscription services include Business Standard premium access to behind the pay wall content. When you subscribe to Business Standard Premium access, you gain access to opinion pieces, comment and exclusive features specially chosen for you by the Business Standard editors.</span></p>
<p><span style="color:#000000;">The nature of content behind the pay wall is subject to change; the final decision of which lies with the Editor.</span></p>
</li>
<li>
<p><span style="color:#000000;">Types of subscription:</span></p>
<p><span style="color:#000000;">Services may differ from country to country and the device from which you subscribe. Subscriptions packages and price may also vary in time.</span></p>
</li>
<li>
<p><span style="color:#000000;">Contract formation:</span></p>
<p> </p>
<p><span style="color:#000000;">Business Standard will try to process your subscription promptly but does not guarantee that your subscription will be activated by any specified time. By submitting your payment and other subscription details, you are making an offer to us to buy a subscription. Your offer will only be accepted by us and a contract formed when we have successfully verified your payment details and email address, at which point we will provide you with access to your subscription. Business Standard reserves the right to reject any offer in its discretion, for any or no reason.</span></p>
<p><span style="color:#000000;">Business Standard may partner with third party content providers to offer bundled services, under which the payment for both the services will be collected by Business Standard. Business Standard will endeavor to provide a seamless access to all such third parties with a single one point access. There could be a gap in this seamless access due to a technology breakdown, temporary disconnection of the internet connection or any factors beyond the reasonable control of Business Standard. In such cases the contract will be formed once the access to the partner services are restored.</span></p>
<p><span style="color:#000000;">You are requested to read through the terms and conditions offered by content partners to Business Standard. Most partners offer bundled services for new users. Existing subscribers of partners are not eligible for bundled subscription. Should you happen to be one please note that the partner will be liable to reject your offer to subscribe under the bundled subscription not leading to contract formation as a result.</span></p>
</li>
<li>
<p><span style="color:#000000;">Payment details:</span></p>
<p><span style="color:#000000;">When you purchase a subscription, you must provide us with complete and accurate payment information. By submitting payment details you promise that you are entitled to purchase a subscription using those payment details. If we do not receive payment authorization or any authorization is subsequently cancelled, we may immediately terminate or suspend your access to your subscription. In suspicious circumstances we may contact the issuing bank/payment provider and/or law enforcement authorities or other appropriate third parties. If you are entitled to a refund under these terms and conditions we will credit that refund to the card or other payment method you used to submit payment, unless it has expired in which case we will contact you.</span></p>
<p><span style="color:#000000;">Business Standard will use the services of quality third party payment service providers to process your payment. Payment options are primarily through credit card. Business Standard may offer other payment mechanisms from time to time.</span></p>
</li>
<li>
<p><span style="color:#000000;">Pricing:</span></p>
<p><span style="color:#000000;">The subscription price will be made clear to you on our sign-up pages or otherwise during the sign-up process and may vary from time to time, by region or by country. You agree to pay the fees at the rates notified to you at the time you purchase your subscription. Subscription to premium services on Business Standard are generally of monthly frequency. Business Standard however may choose to offer fixed term or fixed payment frequency offers from time to time. The currency in which your subscription is payable will be specified during the order process, depending on the service and your country of residence. Eligibility for any discounts is ascertained at the time you subscribe and cannot be changed during the term of your subscription. We will always tell you in advance of any increase in the price of your subscription and offer you an opportunity to cancel it if you do not wish to pay the new price.</span></p>
</li>
<li>
<p><span style="color:#000000;">Taxes:</span></p>
<p><span style="color:#000000;">Subscription and access to content services fall under the purview of Service Tax as per the current indirect taxation policy, Government of India. Taxes are applicable for consumption of content on the website and other products of Business Standard uniformly for customers based in India and outside the country. Unless otherwise indicated, prices stated on our website are inclusive of applicable Service Tax, any applicable value added tax (VAT) or other sales taxes.</span></p>
</li>
<li>
<p><span style="color:#000000;">Pricing errors:</span></p>
<p><span style="color:#000000;">If we incorrectly state a price to you whether online or otherwise, we are not obliged to provide you with a subscription at that price, even if we have mistakenly accepted your offer to buy a subscription at that price, and we reserve the right to subsequently notify you of any pricing error. If we do this, you may cancel the subscription without any obligation to us and we will refund you any money you have paid us in full, or you may pay the correct price. If you refuse to exercise either of these choices then we may cancel your subscription and will refund you any money you have paid us in full. We will always act in good faith in determining whether a genuine pricing error has occurred.</span></p>
</li>
<li>
<p><span style="color:#000000;">Other costs:</span></p>
<p><span style="color:#000000;">In addition to any subscription fees you pay, you are responsible for paying any internet connection or other telecommunications charges that you may incur by accessing the premium services or using the services available on it. For example, if you use any of our mobile services then your network operator may charge you for data or messaging services.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">5. Subscription Period, Renewal and Cancellation of Personal Subscriptions</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">Renewals:</span></p>
<p><span style="color:#000000;">If you chose to pay monthly, your subscription will continue until you tell us that you no longer wish to receive it, in which case you will stop paying the monthly fees. We will notify you at least 7 days in advance of any changes to the price in your subscription that will apply upon next monthly renewal.</span></p>
<p><span style="color:#000000;">Please visit the "How to cancel" section below for details of how to cancel your monthly subscription.</span></p>
<p><span style="color:#000000;">Unless you notify us before the end of your chosen subscription period that you no longer wish to receive it, your subscription will renew for another period as applicable. We will charge the subscription using the same card or other payment method that you previously used.</span></p>
</li>
<li>
<p><span style="color:#000000;">Cancellation Policy</span></p>
<p> </p>
<p><span style="color:#000000;">For Digital subscriptions by placing your order you agree that we may start your subscription immediately upon our accepting your order. This means that you are not entitled to a refund if you change your mind after we have provided you with access to your subscription.</span></p>
<p><span style="color:#000000;">Except as set out in the previous section, you do not have any right to cancel your subscription or any part of it until the end of your then current subscription period.</span></p>
<p><span style="color:#000000;">Although you may notify us of your intention to cancel at any time, such notice will only take effect at the end of your then current subscription period, and you will not receive a refund</span></p>
</li>
<li>
<p><span style="color:#000000;">How to cancel?</span></p>
<p><span style="color:#000000;">You may notify us of your wish to cancel your subscription by contacting our Customer Services team at assist@bsmail.in. To enable us cancel your subscription please provide us with your complete name (as was in the subscription order form), Email address and Contact number clearly written out.</span></p>
</li>
<li>
<p><span style="color:#000000;">Cancellation by us:</span></p>
<p> </p>
<p><span style="color:#000000;">Business Standard reserves the right to suspend or terminate your subscription if you breach these terms and conditions, with or without notice and without further obligation to you. We may also suspend or terminate your subscription if we are prevented from providing services to you by circumstances beyond our control. If we terminate your subscription for any reason and/or permanently cease publishing business-standard.com, or cease to provide subscription services then, unless there are exceptional circumstances, we will provide you with a pro rata refund to your credit card. This means that we will refund you with any amounts that you have paid us in advance that relate to any remaining and unexpired period of your subscription.</span></p>
</li>
<li>
<p><span style="color:#000000;">Cancellation of your registration:</span></p>
<p> </p>
<p><span style="color:#000000;">If you are a registered user, but not a subscriber, then Business Standard reserves the right to suspend or terminate your registration at any time, with or without notice and without further obligation to you. If you would like to cancel your registration then please contact our customer services team at assist@bsmail.in.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">6. Who Your Personal Subscription Contract is with</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">If you buy a Business-standard.com digital subscription and are resident in any country, then you will be contracting with Business Standard Private Limited, Nehru House, 4, Bahadur Shah Zafar Marg, New Delhi - 110 002</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">7. User Generated Content</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">Business-standard.com includes comments sections, blogs and other interactive features that allow interaction between users and between users and Business Standard. We call the information posted by or contributed by users "User Generated Content" or "UGC".</span></p>
<p><span style="color:#000000;">If you wish to view or participate by way of UGC then you must comply with specific rules and guidelines. We also recommend that you read our Comments Guidelines which provide further guidance in relation to commenting on Business-standard.com.</span></p>
<p><span style="color:#000000;">You are responsible for all the content of any of your UGC that you or we publish. You are financially responsible to us for any claim against us by any third party that your UGC is not in accordance with the UGC policy</span></p>
<p><span style="color:#000000;">You further agree that you will:</span></p>
<p><span style="color:#000000;">* Only publish UGC that is your original content and will not infringe the copyright or other rights of any third party when publishing UGC. Not post, link to or otherwise publish any UGC containing any form of advertising or promotion for goods and services or any spam or other form of unsolicited communication.</span></p>
<p><span style="color:#000000;">* Not post, link to or otherwise publish any UGC with recommendations to buy or not buy a particular share or other investment or which contain confidential information of another party or which otherwise have the purpose of affecting the price or value of any share or other investment.</span></p>
<p><span style="color:#000000;">* Not post, link to or otherwise publish any UGC that is threatening, offensive, libellous, indecent or otherwise unlawful.</span></p>
<p><span style="color:#000000;">* Not post comments that are discriminatory in nature, for example, comments which make attacks on the grounds of race, religion, sex, gender, sexual orientation, disability or age.</span></p>
<p><span style="color:#000000;">* Respectfully challenge different points of view but not personally attack other commentators.</span></p>
<p><span style="color:#000000;">* Not disguise the origin of any UGC and not impersonate any person or entity (including Business Standard employees or Forum guests or hosts) or misrepresent any connection with any person or entity.</span></p>
<p><span style="color:#000000;">* Not post or otherwise publish any UGC unrelated to the Forum or the Forum\'s topic.</span></p>
<p><span style="color:#000000;">* Not post or transmit any UGC that contains software viruses, files or code designed to interrupt, destroy or limit the functionality of Business-Standard.com or any computer software or equipment.</span></p>
<p><span style="color:#000000;">* Not collect or store other users personal data.</span></p>
<p><span style="color:#000000;">* Not restrict or inhibit any other user from using the Forums.</span></p>
<p><span style="color:#000000;">* Comply with the guidelines for commenting set out in our Commenting FAQ.</span></p>
<p><span style="color:#000000;">It is not possible for Business Standard to fully monitor all UGC published on business-standard.com but where we have actually received notice of any UGC that is potentially misleading, untrue, offensive, unlawful, infringes third party rights or is potentially in breach of these terms and conditions, then we will review that UGC, decide whether to remove it from business-standard.com and act accordingly. This may include banning a user from participation in UGC on Business-standard.com. If you believe that any UGC published on business-standard.com infringes any legal rights that you may have or is not allowed under these terms and conditions, please notify us immediately with specific details by contacting us at assist@bsmail.in or feedback@bsmail.in</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">8. Third Party Sites and Services</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">Business-standard.com may contain links to other Internet websites or online and mobile services provided by independent third parties, including websites of our advertisers and sponsors (what we call "Third Party Sites"), either directly or through frames. Third Party Sites also include co-branded with Business Standard and so include Business Standard\'s trade marks.</span></p>
<p><span style="color:#000000;">It is your decision whether you purchase or use any third party products or services made available on or via Third Party Sites and you should read Section 9 below carefully. Our Privacy Policy does not apply to Third Party Sites.</span></p>
<p><span style="color:#000000;">Business-Standard.com contains advertising and sponsorship. Advertisers and sponsors are responsible for ensuring that material submitted for inclusion on Business-standard.com complies with international and national law. Business Standard is not responsible for any error or inaccuracy in advertising, incorrect links or sponsorship material.</span></p>
<p><span style="color:#000000;">Copyright in any software that is made available for download from Business-standard.com belongs to Business Standard or its suppliers or contributors. Your use of the software is governed by the terms of any licence agreement that may accompany or be included with the software. Do not install or use any of this software unless you agree to such licence agreement. Business Standard is not responsible for any technical or other issues that may happen if you download third party software.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">9. Our Responsibilities towards You</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">A summary of what this section means: this section is important and you should read it carefully. It makes clear to what extent, if any, Business Standard accepts responsibility (liability) to you for your use of Business-standard.com or in respect of any third party products or services that we refer to or advertisements or any other link to on business-standard.com. Unless you are a premium subscriber to Business-standard.com, we accept no financial responsibility to you arising from your use of business-standard.com or the content, advertisements and links published on business-standard.com. If you are a Business Standard premium service subscriber, we limit our financial responsibility to you arising from your use of Business-Standard.com and/or the Premium Services you consume on business-standard.com to the price you paid for your subscription.</span></p>
<p><span style="color:#000000;">In no circumstances do we accept responsibility for your use of Third Party Sites or services not limited to advertisements, links in respect of any Third Party Products. By Third Party Sites we mean websites, online or mobile services provided by third parties, including websites of advertisers and sponsors that may appear on business-standard.com. By Third Party Products we mean products or services provided by third parties.</span></p>
</li>
<li>
<p><span style="color:#000000;">Limitations of content published on Business-Standard.com:</span></p>
<p> </p>
<p><span style="color:#000000;">All content published on Business-Standard.com (including any information we publish regarding Third Party Products) is only for your general information and entertainment purposes and is not intended to address your particular requirements. In particular, Content created by Business Standard, its syndication partners and including UGC and any other content provided by third parties and distributed by business-standard.com, does not constitute any form of advice, recommendation, representation, endorsement or arrangement by Business Standard. It is not intended to be and should not be relied upon by users in making (or refraining from making) any specific investment, purchase, sale or other decisions. Appropriate independent advice should be obtained before making any such decision, such as from a qualified financial adviser.</span></p>
<p><span style="color:#000000;">Any agreements, transactions or other arrangements made between you and any third party named on (or linked to from) Business-Standard.com are at your own responsibility and entered into at your own risk. Any information that you receive via Business-standard.com, whether or not it is classified as "real time", may have stopped being current by the time it reaches you. Share price information may be rounded up/down and therefore may not be entirely accurate.</span></p>
</li>
<li>
<p><span style="color:#000000;">What we promise:</span></p>
<p> </p>
<p><span style="color:#000000;">Business Standard promises to develop and operate business-standard.com with reasonable skill and care and will use reasonable efforts to promptly remedy any faults of which it is aware or made aware of.</span></p>
</li>
<li>
<p><span style="color:#000000;">What we do not promise:</span></p>
<p> </p>
<p><span style="color:#000000;">Business Standard does not provide any promises or warranties other than defined above. The content is provided on an "as is" and "as available" basis. While the content creation team and its partners from whom content is syndicated make the best of their efforts to put together accurate, complete and authentic content, Business Standard and business-standard.com does not make any promises in respect of content published on its website and/or the services and functions available on or through business-standard.com or of the quality, completeness or accuracy of the information published on or linked to from business-standard.com other than as expressly stated above.</span></p>
<p><span style="color:#000000;">The above disclaimers apply to your use of Business-Standard.com. Without limiting the above, Business Standard is not liable for matters beyond its reasonable control. Business Standard does not control third party communications networks (including your internet service provider), the internet, acts of god or the acts of third parties.</span></p>
</li>
<li>
<p><span style="color:#000000;">Our financial responsibility to you:</span></p>
<p> </p>
<p><span style="color:#000000;">You agree that if we are in breach of these terms and conditions, we will only be responsible to you for any damages that you incur arising out of your use of Business-standard.com (to the extent that Business Standard\'s liability is not otherwise excluded by this section 9) as follows:</span></p>
<p><span style="color:#000000;">If you incur any loss as a result of using Business-Standard.com or any Content outside the scope of these terms and conditions, Business Standard accepts no responsibility (liability) to you for this.</span></p>
<p><span style="color:#000000;">You will be responsible for all claims, liabilities, damages, cost and expenses suffered or incurred as a result of your breach of these terms and conditions.</span></p>
<p><span style="color:#000000;">Business Standard will only be responsible for loss or damage you suffer which is the reasonably foreseeable result of Business-Standard\'s breach of a legal duty of care owed to you.</span></p>
<p><span style="color:#000000;">Business Standard will not be responsible to you for any loss or damage suffered by your business, such as lost data, lost profits or any business interruption.</span></p>
<p><span style="color:#000000;">If you have a premium subscription then you may terminate your subscription in writing to Business Standard. If business-standard.com is unavailable or inaccessible to you for more than 5 days in a 30 day period, as a result of the fault or failure of Business Standard, in which case we will refund you any amount that you have paid to us in advance that relates to any period which was still to run on your subscription. You may instead at your option receive a renewal to your subscription free-of-charge at the point of renewal.</span></p>
<p><span style="color:#000000;">The limitations of liability in this section 9 apply for the benefit of Business Standard, its affiliates, and all of their respective officers, directors, employees, agents or any company who we transfer our rights and obligations to in accordance with these terms and conditions.</span></p>
<p><span style="color:#000000;">To the full extent permitted by law you acknowledge and agree that our third party content and data suppliers have no liability whatsoever to you in respect of any of their data supplied to you as part of Business Standard.com</span></p>
<p><span style="color:#000000;">Business Standard\'s liability will not be limited in the case of death or personal injury directly caused by Business Standard\'s negligence in those countries where it is unlawful for Business Standard to seek to exclude such liability.</span></p>
</li>
<li> </li>
</ul>
<p> </p>
<h2><span style="color:#000000;">10. Choice of Law and Jurisdiction</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">If you are a user whose principal address or principal use of Business Standard Digital services occurs in any jurisdiction across the world then these terms and conditions will be subject to Indian law. In this case, to the extent possible in the applicable jurisdiction, both you and we agree that the competent courts in New Delhi, India will have non-exclusive jurisdiction to settle any dispute which may arise out of, under, or in connection with these terms and conditions.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">11. General</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">You may not license or transfer any of your rights under these terms and conditions. We may transfer any of our rights or obligations under these terms and conditions to any individual, organization or entity but if we do so we will ensure that any company/individual/entity to whom we transfer our rights or obligations will continue to honour your rights under them. Any resultant changes to the terms and conditions will be intimated to you via email and updated on this website.</span></p>
<p><span style="color:#000000;">If any provision of these terms and conditions is found to be invalid by any court having competent jurisdiction, the invalidity of that provision will not affect the validity of the remaining provisions of these terms and conditions, which will remain in full force and effect.</span></p>
<p><span style="color:#000000;">Failure by either party to exercise any right or remedy under these terms and conditions does not constitute a waiver of that right or remedy. Headings in these terms and conditions are for convenience only and will have no legal meaning or effect.</span></p>
<p><span style="color:#000000;">These terms and conditions constitute the entire agreement between you and Business Standard Private Limited for your use of the Business Standard website, Business Standard mobile and other digital products and services from Business Standard. They supersede all previous communications, representations and arrangements, either written or oral.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">12. Content ownership</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">All Content created and published on the digital platforms under the url https://www.business-standard.com the mobile browser site, applications, Business Standard E-paper belong to Business Standard Private Limited and its licensors who own all intellectual property rights (including copyright and database rights) No intellectual property rights in any of the content are transferred to you while you consume the content on this platform. "BS" and "Business Standard" are registered trade marks of Business Standard Private Limited and you may not use them without prior written permission from Business Standard. You are permitted to use the content on this platform only as set out in our Copyright Policy.</span></p>
</li>
</ul>
<p> </p>
<h2><span style="color:#000000;">13. Changes to Terms and Conditions and Validity</span></h2>
<p> </p>
<ul>
<li>
<p><span style="color:#000000;">These terms and conditions were published on 1st June 2016 and replace with immediate effect the terms and conditions previously published.</span></p>
</li>
</ul>
<p> </p>',
'created_at' => '2020-08-28 22:08:42',
'updated_at' => '2021-10-27 04:34:22',
),
));
        
        
    }
}