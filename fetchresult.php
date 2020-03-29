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
Editor::inst( $db, 'result', 'sno' )
    ->fields(
        Field::inst( 'sno' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'sno is required' ) 
            )),
        Field::inst( 'id' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Id is required' ) 
            )),
        Field::inst( 'semester' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'semester is required' )  
            )),
        Field::inst( 'sgpa' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'sgpa is required' )  
            )),
        Field::inst( 'backs' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Backs is required' )   
            )),
        Field::inst( 'result_status' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'result_status name is required' )  
            )),
        Field::inst( 'view' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'view is required' )  
            )),
    )
    ->process( $_POST )
    ->json();