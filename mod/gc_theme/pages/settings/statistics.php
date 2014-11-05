<?php
/**
 * Elgg user statistics.
 *
 * @package Elgg
 * @subpackage Core
 */

// Only logged in users
gatekeeper();

// Make sure we don't open a security hole ...
if ((!elgg_get_page_owner_entity()) || (!elgg_get_page_owner_entity()->canEdit())) {
	elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());
}

$title = elgg_echo("usersettings:statistics");

$content = elgg_view("core/settings/statistics");

$params = array(
        'content' => $content,
        //'sidebar' => elgg_view('friends/sidebar'),
        'title' => $title,
        'filter_override' => elgg_view('settings/nav', array('selected' => 'statistics')),
);
$body = elgg_view_layout('content', $params);

echo elgg_view_page($title, $body);
