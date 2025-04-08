<?php
/**
 * @file
 * @brief Main file for the WetterOnline.de module
 * @package Joomla.Site
 * @subpackage mod_wetteronline
 *
 * This module displays the weather for a location, using www.wetteronline.de as a source.
 *
 * @author Frank Willeke
 * @license GNU/GPL 2, see LICENSE.php
 */

defined('_JEXEC') or die('Restricted access');

// Retrieve the module parameters for location, width, and height
$location = $params->get('location', 'Berlin');
$width    = $params->get('width', '100%');
$height   = $params->get('height', '100');

// Create a SEO-friendly version of the location (lowercase, replacing spaces with hyphens)
// The preg_replace below converts one or more whitespace characters into a single hyphen.
$seourl = strtolower(trim($location));
$seourl = preg_replace("/\s+/", "-", $seourl);
?>

<div class="mod-wetteronline">
    <iframe
        width="<?php echo htmlspecialchars($width, ENT_QUOTES, 'UTF-8'); ?>"
        height="<?php echo htmlspecialchars($height, ENT_QUOTES, 'UTF-8'); ?>"
        name="CW1"
        style="border:1px solid;border-radius:10px;border-color:transparent;padding:0;margin:0;"
        src="https://api.wetteronline.de/wetterwidget?gid=10382&modeid=CW1&seourl=<?php echo urlencode($seourl); ?>&locationname=<?php echo urlencode($location); ?>&lang=de">
    </iframe>
</div>
