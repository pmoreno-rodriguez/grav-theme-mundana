<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class ButtonShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('sc-button', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $buttonurl = $sc->getParameter('url', $sc->getBbCode());
            $buttontarget = $sc->getParameter('target', $sc->getBbCode());
            $buttontype = $sc->getParameter('type', $sc->getBbCode());
            $buttonsize = $sc->getParameter('size', $sc->getBbCode());
            $buttonclasses = $sc->getParameter('classes', $sc->getBbCode());
            $buttonlabel = $sc->getParameter('label', $sc->getBbCode());
            $buttonOutline = $sc->getParameter('outline', 'false');

            // Initialize the button attributes string
            $buttonAttributes = 'btn';

            if (!empty($buttontype)) {
                
                if (!empty($buttonOutline) && $buttonOutline === 'true') {
                    $buttonAttributes .= ' btn-outline-' . $buttontype;
                } else {
                    $buttonAttributes .= ' btn-' . $buttontype;
                }
            }

            $sizeMapping = array(
                'small' => 'sm',
                'large' => 'lg',
            );
            // Map size values
            if (isset($sizeMapping[$buttonsize])) {
                $buttonsize = $sizeMapping[$buttonsize];
            }
            // Add the button size class if a size is provided
            if (!empty($buttonsize)) {
                $buttonAttributes .= ' btn-' . $buttonsize;
            }

            // Add the target attribute if provided
            $target = '';
            if (!empty($buttontarget)) {
                $target = ' target="_' . $buttontarget . '"';
            }

            // Add additional classes if provided
            if (!empty($buttonclasses)) {
                $buttonAttributes .= ' ' . $buttonclasses;
            }

            if (!empty($buttonurl) && !empty($buttonlabel)) {
                $output = '<a href="' . $buttonurl . '"' . $target . ' class="' . $buttonAttributes . '">' . $buttonlabel . '</a>';

                return $output;
            }
        });
    }
}
