# v2.1.0
# 09/25/2025

1.  [](#improved)
    * **Asset Management**: Replaced `file_exists()` method with `$grav['locator']->findResource()` for better stream compatibility and custom assets detection
    * **WordCount Extension**: Complete rewrite with internationalization support and modern Twig standards
    * **Twig Templates**: Updated output filtering practices following security best practices
    * **Template Structure**: Moved avatar and author display to blog-specific templates for clearer content type separation

# v2.0.0
## 09/15/2025

1.  [](#new)
    * New `navbar.use_page_color` setting to automatically match navbar color with individual page colors
2.  [](#improved)
    * Modular blueprint structure: Split main `blueprints.yaml` file into organized components within `blueprints/theme/` directory
    * Moved default template page options from "Page Settings" tab to "Options" tab for better organization
    * Relocated author page options from default template blueprint to `item.yaml` template (now only appears on blog articles)
    * Enhanced reading time template with proper datetime attributes (`PT{minutes}M{seconds}S`) for better accessibility and SEO. Thanks to [Librist-org](https://github.com/Librist-org)
    * Replaced `|raw` filter with `|e('html')` filter across all page titles in Twig templates for improved security
    * Fixed `featured.html.twig` to display Featured section only when posts are tagged with 'featured' taxonomy
    * Automatic text style adjustment (light/dark) based on navbar background color
3.  [](#bugfix)
    * Removed redundant `<span>` tags from various templates. Thanks to [Librist-org](https://github.com/Librist-org)
    * Fixed `latestposts.html.twig` to show only published posts in listings
    * Fixed `categories.html.twig` error when unpublished posts were present on pages with categories partial
    * Corrected `favicon.html.twig` to properly display favicon image instead of just the file path

# 1.4.1
## 08/23/2025

1.  [](#improved)  
    * HTML error corrections. Thanks to [Librist-org](https://github.com/Librist-org)
    * Remove trailing slashes from void HTML tags

# 1.4.0
## 08/17/2025

1.  [](#improved)  
    * Updated `bootstrap.min.js` to version `v4.6.2`. Thanks to [Librist-org](https://github.com/Librist-org)
    * Added option to load Google Fonts and Bootstrap styles locally or remotely. Thanks to [Librist-org](https://github.com/Librist-org)

# 1.3.4
## 03/13/2025

1.  [](#improved)
    * Updated `partials/taxonomylist.html.twig` to support latest updates in that plugin

# 1.3.3
## 11/11/2024

1.  [](#improved)
    * Normalized some css styles [(PR#16)](https://github.com/pmoreno-rodriguez/grav-theme-mundana/issues/16)
    * Removed the `custom.js` and `custom.css` files from the theme, to avoid overwriting user customizations with the release of new versions. These files are now loaded, if they exist in the theme's `assets/css` or `assets/js` folder, using the `onTwigSiteVariables` function within `mundana.php` and can be enabled from the theme settings [(PR#16)](https://github.com/pmoreno-rodriguez/grav-theme-mundana/issues/16).

# 1.3.2
## 11/10/2024

1.  [](#improved)
    * Replaced `convert_encoding('ISO-8859-1', 'HTML-ENTITIES')` with `|e('html_attr')` for better HTML attribute handling
    * Changed size of firs-letter class to avoid overflow in notices
    * Prepared for Grav 1.8

# v1.3.1
## 05/16/2024

1.  [](#new)
    * New `data.html.twig` template with rendered markdown on labels.
2.  [](#improved)
    * Fixed no summary data on `thankyou` page [#14](https://github.com/pmoreno-rodriguez/grav-theme-mundana/issues/14)
    * Fixed `alert-light` color in theme.css [#15](https://github.com/pmoreno-rodriguez/grav-theme-mundana/issues/15)
  
# v1.3.0
## 04/24/2024

1.  [](#improved)
    * Redesigned Bootstrap Shortcodes for Mundana Theme
    * Updated contact page in demo content
    * Added Shortcode-core to dependencies in theme blueprints
  
# v1.2.1
## 04/21/2024

1.  [](#new)
    * New `thankyou` page in demo content, for contact form

2.  [](#improved)
    * Fixed some French translations ([PR#10](https://github.com/pmoreno-rodriguez/grav-theme-mundana/pull/10))
    * Updated `taxonomylist` partial template to latest changes of [taxonomylist plugin](https://github.com/getgrav/grav-plugin-taxonomylist/releases/tag/1.3.6)
    * Improved design of partial templates for categories and related pages.
  
# v1.2.0
## 03/22/2024

1.  [](#new)
    * French translation (thanks to [ventoux84](https://github.com/ventoux84))
2.  [](#improved)
    * Fixed translation for "View all posts" in Allstories template (issue [#6](https://github.com/pmoreno-rodriguez/grav-theme-mundana/issues/6))
3.  [](#bugfix)
    * Fixed `featuredposts_tag` in base and allstories templates

# v1.1.0
## 03/17/2024

1.  [](#new)
    * Added option to show summary on pages (issue [#3](https://github.com/pmoreno-rodriguez/grav-theme-mundana/issues/3))
    * New Twig filter to count words per page to improve SEO
2.  [](#improved)
    * Fixed translation for "Read article" in Sticky template (issue [#5](https://github.com/pmoreno-rodriguez/grav-theme-mundana/issues/5))
  
# v1.0.1
## 12/31/2023

1.  [](#new)
    * Added support for Langswitcher plugin in the navigation bar
2.  [](#bugfix)
    * Fixed menu options (issue [#1](https://github.com/pmoreno-rodriguez/grav-theme-mundana/issues/1))
  
# v1.0.0
## 12/22/2023

1.  [](#new)
    * Initial release
