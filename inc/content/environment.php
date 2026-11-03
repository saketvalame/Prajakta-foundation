<?php
/**
 * Environment page content.
 *
 * @package prajkta
 */

return array(
	'hero'        => array(
		'title'      => "Protecting Nature\nSustaining Tomorrow",
		'text'       => 'We work with communities to restore ecosystems, conserve resources, and build a greener, more sustainable future for generations.',
		'btn1_label' => 'Donate Now',
		'btn1_url'   => '{donate}',
		'btn2_label' => 'View Program',
		'btn2_url'   => '#programs',
		'image'      => 'env-hero.jpg',
	),
	'programs'    => array(
		'title' => 'Our Environmental Programs',
		'text'  => 'Our holistic approach addresses the interconnected challenges of environmental degradation.',
		'items' => array(
			array( 'icon' => 'tree', 'title' => "Afforestation &\nTree Plantation", 'text' => 'Restoring native forest cover to enhance biodiversity, sequester carbon, and stabilize local climates.', 'progress' => '75', 'url' => '{stories}' ),
			array( 'icon' => 'waves', 'title' => "Water\nConservation", 'text' => 'Implementing rainwater harvesting and reviving traditional water bodies for drought resilience.', 'progress' => '67', 'url' => '{stories}' ),
			array( 'icon' => 'recycle', 'title' => "Waste\nManagement", 'text' => 'Developing circular economy models to reduce pollution and promote recycling in rural areas.', 'progress' => '80', 'url' => '{stories}' ),
			array( 'icon' => 'globe', 'title' => "Sustainable\nAgriculture", 'text' => 'Empowering farmers with organic practices that replenish soil health and reduce chemical dependency.', 'progress' => '50', 'url' => '{stories}' ),
		),
	),
	'featured'    => array(
		'label'     => 'Featured Story',
		'title'     => 'From Dry Land to Green Cover',
		'text'      => 'Five years ago, the slopes above Malhar village were bare and eroding with every monsoon. Working alongside 300 families, we planted native saplings, built check-dams and trained local youth as forest stewards. Today the hillside holds water through the dry season, wells stay full until May, and the community earns a steady income from the forest it helped bring back.',
		'btn_label' => 'Read Full Story',
		'btn_url'   => '{stories}',
		'image'     => 'env-featured.jpg',
	),
	'rooted'      => array(
		'title' => 'Rooted in Community',
		'text'  => 'One of the key aspects of village development is fostering economic empowerment in rural areas. Encouraging the growth of rural industries and promoting entrepreneurship can create employment opportunities and improve the standard of living for villagers.',
		'tabs'  => array(
			array( 'label' => 'Forests Revived', 'text' => 'Village development plays a vital role in shaping the sustainable future of India. With a significant portion of the population residing in rural areas, it is essential to focus on creating sustainable communities that promote economic growth, environmental conservation, and social well-being.' ),
			array( 'label' => 'Water Saved', 'text' => 'Rainwater harvesting, revived village ponds and new check-dams now hold millions of litres every monsoon, keeping wells and farms watered through the dry months.' ),
			array( 'label' => 'Lives Touched', 'text' => 'Farmers, women\'s self-help groups and young Green Ambassadors lead every project, so the skills and the income stay in the community long after we step back.' ),
		),
	),
	'field'       => array(
		'title'     => 'Field Moments',
		'text'      => 'Our partners are carefully selected for their integrity, expertise, and shared commitment to improving lives responsibly',
		'btn_label' => 'View Gallery',
		'btn_url'   => '{news}#gallery',
		'image'     => 'env-field.jpg',
	),
	'restoration' => array(
		'title'     => 'Restoration in Action',
		'text'      => 'Real transformations from the field where barren landscapes became thriving ecosystems.',
		'image'     => 'env-before-after.jpg',
		'label'     => 'Before & After',
		'eyebrow'   => 'Project: Malhar Hills',
		'heading'   => 'Turning Dust into Shade',
		'quote'     => '"We used to walk 3 kilometers for water. After the check-dams and the forestation project, our wells are full even in May. The birds have come back."',
		'author'    => 'Lakshmi Bai, Local Community Leader',
		'btn_label' => 'Read Full Case Study',
		'btn_url'   => '{stories}',
	),
	'ground'      => array(
		'title'  => 'Voices of the Ground',
		'items'  => array(
			array( 'tone' => 'blue', 'title' => 'Empowering Youth', 'text' => 'Over 500 college students trained as Green Ambassadors this year alone.' ),
			array( 'tone' => 'orange', 'title' => 'Corporate Impact', 'text' => '15 CSR partners helped us achieve a 92% survival rate for our saplings.' ),
		),
		'image'  => 'env-farmer.jpg',
		'quote'  => '"The earth gives back exactly what you put in. Prajkta taught us to feed the soil, and now the soil feeds us better than ever."',
		'author' => 'Ramdas G., Farmer',
	),
	'closing'     => array(
		'title'      => 'Be part of a greener future',
		'text'       => 'Every seed planted today is a forest for the next generation. Join the movement.',
		'btn1_label' => 'Start Your Impact Today',
		'btn1_url'   => '{donate}',
		'btn2_label' => 'Download Report',
		'btn2_url'   => '{transparency}#reports',
		'image'      => 'cta-bg.jpg',
	),
);
