<?php
/**
 *	Extend elgg css
 *	Author : Mahin Akbar | Team Webgalli
 *	Team Webgalli | Elgg developers and consultants
 *	Web	: http://webgalli.com
 *	Skype : 'team.webgalli'
 *	@package galliElggCSS
 *	Licence : GPLV2
 *	Copyright : Team Webgalli 2013-2015
 */

// Initiate the plugin when the elgg engine boots 
elgg_register_event_handler('init', 'system', 'galliElggCSS_init');

function galliElggCSS_init() {
	// Extend elgg css
	elgg_extend_view('css/elgg', 'galliElggCSS/css', 1000);
}
