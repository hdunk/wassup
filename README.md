# WassUp Real Time Analytics for WordPress  
Contributors: michelem, helened  
Donate link:  [donate](https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=michele%40befree%2eit&item_name=WassUp&no_shipping=0&no_note=1&tax=0&currency_code=EUR&lc=IT&bn=PP%2dDonationsBF&charset=UTF%2d8)   
Tags: analytics, counter, online, seo, statistics, stats, tracker, traffic, trends, user, visitor, web  
Requires at least: WordPress 2.2  
Tested up to: 4.6.1  
Stable tag: 1.9.3  
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  

#### Analyze your website traffic with accurate, real-time stats, live views, visitor counts, top stats, IP geolocation, customizable tracking, and more.
-----
## Description

WassUp is a Wordpress plugin to analyze your visitors traffic with accurate, real-time stats, lots of detailed chronological information, customizable tracking, live views, visitor and pageview counts, top stats, charts, IP geolocation, map, two aside widgets, and a dashboard widget.

Wassup does in-depth visitor tracking and shows you incredible details about your site's latest hits...more than you can get from almost any other single plugin. It is very useful for SEO and statistics maniacs who want to see accurate, up-to-date stats displayed in a straightforward, easy to understand manner.

The aim of WassUp is the timely knowledge of what your visitors do when they surf your site. It is not intended to show grouped statistics over preset, long-term time periods like visitors per month, pageviews per quarter, and so on (there are many others tools to better gain that, like Google Analytics). WassUp's flexible, easy-to-read views are the best for learning the details about your visitors' latest activities. With it's customizable filters and search capability, you can drill deeply into the data to learn even more about specific visitors, visitor types, etc.

### Detailed Specs:
#### WassUp comes with 4 admin screen panels for viewing your visitors' activities and for customizing those views
* There is a fancy "Visitors Details" screen that lets you to see almost everything about your visitors and what they do on your site and that includes search capability, view filters, plus a chart and top stats summary.
* There is an ajax "Spy View" screen (like Digg Spy) that lets you monitor your visitors live, with optional geolocation on a Google!maps world map. 
* There is a "Current Visitors Online" screen that shows a summary of your online visitors in real-time.
* There is an "Options" panel with lots of customizable settings for WassUp. 

There is a nice Dashboard widget that shows a line chart of hits over time (24 hours default) and a count of current visitors online and their latest activities.

#### WassUp comes with two useful sidebar Widgets that lets you display your site's latest data to your visitors
* The "Online" widget shows counts of current visitors online and includes options to display logged-in usernames and country flags.
* The "Top Stats" widgets lets you display trending or timed top items about your site based on the latest stats. You can list top search engine keywords, top external referrers, top url requests, top articles, top browsers, top OSes, and more.
* The widgets are fully customizable.

#### WassUp's advanced tracking features can: 
* Distinguish registered users from anonymous visitors, and administrators from other registered users.
* Identify and label new browsers, robots, and feed readers, heuristically.
* Track page requests that generate 404 (not found) redirects.
* Detect some spiders that pretend to be regular visitors/browsers.
* Expose spam and malware activity such as hack attempts, script injection, and xss exploit attempts.&sup1;

WassUp works with two anti-spam functions to detect and omit (if you want) referrers spammers and comment spammers. It can also detect and omit malware activity such as unauthorized users' login attempts, script injection, and xss exploit attempts.

For people with database size limitations, WassUp has a few options to manage the database table growth: you can empty it; you can delete old records automatically; and you can set a warning notice for when it exceeds a preset size limit.

#### WassUp gives a detailed chronology of your hits with a lot of information for each single user session:
* ip / hostname
* referrer
* spider
* search engines used
* keywords
* SERP (search engine result page)
* operating system / language / browser
* pages viewed (chronologically and per user session)
* complete user agent
* name of user logged in
* name of comment's author
* spam and hack attempts

