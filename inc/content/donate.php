<?php
/**
 * Donate page content.
 *
 * @package prajkta
 */

return array(
	'hero'         => array(
		'title'      => "Your Kindness Creates\nLasting Change.",
		'text'       => 'Your contribution, whether time, resources, or expertise, fuels a sustainable cycle of hope and empowerment.',
		'btn1_label' => 'Donate Now',
		'btn1_url'   => '#give',
		'btn2_label' => 'Watch Our Story',
		'btn2_url'   => '{stories}#films',
		'image'      => 'donate-hero.jpg',
	),
	'transparency' => array(
		'title'     => 'Radical Transparency',
		'text'      => 'We believe you should know exactly where your money goes. Every rupee is tracked and audited by third-party firms to ensure maximum impact.',
		'btn_label' => 'Download Annual Report 2023',
		'btn_url'   => '{transparency}#reports',
		'items'     => array(
			array( 'tone' => 'orange', 'icon' => 'chart', 'title' => '94% Program Efficiency', 'text' => 'Only 6 paise of every rupee goes to administrative costs. We keep our operations lean to serve more people.', 'progress' => '94' ),
			array( 'tone' => 'blue', 'icon' => 'target', 'title' => 'Real-time Updates', 'text' => 'Donors receive GPS-tagged photos and field reports showing the actual beneficiaries of their specific contribution.', 'progress' => '' ),
			array( 'tone' => 'white', 'icon' => 'badge-check', 'title' => 'Independent Audits', 'text' => 'Our accounts are audited quarterly by certified international firms and published publicly on our portal.', 'progress' => '' ),
		),
	),
	'form'         => array(
		'title'       => 'Support a cause that matters',
		'text'        => 'Your generosity fuels our mission. Together, we provide vital education, healthcare, and community support to those who need it most.',
		'why_title'   => 'Why Donate To Us',
		'why'         => array(
			array( 'icon' => 'shield', 'title' => 'Secure Payment', 'text' => 'Your transaction is encrypted and completely secure.' ),
			array( 'icon' => 'eye', 'title' => 'Transparent Usage', 'text' => 'We ensure 100% of your donation reaches the intended cause.' ),
			array( 'icon' => 'badge-check', 'title' => 'Verified NGO', 'text' => 'Registered non-profit organization ensuring accountable impact.' ),
		),
		'tax_title'   => 'Tax Exemption',
		'tax_text'    => 'Donations are eligible for tax benefits under applicable laws. A receipt will be sent to your email immediately upon successful transaction.',
		'amounts'     => '500, 1000, 2500, 5000',
		'recommended' => '2500',
		'purposes'    => 'General Fund (Greatest Need), Education Program, Healthcare Program, Environment Program, Scholarships',
		'btn_label'   => 'Donate Securely',
	),
	'closing'      => array(
		'title'      => 'Ready to be a hero?',
		'text'       => 'Join 15,000+ donors who are building a more equitable world every single day.',
		'btn1_label' => 'Start Your Impact Now',
		'btn1_url'   => '#give',
		'btn2_label' => '',
		'btn2_url'   => '',
		'image'      => 'cta-bg.jpg',
	),
);
