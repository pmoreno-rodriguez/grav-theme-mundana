<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class CardsShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('sc-cards', function(ShortcodeInterface $sc) {
            // Get unique identifier for the cards
            $hash = $this->shortcode->getId($sc);

            // Process the template
            $output = $this->twig->processTemplate(
                'partials/shortcodes/sc-cards.html.twig',
                [
                    'hash' => $hash,
                    'cards' => $this->shortcode->getStates($hash),
                ]
            );

            return $output;
        });

        $this->shortcode->getHandlers()->add('sc-card', function(ShortcodeInterface $sc) {
            // Get the unique identifier of the parent ui-cards shortcode
            $hash = $this->shortcode->getId($sc->getParent());

            // Add the current card to the states of the parent ui-cards shortcode
            $this->shortcode->setStates($hash, $sc);

            return '';
        });
    }
}

