=== Basic Twitter Widget ===
Contributors: Koen Eijkemans
tags: Twitter, widget
Requires at least: 3.0.1
Tested up to: 3.1.1
Stable tag: trunk

== Description ==
Just a basic twitter widget that displays the last X tweets of user Y.

== Installation ==
Add this plugin to the plugin folder of your WP installation, enable it and it wil pop up in the 'Widgets' section at the control panel. Here you can enter the X an Y variables.

== Frequently Asked Questions ==
= Why did you make this? =
Because I was bored

== Changelog ==
= 1.0 =
Initial version.
= 1.1 =
- Seperated the parse functions from the widget class
- URL's, mentions and hashtags will now be displayed as a hyperlink
= 1.2 =
- Added a cache function. The script will now try to parse the tweets every minute instead of every request.
= 1.3 =
- Parsing multiple metions, hashtags or urls in one tweet should now work.