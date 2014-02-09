<?php
/**
 * File containing the GooglePlus class.
 *
 * @copyright Copyright (C) 2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */
namespace BD\Bundle\GooglePlusCommentsBundle\Comments\Provider;

use eZ\Publish\API\Repository\Values\Content\ContentInfo;
use EzSystems\CommentsBundle\Comments\Provider\TemplateBasedProvider;
use Symfony\Component\HttpFoundation\Request;

class GooglePlus extends TemplateBasedProvider
{
    public function render( Request $request, array $options = array() )
    {
        return $this->doRender(
            $options + array( 'mode' => 'comments' )
        );
    }

    public function renderForContent( ContentInfo $contentInfo, Request $request, array $options = array() )
    {
        return $this->doRender(
            $options + array( 'mode' => 'comments' )
        );
    }

}
 