<?php
/**
 * Transparency page content.
 *
 * @package prajkta
 */

return array(
	'hero'       => array(
		'title'      => "Transparency\nBuilds Trust.",
		'text'       => 'We believe that every rupee entrusted to us should be accounted for. Our commitment to radical transparency ensures your impact is measurable, visible, and enduring.',
		'btn1_label' => 'View 2025 Annual Report',
		'btn1_url'   => '#reports',
		'btn2_label' => 'Download Financials',
		'btn2_url'   => '#downloads',
		'image'      => 'transparency-hero.jpg',
	),
	'governance' => array(
		'title' => "Ethical Governance &\nRadical Accountability",
		'text'  => 'At Prajkta Foundation, our governance framework is built on the pillars of integrity and openness. We operate under a strict code of ethics that governs our relationship with donors, partners, and the communities we serve.',
		'items' => array(
			array( 'icon' => 'shield-check', 'title' => "Third-Party\nAudits", 'text' => 'Our accounts are audited annually by independent firms to ensure compliance with national and international financial standards.' ),
			array( 'icon' => 'users', 'title' => "Board\nOversight", 'text' => 'An independent Board of Trustees provides strategic direction and rigorously reviews our program efficacy and fund utilization.' ),
			array( 'icon' => 'chart', 'title' => "Impact\nReporting", 'text' => 'We don\'t just report numbers; we share the qualitative stories of change, backed by data-driven monitoring and evaluation.' ),
			array( 'icon' => 'shield', 'title' => 'Zero Tolerance', 'text' => 'Our anti-corruption and whistle-blower policies protect the integrity of our operations at every level of the organization.' ),
		),
	),
	'money'      => array(
		'title'        => 'Where Your Money Goes',
		'text'         => '92% of all donations go directly to program implementation. We keep our overhead lean to maximize human impact.',
		'ring_title'   => 'Fund Allocation 2023',
		'ring_percent' => '92',
		'ring_label'   => 'Programs',
		'legend_1'     => 'Direct Programs',
		'legend_2'     => 'Admin & Ops (8%)',
		'bars_title'   => 'Expenditure by Sector (in millions)',
		'bars'         => array(
			array( 'label' => 'Education', 'value' => '₹12.4M', 'percent' => '85' ),
			array( 'label' => 'Healthcare', 'value' => '₹8.2M', 'percent' => '65' ),
			array( 'label' => 'Environment', 'value' => '₹4.1M', 'percent' => '35' ),
			array( 'label' => 'Scholarships', 'value' => '₹3.2M', 'percent' => '25' ),
		),
	),
	'reports'    => array(
		'title'     => 'Annual Reports Library',
		'text'      => 'Archived history of our progress and financial health.',
		'btn_label' => 'View All Archives',
		'btn_url'   => '#downloads',
		'items'     => array(
			array( 'title' => '2023 Impact Report', 'text' => 'Focus on digital education equity and rural healthcare expansion.', 'file' => '#', 'image' => 'report-2023.jpg' ),
			array( 'title' => '2022 Annual Report', 'text' => 'Highlighting the successful reforestation of 200 acres and health outreach.', 'file' => '#', 'image' => 'report-2022.jpg' ),
			array( 'title' => '2021 Financial Audit', 'text' => 'Comprehensive audit results following the pandemic relief programs.', 'file' => '#', 'image' => 'report-2021.jpg' ),
		),
	),
	'compliance' => array(
		'title'         => 'Governance & Compliance',
		'board_title'   => 'Board of Trustees',
		'board'         => array(
			array( 'name' => 'Dr. Ananya Rao', 'role' => 'Chairperson' ),
			array( 'name' => 'Vikram Mehta', 'role' => 'Treasurer' ),
			array( 'name' => 'Sarah Jenkins', 'role' => 'Director' ),
			array( 'name' => 'Rajesh Kumar', 'role' => 'Ethics Officer' ),
		),
		'legal_title'   => 'Legal Registrations',
		'legal'         => array(
			array( 'label' => '80G Certification', 'value' => 'AAACP9281NF20214' ),
			array( 'label' => 'FCRA Registration', 'value' => '083930472 (Renewal 2026)' ),
			array( 'label' => 'CSR Registration', 'value' => 'CSR00010928' ),
		),
		'auditor_title' => 'Statutory Auditors',
		'auditor_name'  => 'M.S. & Associates LLP',
		'auditor_text'  => 'Chartered Accountants overseeing our internal and external financial controls for over 7 years.',
		'auditor_label' => 'Audit Certificate',
		'auditor_file'  => '#',
	),
	'downloads'  => array(
		'title' => "Download\nCenter",
		'text'  => 'Access our complete library of legal, financial, and policy documents.',
		'items' => array(
			array( 'tone' => 'red', 'title' => 'Child Protection Policy', 'meta' => 'PDF • 1.2 MB • Updated July 2023', 'file' => '#' ),
			array( 'tone' => 'blue', 'title' => 'Ethics & Anti-Corruption Framework', 'meta' => 'PDF • 850 KB • Updated March 2023', 'file' => '#' ),
			array( 'tone' => 'green', 'title' => 'Gender Equality Diversity Policy', 'meta' => 'PDF • 2.1 MB • Updated Sept 2022', 'file' => '#' ),
		),
	),
	'closing'    => array(
		'title'      => "Together, We Create\nTransparent and Lasting Impact.",
		'text'       => 'Whether you are an organization looking to collaborate or an individual wanting to make a profound difference, our team is ready to connect.',
		'btn1_label' => 'Support Our Mission',
		'btn1_url'   => '{donate}',
		'btn2_label' => 'Contact Team',
		'btn2_url'   => '{contact}',
		'image'      => 'cta-bg.jpg',
	),
);
