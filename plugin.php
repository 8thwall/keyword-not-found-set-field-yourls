<?php
/*
Plugin Name: Pre-populate Custom short URL field if keyword not found
Plugin URI: https://github.com/8thwall/keyword-not-found-set-field-yourls
Description: If keyword isn't found in the database, redirect to admin page and pre-populate the short URL field
Version: 1.0
Author: Tony Tomarchio (atomarch)
Author URI: http://www.8thwall.com, http://www.tomarchio.cc
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_action( 'redirect_keyword_not_found' , 'atomarch_redirect' );

function atomarch_redirect($request) {
 yourls_redirect( yourls_admin_url() . "?keyword=" . $request[0] );
}

yourls_add_action( 'html_addnew' , 'atomarch_fill_keyword' );

function atomarch_fill_keyword() {

 if( isset($_GET['keyword']) && $_GET['keyword']) {
    echo "<script> \$(function() { \$( \"#add-keyword\" ).val(\"" . $_GET['keyword'] . "\"); }); </script>";
 }
}

?>
