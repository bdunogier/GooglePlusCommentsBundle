<?php
/**
 * File containing the SiteAccessAwareFactory class.
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace BD\Bundle\GooglePlusCommentsBundle\Comments\Provider;

use eZ\Publish\API\Repository\LocationService;
use eZ\Publish\Core\MVC\ConfigResolverInterface;
use EzSystems\CommentsBundle\Comments\Provider\SiteAccessAwareFactory;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Templating\EngineInterface;

class Factory extends SiteAccessAwareFactory
{
    /**
     * @param string $disqusProviderClass
     *
     * @return \EzSystems\CommentsBundle\Comments\ProviderInterface
     */
    public function buildGooglePlus( LocationService $locationService, RouterInterface $router )
    {
        $googlePlusProvider = new GooglePlus(
            /*$this->configResolver->getParameter( 'facebook.app_id', 'ez_comments' ),
            array(
                'width' => $this->configResolver->getParameter( 'facebook.width', 'ez_comments' ),
                'num_posts' => $this->configResolver->getParameter( 'facebook.num_posts', 'ez_comments' ),
                'color_scheme' => $this->configResolver->getParameter( 'facebook.color_scheme', 'ez_comments' ),
                'include_sdk' => $this->configResolver->getParameter( 'facebook.include_sdk', 'ez_comments' ),
            ),
            $locationService,
            $router,
            $this->templateEngine,
            $this->configResolver->getParameter( 'facebook.default_template', 'ez_comments' )*/
        );

        return $googlePlusProvider;
    }
}
