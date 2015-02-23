<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 21:27:43
         compiled from "C:\xampp\htdocs\mvc_13\views\post\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:269014f95ad2f91e2e9-19921475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9047f6fcc19ce8111e21ca4d704bbf8c7cf96969' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_13\\views\\post\\index.tpl',
      1 => 1335100726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269014f95ad2f91e2e9-19921475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f95ad2f9ed864_39298885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f95ad2f9ed864_39298885')) {function content_4f95ad2f9ed864_39298885($_smarty_tpl) {?><h2>Ultimos Posts</h2>

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
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['cuerpo'];?>
</td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/editar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">Editar</a></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/eliminar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">Eliminar</a></td>
    </tr>
    
    <?php } ?>
</table>

<?php }else{ ?>

<p><strong>No hay posts!</strong></p>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>
<?php }?>

<?php if (Session::accesoViewEstricto(array('usuario'))){?>

<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo">Agregar Post</a></p>

<?php }?><?php }} ?>