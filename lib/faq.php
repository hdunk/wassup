<?php
/**
 * Displays a list of frequently asked questions related to Wassup
 *
 * @package WassUp Real-time Analytics
 * @subpackage faq.php
 * @author helened (http://helenesit.com)
 * @since v.1.9.3
 */
//abort if this is direct uri request for file
if(!empty($_SERVER['SCRIPT_FILENAME']) && realpath($_SERVER['SCRIPT_FILENAME'])===realpath(preg_replace('/\\\\/','/',__FILE__))){
	//try track this uri request
	if(!headers_sent()){
		//triggers redirect to 404 error page so Wassup can track this attempt to access itself (original request_uri is lost)
		header('Location: /?p=404page&werr=wassup403'.'&wf='.basename(__FILE__));
		exit;
	}else{
		//'wp_die' may be undefined here
		die('<strong>Sorry. Unable to display requested page.</strong>');
	}
//abort if no WordPress
}elseif(!defined('ABSPATH') || empty($GLOBALS['wp_version'])){
	//show escaped bad request on exit
	die("Bad Request: ".htmlspecialchars(preg_replace('/(&#0*37;?|&amp;?#0*37;?|&#0*38;?#0*37;?|%)(?:[01][0-9A-F]|7F)/i','',$_SERVER['REQUEST_URI'])));
}
/** Display a list of questions and answers about WassUp @since v1.9.4 */
function wassup_faq(){
	global $wassup_options;
	$GMapsAPI_signup="https://developers.google.com/maps/documentation/javascript/get-api-key#key"; //v3 key signup
	//wassup-options menu link 
	if(is_network_admin()) $options_link=network_admin_url('admin.php?page=wassup-options');
	else $options_link=admin_url('admin.php?page=wassup-options');
?>
	<div id="wassup_faq-1" class="optionspanel">
		<ol>
		<li id="compatible-1"><strong>Q:</strong> <span class="faq-question"><?php echo __("Is WassUp compatible with the latest release of WordPress?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo sprintf(__("Yes! This version of WassUp is compatible with the current v5.x line of WordPress.","wassup"),'v'.WASSUPVERSION).' ';
		 echo sprintf(__("WassUp is fully compatible with WordPress %s and PHP %s.","wassup"),'<nobr>v4.0 - 5.3.2</nobr>','<nobr>v5.2 - 7.4</nobr>').' ';
		 echo sprintf(__("WassUp also runs on legacy WordPress %s when downloaded from %s.","wassup"),'<nobr>v2.2.3 - 3.8</nobr>','<a href="https://github.com/michelem09/wassup/releases/">GitHub.com Repository</a>').' ';
		 echo __("However, some language translations may be incomplete or unavailable in legacy WordPress setups.","wassup").'<br/>';
		 echo '<span class="linespace">'.__("Important Note: Legacy WordPress sites may have unaddressed security vulnerabilities.","wassup").' ';
		 echo __("Whenever possible, always upgrade your WordPress site to the latest version.","wassup").'</span>';?></span></li>
		<li id="chart-1"><strong>Q:</strong> <span class="faq-question"><?php echo __("How do I add WassUp's chart to my admin dashboard?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo sprintf(__("Check the box for \"Enable widget/small chart in admin dashboard\" under %s tab.","wassup"),' <span class="code">WassUp >> '.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'">'.__("General Setup","wassup").'</a>]</nobr></span>');?></span></li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("How do I display WassUp widgets on my site?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo __("From Wordpress widgets panel, drag the \"WassUp Online\" widget or the \"Wassup Top Stats\" widget from the list of available widgets on the left into your theme's \"Sidebar\" or \"Footer\" area on the right or use the Customizer to add Wassup widgets interactively.","wassup");?></span></li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("My Wordpress theme is not widget ready. Is it possible to display WassUp widgets on my site?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo __("Yes. Insert the template tag \"wassup_sidebar()\" into your theme's \"sidebar.php\" file to display Wassup widgets as a single combined widget on your site.","wassup");?></span></li>
		<li id="map-1"><strong>Q:</strong> <span class="faq-question"><?php echo __("How do I view the real-time visitor geolocation map in WassUp?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo sprintf(__("Check the box for \"Display a GEO IP Map in spy visitors view\" in %s and save, then navigate to %s panel to see the map.","wassup"),'<span class="code">WassUp >> '.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'">'.__("General Setup","wassup").'</a>]</nobr></span>','<span class="code">WassUp >><nobr>'.__("SPY Visitors","wassup").'</nobr></span>');?></span></li>
		<li id="map-2"><strong>Q:</strong> <span class="faq-question"><?php echo __("The map has vanished and I get a message like: \"Oops, something went wrong\" or \"Google has disabled use of the Maps API for this application\". How do I fix this?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php
		echo __("Try upgrading to the latest version of Wassup or go to Wassup-Options and click the \"reset-to-default\" button if you already upgraded.","wassup")." ";
		echo sprintf(__("You can also sign up for your own %s and enter it under \"Spy Visitors settings\" in %s tab.","wassup"),
		'<a href='.$GMapsAPI_signup.'>Google!Maps API key</a>','<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'">'.__("General Setup","wassup").'</a>]</nobr></span>');?></span></li>
		<li id="map-3"><strong>Q:</strong> <span class="faq-question"><?php echo __("Why has the visitor location pins stopped showing on the map?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo __("Wassup's uses a free web service for geolocating IPs on the map and the total requests may have exceeded the daily quota, or perhaps the API key has changed, or the service may be offline.","wassup").'&nbsp; <br/>';
		echo '<span class="linespace">'.__("To fix, try click the \"reset-to-default\" button in Wassup-Options or upgrade Wassup.","wassup");?></span><br/>
		<li id="cookie-1"><strong>Q:</strong> <span class="faq-question"><?php echo __("Why does WassUp use cookies?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo __("WassUp uses two session cookies to assist in visitor tracking.","wassup").' ';
		echo __("One cookie contains a tracking id to uniquely identify the visitor as they browse different pages on your website, plus the visitor's ip address and WordPress username, if logged in.","wassup").' ';
		echo __("The second cookie contains some specs about the visitor's browser/device.","wassup").' ';
		echo __("These cookies are stored on the visitor device only for duration of their visit: when the visitor closes the browser window/tab, the cookies are automatically deleted.","wassup");
		echo ' ';?></span><br/>
		<li id="gdpr-1"><strong>Q:</strong> <span class="faq-question"><?php echo __("Is WassUp EU GDPR compliant?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo __("No.","wassup").' ';
		echo __("As a stand-alone application, WassUp fails EU GDPR strict standards for two reasons","wassup").':<ol>';
		echo '<li> '.__("WassUp plugin collects and stores visitors' IP addresses, WordPress usernames (for user roles and permissions) and comment emails (to identify \"commenters\") in its tables", "wassup").'</li>';
		echo '<li> '.__("WassUp plugin may share visitors' IP addresses and commenters' emails with 3rd-party web services for geolocation and spam identification.","wassup").'</li></ol> ';
		echo '<span class="linespace">&nbsp;'.sprintf(__("IMPORTANT: Read %s to learn how to make your site EU GDPR compliant with WassUp.","wassup"),'<a href="#gdpr-2"> '.__("below","wassup").'</a>');
		?></span></li>
		<li id="gdpr-2"><strong>Q:</strong> <span class="faq-question"><?php echo __("How do I make my Wordpress site EU GDPR compliant with WassUp plugin?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php
		echo __("You need to create a \"privacy policy\" page that states that your site does visitor IP tracking for web analytics and that visitors' IP addresses may be shared with a geolocation service, and that commenters' IP address, email and comment text may be shared with a spam checking service.","wassup").' ';
		echo sprintf(__("Refer to the Wordpress support article \"%s\" for more information or install a %s.","wassup"),'<a href="https://wordpress.org/support/article/wordpress-privacy/">'."Wordpress Privacy".'</a>','<a href="https://wordpress.org/plugins/search/gdpr/">'.__("GDPR compliance plugin","wassup").'</a>').'<br/>';
		echo '<span class="linespace">&nbsp;'.__("IMPORTANT: Read below to learn how to honor EU GDPR requests in WassUp.","wassup").'</span>';
		?></span></li>
		<li id="gdpr-erase"><strong>Q:</strong> <span class="faq-question"><?php 
		echo __("The EU GDPR law require that I erase all identifiable records of a visitor when they request it. How do I honor a visitor's request to erase their data in WassUp?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php 
		echo sprintf(__("You must erase WassUp's visitor's records manually. Follow the faq instructions for %s to do this.","wassup"),'&#034;<a href="#delete-1">'.__("delete a specific visitor's records","wassup").'</a>&#034;');?>
		</span></li>
		<li id="gdpr-optout"><strong>Q:</strong> <span class="faq-question"><?php 
		echo __("The EU GDPR law require that I allow a visitor to opt out of tracking. How do I honor this type of request in WassUp?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php 
		echo sprintf(__("Follow the faq instructions for %s.","wassup"),'&#034;<a href="#exclude-1">'.__("exclude a visitor from being recorded","wassup").'</a>&#034;');?>
		</span></li>
		<li id="delete-1"><strong>Q:</strong><span class="faq-question"><?php echo __("How do I delete a specific visitor's records from WassUp's history?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo __("In WassUp's \"Visitor Details\" panel, select \"all time\" range and search for the visitor by username, email, or IP address. Select a record by clicking the 2nd icon on the right of the record (yellow triangle). This \"Marks\" it and all other records with the same IP address and highlights them.","wassup").' ';
		echo __("Select one of the highlighted records and click the \"X\" icon that is furthest right of the record. This deletes all highlighted records.","wassup").' '.__("You may have to repeat this process several times as there could be multiple IP addresses associated with that visitor.","wassup");?>
		</span></li>
		<li id="exclude-1"><strong>Q:</strong> <span class="faq-question"><?php 
		echo __("How do I exclude a visitor from being recorded?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php 
		echo sprintf(__("Navigate to %s tab and enter a visitor's username, IP address, or hostname into the appropriate text area for that \"Recording Exclusion\" type.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'&tab=2">'.__("Filters & Exclusions","wassup").'</a>]</nobr></span>');?>
	</span></li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("How do I stop (temporarily) WassUp from recording new visits on my site?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo sprintf(__("Uncheck the box for \"Enable statistics recording\" under %s tab.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'">'.__("General Setup","wassup").'</a>]</nobr></span>');?></span></li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("In Wordpress multisite, how do I stop (temporarily) WassUp from recording new visits on all sites in the network?","wassup");?></span><br/>
		<strong>A#1:</strong> <span class="faq-answer"><?php echo sprintf(__("If plugin is \"network activated\", login as network admin, go to the Network admin dashboard, navigate to %s tab and Uncheck the box for \"Enable Statistics Recording for network\" and save.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >>[<a href="'.$options_link.'">'.__("General Setup","wassup").'</a>]</span>');?></span><br/>
		<strong>A#2:</strong> <span class="faq-answer"><?php echo sprintf(__("If plugin is NOT \"network activated\", login as network admin, go to the main site/parent domain admin dashboard, navigate to %s tab, then Uncheck the box for \"Enable Statistics Recording for network\" and save.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'">'.__("General Setup","wassup").'</a>]</nobr></span>');?></span>
		</li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("No data is being displayed; or \"Visitor Details\" panel show 0 records for the last 24 hours. How do I fix this?","wassup");?></span><br/>
		<strong>A #1:</strong> <span class="faq-answer"><?php echo sprintf(__("Check the box for \"Enable statistics recording\" setting under %s tab and save.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'">'.__("General Setup","wassup").'</a>]</nobr></span>');?></span><br/>
		<strong>A #2:</strong> <span class="faq-answer"><?php echo sprintf(__("Click the [Reset to Default] button under %s tab.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'">'.__("General Setup","wassup").'</a>]</nobr></span>');?></span><br/>
		<strong>A #3:</strong> <span class="faq-answer"><?php echo sprintf(__("Navigate to %s tab and uncheck the \"MySQL Delayed Insert\" setting and save.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'&tab=3">'.__("Manage File & Data","wassup").'</a>]</nobr></span>');?></span><br/>
		<strong>A #4:</strong> <span class="faq-answer"><?php echo __("Deactivate and Re-activate Wassup from Wordpress Plugins panel.","wassup");?></span><br/>
		<strong>A #5:</strong> <span class="faq-answer"><?php echo sprintf(__("If you have access to MySql/phpMyAdmin on your host server, run the MySql command %s to repair and release any locks on wassup table. Note that wassup table name may be different in other Wordpress setups.","wassup"),'<code>REPAIR TABLE '.$wassup_options->wassup_table.'</code>');?></span><br/>
		<strong>A #6:</strong> <span class="faq-answer"><?php echo __("As a last resort, uninstall WassUp cleanly (delete data and files) and reinstall it.","wassup");?></span></li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("My popular web site is hosted on a shared server with restrictive database size limits. How do I prevent WassUp's table from growing too big for my allocated quota?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo sprintf(__("Navigate to %s tab and enable the setting for \"Auto Delete\" of old records and/or check the box to receive an email alert when the table size limit is exceeded.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'&tab=3">'.__("Manage File & Data","wassup").'</a>]</nobr></span>');?></span></li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("WassUp visitor counts are much lower than actual for my website. Why is there a discrepancy and how do I fix it?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo __("Low visitor count is likely caused by page caching on your website. WassUp is incompatible with static page caching plugins such as WP Supercache, WP Cache, and Hyper Cache. To fix, uninstall your cache plugin or switch to a different (javascript-based) statistics plugin.","wassup");?></span></li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("Is there any caching plugin that works with WassUp?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo __("There are no known caching plugins that are 100% compatible with WassUp at this time.","wassup");?></span></li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("How can I make Wassup run faster?","wassup");?></span><br/>
		<strong>A #1:</strong> <span class="faq-answer"><?php echo sprintf(__("Keep Wassup table size small by setting automatic delete of old records or do manual delete periodically under %s tab.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'&tab=3">'.__("Manage File & Data","wassup").'</a>]</nobr></span>');?></span><br/>
		<strong>A #2:</strong> <span class="faq-answer"><?php echo __("If using the \"Top Stats\" widget on your site, set refresh frequency to 15 minutes or higher.","wassup");?></span><br/>
		<strong>A #3:</strong> <span class="faq-answer"><?php echo sprintf(__("Reduce the number of recording exclusions (by ip/hostname/username/url) under %s tab.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'&tab=2">'.__("Filters & Exclusions","wassup").'</a>]</nobr></span>');?></span><br/>
		<strong>A #4:</strong> <span class="faq-answer"><?php 
		$files='<span class="code"> akismet.class.php</span>';
		echo sprintf(__("Delete the file(s) %s from the plugin subfolder 'lib' to stop Wassup from doing remote server queries for spam identification.","wassup"),$files);?></span><br/>
		<strong>A #5:</strong> <span class="faq-answer"><?php echo sprintf(__("As a last resort, stop all spam/malware detection on new hits by unchecking \"Enable Spam and malware detection on records\" under %s tab.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>['.__("General Setup","wassup").']</nobr></span>');?></span></li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("Why does WassUp stats sometimes show more page views than actual pages clicked by a person?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo __("\"Phantom\" page views can occur when a user's browser does automatic feed retrieval, link pre-fetching, a page refresh, or automatically adds your website to it's \"Top sites\" window (Safari). WassUp tracks these because they are valid requests from the browser and are sometimes indistinguishable from user link clicks.","wassup");?></span></li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("How do I upgrade WassUp safely when my site has frequent visitors?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo sprintf(__("To upgrade WassUp when your site is busy, you must first disable statistics recording manually under %s tab, then do the plugin upgrade, and afterwards re-enable recording manually when the upgrade is complete and the plugin is active.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'">'.__("General Setup","wassup").'</a>]</nobr></span>');?></span></li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("An unspecified error occurred during plugin upgrade. What do I do next?","wassup");?></span><br/>
		<strong>A:</strong> <span class="faq-answer"><?php echo __("Wait a few minutes. Do NOT re-attempt to upgrade nor try to activate the plugin again! An activation error with no explanation is probably due to your browser timing out, not an upgrade failure. WassUp continues it's upgrade in the background and will activate automatically when it is done. After a few minutes (5-10) has passed, revisit Wordpress' Plugins panel and verify that Wassup plugin has activated.","wassup");?></span></li>
		<li><strong>Q:</strong> <span class="faq-question"><?php echo __("How do I uninstall WassUp cleanly?","wassup");?></span><br/>
		<strong>A #1:</strong> <span class="faq-answer"><?php echo __("From a single Wordpress site: navigate to Wordpress Plugins panel and deactivate WassUp plugin. Then, on the same page, click the \"delete\" link below WassUp name. This deletes both data and files permanently.","wassup");?></span><br/>
		<strong>A #2:</strong> <span class="faq-answer"><?php echo __("From Wordpress multisite Network admin panel: navigate to Plugins panel and deactivate WassUp plugin. If the plugin is not \"network activated\", navigate to the main site/parent domain Plugins panel and deactivate Wassup plugin there, then return to Network admin Plugins panel. Click the \"delete\" link below WassUp name. This deletes both data and files permanently from the main site/parent domain and deletes Wassup data from all the subsites in the network.","wassup");?></span><br/>
		<strong>A #3:</strong> <span class="faq-answer"><?php echo sprintf(__("From a subsite in Wordpress multisite: navigate to %s tab and check the box for \"Permanently remove WassUp data and settings\" and save. Next, go to the subsite's Plugins panel and deactivate WassUp plugin. This deletes the subsite's data permanently. No files are deleted (not needed).","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >><nobr>[<a href="'.$options_link.'&tab=4">'.__("Uninstall","wassup").'</a>]</nobr></span>');?></span><br/>
		<strong>A #4:</strong> <span class="faq-answer"><?php echo sprintf(__("From a Wordpress 2.x site: navigate to %s tab and check the box for \"Permanently remove WassUp data and settings\" and save. Next, go to Wordpress Plugins panel and deactivate WassUp plugin. This deletes the data permanently. To delete the plugin files from Wordpress 2.x, use an ftp client software on your PC or login to your host server's \"cpanel\" and use \"File Manager\" to delete the folder \"wassup\" from the %s directory on your host server.","wassup"),'<span class="code">WassUp >>'.__("Options","wassup").' >>[<a href="'.$options_link.'&tab=4">'.__("Uninstall","wassup").'</a>]</span>','<code>/wordpress/wp-content/plugins/</code>');?></span></li>
		</ol>
		<p class="legend"><?php echo sprintf(__("Visit the %s to find more answers to your WassUp questions.","wassup"),'<a href="http://wordpress.org/support/plugin/wassup">'.__("Plugin Forum","wassup").'</a>');?></p>
		<br />
	</div>
<?php 
} 
?>
