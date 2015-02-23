<?php /* Smarty version Smarty-3.1.8, created on 2015-02-05 14:03:24
         compiled from "C:\xampp\htdocs\mvc14\views\post\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2357754b45a2f22b4f0-98023331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd17458b31f531719297d6be4fb8fc223a91fecfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc14\\views\\post\\index.tpl',
      1 => 1423141400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2357754b45a2f22b4f0-98023331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54b45a2f3b9c53_01699632',
  'variables' => 
  array (
    'posts' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b45a2f3b9c53_01699632')) {function content_54b45a2f3b9c53_01699632($_smarty_tpl) {?><h2>Ultimos Notas</h2>

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