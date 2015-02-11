<?php

/*
 * Editor server script for DB table tbl_prisijungimai
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'tbl_prisijungimai', 'id' )
	->fields(
		Field::inst( 'puslapis' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'userid' ),
		Field::inst( 'login' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'password' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'email' )
			->validator( 'Validate::notEmpty' )
			->validator( 'Validate::email' ),
		Field::inst( 'telno' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'type_jur_priv' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'sch_start' ),
		Field::inst( 'sch_stop' ),
		Field::inst( 'pastabos' )
	)
	->process( $_POST )
	->json();
