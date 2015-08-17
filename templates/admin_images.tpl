{include file="admin_head.tpl"}  

	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
{include file="admin_sidebar.tpl"}		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
{include file="admin_notification.tpl"}
{if $smarty.post}
{literal}
<script type="text/javascript">
function preview(img, selection) {
        var scaleX = 174 / selection.width;
        var scaleY = 94 / selection.height;

        $('#thumbnail + div > img').css({
                width: Math.round(scaleX * {/literal}{$large_image_width}{literal}) + 'px',
                height: Math.round(scaleY * {/literal}{$large_image_height}{literal}) + 'px',
                marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px',
                marginTop: '-' + Math.round(scaleY * selection.y1) + 'px'
        });
        $('#x1').val(selection.x1);
        $('#y1').val(selection.y1);
        $('#x2').val(selection.x2);
        $('#y2').val(selection.y2);
        $('#w').val(selection.width);
        $('#h').val(selection.height);
}

$(document).ready(function () {
        $('#save_thumb').click(function() {
                var x1 = $('#x1').val();
                var y1 = $('#y1').val();
                var x2 = $('#x2').val();
                var y2 = $('#y2').val();
                var w = $('#w').val();
                var h = $('#h').val();
                if(x1=="" || y1=="" || x2=="" || y2=="" || w=="" || h==""){
                        alert("You must make a selection first");
                        return false;
                }else{
                        return true;
                }
        });
});

$(window).load(function () {
//$(document).ready(function () {
        $('#thumbnail').imgAreaSelect({ aspectRatio: '174:94', onSelectChange: preview });
});

</script>
{/literal}
{/if}


			<h2 id="page-intro">Image Manager</h2>
			
			<div class="content-box column-right"><!-- Start Content Box -->
				{if {$action}=="add"}
					{include file="admin_sites_form.tpl"}
				{elseif {$action}=="edit"}
					{include file="admin_sites_form.tpl"}
				{elseif {$action}=="delete"}
                                        {include file="admin_sites_form.tpl"}
				{else}
				{*	{include file="admin_sites_list.tpl"}
			*}	{/if}

<div class="content-box-header"><h3>Image Manager</h3></div>
<div class="content-box-content">
<form name="getnewthumb" method="post" action="index.php?page=images">
<select name="thumb">
{$options}
</select>
<input class="button" type="submit" name="submit" value="Choose" />
</form>

</div>
</div>
<div class="content-box column-left">
<div class="content-box-header"><h3>Upload Image</h3></div>
<div class="content-box-content">
<form name="uploadphoto" enctype="multipart/form-data" action="inc/imageupload.php" method="post">
<input type="file" name="image" class="small-input" size="30" />
<input class="button" type="submit" name="photoupload" value="Upload" />
</form>
</div>				

			</div> <!-- End .content-box -->	
<div class="clearfix clear"></div>
{if $smarty.post}
<div class="content-box">
	<div class="content-box-header"><h3>Create Thumbnail</h3></div>
	<div class="content-box-content">



        <img src="../assets/uploadedpics/{$large_image}" style="float: left; margin-right: 10px;" id="thumbnail" alt="Create Thumbnail" />
                        <div style="float:left; position:relative; overflow:hidden; width:174px; height:94px; border:5px solid #cccccc;">
                                <img src="../assets/uploadedpics/{$large_image}" style="position: relative;" alt="Thumbnail Preview" />
                        </div>
	{if file_exists("../assets/uploadedpics/thumbs/{$large_image}")}
	<img src="../assets/uploadedpics/thumbs/{$large_image}" style="float:left;margin-right:10px;border:5px green solid;" />
	{/if}
<div class="clearfix clear"></div>
  <form name="thumbnail" action="index.php?page=images" method="post">
                                <input type="hidden" name="x1" value="" id="x1" />
                                <input type="hidden" name="y1" value="" id="y1" />
                                <input type="hidden" name="x2" value="" id="x2" />
                                <input type="hidden" name="y2" value="" id="y2" />
                                <input type="hidden" name="w" value="" id="w" />
                                <input type="hidden" name="h" value="" id="h" />
                                <input type="hidden" name="thumb" value="{$large_image}" />
                                <input type="submit" name="upload_thumbnail" value="Save Thumbnail" id="save_thumb" />
                        </form>
<div class="clearfix clear"></div>

	</div>
</div>
{/if}
{include file="admin_bottom.tpl"}
