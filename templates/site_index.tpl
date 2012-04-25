{include file="site_head.tpl"}    
<!-- Top Area -->

<div id="top">

<!-- Header Area -->

<div id="header">

<!-- Header Container -->

<div class="container">

<!-- Dynamic Logo -->

<div id="logo">
<a href="" title=""><img src="assets/images/sofa_logo.png" alt="UK Bespoke Sofas" /></a>
</div>

<!-- Logo Ends -->

<!-- Top Contacts -->

<div id="topcontacts">

<!-- Top Contacts - Email -->

<div id="top-email" class="email-link"> <a href="mailto:info@seriouslysofas.co.uk">info@seriouslysofas.co.uk</a></div>

<!-- Top Contacts - Email Ends -->

<!-- Top Contacts - Phone -->

<div id="top-phone" class="">+44 020 8549 1233</div>

<!-- Top Contacts - Phone Ends -->

</div>

<!-- Top Contacts Ends -->

</div>

<!-- Header Container Ends -->

</div>

<!-- Header Area Ends -->

<!-- Offer Area Container -->

<!--Dynamic Page Title For SEO-->

<center><br/><br/><h1>{$SITE.title}</h1></center>

<!--Dynamic Page Title For SEO Ends-->

<div class="container clearfix">

<!-- Offer Area -->

<div id="offer" class="clearfix">

<!-- Dynamic Text Box 1 -->

<div id="offercontent">

<h3>{$SITE.offer_subhead}</h3>

<div id="offercontent-wrap">

<p class="description">{$SITE.offer_description}</p>

</div>

</div>

<!-- Dynamic Text Box 1 End -->


<!-- Video Embed 598*335 -->

<div id="offerslider">


<ul id="offerslider-items">

<li>{$SITE.video}</li>

</ul>


</div>

<!-- Video Embed End -->

</div>

<!-- Offer Area Ends -->

</div>

<!-- Offer Area Container Ends -->

</div>

<!-- Top Area Ends -->

<!-- Lightbox Gallery - One small Thumbnail & One Large -->

<div id="gallery" class="clearfix">
<div class="container clearfix">

<ul>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/{$SITE.gallery1|default:'sofa_logo.png'}" title="Gallery Item #1">
		<img src="assets/uploadedpics/thumbs/{$SITE.gallery1|default:'sofa_logo.png'}" alt="Gallery Item #1" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
	</a>
</li>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/{$SITE.gallery2|default: 'sofa_logo.png'}" title="Gallery Item #2">
		<img src="assets/uploadedpics/thumbs/{$SITE.gallery2|default:'sofa_logo.png'}" alt="Gallery Item #2" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
		</a>
</li>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/{$SITE.gallery3|default: 'sofa_logo.png'}" title="Gallery Item #3">
		<img src="assets/uploadedpics/thumbs/{$SITE.gallery3|default:'sofa_logo.png'}" alt="Gallery Item #3" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
	</a>
</li>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/{$SITE.gallery4|default: 'sofa_logo.png'}" title="Gallery Item #4">
		<img src="assets/uploadedpics/thumbs/{$SITE.gallery4|default:'sofa_logo.png'}" alt="Gallery Item #4" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
	</a>
</li>
<li>
	<a rel="prettyPhoto[gallery]" href="assets/uploadedpics/{$SITE.gallery5|default: 'sofa_logo.png'}" title="Gallery Item #5">
		<img src="assets/uploadedpics/thumbs/{$SITE.gallery5|default:'sofa_logo.png'}" alt="Gallery Item #5" width="174" height="94" />
		<span class="hoverlay"><span class="hoverzoom"></span></span>
	</a>
</li>
</ul>

</div>
</div>

<!-- Gallery End -->

<!-- Content Starts -->

<div id="content" class="clearfix">

<!-- Content Container -->

<div class="container clearfix" style="padding-top: 90px;">

<!-- Main HTML Box -->

<div class="col-full">
<center><h3>{$SITE.content_headline}</h3></center>
<p class="description">{$SITE.content_html}</p>

</div>

<div class="col-one-third">

<div class="product-feature">

<img src="assets/images/icons/sofa_small.png" title="" alt="" />

<h3>{$SITE.box_one_headline}</h3>

<p>{$SITE.box_one}</p>

</div>

</div>

<div class="col-one-third">

<div class="product-feature">

<img src="assets/images/icons/sofa_small.png" title="" alt="" />

<h3>{$SITE.box_two_headline}</h3>

<p>{$SITE.box_two}</p>

</div>

</div>

<div class="col-one-third col-last">

<div class="product-feature">

<img src="assets/images/icons/sofa_small.png" title="" alt="" />

<h3>{$SITE.box_three_headline}</h3>

<p>{$SITE.box_three}</p>

</div>

</div>

<div class="clear"></div>

<!-- Product Features End -->

</div>        

<div class="container clearfix">        

<div class="clear"></div>


<!-- Dynamic Main Link -->

<div id="action-bottom" class="clearfix">

<a href="#" target="_blank" class="actionbutton">Visit Our Site</a>

</div>

<!-- Dynamic Main Link End -->

<!-- Facebook Comments -->

<div class="fb-comments" data-href="http://www.facebook.com/seriouslysofas" data-num-posts="20" data-width="960"></div>

<!-- Facebook Comments Ends -->

<div align="center" class="email-link">

<a href="http://seriouslysofas.co.uk/important-information" target="_blank">Terms, Privacy, Address, Conditions & Important Information</a>

</div> 

</div>

<!-- Content Container Ends -->

</div>

<!-- Content Ends -->

{include file="site_foot.tpl"}
