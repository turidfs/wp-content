<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class soundcloud_master_admin_table_news extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
?>
<table class="widefat" cellspacing="0">
	<thead>
		<tr>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Latest News', 'soundcloud_master'); ?></h2></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=281766848505812";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="container-fb" style="width:100%;">
<style>
.fb-like-box, .fb-like-box span, .fb-like-box.fb_iframe_widget span iframe {
    width: 100% !important;
}
</style>
<div class="fb-like-box" data-href="https://www.facebook.com/TechGasp" data-width="500" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
</div>
			</td>
		</tr>
	</tbody>
</table>
<?php
		}
}
