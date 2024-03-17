<?php

namespace Grav\Theme\Mundana;

use Twig\TwigFunction;

/**
 * WordCountTwigExtension Extension
 *
 *
 * @category Extensions
 * @package  Grav\Theme
 * @author   Pedro Moreno <https://github.com/pmoreno-rodriguez>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 * @link     https://github.com/pmoreno-rodriguez/grav-theme-mundana
 */

 class WordCountTwigExtension extends \Twig_Extension
 {
     public function getFilters()
     {
         return [
             new \Twig_SimpleFilter('wordcount', [$this, 'wordCountFilter']),
         ];
     }
 
     public function wordCountFilter($text)
     {
         // Count the words in the text
         $word_count = str_word_count(strip_tags($text));
         return $word_count;
     }
 }
