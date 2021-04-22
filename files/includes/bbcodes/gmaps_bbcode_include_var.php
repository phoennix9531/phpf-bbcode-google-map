<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: gmaps_bbcode_include_var.php
| Author: vrccsk
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
defined('IN_FUSION') || exit;

$__BBCODE__[] = [
    "description" => $locale["bb_gmaps_description"],
    "value"       => "Google-Maps", "bbcode_start" => "[gmaps]", "bbcode_end" => "[/gmaps]",
    "usage"       => "[gmaps]".$locale["bb_gmaps_usage"]."[/gmaps]"
];
