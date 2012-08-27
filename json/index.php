<?php
require dirname(__FILE__) . '/../../../../wp-load.php';

function ok($posts) {
	global $term;
	global $result;
	$result['posts'] = $posts;
	echo json_encode($result);
	die();
}

function ko($error) {
	global $result;
	$result['error'] = $error;
	echo json_encode($result);
	die();
}

header('content-type: application/json');

$term = isset($_REQUEST['search']) ? $_REQUEST['search'] : '';
// Strip all tags
$term = wp_kses($term, array());
// remove SQL special chars % and _ for LIKE
$term = str_replace( array('_', '%'), "", $term );

$result = array( 'search' => $term );

if ( strlen($term) < 3 )
	ko ( "Search term minimum length is less than 3" );

$posts = $wpdb->get_results($wpdb->prepare(
	"
	SELECT ID, post_title
	FROM {$wpdb->posts}
	WHERE post_status = 'publish' AND post_title LIKE '%%%s%%'
	LIMIT 10
	", $term)
	, ARRAY_A);

if ( !$posts )
	ko ( "No post found matching $term" );

foreach ( $posts as $index => $post ) {
	$posts[$index]['permalink'] = get_permalink($post['ID']);
}

ok($posts);