#### Wassup admin console has flexible view filters that show:
* records by time period
* record count per page
* records by entry type (spider, users logged in, comment authors, search engine, referrer)
* search by keyword
* expand/collapse informations (with ajax support)
* usage chart (Google!chart)
* top stats lists with aggregate data (top queries, requests, os, browsers)

#### There are many options to customize how data is tracked and displayed:
* Enable/Disable recording (tracking)
* Screen refresh frequency (minutes)
* Screen resolution (browser width)
* User permission levels 
* Top stats selections
* Record or not logged-in users
* Record or not spiders and bots
* Record or not exploit attempts
* Record or not comment spammers
* Record or not referrer spammers
* registered users to exclude from recording
* IP or hostname to exclude from recording

#### There are tools to monitor and control Wassup's table growth:
* Empty table, manually
* Delete old records, manually
* Setup automatic delete of old records
* Send an e-mail notice when table exceeds a preset size limit
* Export table in SQL format
* Database and server settings infos.

### IMPORTANT NOTICES 
* Wassup is compatible with Wordpress 4.0+ and PHP 5.2+ 
* To run Wassup with Wordpress 2.2 - 3.9 or with PHP 4.3 - 5.1, you must install the full copy of Wassup with backward-compatibility feature available at [http://github.com/michelem09/wassup/](http://github.com/michelem09/wassup/)
* WassUp is incompatible with static page caching plugins such as "WP Super-Cache"
* &sup1;WassUp is NOT a security plugin. It does not block unwanted visitors nor protect your site from malware attempts. You need a separate security plugin for that

## Screenshots
1. Wassup - Visitor Details view.
2. Wassup - SPY Visitors view.

You can find more screenshots at [http://www.wpwp.org](http://www.wpwp.org)

## Installation

### Installation 
A. If your Wordpress setup is up-to-date, you can install this plugin automatically from Wordpress admin panel:
   1. Navigate to Plugins >> `Add New`
   2. Type "WassUp" plugin name in the "Search Plugins" box.
   3. Locate "Wassup Real-Time Analytics" and click `Install Now`
   4. Activate it and you are done!

B. If you prefer to install the plugin manually or you are running an older version of Wordpress, download the latest full release of WassUp (Real-Time Analytics) plugin directly from [gitHub.com/michelem09/wassup/releases/](https://github.com/michelem09/wassup/releases/) and save onto your local computer  

   * If available, use Wordpress' `Upload Plugin` option in the plugins panel to complete your install:  
     1. Navigate to Plugins panel >> `Add New` >> `Upload Plugin`
     2. Click `Browse`, then find and select the plugin zip file that you downloaded
     3. Click `Install Now`
     4. Activate WassUp plugin and you are done!  

   * Otherwise, unpack the plugin's zip or gz file with your preferred unzip/untar program or use the command line: `tar xzvf wassup.tar.gz` (linux), then follow these steps to complete your install:
     1. Upload the entire "wassup" folder into your `/wp-content/plugins` directory on your Wordpress host using their Cpanel File manager or an ftp client software
     2. Login to Wordpress admin panel and navigate to Plugins page
     3. Activate WassUp plugin and you are done!

-----
### Upgrading**

Check your current visitors count under WassUp >>Current Visitors Online panel. If your site is busy, STOP! Don't upgrade. Wait until there are no visitors or follow the "Safe Upgrade Instructions" below.

A. If your Wordpress setup is up-to-date, you can upgrade this plugin automatically from Wordpress admin panel:

   1. Navigate to "Plugins" page, and under WassUp plugin name, click the `Update Now` link.

B. If you prefer to manually upgrade OR you are running an older version of Wordpress, follow these instructions:

   1. Deactivate WassUp plugin under Wordpress admin panel >>Plugins page
   2. Manually delete the "wassup" folder from your plugins directory (`/wp-content/plugins/`) on your Wordpress host using their CPanel File manager or with an ftp client software. Do NOT click the `delete` link in Wordpress.
   3. Download the latest full release of Wassup Real-Time Analytics directly from [gitHub.com/michelem09/wassup/releases/](https://github.com/michelem09/wassup/releases/) and save onto your local computer.
   4. Then follow the manual install instructions in section B:i-iv above.


### **IMPORTANT Safe Upgrade Instructions

To safely upgrade WassUp when your site is busy, you must manually stop visitor recording beforehand, do the upgrade, then manually resume recording afterwards:
 
1. In WordPress admin panel, navigate to WassUp >>Options >>[Genernal Setup] tab. Uncheck the box for "Enable statistics recording" and save.
1. Navigate to Plugins page and click the "Update Now" link under "WassUp" plugin name or follow the manual upgrade instructions above
1. After the upgrade is done, go back to WassUp >>Options >>[General Setup] tab, and check the box for "Enable statistics recording" and save.

### Usage
When you activate this plugin (as described in "Installation"), it works "as is". You don't have anything to do. Wait for visitors to hit your site and start seeing details (click the dashboard and go to WassUp page)

### Compatibility Notice 
* WassUp is incompatible with the following static page caching plugins: WP Super Cache, WP Cache, and WP Hyper Cache. 

## Upgrade Notice
### 1.9.3.1
* Important bugfix upgrade.
* DO NOT UPGRADE when your site busy!
* Read [installation instructions](http://wordpress.org/plugins/wassup/installation/) for safe upgrade instructions.

## Changelog
### v1.9.3.1: Important bugfix upgrade
* fixed various preg_match regexes to improve matching
* fixed a parenthesis error in tracking/exclusion code for 404/spam hits
* fixed bug that caused duplicate country code in searchengine name
* minor code changes.

### v1.9.3: Important bugfix upgrade 
* fixed an 'unknown modifier' preg_match error in 'wassup.php' module.
* fixed an IP validation loophole that could cause invalid/malformed forwarding IPs in client's http_header to be stored as client IP.
* fixed code to stop recording of front-end ajax requests ('/wp-admin/admin-ajax.php' url) as "possible spam/malware" hits.
* updated code to restore 'shutdown' hook as the primary hook for 'wassupAppend' function.  
* updated translation script to re-attempt language load with "language x2" as filename whenever the initial load (with "locale") fails.
* updated translation template and language files to v1.9.2  
* miscellaneous minor changes.  

### v1.9.2: Urgent bugfix upgrade 
* fixed fatal error on `wassup_options::is_recording_active` that occurred in some configurations
* fixed erroneous 'hack attempt' labels that occurred on sites without permalinks
* fixed a refresh timer bug that disabled dropdown selections in Visitor Details when refresh setting is 0.
* fixed a debug_mode bug that caused error notices to show as output for Wassup ajax action
* new functions(2) to reset error display in debug_mode
* improved spider detection.
* updated "compatibility.php" module for multisite compatibility tests
* miscellaneous minor bug fixes
* miscellaneous minor code changes.

### v1.9.1: Critical security, compatibility, and bugfix upgrade
* patched security loopholes (xss vulnerability) in the 'Top stats' widget and in `wassupURI::add_siteurl` method
* improved security against xss attacks on interface and widgets.
* improved compliance with the latest Wordpress.org plugin repository guidelines.
* improved browser/os detection.
* new module, 'wassupadmin.php' for WassUp admin panels and dashboard widget
* new module, 'compatibility.php' to check for Wordpress and PHP compatibility and to load compatibility modules from `/lib/compat-lib/` subfolder when available
* removed backward compatibility modules ('/lib/compat-lib/') and features from Wordpress repository.
  Wassup's backward-compatibility feature remains in the full copy of Wassup available at [http://github.com/michelem09/wassup/](http://github.com/michelem09/wassup/)  
* deleted obsolete files ('badhosts.txt','badhosts-intl.txt') and javascripts
* updated Google!Maps API link to use a common API key for Wassup-Spy (required by Google since 2016-06-22).
* updated WassUp 'wp-cron' scheduled tasks to terminate (and restart) at reset-to-default, recording stop/start, and at plugin deactivate/reactivate events.
* updated Wassup table export to omit all known spam/malware records from export by default...to avoid propagation of malware code when exported records are imported into other applications.
* updated translation template, 'wassup.pot'.
* fixed problem with login page hits not being recorded.
* fixed errors caused by disabled 'set_time_limit' function in some configurations.
* miscellaneous bugfixes.
* miscellaneous text changes
* minor css changes for small screen devices.

### v1.9: Important feature improvement upgrade
* improved MySQL performance and table management
* improved tracking filters.
* improved security with more input validation, deprecated function removal and escaped output.
* new multisite network capability.
* new multi-widget capability in widgets.
* new "FAQ" and "Donate" panels in Wassup-Options submenu
* new "top stats" popup-window in Visitor Details panel
* updated code for Wordpress 4/PHP 5.6-mysqli compatibility
* updated internal javascripts libaries.
* updated css and validated as 100% W3C CSS3 compliant
* updated browser and os detection for new agents (Win10)
* updated translation template (wassup.pot)
* updated "readme.txt"
* 3 new classes added to code: `wassupDb` for MySQL table operations and caching, `wassupURI` to format and clean urls/links for safe output, and `Wassup_Widget` a base widget for building Wassup widgets
* miscellaneous minor text changes
* miscellaneous minor bugfixes

### v1.8.6
* Removed deprecated Wordpress methods, minor text changes.

### v1.8.5
* Changes to GEOIP API for Map geolocation, minor CSS changes.

### v1.8.4
* Migrated to Google Maps API v3
* New locales: English (United Kingdom) [complete], Persian [partial], Sinhalese [partial], Vietnamese [partial]
* New donate button in WassUp menu
* fixed CSS for WassUp menu.

### v1.8.3.1 
* Security fix for xss attempts via useragent string.

### v1.8.3 
* bugfixes, improved tracking, changes for Wordpress compatibility.

### v1.8.2 
* bugfixes, improved browser/agent detection.

### v1.8.1 
* bugfix and minor changes.
 
### v1.8: Important feature improvement upgrade.
* new table `wassup_meta` for caching and stats collection.
* new admin interface style.
* new GEOIP API [freegeoip.net](http://freegeoip.net) for map geolocation in SPY view. Thanks to [@AlexandreFiori](http://twitter.com/alexandrefiori) for giving us access to his API.
* bugfixes, security fixes, and changes for Wordpress compatibility.

### 1.7.2.1
* fixed a security loophole found in main.php module.

### 1.7.2
* new clickable refresh timer in "Visitor Details" submenu.
* initial sample record added to WassUp table for new installs.
* improved browser, OS, and search engine detection.
* more language translations added.

...

## Infos
### Plugin Home
* [http://www.wpwp.org](http://www.wpwp.org "http://www.wpwp.org")

### Plugin Development
* For pre-release bugfixes and other changes to WassUp, you can download the development version of Wassup from GitHub:
[https://github.com/michelem09/wassup](https://github.com/michelem09/wassup "https://github.com/michelem09/wassup")
* For the latest browsers, os, and spider detection updates, you can download the `uadetector.class.php` module separately on GitHub:
[https://github.com/hdunk/uadetector.class.php](https://github.com/hdunk/uadetector.class.php "https://github.com/hdunk/uadetector.class.php")

### Developers Home
* Michele M: [http://www.michelem.org](http://www.michelem.org "http://www.michelem.org")
* Helene D: [http://helenesit.com](http://helenesit.com "http://helenesit.com")

### Credits
* [Jquery](http://www.jquery.com) for the amazing Ajax framework
* [FAMFAMFAM](http://www.famfamfam.com/) for the flags icons
* Thanks to [@AlexandreFiori](http://twitter.com/alexandrefiori) for access to his GeoIP API at [freegeoip.net](http://freegeoip.net)
* A big thanks to [Helene D.](http://helenesit.com/) for her help to improve WassUp!
