<?php
/**
 * Scholarships page content.
 *
 * @package prajkta
 */

return array(
	'hero'       => array(
		'title'      => "Empowering Dreams\nThrough Education",
		'text'       => 'We believe financial constraints should never be the ceiling for potential. Our scholarships unlock doors to world-class education for the brightest minds.',
		'btn1_label' => 'Sponsor A Student',
		'btn1_url'   => '{donate}',
		'btn2_label' => 'Donate For Education',
		'btn2_url'   => '{donate}',
		'image'      => 'scholar-hero.jpg',
	),
	'foundation' => array(
		'title'        => "The Foundation of\nAll Progress is Health.",
		'quote'        => '"To ensure that no one is held back by the lack of basic medical attention, because health is the first step toward education and economic stability."',
		'quote_author' => 'Dr. Ananya Sharma, Lead Medical Officer',
		'text'         => 'Access to quality healthcare remains one of the most significant challenges for rural and marginalized urban communities. At Prajkta Foundation, we bridge this gap by bringing the clinic to the doorstep. Our holistic approach doesn\'t just treat illnesses; it builds awareness, promotes preventive hygiene, and creates a support system that empowers families to prioritize their well-being alongside their livelihoods.',
		'image'        => 'scholar-health.jpg',
	),
	'bridge'     => array(
		'title'   => "Bridging the gap\nbetween <span>ambition</span> and\nopportunity.",
		'quote'   => 'Education is the most powerful weapon which you can use to change the world. For many, a scholarship isn\'t just money—it\'s the permission to dream.',
		'caption' => 'Removing financial barriers allows students to focus on what truly matters: <strong>their growth.</strong>',
		'image'   => 'scholar-bridge.jpg',
	),
	'pathways'   => array(
		'eyebrow' => 'Our Pathways',
		'title'   => "Tailored Support for Every\nMilestone",
		'text'    => 'We offer diverse scholarship programs designed to meet students at every stage of their academic journey.',
		'items'   => array(
			array( 'icon' => 'graduation', 'title' => 'School Excellence', 'text' => 'Supporting primary and secondary education for gifted children from marginalized communities.', 'url' => '{donate}' ),
			array( 'icon' => 'file', 'title' => 'Higher Ed Grants', 'text' => 'Full tuition coverage for undergraduate and postgraduate degrees in STEM and Humanities.', 'url' => '{donate}' ),
			array( 'icon' => 'star', 'title' => 'Merit-Based Awards', 'text' => 'Recognizing exceptional academic performance and leadership potential among top scholars.', 'url' => '{donate}' ),
			array( 'icon' => 'banknote', 'title' => 'Financial Assistance', 'text' => 'Need-based grants for students facing immediate economic crises or family hardships.', 'url' => '{donate}' ),
			array( 'icon' => 'wrench', 'title' => 'Skill Grants', 'text' => 'Focused funding for vocational training, technical certifications, and specialized skills.', 'url' => '{donate}' ),
			array( 'icon' => 'users', 'title' => 'Mentorship+', 'text' => 'A hybrid program providing both financial aid and dedicated professional mentorship.', 'url' => '{volunteer}' ),
		),
	),
	'resilience' => array(
		'title'     => 'Stories of Resilience',
		'btn_label' => 'View Story',
		'btn_url'   => '{stories}',
		'items'     => array(
			array( 'title' => 'This scholarship was the bridge I couldn\'t build myself', 'eyebrow' => 'Rahul\'s Journey', 'text' => 'Growing up in a small village without electricity, Rahul faced challenges that made education a distant dream. Studying under difficult conditions, he held on to one ambition — to become a doctor. With the support of the scholarship, Rahul was able to move to the city, access proper education, and complete his MBBS.', 'tag' => 'Medical Scholar', 'image' => 'resilience-1.jpg' ),
			array( 'title' => 'They didn\'t just fund my education—they helped me find my voice', 'eyebrow' => '', 'text' => "Ananya grew up with a deep love for art and creativity. She would spend hours sketching, painting, and imagining new ideas—but she didn't have the right guidance to turn her passion into a future.\n\nComing from a financially limited background, pursuing formal education in arts or design felt uncertain. More than money, she lacked direction, mentorship, and belief in her own talent.\n\nWhen the foundation supported her, it didn't just remove financial barriers—it changed her mindset.", 'tag' => 'Arts & Design', 'image' => 'resilience-2.jpg' ),
		),
	),
	'road'       => array(
		'title' => 'The Road to Success',
		'text'  => 'Our structured process ensures every scholar receives more than just financial aid—they receive a comprehensive support system.',
		'steps' => array(
			array( 'title' => 'Application', 'text' => 'Submit academic records and personal story.' ),
			array( 'title' => 'Review', 'text' => 'Rigorous vetting by our education board.' ),
			array( 'title' => 'Selection', 'text' => 'Interviews and financial need assessment.' ),
			array( 'title' => 'Award', 'text' => 'Direct scholarship disbursement for fees.' ),
			array( 'title' => 'Mentorship', 'text' => 'Ongoing guidance from industry experts.' ),
			array( 'title' => 'Graduation', 'text' => 'Completing the degree with high honors.' ),
			array( 'title' => 'Success', 'text' => 'Stable career and giving back to community.' ),
		),
	),
	'field'      => array(
		'title'     => 'Field Moments',
		'text'      => 'Our partners are carefully selected for their integrity, expertise, and shared commitment to improving lives responsibly',
		'btn_label' => 'View Gallery',
		'btn_url'   => '{news}#gallery',
		'image'     => 'field-moments.jpg',
	),
);
