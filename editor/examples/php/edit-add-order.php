<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "../../php/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;


		// Allow a number of different formats to be submitted for the various demos
$format = isset( $_GET['format'] ) ?
	$_GET['format'] :
	'';

if ( $format === 'custom' ) {
	$update = 'n/j/Y';
	$registered = 'l j F Y';
}
else {
	$update = Format::DATE_ISO_8601;
	$registered = Format::DATE_ISO_8601;
}
	

if ( isset($_POST['action']) && $_POST['action'] === 'remove' ) {
	header("HTTP/1.0 204 No Response");
	exit;
}

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'k9', 'track_date', 'order_no', 'service', 'billing_name','zip','shipping_country','weight','carton_quantity','pick_no')
	->fields(
		//Field::inst( 'user_id' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'track_date' ),
		Field::inst( 'order_no' ),
		Field::inst( 'service' ), 
		Field::inst( 'billing_name' ),
		Field::inst( 'zip'),
		Field::inst( 'shipping_country' ),
		Field::inst( 'weight' ),
		Field::inst( 'tracking_no' ),
		Field::inst( 'carton_quantity'),
		Field::inst( 'pick_no')
	)
	->process( $_POST )
	->json();
