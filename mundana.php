<?php
namespace Grav\Theme;

use Grav\Common\Theme;
use RocketTheme\Toolbox\Event\Event;
use Grav\Common\Page\Interfaces\PageInterface;

/**
 * Mundana Theme
 *
 * Class Mundana
 *
 * @category Extensions
 * @package  Grav\Theme
 * @author   Pedro Moreno <https://github.com/pmoreno-rodriguez>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 * @link     https://github.com/pmoreno-rodriguez/grav-theme-mundana
 */

class Mundana extends Theme
{

    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized'  => ['onThemeInitialized', 0],
            'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
            'onTwigInitialized' => ['onTwigInitialized', 0],
        ];
    }

    /**
    * Register custom CSS or JavaScript assets
    **/ 
    public function onTwigSiteVariables()
    {

        $themeConfig = $this->config->get('themes.mundana');

        if (isset($themeConfig['custom_css']) && $themeConfig['custom_css'] && file_exists(__DIR__ . '/assets/css/custom.css')) {
            $this->grav['assets']->addCss('theme://assets/css/custom.css', ['priority' => 10]);
        }

        if (isset($themeConfig['custom_js']) && $themeConfig['custom_js'] && file_exists(__DIR__ . '/assets/js/custom.js')) {
            $this->grav['assets']->addJs('theme://assets/js/custom.js', ['group' => 'bottom', 'priority' => 15]);
        }
    }
    
    
    public function onThemeInitialized()
    {
        

    }

    /**
     * Register custom shortcode
     */
    public function onShortcodeHandlers()
    {
        $this->grav['shortcode']->registerAllShortcodes(__DIR__ . '/shortcodes');
    }

    /**
     * Page Styles
     **/
    public static function getPageStyles()
    {
        return [
            'primary' => 'Primary',
            'secondary' => 'Secondary',
            'success' => 'Success',
            'info' => 'Info',
            'warning' => 'Warning',
            'danger' => 'Danger',
            'dark' => 'Dark',
        ];
    }

    public function onTwigInitialized()
    {
        $twig = $this->grav['twig'];

        $form_class_variables = [
            'form-input-wrapper' => 'form-group',
            'form_button_outer_classes' => '',
            'form_button_classes' => 'btn',
            'form_errors_classes' => 'alert alert-danger',
            'form_field_outer_classes' => 'form-group',
            'form_field_outer_label_classes' => '',
            'form_field_label_classes' => 'form-label',
            'form_field_input_classes' => 'form-control',
            'form_field_textarea_classes' => 'form-control',
            'form_field_select_classes' => 'form-select',
            'form_field_radio_classes' => 'custom-control-input',
            'form_field_checkbox_classes' => 'custom-control-input',
            'form_label_checkbox_classes' => 'custom-control-label'

        ];

        $twig->twig_vars = array_merge($twig->twig_vars, $form_class_variables);

    }
    

}
