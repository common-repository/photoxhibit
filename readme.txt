=== PhotoXhibit ===
Contributors: bmsterling
Donate link: http://benjaminsterling.com/photoxhibit/
Tags: picasa, flickr, photos, flash, slideshow, images, image, gallery, media, admin, post, photo-albums, pictures, widgets, photo, picture, photogallery, jQuery, admin, sidebar, ajax, smugmug
Requires at least: 2.1
Tested up to: 3.5.1
Stable tag: 2.1.8

PhotoXhibit provides an interface to set up gallery widgets using Picasa / Flickr / SmugMug / Wordpress Uploads and jQuery

== Description ==

Note: Some updates were made to be compliant with the GPL licensing, so the lightbox plugin by Leandro has been removed.  The plugin was updated to work with 3.5.1.

This plugin has not seen a lot of love from myself do to lack of time.  I'll try to work on improving it over the next few weeks but client work comes first.  If you do come across and issue, please post to:
[https://github.com/bmsterling/PhotoXhibit/issues](https://github.com/bmsterling/PhotoXhibit/issues)

This plugin uses photos from your Flickr, Picasa, and/or SmugMug accounts as well as allows you to upload and build Albums to help you build inviting Photo Galleries on and through out your site.

= Features: =

* Independent gallery creator for post, pages, and sidebar
* The ability to create a gallery based of some of the most popular JavaScript based gallery plugins
* Ability to customize each gallery's appearance with a styles editor
* Ability to grab your photos from Flickr, Picasa, and/or SmugMug
* An easy to use interface for adding photos directly to a post or page from Flickr and SmugMug (Picasa and Albums coming soon)
* Easily create and upload Albums with a single thumbnail or two different size thumbnails
* Easily turn features on and off via the options tab

= The following list of jQuery plugins are used in PhotoXhibit to help you build out your galleries: =

* [jqGalView](http://benjaminsterling.com/jquery-jqgalview-photo-gallery/ "Image/Photo Gallery Viewer using jQuery")
* [jqGalViewII](http://benjaminsterling.com/jquery-jqgalviewii-photo-gallery/ "jQuery: jqGalViewII (Photo Gallery)")
* [jqGalScroll](http://benjaminsterling.com/jquery-jqgalscroll-photo-gallery/ "jQuery: jqGalScroll 2.0 (Photo Gallery)")
* [cycle](http://jquery.com/plugins/project/cycle/ "Cycle Plugin")
* [Thickbox](http://jquery.com/demo/thickbox/ "Thickbox Plugin")
* [lightbox (balupton edition)](http://jquery.com/plugins/project/jquerylightbox_bal/ "Lightbox (balupton edition)")
* [jqShuffle](http://benjaminsterling.com/jquery-jqshuffle/ "jqShuffle")

== Screenshots ==

1. Screenshot PhotoXhibit Build Services
2. Screenshot PhotoXhibit Album Manager
3. Screenshot PhotoXhibit Album Image Manager
4. Screenshot PhotoXhibit Album Image Attribute Editor

== Installation ==

1. Unzip into your `/wp-content/plugins/` directory. If you're uploading it make sure to upload the top-level folder. Don't just upload all the php files and put them in `/wp-content/plugins/`.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Visit your newly created PhotoXhibit tag
4. Create a new gallery by going to the 'Build Gallery' submenu
5. Put [photoxhibit=ID_OF_GALLERY] in one of your post or <?php photoxhibit(ID_OF_GALLERY); ?> in your sidebar or where ever you want and thats it.

== Frequently Asked Questions ==

= When I update my Album/Flickr/Picasa/SmugMug the new photos don't show up in my gallery, how come? =

As it stands now, the galleries are not update automatically, you will need to edit the gallery and pull in the new photos.

= How do I edit my gallery? =

Click on the PhotoXhibit tab, then on the Manage Gallery tab, then on the title of the gallery.

= How do I edit the styles of my galery? =

Click on the PhotoXhibit tab, then on the Manage Gallery tab, then on the Edit Styles link, once on the page, make changes to the styles and hit Process Styles and the gallery will change automatically.

== Credits ==

Copyright 2013  Benjamin Sterling  (http://benjaminsterling.com)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.