<?php
/**
 * Volunteer page content.
 *
 * @package prajkta
 */

return array(
	'hero'      => array(
		'title'      => "Your Time Can\nChange Lives.",
		'text'       => 'Your contribution, whether time, resources, or expertise, fuels a sustainable cycle of hope and empowerment.',
		'btn1_label' => 'Explore Roles',
		'btn1_url'   => '#roles',
		'btn2_label' => 'Watch Our Story',
		'btn2_url'   => '{stories}#films',
		'image'      => 'volunteer-hero.jpg',
	),
	'roles'     => array(
		'title'     => 'Ways to Contribute',
		'text'      => 'Explore roles that match your skills and passion. Every contribution, big or small, fuels our mission for sustainable change.',
		'btn_label' => 'Explore Openings',
		'items'     => array(
			array( 'icon' => 'graduation', 'title' => 'Education & Mentorship', 'text' => 'Teach rural students, mentor youth, or help develop curricula for our empowerment centers.', 'featured' => '' ),
			array( 'icon' => 'shield-plus', 'title' => 'Healthcare Access', 'text' => 'Assist in medical camps, provide nutritional awareness, or support elderly care initiatives.', 'featured' => '' ),
			array( 'icon' => 'leaf', 'title' => 'Climate Action', 'text' => 'Join reforestation drives, waste management workshops, and sustainable living campaigns.', 'featured' => '' ),
			array( 'icon' => 'devices', 'title' => 'Digital Volunteering', 'text' => 'Use your skills in design, coding, or social media to help us reach a global audience from anywhere.', 'featured' => '1' ),
			array( 'icon' => 'users', 'title' => 'Women Empowerment', 'text' => 'Conduct vocational training, legal awareness sessions, or self-help group workshops.', 'featured' => '' ),
			array( 'icon' => 'asterisk', 'title' => 'Crisis Relief', 'text' => 'Be part of our emergency response team for disaster management and immediate relief efforts.', 'featured' => '' ),
		),
	),
	'journey'   => array(
		'eyebrow' => 'The Journey',
		'title'   => 'How to Get Started',
		'steps'   => array(
			array( 'title' => 'Register', 'text' => 'Fill out the simple application form below with your interests.' ),
			array( 'title' => 'Orientation', 'text' => 'Attend a quick virtual call to understand our culture and goals.' ),
			array( 'title' => 'Matching', 'text' => 'We\'ll pair you with a project that fits your schedule and skills.' ),
			array( 'title' => 'Impact', 'text' => 'Start your journey and see the direct results of your kindness.' ),
		),
	),
	'campaigns' => array(
		'title'     => 'Upcoming Campaigns',
		'btn_label' => 'View Calendar',
		'btn_url'   => '{news}#events',
		'items'     => array(
			array( 'date' => 'August 24', 'tag' => 'Art For Change', 'title' => 'Community Mural Project', 'text' => 'Transforming local schools into canvases of hope. No professional art skills required, just a heart for color.', 'url' => '#join', 'image' => 'involve-volunteer.jpg' ),
			array( 'date' => 'Sept 12', 'tag' => 'Health Drive', 'title' => 'Rural Health & Wellness Camp', 'text' => 'Bringing essential healthcare checkups and medicine to remote villages in the valley.', 'url' => '#join', 'image' => 'news-1.jpg' ),
		),
	),
	'who'       => array(
		'eyebrow' => 'Who Can Volunteer?',
		'title'   => "Everyone Can\nMake a <span>Difference.</span>",
		'text'    => 'We welcome individuals from all walks of life who are passionate about creating positive change in society.',
		'points'  => 'Open to all, Meaningful impact, Flexible & rewarding',
		'image'   => 'volunteer-who.jpg',
		'badge'   => 'Small actions by caring people create lasting change.',
	),
	'change'    => array(
		'title'        => 'How Change Happens',
		'text'         => 'Our methodology for creating sustainable impact.',
		'items'        => array(
			array( 'icon' => 'user', 'title' => 'Individuals', 'text' => 'Anyone with the passion to contribute their time, skills, and energy.' ),
			array( 'icon' => 'graduation', 'title' => 'Students', 'text' => 'Learn, grow, and make a meaningful impact while building valuable experiences.' ),
			array( 'icon' => 'briefcase', 'title' => 'Professionals', 'text' => 'Share your expertise and knowledge to support our community initiatives.' ),
			array( 'icon' => 'building', 'title' => 'Organizations & Groups', 'text' => 'Collaborate as a team and create a larger impact together.' ),
		),
		'banner_title' => 'Ready to contribute your time and skills?',
		'banner_text'  => 'Join our volunteer community and be part of meaningful change.',
		'banner_btn'   => 'Be a Volunteer Now',
		'banner_url'   => '#join',
	),
	'join'      => array(
		'title'     => 'Start Your Journey Today',
		'text'      => 'Tell us a bit about yourself, and our coordinator will be in touch within 48 hours.',
		'interests' => 'Education & Mentorship, Healthcare Access, Climate Action, Digital Volunteering, Women Empowerment, Crisis Relief',
		'btn_label' => 'Submit Application',
		'quote'     => '"The best way to find yourself is to lose yourself in the service of others."',
		'image'     => 'volunteer-journey.jpg',
	),
);
