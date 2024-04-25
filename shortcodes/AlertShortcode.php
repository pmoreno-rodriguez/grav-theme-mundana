<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class AlertShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('sc-alert', function (ShortcodeInterface $sc) {
            // Render the Twig template with shortcode parameters
            $output = $this->grav['twig']->processTemplate(
                'partials/shortcodes/alert.html.twig',
                ['shortcode' => $sc]
            );

            return $output;
        });
    }
}
