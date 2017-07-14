=== Plugin Name ===
Contributors: napych
Tags: fix, pages, paginator, paging, tags, categories
Requires at least: 3.0
Tested up to: 3.2-bleeding
Stable tag: 0.3

Fixes paginator with custom permalinks for some sites.

== Description ==

Many people report Wordpress version 3.1 update broken paging for categories and tags pages of their sites. This plugin disables canonical redirects for tags and categories.

If paging works for tags and categories pages of your installation, you don't need to install this plugin.

== Installation ==

1. Upload `fix-paging` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 0.3 =
* Tags and categories base pathnames are now taken from options if available.

= 0.2 =
* redirect_canonical is now disabled for categories and tags pages only.

= 0.1 =
Initial release.

