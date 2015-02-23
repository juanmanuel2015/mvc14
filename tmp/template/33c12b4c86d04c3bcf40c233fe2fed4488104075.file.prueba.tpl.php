<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 21:36:28
         compiled from "C:\xampp\htdocs\mvc_13\views\post\prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259404f95af3cd56026-99671906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33c12b4c86d04c3bcf40c233fe2fed4488104075' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_13\\views\\post\\prueba.tpl',
      1 => 1335209659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259404f95af3cd56026-99671906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'datos' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f95af3cdfbbf2_21990944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f95af3cdfbbf2_21990944')) {function content_4f95af3cdfbbf2_21990944($_smarty_tpl) {?><h2>Prueba</h2>

<?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)){?>

<table>
    
    <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
</td>
        
    </tr>
    
    <?php } ?>
</table>

<?php }else{ ?>

<p><strong>No hay posts!</strong></p>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>
<?php }?><?php }} ?>