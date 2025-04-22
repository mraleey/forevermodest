<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\FAQModel; // Correct model reference
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        // Fetch categorized FAQs from the database
        $faqs = FAQModel::all()->groupBy('category');

        // If there are no FAQs in the database, use default FAQs
        if ($faqs->isEmpty()) {
            $faqs = collect([
                'Orders & Tracking' => collect([
                    ['question' => 'How do I track my order?', 'answer' => 'You can track your order from your account dashboard under the "Orders" section.'],
                    ['question' => 'Can I modify my order after placing it?', 'answer' => 'Once an order is placed, it can only be modified within 2 hours. Contact support for assistance.'],
                    ['question' => 'What should I do if my order is delayed?', 'answer' => 'Please check your order tracking details. If delayed beyond the estimated delivery date, contact support.'],
                ]),
                'Payments & Billing' => collect([
                    ['question' => 'What payment methods are accepted?', 'answer' => 'We accept Visa, MasterCard, PayPal, and Cash on Delivery.'],
                    ['question' => 'Is it safe to enter my credit card details?', 'answer' => 'Yes, we use SSL encryption and comply with PCI-DSS standards for secure payments.'],
                    ['question' => 'Do you offer refunds for canceled orders?', 'answer' => 'Yes, refunds are processed within 5-7 business days after order cancellation.'],
                ]),
                'Returns & Refunds' => collect([
                    ['question' => 'What is your return policy?', 'answer' => 'You can return any unused product within 14 days of delivery for a full refund.'],
                    ['question' => 'How long does it take to process a refund?', 'answer' => 'Refunds are typically processed within 5-7 business days after receiving the returned product.'],
                    ['question' => 'Are there any items that cannot be returned?', 'answer' => 'Yes, perishable goods, customized products, and items marked as non-returnable cannot be returned.'],
                ]),
                'Customer Support' => collect([
                    ['question' => 'How do I contact customer support?', 'answer' => 'You can reach out to our support team via email at support@example.com or call our helpline.'],
                    ['question' => 'What are your customer service hours?', 'answer' => 'Our customer support is available 24/7 via chat and from 9 AM to 6 PM (Mon-Fri) via phone.'],
                ]),
            ]);
        }

        return view('frontend.faqs', compact('faqs'));
    }
}
