=== Grid WUD ===
Contributors: wistudat.be
Plugin Name: Grid WUD
Donate Reason: Stand together to help those in need!
Donate link: https://www.icrc.org/eng/donations/
Description: WP Tiles WUD & Grid WUD adds responsive, customizable and dynamic grids, tiles, tables, galleries & widgets to WordPress posts and pages.
Author: Danny WUD
Author URI: https://wud-plugins.com
Plugin URI: https://wud-plugins.com
Tags: grid, grids, tile, tiles, table, tables, wp tiles, wp grids, gallery, galleries, widget, widgets, pods, latest post, youtube, vimeo, video, gallery, responsive, slug, shortcode, slugs, post grids, post tiles, post grid, post tile, image grid, filter, image tile, display, list, page, pages, posts, post, query, custom post type
Requires at least: 3.6
Tested up to: 4.6
Stable tag: 1.4.4
Version: 1.4.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

= Grid WUD: WP Grids, WP Tiles, WP Galleries, WP Widgets & more! =

= FREE Premium Plugin with updates, PRO support and new features! =
* Guaranteed without any limitation.
* Discover and enjoy our free plugins [here](https://wud-plugins.com).
* Included: Widgets, Latest Post, Posts, Gallery, Custom post type, Pods,Vimeo or YouTube! 
* Different grid lay-outs possible on the same post/ pages.
* Change the Wordpress Gallery to **Grid WUD Gallery** with Light Box.
* Load as grid/tile/gallery background: Full, Medium or Thumbnail images.
* Grids/Tiles from: **Pods - Custom Content Types and Fields**
* NEW: Grids/Tiles given and sorted by post ID.
* NEW: Text only and Colored Grids/Tiles possible (like tables without images)!
* NEW: Mix Grids and Tiles on one post/page!

* More info [here](https://wud-plugins.com) in our online manual.

= About GRID WUD =

* It enables a shortcode which, when inserted in a page or post, creates a series of link grids corresponding to the posts in a certain category or tag.
* Do you have any question or do you need support? Click [here](https://wordpress.org/support/plugin/grid-wud)!
* See Grid WUD in [action](https://wud-plugins.com)

== Installation ==

= Automatic installation: =

* The simplest way to install is to click on 'Plugins' then 'Add' and type 'Grid WUD' in the search field.

= Manual installation 1: =

1. Login to your website and go to the Plugins section of your admin panel.
1. Click the Add New button.
1. Under Install Plugins, click the Upload link.
1. Select the plugin zip file (grid-wud.x.x.x.zip) from your computer then click the Install Now button.
1. You should see a message stating that the plugin was installed successfully.
1. Click the Activate Plugin link.

= Manual installation 2: =

1. You should have access to the server where WordPress is installed. If you don't, see your system administrator.
1. Upload the plugin zip file (grid-wud.x.x.x.zip) up to your computer and unzip it somewhere on the file system.
1. Copy the "grid-wud" folder into the /wp-content/plugins directory of your WordPress installation.
1. Login to your website and go to the Plugins section of your admin panel.
1. Look for "Grid WUD" and click Activate.

= Usage =
* See at our [FAQ page](https://wordpress.org/plugins/grid-wud/faq/).

== Frequently Asked Questions ==

= How can i activate the grids? =
* **Standard schort code**:
* You can use the following shortcode: [gridwud slug="cat_or_tag"] where "cat_or_tag" is the slug from the category or tag you want.
*
* **Optional short codes**:
* [grid="2"] to display x grids /category or tag, different number then defined in the settings from Grid WUD.
* [shape="x"] change the layout to the corresponding layout.
* [nowidget="1"] force a post/page lay-out in a widget.
* [title="My Custom Title"] force a custom title per shortcode used.
* [slug="x,xxx,xx"] show and sort the grids per post ID, where x is the post ID.
*
* [bg="x"] will hide the background images from the tiles and grids.
* [bg="x"] If x is 1 to 5, it will display the excerpt with title and a background color defined in the settings page.
* [bg="x"] If x is 11 to 15, it will display the excerpt without title and a background color defined in the settings page
* [tiles="x"] if 0: show grids, 1: show tiles and 2: show tiles with shadow.
* [order="xx"] To force the order by and sort order, (see settings page) first x is  is number from: 'Order by' and second x is  is number from: 'Sort Order'.
* [order="99"] force to show the post in random order.
* [button="x"] if x=0 force Grids, x=1 hide the Button, x=2 force Archive page
* [sticky="x"] if x=1 show sticky post only.
*
* **Custom Post Type and Pods schort codes**:
* [pods="x"] force to show Pods Custom Content Types and Fields as grids.
* [pods="x"] force to show Grid WUD Custom Title if no Pods Title is found.
* 
* [cp="x"] force to show Wordpress custom post types as grids.
* [cp="x"] force to show Grid WUD Custom Title if no Custom Post Title is found. 

= Can i have support? =
> If you have any question or you need support, Get it directly [here](https://wordpress.org/support/plugin/grid-wud)!

= Visit our "How to use" page =
> Read [here](https://wud-plugins.com/grid-wud-how-to-use/) our online manual.


== Changelog ==
= 1.4.4 =
* Round corner issue with Chrome and Opera solved.
* Maximum height Gallery Light-Box adjusted.
* Z-index slider to adjust the grids CSS layer (if any layer problem occurred with the used theme/plugins).

= 1.4.3 =
* Correction title/category/tag text color.

= 1.4.2 =
* Sort order adjusted in settings page (ASC, DESC and none).
* If plugin: "Category to Pages WUD" (very soon available) is installed, it's possible to show pages per category.
* Sticky post count by [slug="wud-latest"] adjusted.
* Show Sticky Post only with short code [sticky="1"].

= 1.4.1 =
* Button color adjusted if no more grids are available.
* Hide button by widgets adjusted.

= 1.4.0 =
* Load speed optimized by adjusting the way of data request.
* Minimized query for faster results.

= 1.3.9 =
* Correction: Short code [order="99"] works now also with slug="wud-latest".
* Correction: Random order disabled by Read More button click.

= 1.3.8 =
* New short code: [order="xx"] to force the order by and sort order, (see settings page) first x is number from: 'Order by' and second x is  is number from: 'Sort Order'.
* If short code [order="99"] it forces to show the post in random order!
* Updated short code: [button="x"] if "x"="0" force Grids lay-out, "x"="1" hide the Button, "x"="2" force Archive page

= 1.3.7 =
* Read more button action adjusted.
* Sort order adjusted, by read more action.

= 1.3.6 =
* Correction: show grids, tiles or tiles with shadow.
* Settings page: correction tiles off = shadow off.

= 1.3.5 =
* Published posts only, added on the read more function.
* Hover Text Grids (table's) adjusted.
* Minor issues resolved.

= 1.3.4 =
* CSS updated for latest news text grids.
* Post Status added (published posts only).
*
= 1.3.3 =
* NEW: If the maximum grids to show is reached, the read more button will be hidden.
* NEW Short code: [bg="x"] will hide the background images from the tiles and grids.
* [bg="x"] If x is 1 to 5, it will display the excerpt with title and a background color defined in the settings page.
* [bg="x"] If x is 11 to 15, it will display the excerpt without title and a background color defined in the settings page
* NEW: Short code [tiles="x"] to show grids ("0"), tiles ("1") or tiles with shadow ("2").
* Short code error message removed on search page(s).
* Removed "pods" mention when the Read More button was used by the short code [pods="x"].
* NEW Setting: Button action  when last Grid is showed: Do Nothing, Hide the button or Set the button in a gray color.
* Adjusted standard settings if new Grid WUD installation.

= 1.3.2 =
* NEW: Font size for excerpts, from 8 to 20px.
* Extended maximum words for excerpts from 50 to 100.

= 1.3.1 =
* Adjustment selection: default image (JQuery & PHP).
* Correction path from WUD_GRID_URL.
* Promo indication/URL optimized/changed.
* SSL to our main site added and changed in our sources.

= 1.3.0 =
* New settings menu position see [here](https://wud-plugins.com/the-administration-options-page/).
* New logo added for settings menu.

= 1.2.9 =
* Preload grids & tiles images for faster performance.
* grid-wud-lightbox JQuery undefined error solved.
* Update loading settings page CSS style.
* Insert more WUD plugins link in settings page.

= 1.2.8 =
* Preload gallery images for faster performance.
* New domain wud-plugins.com added.

= 1.2.7 =
* Translation error messages added.
* Font family for buttons activated.
* Excerpt alignment values optimized.
* Text widgets short code adjusted.
* Online manual updated.

= 1.2.6 =
* Correction for using older versions of widgets.
* If no title is given, do not display a warning.

= 1.2.5 =
* Custom title per Grid WUD shortcode ([title="My Custom Title"])
* Show and sort post per given ID ([slug="x,xxx,xx"] where x = post ID) 
* Target grid/tile URL: to Seo friendly, Post/Page ID or no target (see settings page).

= 1.2.4 =
* Removed array error by Widgets.

= 1.2.3 =
* New grids/tiles from: Pods - Custom Content Types and Fields.
* Show all Pods or Pods by category, taxonomy, project type and project.
* New short code:[pods="x"] force to show Pods Custom Content Types and Fields as grids.
* and [pods="x"] force to show Grid WUD Custom Title if no Pods title is found.
* Make a grid/tile from custom size image.
* Modification to the widget arguments.
* Unset target URL grids/tiles if the custom post type is not active.

= 1.2.2 =
* JQuery script update for the Light Box and Buttons.
* Latest Post and Custom Post query arguments updated.

= 1.2.1 =
* Critical update solving quantity maximum grids/tiles.

= 1.2.0 =
* Correction for "Nelio External Featured Image"
* Better image choice for video posts.
* Optimized CSS format for tablet, mobile devices .
* Grid WUD Gallery on mobile devices, now with close Light Box with swipe.
* Limit quantity words for excerpts: parameter.

= 1.1.9 =
* Resolved: Array error by thumbnails.
* Build grids/tiles with images from "Nelio External Featured Image".
* Update widget short code: removed unused argument.

= 1.1.8 =
* Show thumbnails, medium or full size images in the grid/tile/gallery
* Selector size images by grid/tile or gallery
* Full width grid/tile title when it's on top.

= 1.1.7 =
* Thumbnails instead full images possible by grids/tiles and/or galleries.
* Escape or enter key or mouse click, will close the lightbox preview by the gallery.
* Removed trailing spaces from all the source code pages, to avoid warnings.

= 1.1.6 =
* Removed trailing spaces from gallery PHP page.
* Use shortcode nowidget="1" to force post/page lay-out in a widget.
* Parameter to choose between thumbnails and full images in the gallery (pop-up image is always full size)
* Position: close preview gallery button adjusted.

= 1.1.5 =
* Grid WUD Gallery with Light Box popup images.
* Grid WUD Gallery: on/off.
* Light Box: on/off.
* Gallery image URL: on/off.

= 1.1.4 =
* The use of Grid WUD WIDGETS now even easier.
* The short code: widget="x" is not needed anymore.
* Removed gallery warning by no content.
* Possibility to resize the grids/tiles and galleries.

= 1.1.3 =
* Correction by save post/page action.

= 1.1.2 =
* Change the Wordpress Gallery to tiles or grids!
* CSS adjustment tiles and grids.

= 1.1.1 =
* Choose between the lay-out Grids or Tiles.
* Set shadow arround tiles (on/off).
* Read more button CSS values adjustment.
* Started merging of our plugins WP-Tiles-WUD and Grid-WUD, into Grid-WUD!

= 1.1.0 =
* New slug to display latest post from all categories and tags. Use: [gridwud slug="wud-latest"] to display the latest posts.
* Latest Posts Title, used if you add the shortcode: [gridwud slug="wud-latest"].
* Extra parameter "Target read more button": Grids or Archives to display.
* Extra parameter to change the target when clicking on a grid: 
* CSS z-index removed, which caused menu problems.

= 1.0.9 =
* Grid WUD WIDGETS.
* Add a short code to a text widget.
* Extra parameter: Split grids, set a space between the grids.
* Fix: button="1" short code back enabled.

= 1.0.8 =
* No switching pages anymore by "Read More" action!
* Read more button slides the requested grids down.
* Parameter to enable Title URL's: by clicking the title, you wil be redirected to the the category or tag.
* Better responsive results.

= 1.0.7 =
* Grid Title position: top, center, bottom, cover.
* Grid Title align: left, center, right.

= 1.0.6 =
* Extra option: show post title only by excerpts.

= 1.0.5 =
* Possibility of placing rounded corners around the grids or buttons.
* Parameter to determine size of the rounded corners.
* Font family selection (10) for the header, excerpt and/or button. [on request](https://wordpress.org/support/topic/it-works-with-external-featured-images#post-8494039).

= 1.0.4 =
* FIX: Correction on custom code, where nothing was displayed.

= 1.0.3 =
* CSS responsive code optimized to switch lay-outs.
* Use different grid lay-outs on 1 page/post with shortcode shape="x" where x is the lay-out number.
* Custom code added upon request, read [here](https://wordpress.org/support/topic/it-works-with-external-featured-images#post-8486919).

= 1.0.2 =
* Prepare Multilanguage.

= 1.0.1 =
* First release!


== Upgrade Notice ==
* You do not need to change anything to the current configuration.
	
	
== Screenshots ==
1. Grid WUD Grids
2. Grid WUD Tiles
3. Grid WUD Gallery
4. Grid WUD Light Box
5. Grid WUD WIDGETS (even with latetst post)
6. Admin menu
