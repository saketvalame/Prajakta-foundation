<?php
/**
 * CSR page content.
 *
 * @package prajkta
 */

return array(
	'hero'         => array(
		'title'      => "Building Sustainable Impact\nTogether",
		'text'       => 'We bridge the gap between corporate vision and community reality, creating measurable, transparent, and scalable social change.',
		'btn1_label' => 'Partner With Us',
		'btn1_url'   => '#partner',
		'btn2_label' => 'Our Impact',
		'btn2_url'   => '{our-work}',
		'image'      => 'csr-hero.jpg',
	),
	'volunteering' => array(
		'eyebrow'   => 'Employee Volunteering',
		'title'     => 'Empower Your Workforce, Transform Communities',
		'text'      => 'Our Employee Volunteering Program bridges the gap between corporate talent and community needs. We offer structured opportunities for your teams to contribute their skills and passion across our core impact pillars.',
		'btn_label' => 'View Opportunities',
		'btn_url'   => '{volunteer}',
		'image'     => 'csr-volunteering.jpg',
	),
	'focus'        => array(
		'title' => 'Strategic Focus Areas',
		'text'  => 'Our programs are designed to align with UN Sustainable Development Goals, ensuring your corporate contributions create global resonance through local action.',
		'items' => array(
			array( 'tone' => 'orange', 'icon' => 'medkit', 'title' => 'Healthcare Access', 'text' => 'Mobile clinics and primary health centers in underserved industrial corridors.', 'tags' => 'Maternal Health, Preventive Care' ),
			array( 'tone' => 'blue', 'icon' => 'graduation', 'title' => 'Digital Education', 'text' => 'Equipping rural schools with smart-labs and teacher training programs.', 'tags' => 'STEM Labs, Literacy Drives' ),
			array( 'tone' => 'gray', 'icon' => 'leaf', 'title' => 'Environment Action', 'text' => 'Reforestation and water conservation projects near manufacturing hubs.', 'tags' => 'Carbon Offsetting, Water Security' ),
		),
	),
	'dashboard'    => array(
		'eyebrow'      => 'Transparency & Reporting',
		'title'        => 'Live Impact Dashboard',
		'text'         => 'Our partners receive access to a real-time dashboard tracking every rupee spent and every life touched.',
		'stats'        => array(
			array( 'label' => 'Total Beneficiaries', 'value' => '142,800' ),
			array( 'label' => 'Lives Impacted / Month', 'value' => '12,450' ),
			array( 'label' => 'Villages Reached', 'value' => '842' ),
			array( 'label' => 'Fund Efficiency', 'value' => '94%' ),
		),
		'alloc_title'  => 'Program Allocation',
		'allocation'   => array(
			array( 'label' => 'Education Initiatives', 'percent' => '45', 'color' => 'orange' ),
			array( 'label' => 'Health & Wellness', 'percent' => '35', 'color' => 'sky' ),
			array( 'label' => 'Sustainability', 'percent' => '20', 'color' => 'gray' ),
		),
		'ring_percent' => '80',
		'ring_label'   => 'Growth Index',
	),
	'model'        => array(
		'title' => 'Our Integration Model',
		'steps' => array(
			array( 'title' => 'Connect', 'text' => 'Initial discovery to align with your corporate values.' ),
			array( 'title' => 'Strategy', 'text' => 'Defining KPIs and long-term impact milestones.' ),
			array( 'title' => 'Planning', 'text' => 'Logistics, resource mapping, and timeline finalization.' ),
			array( 'title' => 'Execution', 'text' => 'On-ground implementation with local leadership.' ),
			array( 'title' => 'Reporting', 'text' => 'Quarterly impact audits and narrative storytelling.' ),
		),
	),
	'success'      => array(
		'title'     => 'Proven Success',
		'btn_label' => 'View All Stories',
		'btn_url'   => '{stories}',
		'items'     => array(
			array( 'title' => 'Empowering 50,000 Rural Students via Digital Labs', 'text' => 'How TechCorp\'s 3-year commitment transformed the educational landscape of 45 remote districts.', 'tag' => 'Education', 'url' => '{stories}', 'image' => 'news-featured.jpg' ),
			array( 'title' => 'Restoring 2,000 Hectares of Mangrove Forests', 'text' => 'A strategic partnership focused on carbon sequestration and coastal protection for local communities.', 'tag' => 'Environment', 'url' => '{stories}', 'image' => 'gallery-6.jpg' ),
		),
	),
	'partner'      => array(
		'title'       => "Let's Create Meaningful\nImpact Together.",
		'text'        => 'Connect with our team to explore how we can design programs that align with your CSR and ESG goals.',
		'email_label' => 'Email Us',
		'email'       => 'partnerships@prajkta.org',
		'phone_label' => 'Direct Line',
		'phone'       => '+1 (888) CSR-IMPACT',
		'interests'   => 'Healthcare Partnerships, Education Partnerships, Environment Partnerships, Employee Volunteering',
		'btn_label'   => 'Submit Partnership Inquiry',
	),
);
