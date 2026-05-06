<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminReturnProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_return_products')->delete();
        
        \DB::table('admin_return_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Damaged Goods',
                'created_by' => 1,
                'return_acp' => 'auto',
                'amount' => '3',
                'days' => '15',
                'des' => '<p><strong>We ask that you report to Customer Service the receipt of a damaged product within 48 hours of delivery and do not discard the damaged item and its packaging. If you fail to report damages in this time frame, we won\'t be able to file a claim with the carrier which means we can\'t accept responsibility for the damages. Once you notify us that your product was damaged, Lumens will file a claim with the shipper. Claims typically take 8-10 business days to process. Please do not discard the damaged product or the packaging. Typically the shipper will be dispatched to pick the item up for inspection and processing. We\'ll need your help in making it available for pickup on the scheduled date and time. In most cases, we are able to order a replacement fixture at no cost to you as soon as the damaged one has been picked up. However, the outcome of the claim may result in a charge for the replacement item. Replacements are subject to availability. If you receive a product that has broken glass or a dented shade and report it within 48 hours, we will provide replacement glass or shade at no additional charge. If you wish to return a product that was received with broken glass or a dented shade, the standard return policy will apply. Lumens is not responsible for reimbursement of any labor costs or project delays that may occur due to the receipt of damaged goods. We always recommend that you wait to schedule installation until after your fixture has arrived and been inspected.</strong></p>',
                'status' => '1',
                'created_at' => '2020-01-15 17:54:43',
                'updated_at' => '2021-05-15 18:21:50',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Return Policy',
                'created_by' => 1,
                'return_acp' => 'auto',
                'amount' => '8',
                'days' => '30',
            'des' => 'At Lumens, we are committed to our customer satisfaction. For most products on our website, if you don\'t like it, you may return it within 30 days for a refund (in new, uninstalled condition and original packaging).

To request a return, click here to find your order. Locate your order and the line item that you would like to return and follow the instructions. Once your return request has been authorized you can download your shipping labels or receive them by email. Simply print, attach to the box and drop off at your local UPS store.

Your refund credit will be issued after the item has been returned and inspected.

The cost of the return shipping will be deducted from the credit amount. In other words, you are responsible for the return shipping cost of any item you return.

Any expedited shipping charges you paid on the original order are non-refundable.

EXCEPTIONS - We cannot accept returns of:
Products that have been clearly identified as non-returnable on the Product Details Page
Products that have been installed or assembled
Products that are not in the original condition and packaging
Products with unwrapped crystals
Bedding or other linens that have been opened (even if washed).
Products that are Made-to-Order, Custom or Special Order to your specifications
Light Bulbs
Large quantities of the same product (6 or more)
Lumens Annex, Open-Box items or Clearance merchandise
Before ordering large quantities or special order or custom products we encourage you to ask for as much information as you need - including swatches, finish samples etc.

Note that a request to return items totaling more than $5,000 may incur restocking fees. We reserve the right to apply refunds in the form of a store credit in certain circumstances.

Please note that due to customs, shipping and duty fees, we are unable to accept returns on any Canadian orders. All orders shipped to Canada are final sale.',
                'status' => '1',
                'created_at' => '2020-01-15 17:55:47',
                'updated_at' => '2020-01-15 17:55:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Defective Goods',
                'created_by' => 1,
                'return_acp' => 'auto',
                'amount' => '0',
                'days' => '12',
            'des' => 'Products with factory defects, missing parts or other problems originating prior to shipment - are handled differently than Damaged Goods (items that have been damaged by the carrier while in transit) which are discussed in the section below.

We ask that you report any product defects within 30 days of you receiving your order. After 30 days, Lumens will make every attempt to replace your product, however charges may apply.

Replacement requests always receive priority handling at Lumens. We realize the delays they can cause. They are however subject to availability.

Replacements are sent free of charge and we will cover any return shipping costs and the shipping of the replacement product. We will send you return instructions accordingly. Do not discard the defective product until you receive instructions from Lumens. Failure to return the defective product or failure to send pictures when we ask for them may result in delays and there may be a charge for the replacement item and we would all like to avoid this.

Nothing is more frustrating than waiting for a replacement, only to discover that the problem was not properly diagnosed. Help us eliminate installation issues and other non-fixture variables before ordering a replacement. Please be patient with our tech support team and with any manufacturer representatives who ask to work with you to accurately diagnose the problem, and please understand that returned items that are found to be in working condition may not be eligible for a refund or may be subject to a restocking fee.

Lumens is not responsible for reimbursement of any labor costs or project delays that may occur due to the receipt of defective goods.',
                'status' => '1',
                'created_at' => '2020-01-15 17:56:24',
                'updated_at' => '2020-01-15 17:56:24',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Electronic goods and accessories',
                'created_by' => 1,
                'return_acp' => 'admin',
                'amount' => '5',
                'days' => '10',
                'des' => '<p>Most items purchased from sellers listed on Amazon.in are returnable within the return window, except those that are explicitly identified as not returnable.</p>
<ul>
<li><span class="a-list-item">it is determined that the product was not damaged while in your possession;</span></li>
<li><span class="a-list-item">the product is not different from what was shipped to you;</span></li>
<li><span class="a-list-item">the product is returned in original condition (with brand&rsquo;s/manufacturer\'s box, MRP tag intact, user manual, warranty card and accessories)</span></li>
</ul>
<p>&nbsp;</p>
<p>For the products that are returned by the customer, the refund is issued to the original payment method (in case of pre-paid transactions) or to the bank account / as Amazon Pay balance (in case of Pay on Delivery orders), the details for making such refund and the timelines are detailed in the refund policy available</p>',
                'status' => '1',
                'created_at' => '2021-08-02 09:44:38',
                'updated_at' => '2021-08-02 09:44:38',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'A Test Policy',
                'created_by' => 1,
                'return_acp' => 'auto',
                'amount' => '5',
                'days' => '7',
                'des' => '<p>Some Return Policy Dtls.&nbsp;</p>',
                'status' => '1',
                'created_at' => '2021-08-02 09:54:10',
                'updated_at' => '2021-08-02 09:54:10',
            ),
        ));
        
        
    }
}