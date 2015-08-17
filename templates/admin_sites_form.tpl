<div class="content-box-header">

<h3>Add / Edit A Website</h3>


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

<! Content Form For Website Starts Here -->

<form action="index.php?{$smarty.server.QUERY_STRING}" method="post">

<fieldset class=""> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

<input type="hidden" name="id" id="id" value="{$edit.id}" />
<h2>Step 1: The SEO Basics</h2>
<br/>
<p>
<label>Website URL (eg. abc.com)</label>
<input class="text-input large-input" type="text" id="server_name" value="{$edit.server_name}" name="server_name" />
<br/>
<i><small>no http:// or www. & lower case is preferable.</small></i>
</p>
<input type="hidden" name="template" id="template" value="{$edit.template}" />
<p>
<label>Website Title (SEO)</label>
<input class="text-input large-input" type="text" id="name" name="name" value="{$edit.name}"/> 
<br/>
<i><small>text that sits in the tab of your browser & is referenced by Search Engines.</small></i>
</p>
<p>
<label>Relevant Keywords</label>
<textarea class="text-input textarea" type="text" id="keywords" name="keywords" cols="30" rows="5">{$edit.keywords}</textarea>
<br/>
<i><small>Separate keywords with a comma. (Use keywords that directly relate to this particular website.)</small></i>
</p>
<p>
<label>Short Description Of Website</label>
<textarea class="text-input textarea" id="description" name="description" cols="30" rows="5">{$edit.description}</textarea>
<i><small>Write a short relevant description about the purpose of this website/business. (This will help with Search Engine rankings.)</small></i>

</p>
<br/>
<h2>Step 2: Your Relevant Content</h2>
<br/>
<p>
<label>Main Title Of Your Website (Top Center)</label>
<input class="text-input large-input" type="text"
id="title" name="title" value="{$edit.title}" maxlength="36"/>
<br/><i><small>Maximum 36 Characters, No HTML</small></i>
</p>
<p><label>Sub-heading Title (Top Left Box) </label>
<input class="text-input large-input" id="offer_subhead" name="offer_subhead" value="{$edit.offer_subhead}" maxlength="27"/>
<br/><i><small>Maximum 27 Characters, No HTML</small></i></p>
<p>
<label>Eye Catching Description (Top Left Box)</label>
<textarea class="text-input textarea" id="offer_description" name="offer_description" cols="70" rows="10" maxlength="550">{$edit.offer_description}</textarea>
<br /><i><small>Maximum 550 Characters. Basic HTML tags allowed.&lt;p&gt; - Paragragh&lt;strong&gt; - Bold, &lt;i&gt; - Italic, &lt;br/&gt;- Line Break</small></i>
</p>
<div class="clearfix clear"></div>

<p>
<label>Video (HTML/iFrame Embed Code - Top Right Box)</label>
<textarea class="text-input large-input textarea" id="video" name="video" cols="10" rows="10">{$edit.video}</textarea>
<br/><small>Full Video Embed Code - YouTube/Vimeo/Viddler etc. Display settings must be changed to (w) 598px x (h) 335px or smaller.</small>
<br/><small>Example Embed Code From Vimeo: &lt;iframe src="http://player.vimeo.com/video/40505084?title=0&amp;byline=0&amp;portrait=0" width="598" height="335" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen&gt;&lt;/iframe&gt;</small>
</p>                                                               
<p><label>Secondary Title (Above Main Full Width Description)</label>
<input class="text-input large-input" id="content_headline" name="content_headline" value="{$edit.content_headline}"/>
<br /><i><small>Keep it relevant and snappy, No HTML</small></i>
</p>

<p>
<label>Main Description (Full Width Center Box, Below Photos)</label>
<textarea class="text-input wysiwyg textarea" id="content_html" name="content_html" cols="70" rows="15">{$edit.content_html}</textarea>
<br /><i><small>Include a well written, relevant, text piece. HTML snippets from your favourite social media sites can be included, but always check it to make sure you've input the correct code. To stay safe - just include text.</small></i>

</p>
{include file="temp_sites_form_images.tpl"}
<p><label>Box One Headline</label><input class="text-input large-input" id="box_one_headline" name="box_one_headline" value="{$edit.box_one_headline}" /></p>
<p><label>Box One Content</label><textarea class="text-input large-input textarea" id="box_one" name="box_one" cols="10" rows="5">{$edit.box_one}</textarea></p>
<p><label>Box Two Headline</label><input class="text-input large-input" id="box_two_headline" name="box_two_headline" value="{$edit.box_two_headline}" /></p>
<p><label>Box Two Content</label><textarea class="text-input large-input textarea" id="box_two" name="box_two" cols="10" rows="5">{$edit.box_two}</textarea></p>
<p><label>Box Three Headline</label><input class="text-input large-input" id="box_three_headline" name="box_three_headline" value="{$edit.box_three_headline}" /></p>
<p><label>Box Three Content</label><textarea class="text-input large-input textarea" id="box_three" name="box_three" cols="10" rows="5">{$edit.box_three}</textarea></p>
<br/>
<h2>Step 3 - Stats & Misc</h2>
<br/>
<p><label>Analytics / Stats Code</label><textarea class="text-input large-input textarea" id="analytics" name="analytics" cols="10" rows="5">{$edit.analytics}</textarea></p>
<p><label>Time Stamp Your Update</label><input class="text-input large-input" id="updated" name="updated" value="{$smarty.now}" readonly /><br /><small>{$smarty.now|date_format}</small></p>
<p><label>Last Updated By</label><input class="text-input large-input" id="updatedby" name="updatedby" value="{$user.id}" readonly /><br /><small>User <i><strong>{$user.username}</strong></i> will be logged as the author of this latest change.</small> 

<p>
<input style="text-decoration:none;" class="button" type="submit" value="Save Your Website" />
</p>

</fieldset>

<div class="clear"></div><!-- End .clear -->

</form> {/if}
</div> <!-- End Content Box Content -->
