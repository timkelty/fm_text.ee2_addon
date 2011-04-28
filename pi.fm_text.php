<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------

/**
 * Fusionary Text Plugin
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Plugin
 * @author		Fusionary
 * @link		http://fusionary.com
 */

$plugin_info = array(
	'pi_name'		=> 'Fusionary Text',
	'pi_version'	=> '1.0',
	'pi_author'		=> 'Fusionary',
	'pi_author_url'	=> 'http://fusionary.com',
	'pi_description'=> 'Parse text how we want.',
	'pi_usage'		=> Fm_text::usage()
);


class Fm_text {

	public $return_data;
    
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->EE =& get_instance();
	}
	
	// ----------------------------------------------------------------
	
	/**
	 * Plugin Usage
	 */
	public static function usage()
	{
		ob_start();
?>

 Since you did not provide instructions on the form, make sure to put plugin documentation here.
<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}


/* End of file pi.fm_text.php */
/* Location: /system/expressionengine/third_party/fm_text/pi.fm_text.php */