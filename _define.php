<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of shortArchives, a plugin for Dotclear.
#
# Copyright (c) 2009-2015 - annso and contributors
# contact@as-i-am.fr
#
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')) {return;}

$this->registerModule(
	/* Name */			    "shortArchives",
	/* Description*/		"Display blog archives in an accordion menu, sorted by year",
	/* Author */			"annso, Pierre Van Glabeke",
	/* Version */			"1.8.1",
	/* Properties */
	array(
		'permissions' => 'usage,contentadmin',
		'type' => 'plugin',
		'dc_min' => '2.7',
		'support' => 'http://forum.dotclear.org/viewtopic.php?pid=321044#p321044',
		'details' => 'http://plugins.dotaddict.org/dc2/details/shortArchives'
		)
);