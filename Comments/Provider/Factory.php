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
    public function buildGooglePlus()
    {
        $googlePlusProvider = new GooglePlus(
            $this->templateEngine,
            "BDGooglePlusCommentsBundle::googleplus.html.twig"
        );

        return $googlePlusProvider;
    }
}
