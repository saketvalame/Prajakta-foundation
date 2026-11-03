<?php
/**
 * Home page content.
 *
 * @package prajkta
 */

return array(
	'hero'    => array(
		'title'      => "Small Acts.\nLifelong Impact",
		'text'       => 'Empowering communities through education, healthcare, environmental sustainability, and scholarships. We believe in the power of collective action to build a resilient future.',
		'btn1_label' => 'Donate Now',
		'btn1_url'   => '{donate}',
		'btn2_label' => 'Explore Our Impact',
		'btn2_url'   => '{our-work}',
		'image'      => 'home-hero.jpg',
	),
	'who'     => array(
		'eyebrow'   => 'Who We Are',
		'title'     => "Creating opportunities\nthat transform lives",
		'text'      => 'At Prajkta Foundation, we work hand-in-hand with communities to ensure access to quality education, healthcare, environment and sustainable livelihoods.',
		'btn_label' => 'Learn More About Us',
		'btn_url'   => '{about}',
		'image'     => 'home-who.jpg',
	),
	'impact'  => array(
		'eyebrow'   => 'Our Impact',
		'title'     => 'Real work. Measurable change.',
		'btn_label' => 'View Full Impact Report',
		'btn_url'   => '{transparency}',
		'stats'     => array(
			array( 'icon' => 'users', 'value' => '125,400+', 'label' => 'Lives Impacted', 'sub' => 'Across Communities', 'image' => 'home-stat-1.jpg' ),
			array( 'icon' => 'sprout', 'value' => '85K+', 'label' => 'Trees Planted', 'sub' => 'For A Greener Tomorrow', 'image' => 'home-stat-2.jpg' ),
			array( 'icon' => 'graduation', 'value' => '15,000+', 'label' => 'Students Supported', 'sub' => 'Through Education', 'image' => 'home-stat-3.jpg' ),
			array( 'icon' => 'heart', 'value' => '450+', 'label' => 'Healthcare Initiatives', 'sub' => 'And Health Camps', 'image' => 'home-stat-4.jpg' ),
		),
	),
	'work'    => array(
		'eyebrow'   => 'How We Work',
		'title'     => "Focused Initiatives for\nDeep-Rooted Change",
		'text'      => 'Every pillar is built on data-driven strategies and executed by passionate local teams.',
		'btn_label' => 'Learn More',
		'btn_url'   => '{our-work}',
		'items'     => array(
			array( 'icon' => 'graduation', 'title' => 'Education', 'text' => 'Digital literacy, modern classrooms, and teacher training programs.', 'url' => '{our-work}' ),
			array( 'icon' => 'medkit', 'title' => 'Healthcare', 'text' => 'Mobile clinics, maternal health care, and surgical assistance camps.', 'url' => '{healthcare}' ),
			array( 'icon' => 'leaf', 'title' => 'Environment', 'text' => 'Reforestation, waste management, and solar energy initiatives.', 'url' => '{environment}' ),
			array( 'icon' => 'award', 'title' => 'Scholarships', 'text' => 'Empowering bright minds with financial aid for higher education.', 'url' => '{scholarships}' ),
		),
	),
	'stories' => array(
		'eyebrow'       => 'Stories Of Change',
		'title'         => 'Real People. Real Stories. Real Change',
		'btn_label'     => 'View All Stories',
		'btn_url'       => '{stories}',
		'image_1'       => 'story-1.jpg',
		'image_2'       => 'story-2.jpg',
		'image_3'       => 'story-3.jpg',
		'caption_label' => 'Education',
		'caption_title' => 'From Dreams to Degrees',
		'caption_text'  => 'Anita\'s journey from a small village to becoming a teacher.',
		'caption_url'   => '{stories}',
	),
	'involve' => array(
		'eyebrow' => 'Get Involved',
		'title'   => 'Be the reason for someone\'s better tomorrow',
		'items'   => array(
			array( 'tone' => 'orange', 'title' => 'Donate', 'text' => 'Your contribution directly funds life-changing projects on the ground.', 'btn_label' => 'Help Create Impact', 'url' => '{donate}', 'image' => 'involve-donate.jpg' ),
			array( 'tone' => 'green', 'title' => 'Volunteer', 'text' => 'Lend your skills and time to help us build stronger communities together.', 'btn_label' => 'Join Our Mission', 'url' => '{volunteer}', 'image' => 'involve-volunteer.jpg' ),
			array( 'tone' => 'gold', 'title' => 'Corporate CSR', 'text' => 'Partner with us to align your corporate social responsibility with real impact.', 'btn_label' => 'Partner For Change', 'url' => '{csr}', 'image' => 'involve-csr.jpg' ),
		),
	),
);
