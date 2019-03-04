<?php
if(!defined('THEMENAME')) { define('THEMENAME', 'zot'); }

/*
Plugin Name: Zot
Description: My Zot personal plugin
*/

/**
 * Configs
 */

include 'zotConfig.php';

/**
 * Widgets
 */

include 'zotWidget.php';

/**
 * Functions 
 */
include "includes/zotFunctions.php";
include "includes/zotLogo.php";
include "includes/zotMenu.php";
include "includes/zotBanner.php";
include "includes/zotWidget.php";
include "includes/zotProducts.php"; 
include "includes/zotPosts.php"; 
include "includes/zotPagination.php"; 

/**
 * Create Type Posts
 */
include "createposts/banner.php";
include "createposts/product.php";
// include "includes/banner.php";
// include "includes/page.php";
// include "includes/extra.php";
// include "includes/zotmenu.php";
// include "includes/maislidos.php";
// include "includes/product.php";
// include "includes/project.php";
// include "includes/social.php";
// include "includes/breadcrumb.php";
// include "includes/lojas.php"; 
// include "includes/zotlogo.php";
// include "includes/posts.php";

//include "fields/custom.php";

/**
 * Customizer
 */
include "zotCustomizer.php";