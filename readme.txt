=== Easy Menu Icons ===
Contributors: themewant
Tags: menu icons, nav-menu, nav icon, navigation
Requires at least: 6.0
Requires PHP: 7.2
Tested up to: 7.1
Stable tag: 1.1.5
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add Dashicons or Font Awesome icons to any WordPress menu item, and style them per item or site-wide.

== Description ==
Easy Menu Icons is a versatile and user-friendly plugin that enhances your WordPress menus with icon support. This plugin allows you to effortlessly add icons to your menu items, making your navigation more intuitive and visually appealing. It ships the complete Dashicons and Font Awesome libraries, giving you thousands of icons to choose from, and provides flexibility and customization options for your WordPress menus.

https://www.youtube.com/watch?v=0fM4Z_94vzk

[Demo](https://themewant.com/menuicon/) | [Upgrade to Pro](https://themewant.com/downloads/easy-menu-icons-pro/)


= Usage =
1. After the plugin is activated, go to *Appearance* > *Menus* to edit your menus
2. Add your icon now to your menu item
1. Select icon by clicking on the "Add Icon" link
1. Save the menu

== Free Version Features ==

1. Easily Change Menu Icon Color
2. Adjust Your Icon Size		
3. Adjust Your Icon Position Easily	
4. You can manage Icon Spacing As well
5. You can use **Dashicon** and **Font Awesome** Only for free version. 

== Pro Version Extra Features ==

1. All Free version features included
2. Fontawesome Icon Supported [Font Awesome](http://fontawesome.io/)
3. Elegant Icon Supported [Elegant Icons](https://www.elegantthemes.com/blog/resources/elegant-icon-font)
4. Foundation Icon Supported [Foundation Icons](http://zurb.com/playground/foundation-icon-fonts-3/)
5. Elusive Icon Supported [Elusive Icons](http://shoestrap.org/downloads/elusive-icons-webfont/)
5. Themify Icon Supported [Themify Icon](https://themify.me/staging/themify-icons)
6. Fontello Icon Supported [Fontello](http://fontello.com/)
7. Generic Icon Font Supported [Genericons](http://genericons.com/)
8. Custom Icon like SVG, PNG images supported



== Frequently Asked Questions ==
= How do I add an icon to a menu item? =
To add an icon to a menu item, go to the WordPress dashboard and navigate to Appearance > Menus. Select the menu item you want to add an icon to, and you will see an option to choose an icon from Dashicons or Font Awesome. Simply select your desired icon and save your changes.

=  Can I use my own custom icons? =
Uploading your own icon files is part of the Pro version. The free plugin ships the full Dashicons and Font Awesome libraries, which you can apply to any menu item.

= Is the plugin compatible with all WordPress themes? =
Yes, the Easy Menu Icons plugin is designed to be compatible with all WordPress themes. If you encounter any issues with specific themes, please contact our support team for assistance.

= The Icons are not showing =
For the Easy Menu Icons plugin to work correctly, your theme should use the default WordPress walker for displaying navigation menus. If your theme uses a custom walker, make sure that the menu item titles are filterable. If you're unsure, please check with your theme's developer for compatibility.

= Some Icon fonts not rendering properly =
This is a bug with the font icon itself. When the font is updated, this plugin will update its font too.

= Can I use multiple icon libraries at the same time? =
Absolutely! The Easy Menu Icons plugin allows you to mix and match icons from both bundled libraries (Dashicons and Font Awesome) on the same menu, giving you the flexibility to create a unique and personalized menu design.




== Installation ==

1. Go to the Plugins Menu in WordPress
2. Search for "Easy Menu Icons"
3. Click "Install Now" and then "Activate"

== Screenshots ==

See https://themewant.com/downloads/easy-menu-icons-pro/ screenshots

1. Add Icon
2. Change Icon
3. Select Icon and Icon Library
4. Custom Image (Pro)
5. Icon Individual Settings
6. Global Settings
7. Icon Demo From Astra Theme
8. Icon Demo From Twenty Twenty Theme

== Changelog ==

= 1.1.5 - 1 Oct 2026 =
- Security: The promotional notice is no longer printed on every wp-admin screen; it appears only on this plugin's own pages.
- Security: A dismissed notice now stays dismissed. Previously the record was cleared once a campaign expired, so reissuing the same notice could bring it back.
- Privacy: The notice request to the Themewant service is cached for 12 hours instead of being made on every admin page load, and the service is documented under "External services" with its privacy policy.
- Fixed: The dashboard widget no longer re-orders the WordPress Dashboard to place itself above the core widgets.
- Fixed: "Successfully data saved" corrected to "Data saved successfully."
- Added: Requires at least and Requires PHP are now declared in the plugin header.

= 1.1.4 - 13 Jul 2026 =
- Security: Fixed an authenticated stored Cross-Site Scripting (XSS) vulnerability in the menu item icon settings. Added capability and nav menu item ownership checks to the icon AJAX handlers and escaped icon output on the front-end navigation. Props to Artus KG for the responsible disclosure.
- Improved: Icons now load directly from the plugin files (no HTTP request) for faster, more reliable loading.
- Fixed: Removed PHP notices and a case where the icon failed to render when no style was saved.
- Improved: Extra output escaping and translatable admin strings.
- Housekeeping: Added safe fallbacks and general code cleanup.

= 1.1.3 - 23 May 2026 =
- Added dashboard story notice

= 1.1.2 - 29 Dec 2025 =
- Improved made Compatible with Latest WP

= 1.1.1 - 16 Oct 2025 =
- Improved performance & made Compatible with Latest WP

= 1.1.0 - 10 Aug 2025 =
- Fixed Some Bugs
- Compatible with Latest WP

= 1.0.9 - 02 Dec 2024 =
- Fixed Some Conditions

= 1.0.7 - 05 Nov 2024 =
- Fixed ettings Tabs Issus

= 1.0.6 - 04 Nov 2024 =
- Added FontAwesome Icons

= 1.0.2 - 1 Sept 2024 =
- Fixed Icon Display Issue wihtout refresh
- Fixed Delete Icon

= 1.0.0 - 27 Aug 2024 =
- Initial Release


== External services ==

This plugin makes use of the following third-party api and libraries to provide enhanced functionality and user experience. None of these api or libraries collect or transmit personal data outside your WordPress installation.

Themewant notice service
The plugin requests the notices and offers shown on its own admin screens. The
request body carries only the plugin slug and which screen is asking, for
example {"screen":"notice-bar","plugin":"easy-menu-icons"} - no site URL, no
email address and no user information. The response is cached for 12 hours.
Source: https://reactheme.com/products/license/wp-json/reacthemes/v1/get_thewtmc
Privacy Policy: https://themewant.com/privacy-policy/
Terms of Services: https://themewant.com/terms-of-condition/

== Third-party libraries ==

This plugin bundles the following library. Its minified build is shipped; the
non-compressed source is published upstream at the link below.

* Font Awesome Free - admin/assets/css/fontawesome.all.min.css and admin/assets/webfonts/
  Source: https://github.com/FortAwesome/Font-Awesome
  Home:   https://fontawesome.com/
  Licence: icons CC BY 4.0, fonts SIL OFL 1.1, code MIT

* jQuery QuickSearch - admin/assets/js/jquery.quicksearch.js (non-compressed)
  Source: https://github.com/DeuxHuitHuit/jquery-quicksearch
  Licence: MIT
