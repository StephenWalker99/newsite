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
Editor::inst( $db, 'temp_carton_quantity' )
	->fields(
		Field::inst( 'order_no' ),
		Field::inst( 'carton_quantity' ))
	
	->process( $_POST )
	->json();
