<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class CollapseShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('sc-collapse', function(ShortcodeInterface $sc) {

            // Get the ID provided in the shortcode
            $hash = $sc->getParameter('id');

            $output = $this->twig->processTemplate(
                'partials/shortcodes/sc-collapse.html.twig',
                [
                    'hash' => $hash,
                    'open' => $sc->getParameter('open'),
                    'collapse_items' => $this->shortcode->getStates($hash),
                ]
            );

            return $output;
        });

        $this->shortcode->getHandlers()->add('sc-collapse-item', function(ShortcodeInterface $sc) {
            // Get the ID of the parent shortcode
            $hash = $sc->getParent()->getParameter('id');

            $this->shortcode->setStates($hash, $sc);

            return '';
        });
    }
}



