<?php /* Smarty version Smarty-3.1.8, created on 2012-04-25 22:58:04
         compiled from "/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_users_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13408851454f98736c4718c3-84166000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c6d0efe3dcca49b2c41d3809922964e2087d773' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_users_list.tpl',
      1 => 1334604120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13408851454f98736c4718c3-84166000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f98736c55ce48_21501675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f98736c55ce48_21501675')) {function content_4f98736c55ce48_21501675($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_relative_date')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.relative_date.php';
?> <div class="content-box-header">

                                        <h3>Users Table</h3>


                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">

                                                <table>

                                                        <thead>
                                                                <tr>
                                                                   <th><input class="check-all" type="checkbox" /></th>
                                                                   <th>Name</th>
                                                                   <th>Email</th>
                                                                   <th>Admin Level</th>
                                                                   <th>Last Login</th>
                                                                   <th>Edit</th>
                                                                </tr>

                                                        </thead>

                                                        <tfoot>
                                                                <tr>
                                                                        <td colspan="6">
                                                                        <!--    <div class="bulk-actions align-left">
                                                                                        <select name="dropdown">
                                                                                                <option value="option1">Choose an action...</option>
                                                                                                <option value="option2">Edit</option>
                                                                                                <option value="option3">Delete</option>
                                                                                        </select>
                                                                                        <a class="button" href="#">Apply to selected</a>
                                                                                </div>

                                                                                <div class="pagination">
                                                                                        <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                                                                                        <a href="#" class="number" title="1">1</a>
                                                                                        <a href="#" class="number" title="2">2</a>
                                                                                        <a href="#" class="number current" title="3">3</a>
                                                                                        <a href="#" class="number" title="4">4</a>
                                                                                        <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                                                                                </div> --> <!-- End .pagination -->
                                                                                <div class="clear"></div>
                                                                        </td>
                                                                </tr>
                                                        </tfoot>
                                                        <tbody>
                                                <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                                                                <tr>
                                                                        <td><input type="checkbox" /></td>
                                                                        <td><a href="index.php?page=users&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</a></td>
                                                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                                                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
</td>
                                                                        <td><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['user']->value['last_login']);?>
</td>
                                                                        <td>
                                                                                <a href="index.php?page=users&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                                                                <a href="index.php?page=users&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
                                                                        <!--    <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                                                -->     </td>

                                                                </tr>
                                                <?php } ?>
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
<?php }} ?>