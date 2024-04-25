<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class ButtonShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('sc-button', function(ShortcodeInterface $sc) {
            // Render the Twig template with shortcode parameters
            $output = $this->grav['twig']->processTemplate(
                'partials/shortcodes/button.html.twig',
                ['shortcode' => $sc]
            );

            return $output;
        });
    }
}
