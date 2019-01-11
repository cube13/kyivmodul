<?php
/**
*
* @package Site Logo Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\sitelogo\migrations;

class version_1_1_0 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\david63\sitelogo\migrations\version_1_0_0');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('site_logo_banner_height', '100')),
			array('config.add', array('site_logo_banner_radius', '10')),
			array('config.add', array('site_logo_banner_url', '')),
			array('config.add', array('site_logo_move_search', '0')),
			array('config.add', array('site_logo_override_colour', '000000')),
			array('config.add', array('site_logo_site_name_below', '0')),
			array('config.add', array('site_logo_use_banner', '0')),
			array('config.add', array('site_logo_use_extended_desc', '0')),
			array('config.add', array('site_logo_use_override_colour', '0')),

			array('config_text.add', array('site_logo_extended_site_description', '')),

			array('config.remove', array('version_sitelogo')),
		);
	}
}
