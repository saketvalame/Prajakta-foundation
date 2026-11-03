<?php
/**
 * Healthcare page content.
 *
 * @package prajkta
 */

return array(
	'hero'        => array(
		'title'      => "Healthy Communities\nBuild a Stronger Future",
		'text'       => 'Through accessible healthcare services, preventive care, health education, and community outreach, Prajkta Foundation helps individuals and families live healthier lives with dignity and hope.',
		'btn1_label' => 'Support Healthcare',
		'btn1_url'   => '{donate}',
		'btn2_label' => 'View Program',
		'btn2_url'   => '#initiatives',
		'image'      => 'health-hero.jpg',
	),
	'initiatives' => array(
		'title' => 'Our Core Initiatives',
		'items' => array(
			array( 'icon' => 'asterisk', 'title' => 'Community Medical Camps', 'text' => 'Providing free diagnostic screenings, medicine distribution, and specialist consultations in underserved villages.', 'url' => '{stories}' ),
			array( 'icon' => 'venus', 'title' => 'Women\'s Health', 'text' => 'Specialized focus on maternal health, menstrual hygiene awareness, and reproductive health education.', 'url' => '{stories}' ),
			array( 'icon' => 'smile', 'title' => 'Child Health & Nutrition', 'text' => 'Combating malnutrition and ensuring regular pediatric check-ups for children in underserved communities.', 'url' => '{stories}' ),
			array( 'icon' => 'shield-plus', 'title' => 'Preventive Health', 'text' => 'Education on sanitation, clean water, and lifestyle habits to prevent chronic diseases.', 'url' => '{stories}' ),
			array( 'icon' => 'truck', 'title' => 'Rural Outreach', 'text' => 'Mobile clinics that reach deep into tribal and rural pockets where hospitals are miles away.', 'url' => '{stories}' ),
			array( 'icon' => 'brain', 'title' => 'Mental Health', 'text' => 'Counselling and support groups to break the stigma and foster emotional resilience in families.', 'url' => '{stories}' ),
		),
	),
	'faces'       => array(
		'title'     => 'Faces of Transformation',
		'text'      => 'Real stories from the people whose lives were changed by your support and our medical teams.',
		'btn_label' => 'View All Stories',
		'btn_url'   => '{stories}',
		'slides'    => array(
			array( 'label' => 'Scholarships Impact', 'image' => 'health-faces.jpg' ),
			array( 'label' => 'Community Health', 'image' => 'sc-5.jpg' ),
			array( 'label' => 'Rural Outreach', 'image' => 'news-1.jpg' ),
		),
	),
	'deliver'     => array(
		'title' => 'How We Deliver Impact',
		'steps' => array(
			array( 'title' => 'Assessment', 'text' => 'Identifying high-need areas.' ),
			array( 'title' => 'Awareness', 'text' => 'Mobilizing local communities.' ),
			array( 'title' => 'Camp', 'text' => 'Direct medical intervention.' ),
			array( 'title' => 'Diagnosis', 'text' => 'Professional screenings.' ),
			array( 'title' => 'Treatment', 'text' => 'Medication & referrals.' ),
			array( 'title' => 'Follow-up', 'text' => 'Ensuring long-term recovery.' ),
			array( 'title' => 'Better Health', 'text' => 'A thriving community.' ),
		),
	),
	'partners'    => array(
		'title'     => 'Our hospital & CSR Partners',
		'text'      => 'Our partners are carefully selected for their integrity, expertise, and shared commitment to improving lives responsibly',
		'btn_label' => 'View More',
		'btn_url'   => '{csr}',
		'image'     => 'health-partners.jpg',
	),
);
