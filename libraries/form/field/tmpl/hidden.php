<?php
/**
 * @version    $Id$
 * @package    WR_Library
 * @author     WooRockets Team <support@woorockets.com>
 * @copyright  Copyright (C) 2014 WooRockets.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.woorockets.com
 */

// Define necessary attributes
$this->attributes['type'] = 'hidden';

// Prepare field value
if ( is_array( $this->value ) || is_object( $this->value ) ) {
	$this->attributes['value'] = json_encode( $this->value );
}
?>
<input <?php $this->html_attributes(); ?> />
