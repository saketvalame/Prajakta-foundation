<?php
/**
 * Our Work page content.
 *
 * @package prajkta
 */

return array(
	'hero'    => array(
		'title'      => 'Building Futures Through Impact',
		'text'       => 'Creating sustainable change through focused initiatives, deeply rooted in community empowerment and organic growth.',
		'btn1_label' => 'Support Our Mission',
		'btn1_url'   => '{donate}',
		'btn2_label' => 'Become A Volunteer',
		'btn2_url'   => '{volunteer}',
		'image'      => 'ourwork-hero.jpg',
	),
	'pillars' => array(
		'title' => 'Our Pillars',
		'text'  => 'Strategic Focus for Sustainable Change',
		'items' => array(
			array( 'icon' => 'book', 'title' => 'Quality Education', 'text' => 'Providing digital literacy and traditional resources to underprivileged schools.', 'stat' => '92%', 'progress' => '92', 'url' => '{scholarships}' ),
			array( 'icon' => 'heart', 'title' => 'Holistic Health', 'text' => 'Mobile medical units and nutrition awareness for remote tribal areas.', 'stat' => '75K+', 'progress' => '75', 'url' => '{healthcare}' ),
			array( 'icon' => 'tree', 'title' => 'Environment', 'text' => 'Reforestation initiatives and water conservation engineering in drought zones.', 'stat' => '12+', 'progress' => '60', 'url' => '{environment}' ),
			array( 'icon' => 'award', 'title' => 'Scholarships', 'text' => 'Financial aid for higher education to meritorious students from low-income families.', 'stat' => '₹12Cr', 'progress' => '85', 'url' => '{scholarships}' ),
		),
	),
	'focus'   => array(
		'title'        => 'Our Focus Areas',
		'text'         => 'We concentrate our efforts across four fundamental pillars, each designed to address critical needs while nurturing long-term resilience and capability within communities.',
		'center_image' => 'tree.jpg',
		'items'        => array(
			array( 'tag' => 'Initiative 01', 'title' => 'Quality Education', 'text' => 'Providing foundational learning opportunities for underserved children. We believe education is the seed from which all future progress grows, focusing on literacy, critical thinking, and creative expression.', 'url' => '{scholarships}', 'image' => 'focus-edu.jpg' ),
			array( 'tag' => 'Initiative 03', 'title' => 'Healthcare Access', 'text' => 'Delivering essential medical services through mobile health clinics to remote and rural areas. We prioritize preventative care, maternal health, and consistent access to vital medications.', 'url' => '{healthcare}', 'image' => 'focus-health.jpg' ),
			array( 'tag' => 'Initiative 02', 'title' => 'Merit Scholarships', 'text' => 'Removing financial barriers for exceptionally bright minds. Our scholarships support higher education pursuits, ensuring that talent and hard work, rather than circumstance, dictate a student\'s trajectory.', 'url' => '{scholarships}', 'image' => 'focus-scholar.jpg' ),
			array( 'tag' => 'Initiative 04', 'title' => 'Environmental Growth', 'text' => 'Fostering ecological balance through community-led reforestation and sustainable agriculture practices. We aim to restore local ecosystems while empowering communities to manage their natural resources.', 'url' => '{environment}', 'image' => 'focus-env.jpg' ),
		),
	),
	'where'   => array(
		'title'   => 'Where We Work',
		'text'    => 'Our footprint spans across diverse topographies, from the coastal belts of Odisha to the rural heartlands of Maharashtra. Each marker represents a sustained commitment to community growth.',
		'image'   => 'home-who.jpg',
		'regions' => array(
			array( 'name' => 'Maharashtra', 'count' => '124 Projects' ),
			array( 'name' => 'Odisha', 'count' => '82 Projects' ),
			array( 'name' => 'Bihar', 'count' => '56 Projects' ),
		),
	),
	'change'  => array(
		'title' => 'Stories of Change',
		'items' => array(
			array( 'tag' => 'Education', 'quote' => '"The scholarship didn\'t just pay my fees; it gave me permission to dream."', 'text' => 'Anjali, a first-generation learner from a remote district, is now pursuing her nursing degree, intending to return and serve her community.', 'author' => 'Anjali S., Nursing Student', 'image' => 'change-1.jpg' ),
			array( 'tag' => 'Livelihood', 'quote' => '"Our yields have doubled, but more importantly, our soil is alive again."', 'text' => 'Through sustainable farming workshops, Ramesh and his cooperative transitioned to organic methods, restoring ecological balance and economic stability.', 'author' => 'Ramesh M., Community Leader', 'image' => 'change-2.jpg' ),
		),
	),
);
