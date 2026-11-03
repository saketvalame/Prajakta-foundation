<?php
/**
 * Donation thank-you page content. Receipt values are sample data that the
 * donate form replaces through the URL until a payment gateway is connected.
 *
 * @package prajkta
 */

return array(
	'hero'    => array(
		'title'      => 'Thank You for Your <span>Generosity!</span>',
		'text'       => "Your donation has been received successfully.\n\nTogether, we are creating real change in the lives of those who need it most.",
		'btn1_label' => 'View Receipt',
		'btn1_url'   => '#receipt',
		'btn2_label' => 'Back to Home',
		'btn2_url'   => '{home}',
		'items'      => array(
			array( 'icon' => 'heart', 'title' => 'Your Impact', 'text' => 'Your support helps us build a better and stronger tomorrow.' ),
			array( 'icon' => 'mail', 'title' => 'What\'s Next?', 'text' => 'You will receive an email with your receipt and donation details shortly.' ),
			array( 'icon' => 'sun', 'title' => 'Spread Hope', 'text' => 'Share your kindness and inspire others to make a difference.' ),
			array( 'icon' => 'heart', 'title' => 'Stay Connected', 'text' => 'Follow our journey and see how your support creates lasting impact.' ),
		),
	),
	'receipt' => array(
		'eyebrow'    => 'Your Contribution Matters',
		'title'      => "Here's Your\n<span>Donation Receipt</span>",
		'text'       => "Thank you for supporting Prajkta Foundation.\nWe truly appreciate your generosity and trust.",
		'points'     => array(
			array( 'icon' => 'shield-check', 'title' => 'Trusted & Transparent', 'text' => 'We ensure your contribution is used responsibly and effectively.' ),
			array( 'icon' => 'sun', 'title' => 'Making an Impact', 'text' => 'Your support empowers communities and creates lasting change.' ),
			array( 'icon' => 'heart', 'title' => 'Grateful for You', 'text' => 'We are truly grateful for your trust and support.' ),
		),
		'btn1_label' => 'Download Receipt',
		'btn2_label' => 'Share Your Impact',
		'tagline'    => "Empowering communities.\nCreating lasting change.",
		'number'     => 'PF/2024-25/000568',
		'date'       => '12 May 2024, 10:45 AM',
		'name'       => 'Meena Rajasekaran',
		'email'      => 'meena.r@email.com',
		'phone'      => '+91 98765 43210',
		'purpose'    => 'Education Program',
		'type'       => 'One-time Donation',
		'amount'     => '2,500.00',
	),
	'band'    => array(
		'title'     => 'Your kindness creates hope.',
		'text'      => 'Together, we are building a better and brighter future for countless lives.',
		'btn_label' => 'Explore Our Work',
		'btn_url'   => '{our-work}',
	),
);
