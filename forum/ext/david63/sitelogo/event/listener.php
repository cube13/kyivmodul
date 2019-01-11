<?php
/**
*
* @package Site Logo Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\sitelogo\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use david63\sitelogo\ext;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var ContainerInterface */
	protected $container;

	/** @var string phpBB root path */
	protected $root_path;

	/**
	* Constructor for listener
	*
	* @param \phpbb\config\config		$config		phpBB config
	* @param \phpbb\template\template	$template	phpBB template
	* @param \phpbb\user				$user		User object
	* @param ContainerInterface			$container	Service container interface
	* @param string 					$root_path
	*
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user, $container, $root_path)
	{
		$this->config		= $config;
		$this->template		= $template;
		$this->user			= $user;
		$this->container	= $container;
		$this->root_path	= $root_path;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header_after' => 'site_logo_header',
		);
	}

	/**
	* Update the template variables
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function site_logo_header($event)
	{
		$site_logo_img = ($this->config['site_logo_remove']) ? '' : $this->user->img('site_logo');

		// No point processing this if it is not required
		if ($this->config['site_logo_image'] && !$this->config['site_logo_remove'])
		{
			$logo_path		= (strpos(strtolower($this->config['site_logo_image']), 'http') !== false) ? $this->config['site_logo_image'] : append_sid($this->root_path . $this->config['site_logo_image'], false, false);

			$logo_corners 	= '0px 0px 0px 0px';
			$logo_corners 	= ($this->config['site_logo_left']) ? $this->config['site_logo_pixels'] . 'px 0px 0px ' . $this->config['site_logo_pixels'] . 'px' : $logo_corners;
 			$logo_corners 	= ($this->config['site_logo_right']) ? '0px ' . $this->config['site_logo_pixels'] . 'px ' . $this->config['site_logo_pixels'] . 'px 0px' : $logo_corners;
			$logo_corners 	= ($this->config['site_logo_left'] && $this->config['site_logo_right']) ? $this->config['site_logo_pixels'] . 'px ' . $this->config['site_logo_pixels'] . 'px ' . $this->config['site_logo_pixels'] . 'px ' . $this->config['site_logo_pixels'] . 'px' : $logo_corners;

			$site_logo_img	= '<img src=' . $logo_path . ' style="max-width: 100%; height:auto; height:' . $this->config['site_logo_height'] . 'px; width:' . $this->config['site_logo_width'] . 'px; -webkit-border-radius: ' . $logo_corners . '; -moz-border-radius: ' . $logo_corners . '; border-radius: ' . $logo_corners . ';">';
		}

		if ($this->config['site_logo_use_extended_desc'])
		{
			$this->config_text				= $this->container->get('config_text');
			$extended_site_description_data	= $this->config_text->get_array(array('site_logo_extended_site_description'));
			$this->config['site_desc']		= $extended_site_description_data['site_logo_extended_site_description'];
		}

		$site_logo_banner = (strpos(strtolower($this->config['site_logo_banner_url']), 'http') !== false) ? $this->config['site_logo_banner_url'] : append_sid($this->root_path . $this->config['site_logo_banner_url'], false, false);

		$this->template->assign_vars(array(
			'BANNER_HEIGHT'			=> $this->config['site_logo_banner_height'],
			'BORDER_RADIUS'			=> $this->config['site_logo_banner_radius'],
			'OVERRIDE_COLOUR'		=> $this->config['site_logo_override_colour'],
			'SEARCH_BELOW'			=> ((!$this->config['site_search_remove'] && $this->config['site_logo_site_name_below']) || $this->config['site_logo_move_search']) ? true : false,
			'SITE_DESCRIPTION'		=> $this->config['site_desc'],
			'SITE_LOGO_BANNER'		=> $site_logo_banner,
			'SITE_LOGO_CENTRE'		=> ($this->config['site_logo_position'] == ext::LOGO_POSITION_CENTER) ? true : false,
			'SITE_LOGO_DESCRITION'	=> $this->config['site_desc'],
			'SITE_LOGO_IMG'			=> $site_logo_img,
			'SITE_LOGO_RIGHT'		=> ($this->config['site_logo_position'] == ext::LOGO_POSITION_RIGHT) ? true : false,
			'SITE_LOGO_SITENAME'	=> $this->config['sitename'],
			'SITE_NAME_BELOW'		=> $this->config['site_logo_site_name_below'],
			'SITENAME_SUPRESS'		=> ($this->config['site_name_supress'] || $this->config['site_logo_site_name_below']) ? true : false,
			'S_IN_SEARCH'			=> ($this->config['site_search_remove'] || $this->config['site_logo_site_name_below'] || $this->config['site_logo_move_search']) ? true : false,
			'USE_BANNER'			=> ($this->config['site_logo_use_banner'] && $this->config['site_logo_banner_url']) ? true : false,
			'USE_OVERRIDE_COLOUR'	=> $this->config['site_logo_use_override_colour'],
		));
	}
}
