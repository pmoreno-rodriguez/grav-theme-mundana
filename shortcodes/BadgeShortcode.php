<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class BadgeShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('sc-badge', function(ShortcodeInterface $sc) {
            // Render the Twig template with shortcode parameters
            $output = $this->grav['twig']->processTemplate(
                'partials/shortcodes/badge.html.twig',
                ['shortcode' => $sc]
            );

            return $output;
        });
    }
}
