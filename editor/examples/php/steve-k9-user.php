<?php

/*
 * Example PHP implementation used for date time examples
 */

// DataTables PHP library
include( "../../php/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'users', 'user_id', 'firstN', 'lastN', 'email', 'image' )
	->fields(
		Field::inst( 'firstN' ),
		Field::inst( 'lastN' ),
		Field::inst( 'email' ),
		Field::inst( 'image' ))
	->process( $_POST )
	->json();