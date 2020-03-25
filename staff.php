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
Editor::inst( $db, 'user_info' )
    ->fields(
        Field::inst( 'id' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Id is required' ) 
            )),
        Field::inst( 'phone' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Phone No is required' )  
            )),
        Field::inst( 'email' )
            ->validator( Validate::email( ValidateOptions::inst()
                ->message( 'valid email is required' )  
            )),
        Field::inst( 'name' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Name is required' )   
            )),
        Field::inst( 'fname' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Fathers name is required' )  
            )),
        Field::inst( 'dob' )
            ->validator( Validate::dateFormat( 'Y-m-d' ) )
            ->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
            ->setFormatter( Format::dateFormatToSql('Y-m-d' ) ),
        Field::inst( 'course' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'course is required' )  
            )),
        Field::inst( 'branch' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'branch is required' )  
            )),
        Field::inst( 'semester' )
            ->validator( Validate::numeric() )
            ->setFormatter( Format::ifEmpty(null) ),
        Field::inst( 'urno' )
            ->validator( Validate::numeric() )
            ->setFormatter( Format::ifEmpty(null) ),
    )
    ->process( $_POST )
    ->json();