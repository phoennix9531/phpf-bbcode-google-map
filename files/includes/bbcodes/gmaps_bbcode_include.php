<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: gmaps_bbcode_include.php
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

$html = '<iframe style="border: 0;" class="embed-responsive-item" src="https://www.google.com/maps/embed\3" referrerpolicy="no-referrer" width="600" height="450" allowfullscreen="allowfullscreen"></iframe>';
$text = preg_replace('#\[gmaps\](http:|https:)?(\/\/www.google\.com\/maps\/embed|\/\/)?(.*?)\[/gmaps\]#si', $html, $text);
