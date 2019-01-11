<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * phpbb_url_matcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/thankslist')) {
                // gfksx_ThanksForPosts_thankslist_controller_user
                if (preg_match('#^/thankslist/(?P<mode>\\w+)/(?P<author_id>\\d+)/(?P<give>true|false)(?P<tslash>/?)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gfksx_ThanksForPosts_thankslist_controller_user')), array (  '_controller' => 'gfksx.ThanksForPosts.controller.thankslist:main',  'top' => 0,  'start' => 0,  'sort_key' => 'a',  'sort_dir' => 'd',  'topic_id' => 0,  'return_chars' => 300,));
                }

                // gfksx_ThanksForPosts_thankslist_controller
                if (preg_match('#^/thankslist(?P<tslash>/?)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gfksx_ThanksForPosts_thankslist_controller')), array (  '_controller' => 'gfksx.ThanksForPosts.controller.thankslist:main',  'mode' => '',  'author_id' => 1,  'give' => '',  'top' => 0,  'start' => 0,  'sort_key' => 'a',  'sort_dir' => 'd',  'topic_id' => 0,  'return_chars' => 300,));
                }

            }

            // gfksx_ThanksForPosts_toplist_controller
            if (0 === strpos($pathinfo, '/toplist') && preg_match('#^/toplist(?P<tslash>/?)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gfksx_ThanksForPosts_toplist_controller')), array (  '_controller' => 'gfksx.ThanksForPosts.controller.toplist:main',  'mode' => '',  'start' => 0,  'topic_id' => 0,  'return_chars' => 300,));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
