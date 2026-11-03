<?php
/**
 * News page content. The "latest" grid shows real blog posts once any exist.
 *
 * @package prajkta
 */

return array(
	'hero'     => array(
		'title'      => "Stories of Progress. News\nThat Inspires Change",
		'text'       => 'A chronicle of human resilience and collective impact. Discover the latest updates, field reports, and milestones from our global community.',
		'btn1_label' => 'Explore Latest News',
		'btn1_url'   => '#latest',
		'btn2_label' => 'Subscribe',
		'btn2_url'   => '#subscribe',
		'image'      => 'news-hero.jpg',
	),
	'featured' => array(
		'title'        => 'Beyond the Classroom: How Digital Literacy is Transforming Rural Landscapes',
		'text'         => 'Our latest initiative has equipped over 500 villages with sustainable technology hubs, bridging the gap between traditional wisdom and global opportunity.',
		'author'       => 'Priya',
		'author_role'  => 'Lead Impact Reporter',
		'author_photo' => 'voice-2.jpg',
		'url'          => '#',
		'image'        => 'news-featured.jpg',
	),
	'journal'  => array(
		'title'     => 'Impact Monthly: Our Digital Journal',
		'text'      => 'Deep dives into our field operations, financial transparency reports, and the human stories behind the data. Delivered once a month to your inbox.',
		'btn_label' => 'Subscribe to the newsletter',
		'btn_url'   => '#subscribe',
		'image'     => 'news-journal.jpg',
	),
	'latest'   => array(
		'categories' => 'Latest News, Events, Scholarships, Press Releases',
		'btn_label'  => 'Load More Stories',
		'items'      => array(
			array( 'category' => 'Healthcare', 'date' => 'Oct 28, 2023', 'title' => 'Mobile Clinics Reach 50th Remote Settlement', 'text' => 'Our healthcare units have successfully provided primary care to over 10,000 residents in hard-to-reach terrains this quarter.', 'url' => '#', 'image' => 'news-1.jpg' ),
			array( 'category' => 'Environment', 'date' => 'Oct 20, 2023', 'title' => 'Women-Led Agroforestry: A New Model', 'text' => 'The launch of our regenerative agriculture program has empowered local women to lead environmental restoration projects.', 'url' => '#', 'image' => 'news-2.jpg' ),
			array( 'category' => 'Scholarships', 'date' => 'Oct 15, 2023', 'title' => '2024 Global Scholars Program Applications Open', 'text' => 'Announcing the new cohort window for our flagship scholarship program supporting tomorrow\'s change-makers.', 'url' => '#', 'image' => 'news-3.jpg' ),
		),
	),
	'events'   => array(
		'image'   => 'news-events.jpg',
		'eyebrow' => 'Calendar',
		'title'   => 'Mark Your Presence',
		'text'    => 'Join us on the ground and witness the impact of our shared vision first-hand.',
		'items'   => array(
			array( 'day' => '12', 'month' => 'Nov', 'title' => 'Annual Impact Gala 2024', 'time' => '18:00 - 22:00 IST', 'place' => 'Grand Hall, Pune', 'tone' => 'orange', 'url' => '{contact}' ),
			array( 'day' => '25', 'month' => 'Nov', 'title' => 'Youth Mentorship Summit', 'time' => '09:00 - 15:00 IST', 'place' => 'Virtual Conference', 'tone' => 'blue', 'url' => '{volunteer}#join' ),
		),
	),
	'gallery'  => array(
		'title'  => 'Field Activities Gallery',
		'text'   => 'A Visual Journey Through Our Daily Efforts',
		'images' => array(
			array( 'image' => 'gallery-1.jpg', 'caption' => 'Early learning circle' ),
			array( 'image' => 'gallery-2.jpg', 'caption' => 'Health check-up camp' ),
			array( 'image' => 'gallery-3.jpg', 'caption' => 'Scholarship student' ),
			array( 'image' => 'gallery-4.jpg', 'caption' => 'Organic farming workshop' ),
			array( 'image' => 'gallery-5.jpg', 'caption' => 'Study support' ),
			array( 'image' => 'gallery-6.jpg', 'caption' => 'Community plantation drive' ),
		),
	),
	'circle'   => array(
		'title'     => 'Join the Inner Circle of Progress.',
		'text'      => 'Subscribe to our monthly digest for exclusive stories, transparency reports, and early access to event registrations.',
		'btn_label' => 'Join Us',
		'note'      => 'We respect your privacy. Unsubscribe at any time.',
		'quotes'    => array(
			array( 'quote' => 'The transparency of Prajkta Foundation is what drew me in. Seeing where every rupee goes through their news updates is incredibly empowering.', 'name' => 'Sarah Jenkins', 'role' => 'Monthly Supporter Since 2021' ),
		),
	),
);
