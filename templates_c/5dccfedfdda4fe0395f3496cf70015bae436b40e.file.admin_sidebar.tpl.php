<?php /* Smarty version Smarty-3.1.8, created on 2012-04-25 22:57:48
         compiled from "/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12066353584f98735ce43432-34108625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dccfedfdda4fe0395f3496cf70015bae436b40e' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_sidebar.tpl',
      1 => 1335384772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12066353584f98735ce43432-34108625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE' => 0,
    'user' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f98735ce7c3f1_36556951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f98735ce7c3f1_36556951')) {function content_4f98735ce7c3f1_36556951($_smarty_tpl) {?>		<!-- SIDE BAR STARTS HERE -->
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->			
			<h1 id="sidebar-title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['SITE']->value['name'];?>
</a></h1>		  
			<!-- Logo (221px wide) -->
			<a href="http://<?php echo $_smarty_tpl->tpl_vars['SITE']->value['server_name'];?>
/admin"><img id="logo" src="../assets/images/sofa_logo.png" style="width:221px;" alt="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['name'];?>
 logo" /></a> 
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				
				<!--Hello, <a href="user/profile" title="Edit your profile"><?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />-->
				
				<a href="http://<?php echo $_smarty_tpl->tpl_vars['SITE']->value['server_name'];?>
" target="_blank" title="View the Site">View your main website</a> | <a href="index.php?logout" title="Sign Out">Sign Out</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="index.php" class="nav-top-item no-submenu <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> <?php }else{ ?>current<?php }?>"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Main Dashboard
					</a>       
				</li>				
				<li>
					<a href="#" class="nav-top-item <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="sites"){?>current<?php }?>">
						Manage My Websites
					</a>
					<ul>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3>1){?>
						<li><a href="index.php?page=sites&action=add">Add Site</a></li>
				<?php }?>
						<li><a href="index.php?page=sites&action=list">List Sites</a></li>
					</ul>
				</li>

				<li>
					<a href="#" class="nav-top-item <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=="images"){?>current<?php }?>">
						Manage My Images
					</a>
					<ul>
						<li><a href="index.php?page=images">Image Manager</a></li>
					</ul>
				</li>

				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5>2){?>
				<li>
					<a href="#" class="nav-top-item <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6=="users"){?>current<?php }?>">
						Manage My Users
					</a>
					<ul>
						<li><a href="index.php?page=users&action=add">Add User</a></li>
						<li><a href="index.php?page=users&action=list">List Users</a></li>
					</ul>
				</li>      
				<?php }?>
				
                e: <a href="mailto:hello@webvid.co.uk?subject=Support">hello@webvid.co.uk</a> | t: 020 8133 1728
                <br/>
				<p>&copy; <a href="http://www.webvid.co.uk" target="_blank">webvid.co.uk</a> Copyright 2012.</p>
			</ul> <!-- End #main-nav -->
			
			<div id="info" style="display:none">
			<h3>Project Info</h3>
			</div>
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->
<?php }} ?>