<?php /* Smarty version Smarty-3.1.8, created on 2012-05-11 03:01:00
         compiled from "/var/www/mvc/views/post/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:717431624f94058d854df0-55420288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cfaebe4d12c416d061d5a9ed778fb14a0b749f3' => 
    array (
      0 => '/var/www/mvc/views/post/index.tpl',
      1 => 1336719651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '717431624f94058d854df0-55420288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f94058dd7e167_07329259',
  'variables' => 
  array (
    'posts' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f94058dd7e167_07329259')) {function content_4f94058dd7e167_07329259($_smarty_tpl) {?><h2>Ultimos Posts</h2>

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
        <td>
            <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['imagen'])){?>
            
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen'];?>
" />
                </a>
            
            <?php }?>
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

<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo">Agregar Post</a></p>
<?php }} ?>