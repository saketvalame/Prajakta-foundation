<?php
/**
 * Site-wide content. Editable on the "Site Content" options page (ACF Pro).
 *
 * @package prajkta
 */

return array(
	'header'  => array(
		'phone'          => '+91 123 456 7890',
		'cta_label'      => 'Register',
		'cta_url'        => '{volunteer}#join',
		'home_cta_label' => 'Get in touch',
		'home_cta_url'   => '{contact}',
	),
	'footer'  => array(
		'about'            => 'Empowering communities through sustainable development, education, and health initiatives. Rooted in compassion, driven by transparency.',
		'linkedin_url'     => '#',
		'instagram_url'    => '#',
		'community_url'    => '{volunteer}',
		'email'            => 'contact@prajktafoundation.org',
		'newsletter_label' => 'Join our newsletter',
		'newsletter_text'  => 'Get monthly updates on our impact and news',
		'copyright'        => '© 2026 Prajkta Foundation. All rights reserved. Designed By HashtagDesigns',
		'privacy_url'      => '#',
		'terms_url'        => '#',
		'legal_url'        => '{transparency}',
	),
	'faq'     => array(
		'title'          => 'Frequently asked questions',
		'items'          => array(
			array(
				'question' => 'What does Prajkta Foundation do?',
				'answer'   => 'We work hand-in-hand with communities across India on four pillars: quality education, accessible healthcare, environmental restoration and merit scholarships.',
			),
			array(
				'question' => 'How can I support the foundation?',
				'answer'   => 'You can donate to a specific cause or our general fund, volunteer your time and skills, or partner with us through your company\'s CSR programme.',
			),
			array(
				'question' => 'How are donations used?',
				'answer'   => '92% of every donation goes directly to programme implementation. Our accounts are audited by independent firms and published in our annual reports.',
			),
			array(
				'question' => 'Can I volunteer with Prajkta Foundation?',
				'answer'   => 'Yes. Students, professionals and groups can volunteer on the ground or remotely. Fill out the application on our Volunteer page and our coordinator will reach out within 48 hours.',
			),
			array(
				'question' => 'Do you offer corporate partnerships or CSR opportunities?',
				'answer'   => 'We design CSR and employee volunteering programmes aligned with your ESG goals, with quarterly impact audits and a live reporting dashboard.',
			),
		),
		'card_title'     => "Have Questions?\nWe're Here to Help.",
		'card_text'      => 'Learn more about our programs, impact, and how you can be part of the change. Our team is happy to guide you.',
		'card_btn_label' => 'Contact Us Directly',
		'card_btn_url'   => '{contact}',
	),
	'voices'  => array(
		'title'   => 'Voices of Impact',
		'text'    => 'Voices that reflect the trust, transparency, and impact behind everything we do.',
		'photo_1' => 'voice-1.jpg',
		'photo_2' => 'voice-2.jpg',
		'photo_3' => 'voice-3.jpg',
		'items'   => array(
			array(
				'name'  => 'Ramesh Kumar',
				'role'  => 'Community Member',
				'quote' => 'They brought care where it was needed the most. Access to healthcare was always a challenge in our area. The medical camps organized by Prajkta Foundation helped my family and many others receive timely treatment and awareness.',
			),
			array(
				'name'  => 'Anjali S.',
				'role'  => 'Nursing Student',
				'quote' => 'The scholarship didn\'t just pay my fees; it gave me permission to dream. I am now pursuing my nursing degree, and I intend to return and serve my community.',
			),
			array(
				'name'  => 'Ramdas G.',
				'role'  => 'Farmer',
				'quote' => 'The earth gives back exactly what you put in. Prajkta taught us to feed the soil, and now the soil feeds us better than ever.',
			),
		),
	),
	'cta'     => array(
		'title' => "Together, We Can Build\na Better Tomorrow",
		'text'  => 'Whether you give time, resources, or advocacy—your contribution ripples outward.',
		'image' => 'cta-bg.jpg',
		'items' => array(
			array(
				'icon'  => 'heart',
				'title' => 'Donate Now',
				'text'  => 'Support a specific cause or general fund.',
				'url'   => '{donate}',
			),
			array(
				'icon'  => 'users',
				'title' => 'Volunteer',
				'text'  => 'Lend your skills to our local projects.',
				'url'   => '{volunteer}',
			),
			array(
				'icon'  => 'handshake',
				'title' => 'Partner',
				'text'  => 'Corporate social responsibility programs.',
				'url'   => '{csr}',
			),
		),
	),
);
