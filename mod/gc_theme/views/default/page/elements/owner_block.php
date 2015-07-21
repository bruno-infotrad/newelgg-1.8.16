<?php
/**
 * Elgg owner block
 * Displays page ownership information
 *
 * @package Elgg
 * @subpackage Core
 *
 */
$GLOBALS['GC_THEME']->debug("BRUNO CONTEXT ".elgg_get_context());
elgg_push_context('owner_block');

// groups and other users get owner block
$owner = elgg_get_page_owner_entity();
//if ($owner instanceof ElggGroup || $owner instanceof ElggUser) {
if ($owner instanceof ElggGroup) {

	//$header = elgg_view_entity_icon($owner, 'medium');

	$body = elgg_view_menu('owner_block', array('entity' => $owner, 'sort_by' => 'priority'));

	$body .= elgg_view('page/elements/owner_block/extend', $vars);

	echo elgg_view('page/components/module', array(
		'header' => $header,
		'body' => $body,
		'class' => 'elgg-owner-block',
	));
}

elgg_pop_context();
