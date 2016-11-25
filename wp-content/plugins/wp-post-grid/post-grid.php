<?php
function cn_post_grid_callback() {
	ob_start();
	?>
	<div class="wrap">
		<h2>The Grid Options</h2>
	</div>
    <h3>Layout Options</h3>
    <form id="grid-system-form" method="post" action="options.php"><?php wp_nonce_field('update-options'); ?>
    	<label class="label-grid-type">
        	<input type="radio" name="tc_grid_type" class="tc_grid_type" value="1_4" <?php if(get_option('tc_grid_type') == 1)echo 'checked';?> />
            <img class="grid1" src="<?php echo plugins_url( '/' . basename(dirname(__FILE__))) ?>/images/grid1.png" />
            <div class="clear"></div>
        </label>
        <label class="label-grid-type">
        	<input type="radio" name="tc_grid_type" class="tc_grid_type" value="2_2" <?php if(get_option('tc_grid_type') == 2)echo 'checked';?> />
            <img class="grid2" src="<?php echo plugins_url( '/' . basename(dirname(__FILE__))) ?>/images/grid2.png" />
            <div class="clear"></div>
        </label>
        <label class="label-grid-type">
        	<input type="radio" name="tc_grid_type" class="tc_grid_type" value="3_2" <?php if(get_option('tc_grid_type') == 3)echo 'checked';?> />
            <img class="grid3" src="<?php echo plugins_url( '/' . basename(dirname(__FILE__))) ?>/images/grid3.png" />
            <div class="clear"></div>
        </label>
        <label class="label-grid-type">
        	<input type="radio" name="tc_grid_type" class="tc_grid_type" value="4_3" <?php if(get_option('tc_grid_type') == 4)echo 'checked';?> />
            <img class="grid4" src="<?php echo plugins_url( '/' . basename(dirname(__FILE__))) ?>/images/grid4.png" />
            <div class="clear"></div>
        </label>
        <label class="label-grid-type">
        	<input type="radio" name="tc_grid_type" class="tc_grid_type" value="5_3" <?php if(get_option('tc_grid_type') == 5)echo 'checked';?> />
            <img class="grid5" src="<?php echo plugins_url( '/' . basename(dirname(__FILE__))) ?>/images/grid5.png" />
            <div class="clear"></div>
        </label>
        <label class="label-grid-type">
        	<input type="radio" name="tc_grid_type" class="tc_grid_type" value="6_3" <?php if(get_option('tc_grid_type') == 6)echo 'checked';?> />
            <img class="grid6" src="<?php echo plugins_url( '/' . basename(dirname(__FILE__))) ?>/images/grid6.png" />
            <div class="clear"></div>
        </label>
        <label class="label-grid-type">
        	<input type="radio" name="tc_grid_type" class="tc_grid_type" value="7_3" <?php if(get_option('tc_grid_type') == 7)echo 'checked';?> />
            <img class="grid7" src="<?php echo plugins_url( '/' . basename(dirname(__FILE__))) ?>/images/grid7.png" />
            <div class="clear"></div>
        </label>
        <label class="label-grid-type">
        	<input type="radio" name="tc_grid_type" class="tc_grid_type" value="8_1" <?php if(get_option('tc_grid_type') == 8)echo 'checked';?> />
            <img class="grid8" src="<?php echo plugins_url( '/' . basename(dirname(__FILE__))) ?>/images/grid8.png" />
            <div class="clear"></div>
        </label>
        <div class="clear"></div>
        <div class="shortcode-show">
            <h3>Shortcode</h3><p>[cn_post_grid]</p>
        </div>
        <div class="div-grid-content">
            <div class="div-grid-preview">
                <h4>Preview</h4>
                <div class="preview-img"></div>
            </div>
            <div class="div-grid-posts">
                <h4>Posts</h4>
                <?php $max_no = (get_option('tc_max_no_grid')) ? get_option('tc_max_no_grid') : '4'; ?>
                <?php $variab = '';for( $i = 1; $i<= $max_no; $i++){ ?>
                	<div id="grid-post-<?php echo $i; ?>" class="grid-post">
                    	<h5>Post <?php echo $i; ?>:</h5>
                        <label id="grid-post-<?php echo $i; ?>_label-1" class="grid-post-label">
                        	<input type="radio" name="grid-post-<?php echo $i; ?>_input" id="grid-post-<?php echo $i; ?>_input-1" class="grid-post-<?php echo $i; ?>_input grid-post_input" value="1" />
                            <span>Default <i>(Most Recent Post)</i></span>
                        </label><br/>
                        <label id="grid-post-<?php echo $i; ?>_label-2" class="grid-post-label">
                        	<input type="radio" name="grid-post-<?php echo $i; ?>_input" id="grid-post-<?php echo $i; ?>_input-2" class="grid-post-<?php echo $i; ?>_input grid-post_input" value="2" />
                            <span>Published Post</i></span>
                        </label><br/>
                        <label id="grid-post-<?php echo $i; ?>_label-3" class="grid-post-label">
                        	<input type="radio" name="grid-post-<?php echo $i; ?>_input" id="grid-post-<?php echo $i; ?>_input-3" class="grid-post-<?php echo $i; ?>_input grid-post_input" value="3" />
                            <span>Custom Image</i></span>
                        </label><br/>
                        <span id="grid-post-<?php echo $i; ?>_label-2_select" class="grid-post-select grid-post-<?php echo $i; ?>_hide  hide" name="grid-post-<?php echo $i; ?>_select"></span>
                    	<div id="grid-post-<?php echo $i; ?>_label-3_select" class="grid-label-3-select grid-post-<?php echo $i; ?>_hide hide">
                        	<span>Image URL:</span>
                        	<input type="text" class="media" name="media" value="" />
                            <span>Link:</span>
                        	<input type="text" class="link" name="link" value="" />
                            <span>Short H/line:</span>
                        	<input type="text" class="shorth" name="shorth" value="" />
                            <div class="clear"></div>
                        </div>
                        <div class="image-align">
                        <strong>Image Align:</strong>
 						<?php $img_align = get_option('tc_grid'.$i.'_image-align'); ?>
                        <label>
                        <input type="radio" name="tc_grid<?php echo $i; ?>_image-align" id="grid-post-<?php echo $i; ?>_image-align-left" class="grid-post-<?php echo $i; ?>_image-align grid-post_image-align" value="1" <?php echo ($img_align == 1)? 'checked="checked"': '' ;?> />
                        Left</label><label>
                        <input type="radio" name="tc_grid<?php echo $i; ?>_image-align" id="grid-post-<?php echo $i; ?>_image-align-center" class="grid-post-<?php echo $i; ?>_image-align grid-post_image-align" value="2" <?php echo ($img_align == 2)? 'checked="checked"': '' ;?> />
                        Center</label><label>
                        <input type="radio" name="tc_grid<?php echo $i; ?>_image-align" id="grid-post-<?php echo $i; ?>_image-align-right" class="grid-post-<?php echo $i; ?>_image-align grid-post_image-align" value="3" <?php echo ($img_align == 3)? 'checked="checked"': '' ;?> />
                        Right</label>
                        </div>
                    </div>
                    <input type="hidden" name="tc_grid<?php echo $i; ?>" class="tc_grid<?php echo $i; ?>" />
                <?php $variab .= ',tc_grid'.$i.',tc_grid'.$i.'_image-align'; } ?>
                <div id="publishing-action">
                    <span class="spinner"></span>
                    <input type="button" name="publish" id="publish" class="button button-primary button-large" value="Save Options" accesskey="p">
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <input type="hidden" name="tc_num_grid" class="tc_num_grid" />
    	<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="tc_grid_type,tc_num_grid <?php echo $variab; ?>" />
    </form>
    <script type="text/javascript">
		var tc_grid_type = 0;
		var tc_num_grid = 0;
    	jQuery(document).ready(function($){
			var tc_max_grid = <?php echo (get_option('tc_max_no_grid')) ? get_option('tc_max_no_grid') : '4'; ?>;
			var tc_grid = new Array(tc_max_grid);
			jQuery('.tc_grid_type').on('change', function(){

				jQuery('.preview-img').fadeOut(100);
				var thisVal = $(this).val();
				var valSplit = thisVal.split("_");
				var type = valSplit[0];
				var postno = valSplit[1];
				tc_grid_type = type;
				tc_num_grid = postno;
				var smallImgSrc = $('.grid'+type).attr('src');
				var imgSplit = smallImgSrc.split('.png');
				var imgSrc = imgSplit[0]+'-preview.png';
				jQuery('.preview-img').html('<img src="'+imgSrc+'" />');
				jQuery('.preview-img').delay(500).slideDown('fast');
				var i;
				jQuery('.grid-post').fadeOut('fast');
				for(i=1; i<= parseInt(postno); i++){
					jQuery('#grid-post-'+i).slideDown('slow');
				}
				jQuery('#publishing-action').fadeIn('fast');
			});
			jQuery('.grid-post_input').on('change', function(){
				var parentID = $(this).parent().attr('id');
				var parentIDPart = parentID.split("_");
				jQuery('.'+parentIDPart[0]+'_hide').fadeOut('fast');
				if($(this).val() != 1){
					var showSelectID = $('#'+parentID+'_select');
					showSelectID.slideDown('Slow');
				}else{
				}

			})
			jQuery('.grid-post-select').selectivity({
				ajax: {
                        url: ajaxurl,
                        dataType: 'json',
                        minimumInputLength: 3,
                        quietMillis: 250,
						type: 'post',
                        data:{ action: 'all_publish_post' },
                        params: function(term, offset) {
                            return { term: term };
                        },
						processItem: function(item) {
                            return {
                                id: item.id,
                                text: item.name
                            };
                        }
                    },
                    placeholder: 'Search for a repository',
                    templates: {
                        resultItem: function(item) {
                            return (
                                '<div class="selectivity-result-item" data-item-id="' + item.id + '">' +
                                    '<b>' + item.text + '</b>' +
                                '</div>'
                            );
                        }
                    }
			});
			jQuery(".media").on("click", function(e) {
				var id = $(this).parent().attr('id');
				var frame;
				 if (frame) {
					frame.open();
					return;
				}
				var frame = wp.media.frames.file_frame = wp.media({
					title: 'Choose Image',
					button: {
						text: 'Choose Image'
					},
					multiple: false
				});
				frame.on('open', function() {
					//console.log("Open");
				});

				frame.on('close', function() {
					//console.log("Close");
				});

				frame.on('select', function() {
					attachment = frame.state().get('selection').first().toJSON();
					jQuery('#'+id+' .media').val(attachment.url);
				});
				frame.open();
			});
			jQuery("#publish").on('click', function(){
		    	var j;
				var result;
				jQuery(this).attr('disabled','disabled');
				jQuery('.spinner').css('visibility', 'visible');
				jQuery('.tc_num_grid').val(tc_num_grid);
				//console.log(tc_num_grid);
				for(j = 1; j <= parseInt(tc_max_grid); j++){
					if(j <= parseInt(tc_num_grid)){
						var type = $('.grid-post-'+j+'_input:checked').val();
						switch(type){
							case '1':
								result = '{"type":1}';
							break;
							case '2':
								var itemID = $('#grid-post-'+j+'_label-2_select .selectivity-single-selected-item').data('item-id');
								var itemName = $('#grid-post-'+j+'_label-2_select .selectivity-single-selected-item').html();
								result = '{"type":2, "id":'+itemID+', "name":"'+itemName+'"}';
							break;
							case '3':
								var posturl = $('#grid-post-'+j+'_label-3_select .media').val();
								var postlink = $('#grid-post-'+j+'_label-3_select .link').val();
								var postheading = $('#grid-post-'+j+'_label-3_select .shorth').val();
								result = '{"type":3, "url":"'+posturl+'", "link":"'+postlink+'", "heading":"'+postheading+'"}';
							break;
						}
						//tc_grid[eval(j-1)] = result;
						jQuery('.tc_grid'+j).val(result);
					}
					else{
						//tc_grid[eval(j-1)] = 'nothing';
						jQuery('.tc_grid'+j).val('');
					}
				}
				//alert(tc_grid);
				jQuery('#grid-system-form').submit();
			});
			jQuery("input.tc_grid_type").removeAttr("checked");
			jQuery("input.tc_grid_type[value='<?php echo get_option('tc_grid_type'); ?>']").attr("checked","checked");
			var objId = jQuery("input.tc_grid_type[value='<?php echo get_option('tc_grid_type'); ?>']");
			defaultSettings(objId);
			//console.log(tc_num_grid);
		})
		function defaultSettings(obj){
			jQuery('.preview-img').fadeOut(100);

			var thisVal = jQuery(obj).val();
            if(thisVal){
                var valSplit = thisVal.split("_");
                var type = valSplit[0];
                var postno = valSplit[1];
                tc_grid_type = type;
                tc_num_grid = postno;
                var smallImgSrc = jQuery('.grid'+type).attr('src');
                var imgSplit = smallImgSrc.split('.png');
                var imgSrc = imgSplit[0]+'-preview.png';
                jQuery('.preview-img').html('<img src="'+imgSrc+'" />');
                jQuery('.preview-img').delay(500).slideDown('fast');
                var i;
                jQuery('.grid-post').fadeOut('fast');
                for(i=1; i<= parseInt(postno); i++){
                    jQuery('#grid-post-'+i).slideDown('slow');
                }
                jQuery('#publishing-action').fadeIn('fast');
                <?php
                $numGrid = get_option('tc_num_grid');
                //echo 'console.log('.$numGrid.');';
                for($i = 1; $i <= intval($numGrid); $i++){
                    $name = 'tc_grid'.$i;
                    ?>
                    jQuery('.grid-post-<?php echo $i; ?>._input').removeAttr('checked');
                    <?php
                    $tempval = get_option($name);
                    $valArray = json_decode($tempval);
                    $type =$valArray->{"type"};
                    switch($type){
                        case '1':
                        ?>
                            jQuery('#grid-post-<?php echo $i; ?>_input-1').attr('checked', 'checked');
                        <?php
                        break;
                        case '2':
                        ?>
                            jQuery('#grid-post-<?php echo $i; ?>_input-2').attr('checked', 'checked');
                            jQuery('#grid-post-<?php echo $i; ?>_label-2_select .selectivity-single-result-container').html('<span data-item-id="<?php echo $valArray->{"id"};?>" class="selectivity-single-selected-item"><?php echo mysql_escape_string($valArray->{"name"});?></span>');
                            jQuery('#grid-post-<?php echo $i; ?>_label-2_select').slideDown('slow');
                        <?php
                        break;
                        case '3':
                        ?>
                            jQuery('#grid-post-<?php echo $i; ?>_input-3').attr('checked', 'checked');
                            jQuery('#grid-post-<?php echo $i; ?>_label-3_select .media').val('<?php echo $valArray->{"url"};?>');
                            jQuery('#grid-post-<?php echo $i; ?>_label-3_select .link').val('<?php echo $valArray->{"link"};?>');
                            jQuery('#grid-post-<?php echo $i; ?>_label-3_select .shorth').val('<?php echo $valArray->{"heading"};?>');
                            jQuery('#grid-post-<?php echo $i; ?>_label-3_select').slideDown('slow');
                        <?php
                        break;
                    }
                }
			    ?>
		    }

        }
    </script>
	<?php
	$output = ob_get_contents();
	ob_end_clean();
	echo $output;
}
