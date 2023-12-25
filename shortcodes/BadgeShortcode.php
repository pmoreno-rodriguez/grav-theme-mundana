<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class BadgeShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('sc-badge', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $badgeclass= $sc->getParameter('class', $sc->getBbCode());
            $badgelabel= $sc->getParameter('label', $sc->getBbCode());
            $badgeurl= $sc->getParameter('url', $sc->getBbCode());
            $badgetarget= $sc->getParameter('target', $sc->getBbCode());

            if (empty($badgeclass)) {
              $badgeclass = "secondary";
            }

            if (empty($badgetarget)) {
              if ($this->config->get('plugins.external_links.enabled')) {
                  $badgetarget = $this->config->get('plugins.external_links.target');
              } else {
                  $badgetarget = "self";
              }
            }

            if (!empty($badgelabel) && !empty($badgeurl)) {
                $output = '<a target="_'.$badgetarget.'" href="'.$badgeurl.'" class="badge badge-'.$badgeclass.'">'.$badgelabel.' </a>';
                return $output;
            } elseif (!empty($badgelabel)) {
                $output = '<span class="badge badge-'.$badgeclass.'">'.$badgelabel.'</span>';
                return $output;
            }

        });
    }
}