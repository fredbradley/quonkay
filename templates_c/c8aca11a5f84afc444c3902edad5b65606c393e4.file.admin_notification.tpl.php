<?php /* Smarty version Smarty-3.1.8, created on 2012-04-25 22:57:48
         compiled from "/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145278814f98735ce7f417-22676450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8aca11a5f84afc444c3902edad5b65606c393e4' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_notification.tpl',
      1 => 1334604120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145278814f98735ce7f417-22676450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'dbresult' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f98735ce8aa18_06190669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f98735ce8aa18_06190669')) {function content_4f98735ce8aa18_06190669($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
  <div class="notification information png_bg">
                                                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                                                        <div> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
                                                       </div>
                                                </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>