<?php
 
/*
 * Example PHP implementation used for the index.html example
 */
 
// DataTables PHP library
include( "php/DataTables.php" );
 
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
Editor::inst( $db, 'timetable' , 's_no' )
    ->fields(
        Field::inst( 's_no' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'This field should not be empty' )  
            )),
        Field::inst( 'semester' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'This field should not be empty' )  
            )),
        Field::inst( 'day'),
        Field::inst( 'a'),
        Field::inst( 'b'),
        Field::inst( 'c'),
        Field::inst( 'd'),
        Field::inst( 'e'),
        Field::inst( 'f'),
        Field::inst( 'g'),
        Field::inst( 'h')      
    )
    ->process( $_POST )
    ->json();