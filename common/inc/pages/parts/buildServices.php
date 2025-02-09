<?php
if(preg_match('#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'])){
	header($_SERVER['HTTP_HOST']);
	exit();
}
?>
<!-- start: Service Select -->
<fieldset class="options">
	<legend><?php _e('Select Service', 'photoxhibit'); ?></legend>
	<table width="100%" cellpadding="3" cellspacing="3" border="0">
		<tbody>
			<tr>
				<td colspan="2">
					<?php _e('Please select an option from where you will be pulling your images from', 'photoxhibit'); ?>
				</td>
			</tr>
			<?php if($this->vars['use_picasa']==1):?>
			<tr>
				<td width="235">
					<label for="forPicasa">
						<input type="radio" name="service" value="picasa" alt="px_picasaOptions" id="forPicasa"/> Picasa
					</label>
				</td>
				<td><?php _e('This option will allow you to get photos from your Picasa account', 'photoxhibit'); ?> </td>
			</tr>
			<?php endif;?>
			<?php if($this->vars['use_flickr']==1):?>
			<tr>
				<td width="235">
					<label for="forFlickr">
						<input type="radio" name="service" value="flickr" alt="px_buildFlickrOptions" id="forFlickr"/> Flickr
					</label>
				</td>
				<td>
					<?php _e('This option will allow you to get photos from Flickr.', 'photoxhibit'); ?>
				</td>
			</tr>
			<?php endif;?>
			<?php if($this->vars['use_smugmug']==1):?>
			<tr>
				<td width="235">
					<label for="forSmugmug">
						<input type="radio" name="service" value="smugmug" alt="px_buildSmugMugAdvance" id="forSmugmug"/> SmugMug
					</label>
				</td>
				<td><?php _e('This option will allow you to get photos from your SmugMug account ', 'photoxhibit'); ?>
					
				</td>
			</tr>
			<?php endif;?>
			<?php if($this->vars['use_album']==1):?>
			<tr>
				<td width="235">
					<label for="px_buildAlbumList_">
						<input type="radio" name="service" value="album" alt="px_buildAlbumList" id="px_buildAlbumList_"/> <?php _e('Album', 'photoxhibit'); ?>
					</label>
				</td>
				<td>
					<?php _e('This option will pull your gallery information from a Album that you create(d) under the Album Manage tab', 'photoxhibit'); ?>
				</td>
			</tr>
			<?php endif;?>
			<?php if($this->vars['use_local']==1):?>
			<tr>
				<td width="235">
					<label for="px_buildLocal_">
						<input type="radio" name="service" value="locally" id="px_buildLocal_" alt="px_buildLocal"/> <?php _e('Locally from Database', 'photoxhibit'); ?>
					</label>
				</td>
				<td>
					<?php _e('This option will pull your gallery information from the database grabbing all attachments that are JPG, GIF, or PNG.', 'photoxhibit'); ?>
				</td>
			</tr>
			<?php endif;?>
			<?php if($this->vars['use_browse']==1):?>
			<tr>
				<td width="235">
					<label for="px_buildBrowse_">
						<input type="radio" name="service" value="browse" id="px_buildBrowse_" alt="px_buildBrowse"/> <?php _e('Browsable Directory', 'photoxhibit'); ?>
					</label>
				</td>
				<td>
					<?php _e('This option will pull your gallery information from a folder on your server.  This will only grab that paths images in the folder supplied and all child folders.', 'photoxhibit'); ?>
				<em><?php _e('Note: This option needs to be reworked.  I am keeping this option here to force myself to get it working correctly', 'photoxhibit'); ?></em></td>
			</tr>
			<?php endif;?>
		</tbody>
	</table>
	<p class="submit">
		<input type="submit" name="px_goNext" title="px_go" value="<?php _e('Next &raquo;', 'photoxhibit'); ?>" />
	</p>
</fieldset>
<!-- end: Service Select -->