<?php
/**
 * All groups listing page navigation
 *
 */
$page_type = get_input('page_type');
$tabs = array(
	'friends' => array(
		'text' => elgg_echo('access:friends:label'),
		'href' => 'dashboard?page_type=friends',
		'priority' => 100,
	),
	'my_groups' => array(
		'text' => elgg_echo('groups:yours'),
		'href' => 'dashboard?page_type=my_groups',
		'priority' => 150,
	),
	'groups' => array(
		'text' => elgg_echo('groups'),
		'href' => 'dashboard?page_type=groups',
		'priority' => 200,
	),
	'all' => array(
		'text' => elgg_echo('all').' <span class="elgg-new-feeds"></span>',
		'href' => 'dashboard?page_type=all',
		'priority' => 500,
	),
	'intro' => array(
		'text' => elgg_echo('gc_theme:intro:title'),
		'href' => 'dashboard?page_type=intro',
		'priority' => 50,
	), 
	'exec_content' => array(
		'text' => elgg_echo('gc_theme:exec_content_tab'),
		'href' => 'dashboard?page_type=exec_content',
		'id' => 'exec-content-tab',
		'priority' => 600,
	),
//Incredible! Looks last the after pseudo-element does not work properly on the last child - could not find why. So add an invisible element for now :-(
	'crappola' => array(
		'text' => '',
		'href' => '',
		'id' => '',
		'priority' => 700,
	),
);
// sets default selected item
if (strpos(current_page_url(), 'page_type') === false) {
	$tabs[$vars['page_type']]['selected'] = true;
}
foreach ($tabs as $name => $tab) {
	$tab['name'] = $name;

	elgg_register_menu_item('filter', $tab);
}

echo elgg_view_menu('filter', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));
