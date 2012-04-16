 <div class="content-box-header">

                                        <h3>Add Site</h3>


                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">

{if {$action}=='delete'}
<form action="index.php?{$smarty.server.QUERY_STRING}" method="post">
<fieldset class="column-left">
<p>Are you 100% sure you want to delete <span class="highlight">{$edit.server_name}</span> from the database?</p>
<p>There is no recovering this method, apart from adding the entire content of the site again!</p>
</fieldset>
<fieldset class="column-right">
<fieldset class="column-left"><a href="index.php?message=Cancelled"><button class="button-cancel">Cancel</button></a>
<input type="hidden" name="id" value="{$edit.id}" />
</fieldset><fieldset class="column-right"><input type="submit" class="button-confirm" name="confirm-delete" value="Confirm" />
</fieldset></fieldset>
<div style="clear:both;"></div></form>
{else}

   <form action="index.php?{$smarty.server.QUERY_STRING}" method="post">

                                                        <fieldset class="column-left"> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
<input type="hidden" name="id" id="id" value="{$edit.id}" />

                                                                <p>
                                                                        <label>Server Host</label>
                                                                                <input class="text-input medium-input" type="text" id="server_name" value="{$edit.server_name}" name="server_name" />
                                                                </p>
<input type="hidden" name="template" id="template" value="{$edit.template}" />
                                                                <p>
                                                                        <label>Site Name</label>
                                                                        <input
										class="text-input medium-input" 
										type="text" 
										id="name" 
										name="name" 
										value="{$edit.name}" 
									/> 
                                                                </p>

								<p>
									<label>Meta Keywords</label>
									<input class="text-input medium-input" type="text" value="{$edit.keywords}" id="keywords" name="keywords" />
							</p>
                                                                <p>
                                                                        <label>Meta Description</label>
									<textarea class="text-input textarea" id="description" name="description" cols="30" rows="5">{$edit.description}</textarea>
                                                                </p>
								</fieldset><fieldset class="column-right">
 <p>
                                                                        <label>Title</label>
                                                                        <input class="text-input medium-input" type="text"
                                                                                id="title" name="title" value="{$edit.title}" />
                                                                </p>
								<p><label>Offer Subhead</label>
								<input class="text-input medium-input" id="offer_subhead" name="offer_subhead" value="{$edit.offer_subhead}" />
								</p>
								 <p>
                                                                        <label>Offer Description</label>
                                                                        <textarea class="text-input textarea wysiwyg" id="offer_description" name="offer_description" cols="70" rows="15">{$edit.offer_description}</textarea>
                                                                </p>
</fieldset>
<div class="clearfix clear"></div>
<fieldset>
 <p>
                                                                        <label>Video Embed Code</label>
                                                                        <textarea class="text-input medium-input textarea" id="video" name="video" cols="10" rows="10">{$edit.video}</textarea>
                                                                </p>                                                               
	<p><label>Content Heading</label>
	<input class="text-input medium-input" id="content_heading" name="content_heading" value="{$edit.content_heading}" />
	</p>
 <p>
                                                                        <label>Content HTML</label>
                                                                        <textarea class="text-input wysiwyg textarea" id="content_html" name="content_html" cols="70" rows="15">{$edit.content_html}</textarea>
                                                                </p>
</fieldset><fieldset class="column-left">
<p><label>Box One Headline</label><input class="text-input medium-input" id="box_one_headline" name="box_one_headline" value="{$edit.box_one_headline}" /></p>
<p><label>Box One Content</label><textarea class="text-input medium-input textarea" id="box_one" name="box_one" cols="10" rows="5">{$edit.box_one}</textarea></p>
<p><label>Box Two Headline</label><input class="text-input medium-input" id="box_two_headline" name="box_two_headline" value="{$edit.box_two_headline}" /></p>
<p><label>Box Two Content</label><textarea class="text-input medium-input textarea" id="box_two" name="box_two" cols="10" rows="5">{$edit.box_two}</textarea></p>
<p><label>Box Three Headline</label><input class="text-input medium-input" id="box_three_headline" name="box_three_headline" value="{$edit.box_three_headline}" /></p>
<p><label>Box Three Content</label><textarea class="text-input medium-input textarea" id="box_three" name="box_three" cols="10" rows="5">{$edit.box_three}</textarea></p>
</fieldset><fieldset class="column-right">
<p><label>Google Analytics Code</label><input class="text-input medium-input" id="analytics" name="analytics" value="{$edit.analytics}" /></p>
<p><label>Time Stamp</label><input class="text-input medium-input" id="updated" name="updated" value="{$smarty.now}" readonly />
<p><label>Last Updated By</label><input class="text-input medium-input" id="updatedby" name="updatedby" value="{$user.id}" readonly /><br /><small>That's <i>{$user.username}</i> to you and I!</small> 

                                                                <p>
                                                                        <input class="button" type="submit" value="Submit" />
                                                                </p>

                                                        </fieldset>

                                                        <div class="clear"></div><!-- End .clear -->

                                                </form> {/if}
                                        </div> <!-- End Content Box Content -->
