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

<!-- Page Head -->
<h2>{$user.first_name}, welcome to your main dashboard.</h2>
<p id="page-intro">Which task would you like to perform?</p>

<ul class="shortcut-buttons-set"> <!-- Replace the icons URL's with your own -->
{if {$user.acl} gt 1}
<li><a class="shortcut-button" href="index.php?page=sites&action=add"><span>
<img src="../assets/images/build-icons/add.png" alt="icon" /><br />
Add A New Site
</span></a></li>
{/if}

<li><a class="shortcut-button" href="index.php?page=sites"><span>
<img src="../assets/images/build-icons/pencil.png" alt="icon" /><br />
Edit A Site
</span></a></li>
{if {$user.acl} gt 1}
<li><a class="shortcut-button" href="index.php?page=users"><span>
<img src="../assets/images/build-icons/id.png" alt="icon" /><br />
View Users
</span></a></li>
{/if}

<!--<li><a class="shortcut-button" href="#info" rel="modal"><span>
<img src="../assets/images/build-icons/info.png" alt="icon" /></br />Project Info</span></a></li>-->

<li><a class="shortcut-button" href="mailto:hello@webvid.co.uk?subject=webvid.co.uk Website Support&body={$user.first_name} requires help with {$SITE.server_name} or a website associated with it."><span><img src="../assets/images/build-icons/mail.png" alt="icon" /><br />Email Support</span></a></li>

{if {$user.acl}==9}
<li><a class="shortcut-button" href="#messages" rel="modal"><span>
<img src="resources/images/icons/path-to-icon.png" alt="icon" /><br />
Open Modal
</span></a></li>
{/if}

</ul><!-- End .shortcut-buttons-set -->

<div class="clear"></div> <!-- End .clear -->


<div class="content-box column-full closed-box"">

<div class="content-box-header">

<h3>Welcome (open / close)</h3>

</div> <!-- End .content-box-header -->

<div class="content-box-content">

<div class="tab-content default-tab">

<h4>About your SEO solution</h4>
<p>
Hi {$user.first_name} & a warm welcome your new SEO solution, built by <a href="http://webvid.co.uk">webvid.co.uk</a>.</p>
<p>You are currently at the <b>Main Dashboard</b> page, a great source of information on how this unique web application works. Every step is covered, but if you find that you require a little more help, just email us by using the <b>Support</b> icon above. We aim to get back to you asap.
</p>

<p>
Remember that to create a great website which ranks highly in Google (and other search engines), the content that you provide at every step must be <b>relevant</b>, <b>well written</b> & <b>concise</b>.
</p>
<p>Have fun building your new set of websites and here's to a better natural search ranking in the future.</p>
<p><img src="resources/images/signature.png">
<br/>
<small>MD Luckythirteen Ltd / webvid.co.uk</small>
</p>			

</div> <!-- End #tab3 -->        

</div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->

<div class="clear"></div>

<div class="content-box column-full closed-box">

<div class="content-box-header">

<h3>Setting Up New Website(s) (open / close)</h3>

</div> <!-- End .content-box-header -->

<div class="content-box-content">

<div class="tab-content default-tab">

<h3>Setting up a new website</h3>

<ul>
<li>Goto <a href="http://www.whois-search.com/" target="_blank">Whois? Web Domain Checker</a> and search for available & relevant website addresess.</li>
<li>Navigate to your preferred domain name registrar and make your purchase(s).</li>
<li>Once the purchase has gone through, go in to your domains manager and change the <b>Nameservers</b> to the addresses below. (This process can take up to 48 hours.)</li>
<li><a href="mailto:hello@webvid.co.uk?subject=NEW DOMAIN NAME(s) NOTIFICATION">Email Us</a> with all the domains you have registered. We will do a little 'under the hood' maintenance & email you back with confirmation.</li>
<li>All done? Great! Now you're ready to start using this web application.</li>
</ul>

<h3>Video Demo Goes Here</h3>						

</div> <!-- End #tab3 -->        

</div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->




{include file="admin_bottom.tpl"}
