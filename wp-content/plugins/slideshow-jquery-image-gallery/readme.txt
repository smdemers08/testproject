=== Slideshow ===

Contributors: stefanboonstra
Donate link: http://stefanboonstra.com/donate-to-slideshow/
Tags: responsive, slideshow, slider, slide show, images, image, photo, video, text, gallery, galleries, jquery, javascript
Requires at least: 3.3
Tested up to: 3.5.1
Stable tag: 2.2.11
License: GPLv2

Integrate a fancy slideshow in just five steps. - Rainbows. Rainbows everywhere.


== Description ==

Slideshow provides an easy way to integrate a slideshow for any WordPress installation.

Any image can be loaded into the slideshow by picking it from the WordPress media page, even images you've already
uploaded can be inserted into your slideshow right away!

Fancy doing something crazy? You can create and use as many slideshows as you'd like, with
different images, settings and styles for each one of them.

= Features =

 - Create as many slideshows with as many slides as you like
 - Image slides
 - Text slides
 - Video slides
 - Completely responsive
 - Place it anywhere on your website
 - Run multiple slideshows on the same page
 - Change animations and handling
 - Customize to taste
 - Show that visitor who's boss

= Languages =

 - Chinese (27% Translated by [Kevin Tell](http://www.ivygg.com/))
 - Czech (100% Translated by Edhel)
 - Dutch
 - English
 - French (60% Translated by [Wptheme](http://wptheme.fr/))
 - Hebrew (63% Translated by Eli Segev)
 - Russian (100% Translated by Dmitry Fatakov and [Oleg Fritz](http://www.facebook.com/profile.php?id=100001331241069))
 - Spanish (62% Translated by [Violeta Rosales](https://twitter.com/violetisha))
 - Swedish (100% Translated by [Åke Isacsson](http://www.nojdkund.se/))

Feel free to send me your own translation of the plugin to my e-mail address: wordpress@stefanboonstra.com. Many
thanks in advance! (Please use the support forum for asking questions, it'll help others as well)

= Project board =

Check upcoming features, bug-fixes and development progress that are currently on the Slideshow project board at:
[Slideshow project board - Trello.com](https://trello.com/board/slideshow-plugin-wordpress/506311260cc04591010463c2)


== Installation ==

1. Install Slideshow either via the WordPress.org plugin directory, or by uploading the files to your server.

2. After activating Slideshow, click on 'Slideshows' and create a new slideshow.

3. Click on 'Insert Image Slide' to insert an image slide, a popup will appear where you can search for the desired
image. Insert the image by clicking 'Insert'. The same goes for text and video slides, don't forget to save!

4. Go to a post or a page and click the 'Insert Slideshow' button above the editor. A popup appears where you can select
your newly created slideshow to insert. You can also use the shortcode or code snippet visible in your slideshow admin
panel to deploy your slideshow anywhere on your website. Use the widget to show any of your slideshows in the sidebar
of your website.

5. Feel like a sir.


== Frequently Asked Questions ==

= How do I add image slides? =

Click the 'Image slide' button in the 'Slides List' of the slideshow. A screen will pop up where you'll be able to
search though all images that have already been uploaded to your WordPress website. If you want to add new images to the
slideshow, or you do not have any images yet, you'll have to upload them to the WordPress media page first.

= How do I change a slideshow's settings? =

Just like the posts and pages you're already familiar with, slideshows can be edited. Go to the 'Slideshows' tab in your
WordPress admin, and you'll see a list of slideshows. If you have not created a slideshow yet, you can do so by clicking
'Add new' on that same page. If there are slideshows in the list, click on the title of the slideshow you want to change
the settings of. On the slideshow's edit page you'll be able to find a box titled 'Slideshow Settings', in this box you
can change the slideshow's settings.

If you're creating multiple slideshows that should have the same settings, but their settings need to be different from
the default settings, you can change the default settings by going to the 'General Settings' page and clicking on the
'Default Slideshow Settings' tab. Newly created slideshows will start off with the settings you set there.

= How do I customize the slideshow's style? =

On your WordPress admin page, go to the 'Slideshows' menu item and click on 'General Settings', then go to the
'Custom styles' tab. Here you'll see a list of default stylesheets, such as 'Light' and 'Dark', and a list of custom
stylesheets; The ones you created.

Choose a default stylesheet you'd like to customize and click 'Customize' to open the 'Custom style editor'. When
you're done editing click 'Save Changes' and go to the slideshow you'd like to style with the newly created stylesheet.
In the 'Slideshow Style' box you can now find and select your custom stylesheet. You can set a stylesheet for multiple
slideshows.

If you've already created a custom stylesheet, you can edit it by clicking 'Edit'. You can also delete it by clicking
'Delete'. Be careful with this though, a deleted stylesheet cannot be retrieved and cannot be used by any slideshow
anymore.

= Some users can add, edit or delete slideshows, although I do not want them to. Can I prevent this from happening? =

Yes you can. On your WordPress admin page, go to the 'Slideshows' menu item and click on 'General Settings', then go to
the 'User Capabilities' tab (If you're not already there). The privileges that allow user groups to perform certain
actions are listed here. To allow, for instance, a contributor to add a slideshow, click the box in front of 'Contributor'
to grant him the right to add slideshows.

Note that when you grant someone the right to add or delete a slideshow, you'll also automatically grant him or her the
right to edit slideshows, as this right is required to add or delete slideshows. The same is true for the reversed
situation.

= The slideshow does not show up =

- The slideshow is mostly called after the `</head>` tag, which means the scripts and stylesheet need to load in the footer
of the website. A theme that has no `<?php wp_footer(); ?>` call in it's footer will not be able to load the slideshow's
scripts.

- Often when the slideshow isn't showing, there's a javascript error somewhere on the page and this error has caused
javascript to break. For the slideshow to work again, this error needs to be fixed. Check if any errors were thrown by
opening Google Chrome or Firefox (with Firebug installed) and press the 'F12' key. Errors show in the console tab.

= The slideshow looks like it's not styled =

Since the slideshow is most often called after the </head> tag, the slideshow can't print it's styles in the head of
the website and has to output them on the page. A strict doctype does not allow stylesheets to be in the body of the
website and thus the slideshow may not be styled.

= Why does Internet Explorer show a big blank space above the slideshow? =

Internet Explorer is a very strict browser, so when a big blank space above your slideshow is showing your page may
contain some invalid HTML. Most times invalid HTML is caused by placing the slideshow's shortcode or PHP snippet into
an anchor tag (`<a></a>`) or paragraph tag (`<p></p>`), while you can only place a slideshow within a 'div' element
(`<div></div>`).


== Screenshots ==

1. Here's what a default slideshow can look like. Sit back, grab a beer, enjoy.

2. Create a new slideshow. Slides and settings specific to this slideshow can be set here.

3. If you haven't uploaded any images yet, you can do so on the WordPress media page.

4. Click the 'Image Slide' button in the Slides List to search and pick images from the WordPress media page.
Click 'Insert' to insert the image as slide.

5. The images you selected are directly visible in your Slides List, don't forget to save!

6. When you understand the basics of creating slideshows, you may want to go a little more in depth and have a look at
the General Settings page. As seen in the image above, privileges can be granted to user roles to give users the ability
to add, edit or delete slideshows.

7. Default slideshow settings can be edited here. Slideshows that are newly created, will start out with these options.

8. Custom styles can be added and customized here. Custom styles can be used to style one or more slideshows to your own
personal taste.


== Changelog ==

= 2.2.11 =
*   Fixed: The slideshow script loaded the YouTube API twice.
*   Fixed: Floating the slideshow resulted in it having no width, therefore being invisible.
*   Fixed: Sites that don't support URL data weren't able to load a slideshow's stylesheet correctly.
*   Fixed: Slideshow randomly disappeared in Internet Explorer 8 when absolute positioning was used.
*   Added Swedish translation by Åke Isacsson.
*   Added Hebrew translation by Eli Segev.

= 2.2.10 =
*   Fixed: Auto margin combined with a fixed width will no longer break slideshow's responsiveness.
*   Updated Russian translation, thanks to Dmitry Fatakov.

= 2.2.9 =
*   Fixed: Descriptions didn't show when 'Hide descriptions' was set to 'No'.
*   Fixed: Title was given wrong size by CSS.

= 2.2.8 =
*   Fixed: Images that have a, to WordPress, unknown size weren't able to show on all websites.
*   Fixed: Images in the image inserter popup were being skipped over when loading more results because of a faulty query.
*   All stylesheets are now loaded at the page's bottom to validate in HTML checkers and be cached by the visitor's browser.
*   Improved the handling of description boxes. Description boxes will no longer be 'jumpy' nor will they pop up on fly-over.
*   Errors in jQuery's 'ready' method no longer stop the slideshow from showing. However, JavaScript errors should always be resolved.
*   Text slides can now have transparent backgrounds by leaving the 'Background color' field empty.

= 2.2.7 =
*   Fixed: Slideshow control buttons were placed behind the slideshow.
*   Fixed: Image slides doubly inserted after having clicked on 'Load more results'
*   Included width and height attributes on all image elements.

= 2.2.6 =
*   Fixed: Theme's that set image heights affected the slideshow's image dimensions.
*   Fixed: Compatibility with the ALO EasyMail Newsletter plugin.
*   Fixed: Image's 'alt' values didn't show when no image title was set.

= 2.2.5 =
*   Fixed: Slideshow settings nonce prevented 3.4 and older WP users from saving their slideshows.

= 2.2.4 =
*   Fixed: Video slideshows will now work on mobile devices supported by YouTube.
*   Fixed: Removed multi-line element tags to prevent WordPress from adding '<br />' tags into them.
*   Fixed: Quick editing a slideshow deleted its content.
*   Image files can now be found by their file names.

= 2.2.3 =
*   Fixed: A 'console.log();' message presumably caused Internet Explorer to have problems when inserting slides.
*   Fixed: Slideshows that are hidden on page's load now wait to become visible before calculating their size.

= 2.2.2 =
*   Fixed: Float and size bugs caused by the maximum width element.
*   Fixed: PHP errors were showing in 'Delete slide' links.
*   Live width calculations have been halved to improve performance.
*   Default settings have been tuned to cater better to most users.
*   Added Czech translation by Edhel.

= 2.2.1 =
*   Fixed: A bug in the width calculations caused slideshows in width-less elements to be hidden.
*   Fixed: The functional stylesheet defined the last five header elements for the entire page, instead of just for the slideshow.
*   Fixed: Pagination bullets were showing multiple times because of a CSS bug.
*   Padding and margin in unordered lists set to 0 by default.
*   Videos can now be played in full-screen.
*   Functional stylesheet temporarily moved to the head section of the page until the stylesheets can be loaded beneath it.

= 2.2.0 =
*   The slideshow script has been completely renewed, making it more lightweight, more versatile and responsive altogether.
*   Slideshow now has a continuing loop.
*   Pagination bullets can now be shown.
*   Slide order can now be completely random, as can the animation type.
*   Added new animations.
*   Slideshow now pauses when a (YouTube) video is playing or when a mouse is hovering over.
*   Fixed: Image title and description were wrongly filled with attachment's content.

= 2.1.23 =
*   Default settings can now be changed from the 'General Settings' page.
*   Custom styles are now shared across all slideshows and endless customizations can be created.
*   Added input fields to set separate titles and descriptions for shared images.
*   Cleaned up the slides list's layout, to reach a more WordPress-like look.
*   Adapted the 'Dark' style to be more compatible with the WordPress TwentyTwelve theme.
*   Changed 'Insert Slideshow' link to appear as a button.
*   Empty settings won't be shown at the end of the settings boxes.

= 2.1.22 =
*   Added French translation.
*   Added a "General Settings" page, containing user capability settings.
*   Cleaned up unnecessary settings that were showing on page.
*   Replaced the, in WordPress 3.5, deprecated function 'wp_get_single_post' with the 'get_post' function.
*   Added an on-page error logger to be able to solve back-end issues faster. Nothing is shown when no errors exist, doesn't affect SEO.

= 2.1.21 =
*   Fixed: Adding new slides was made impossible by a faulty setting.
*   Fixed: Image tag placed on multiple lines caused some sites to not display images correctly due to an inserted break character.

= 2.1.20 =
*   Fixed: Query filters will no longer alter the output of the slideshow.
*   Fixed: Images not always showing in image inserter popup.
*   Compatibility with WordPress 3.5 confirmed.
*   First back-end increment towards version 2.2.0, introducing a more efficient way to store and retrieve the slideshow's settings and slides.

= 2.1.19 =
*   Fixed: Slides are now always floated, despite any parent CSS settings.
*   Fixed: Slideshow settings will no longer cloud any other posts with their post-meta.
*   PHP snippet will now only be shown when the current user can edit themes.
*   Videos in the slideshow will from now on depend on Wordpress' swfobject.js file.
*   Changed slideshow's script namespace from 'slideshow_script' to 'slideshow-jquery-image-gallery-script'.
*   Untitled slideshows in the widget form will now display as 'Untitled slideshow', instead of an empty field.

= 2.1.18 =
*   Text slide descriptions are now displayed in text areas, making editing of long descriptions more convenient.
*   Backgrounds of text slides can now be set to transparent by leaving the 'Background color' field empty.
*   Settings are now loaded from a JavaScript variable, so (the major) search engines won't read them as actual content.
*   Widget title's HTML tags are now discarded when no widget title is set.

= 2.1.17 =
*   Fixed: Invalid argument being supplied for the foreach loop in SlideshowPluginPostType on line 352.
*   Fixed: Undefined index being thrown by URL target setting on slideshow creation.
*   Video slide now accepts YouTube URLs as well.

= 2.1.16 =
*   Security update enabling HTML in slides again, but only allowing it in a very strict format without any scripts.
*   Added shortcode editor, which provides a more convenient way of inserting slideshows in your posts and pages.
*   Updated the way slideshows are retrieved. A faulty ID will no longer cause the slideshow to not show at all.
*   Slideshows can now also be fetched by their slugs.
*   The example shortcode's ID on the slideshow settings page is now surrounded by quotes to prevent confusion.

= 2.1.15 =
*   Fixed: Security issues.
*   Added Chinese translation.

= 2.1.14 =
*   Fixed: Text slide descriptions allow HTML again.

= 2.1.13 =
*   Fixed: PHP security issues.
*   Set order of images gotten in 'Image slide' pop-up to post date, descending.

= 2.1.12 =
*   Moved slideshow activation to the footer script. Footer jQuery scripts are now supported.

= 2.1.11 =
*   Fixed: Conflict with the Gravity Forms plugin.

= 2.1.10 =
*   Fixed: Slideshow widget form now is compatible with older versions of PHP, that didn't recognize a null value as a set value.

= 2.1.9 =
*   Fixed: Not all admin themes support scripts in the admin footer, admin scripts are moved to the header.

= 2.1.8 =
*   Option added to be able to control whether to use a filter, or to directly output on shortcode.

= 2.1.7 =
*   Fixed: Slideshow in some cases unable to show next slide in fade animation.

= 2.1.6 =
*   Slideshow widgets are loaded using theme sidebar settings, making the widget more dynamic.
*   Fixed: Slideshow widget title can now be set to an empty value.

= 2.1.5 =
*   Fixed: Wordpress intervened with the HTML output by the shortcode, this caused scripts to break.
*   Fixed: Slideshow width isn't affected by width-less elements anymore, instead it seeks the first div's width.

= 2.1.4 =
*   Fixed: Slideshows in posts are now longer broken by Wordpress inserted 'em' tags.
*   Fixed: Image borders no longer fall off-slide.

= 2.1.3 =
*   Fixed: Overflow container now adapts to its parent element correctly.
*   Fixed: Internet Explorer now shows control panel (buttons etc.) on top of the Flash element.
*   Fixed: Images are now loaded by the Wordpress function, rather than being loaded from the database's 'guid'.

= 2.1.2 =
*   Wordpress media uploader link in image inserter pop-up now opens in a new window.
*   Fixed: Image inserter pop-up CSS no longer pushes the 'insert' buttons off-screen.

= 2.1.1 =
*   Fixed: Settings meta-box threw an unexpected 'T_ENDFOREACH' since a shorthand PHP tag was used improperly.

= 2.1.0 =
*   Added Youtube video slides.
*   Slide URLs can now be chosen to open in a new window.
*   Added headers above settings, giving the user mover oversight.
*   Endless scrolling is now available in the image inserter pop up.
*   Images are now centered in their slides by default.
*   Script is now activated on document ready, not window load.
*   Hid slides in another element so that buttons could overflow the slideshow container.
*   Fixed: Hide-away settings were influenced by their own settings fields.
*   Fixed: Stretching was not always handled correctly.
*   Fixed: Script counter made the first view show twice.

= 2.0.1 =
*   Fixed: Version 1.x.x slides disappeared after updating to version 2.0.0. An automatic converter has been added.

= 2.0.0 =
*   Complete sideshow script revision to support new features.
*   The script now supports two kinds of animations: 'Slide' and 'Fade'.
*   Multiple images can be shown in one slide, instead of one.
*   Text slides are available.
*   Descriptions are more cooperative, they don't overlap the entire image anymore. (Instead they hide or have a user-defined fixed height)
*   Multiple slideshows can now be shown on one page.
*   Play and pause buttons are now available, as is the option not to auto-play and/or loop the slideshow.
*   Stylesheets no longer partially depend on the website's stylesheet, except for the fonts.
*   The script and its functional stylesheet are now compressed to save loading time.
*   Added jQuery sortables script to sort slides.
*   Images you've already uploaded and attached to other posts can now be loaded into the slideshow, saving disk space (and time).

= 1.3.5 =
*   Fixed: Namespace complications found with the Slideshow widget, renamed all classes.

= 1.3.4 =
*   Fixed: Custom width of the slideshow will no longer cause buttons to fall off-screeen.

= 1.3.3 =
*   Extended compatibility to servers that do not support short php opening tags.

= 1.3.2 =
*   Fixed: 1.3.1 Bugfix failed to work, fixed problem entirely after reproducing it.
*   Added alternative way to load default css into empty custom-style box, so that users without 'allow_url_fopen' enabled aren't influenced negatively by it.

= 1.3.1 =
*   Fixed: Check if function 'file_get_contents' exists before calling it, some servers have this disabled. (This throws errors and messes up the plugin)

= 1.3.0 =
*   Added Dutch translation.
*   Custom styles for each slideshow are now available to be more compatable with every theme. (Black and transparent scheme)
*   Encapsulated a css class so that it does not interfere with anything outside the slideshow_container.
*   Moved slides list to the side, saving space on the slideshow specific settings page.
*   Settings bugs completely fixed, finally. (Previous version deleted post-meta on auto-save)
*   Moved Slideshow settings and images script to inside the slideshow_container, outputting a more coherent whole.
*   Settings moved from multiple meta keys to a single one. (This resets everyone's settings)
*   Added a Wordpress media upload button to the slides list, this simplifies attaching images to a slideshow.
*   Better way of including the jQuery library is now being used.
*   Fixed bug with the number of slides shown in the slideshow stuck at the default value of five.

= 1.2.1 =
*   Fixed: Slideshow specific settings not saving.

= 1.2.0 =
*   Slideshows can now be placed in posts as well, using shortcode [slideshow id=*SlideshowPostId*].
*   Added a widget that can be loaded with an existing slideshow of choice.
*   Tested up to version 3.4.

= 1.1.0 =
*   Added jQuery library as Wordpress websites don't seem to load them by default.
*   Slideshow script now depends on by the plugin enqueued jQuery script.

= 1.0.1 =
*   Added documentary comments.
*   Fixed error with directory paths causing Slideshows post type page to generate warnings.

= 1.0.0 =
*	Initial release.


== Links ==

*	[Stefan Boonstra](http://stefanboonstra.com/)
*   [Slideshow project board](https://trello.com/board/slideshow-plugin-wordpress/506311260cc04591010463c2)