<?php

$files = elgg_extract("files", $vars, array());
$folder = elgg_extract("folder", $vars);
$show_more = (bool) elgg_extract("show_more", $vars, false);
$limit = (int) elgg_extract("limit", $vars, file_tools_get_list_length());
$all_files = (int) file_tools_get_list_length();
$sort_by = elgg_extract("sort_by", $vars);
$direction = elgg_extract("direction", $vars);
$switched = elgg_extract("switched", $vars);
$offset = (int) elgg_extract("offset", $vars, 0);

$folder_guid = 0;
if ($folder) {
	$folder_guid = $folder->getGUID();
}
// only show the header if offset == 0
$folder_content = "";
if (empty($offset)) {
	$folder_content = elgg_view("file_tools/breadcrumb", array("entity" => $folder));
	
	if (!($sub_folders = file_tools_get_sub_folders($folder))) {
		$sub_folders = array();
	}
	
	$entities = array_merge($sub_folders, $files);
} else {
	$entities = $files;
}

if (!empty($entities)) {
	$params = array(
		"full_view" => false,
		"pagination" => false,
	);
	
	elgg_push_context("file_tools_selector");
	
	$files_content = elgg_view_entity_list($entities, $params);
	
	elgg_pop_context();
}

if (empty($files_content)) {
	$files_content = elgg_echo("file_tools:list:files:none");
} else {
	if ($show_more) {
		$files_content .= "<div class='center' id='file-tools-show-more-wrapper'>";
		$files_content .= elgg_view("input/button", array(
			"value" => elgg_echo("file_tools:show_more"),
			"class" => "elgg-button-action",
			"id" => "file-tools-show-more-files",
		));
		$files_content .= elgg_view("input/hidden", array("name" => "offset", "value" => ($limit + $offset)));
		$files_content .= elgg_view("input/hidden", array("name" => "limit", "value" => 10));
		$files_content .= elgg_view("input/hidden", array("name" => "folder_guid", "value" => $folder_guid));
		$files_content .= "</div>";
		$files_content .= "<div class='center' id='file-tools-show-all-wrapper'>";
		$files_content .= elgg_view("input/button", array(
			"value" => elgg_echo("file_tools:show_all"),
			"class" => "elgg-button-action",
			"id" => "file-tools-show-more-files",
		));
		$files_content .= elgg_view("input/hidden", array("name" => "offset", "value" => ($limit + $offset)));
		$files_content .= elgg_view("input/hidden", array("name" => "limit", "value" => $all_files));
		$files_content .= elgg_view("input/hidden", array("name" => "folder_guid", "value" => $folder_guid));
		$files_content .= "</div>";
	}
	
	// only show selectors on the first load
	if (empty($offset)) {
		$files_content .= "<div class='clearfix'>";
		
		if (elgg_get_page_owner_entity()->canEdit()) {
			$files_content .= '<a id="file_tools_action_bulk_delete" href="javascript:void(0);">' . elgg_echo("file_tools:list:delete_selected") . '</a> | ';
		}
		
		$files_content .= "<a id='file_tools_action_bulk_download' href='javascript:void(0);'>" . elgg_echo("file_tools:list:download_selected") . "</a>";
		
		$files_content .= "<a id='file_tools_select_all' class='float-alt' href='javascript:void(0);'>";
		$files_content .= "<span>" . elgg_echo("file_tools:list:select_all") . "</span>";
		$files_content .= "<span class='hidden'>" . elgg_echo("file_tools:list:deselect_all") . "</span>";
		$files_content .= "</a>";
		
		$files_content .= "</div>";
	}
}
if (! $sort_by || $sort_by == 'oe.title') {
	$selected = 'name';
} elseif ($sort_by == 'e.time_created') {
	$selected = 'time_created';
} elseif ($sort_by == 'simpletype') {
	$selected = 'type';
}
// show the listing
echo "<div id='file_tools_list_files'>";
echo "<div id='file_tools_list_files_overlay'></div>";
echo $folder_content;
echo elgg_view('file_tools/list/nav', array('folder_guid' => $folder_guid, 'selected' => $selected, 'direction' => $direction, 'switched' => $switched));
echo $files_content;
echo elgg_view("graphics/ajax_loader");
echo "</div>";

$page_owner = elgg_get_page_owner_entity();

if ($page_owner->canEdit() || (elgg_instanceof($page_owner, "group") && $page_owner->isMember())) { ?>
<script type="text/javascript">

	$(function(){
		
		elgg.file_tools.initialize_file_draggable();
		elgg.file_tools.initialize_folder_droppable();
		
	});

</script>
<?php
}
