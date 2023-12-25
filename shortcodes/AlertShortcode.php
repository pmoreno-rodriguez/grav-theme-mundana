<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class AlertShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('sc-alert', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $alertClass = $sc->getParameter('class', 'primary');
            $alertDismissible = $sc->getParameter('dismissible', 'false');
            $alertHeading = $sc->getParameter('heading');
            $alertText = $sc->getContent();

            if (empty($alertClass)) {
              $alertClass = "primary";
            }

            $closeButton = '';
            $classDismissible = '';

            if ($alertDismissible === 'true') {
                $classDismissible = 'alert-dismissible fade show';
                $closeButton = '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>';
            }

            if (!empty($alertHeading)) {
                $output = '<div class="alert '.$classDismissible .' alert-'.$alertClass.'" role="alert">
                            <h4 class="alert-heading">'.$alertHeading.'</h4>
                            '.$alertText.$closeButton.'
                            </div>';
                return $output;
            }
            else {
                $output = '<div class="alert '.$classDismissible .' alert-'.$alertClass.'" role="alert">
                            '.$alertText.$closeButton.'
                            </div>';
                return $output;
            }

        });
    }
}
