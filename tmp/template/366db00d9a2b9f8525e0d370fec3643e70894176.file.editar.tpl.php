<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 21:42:01
         compiled from "C:\xampp\htdocs\mvc_13\views\post\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121264f95b089c30ca3-14966871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '366db00d9a2b9f8525e0d370fec3643e70894176' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_13\\views\\post\\editar.tpl',
      1 => 1335208414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121264f95b089c30ca3-14966871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f95b089ca5177_43371232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f95b089ca5177_43371232')) {function content_4f95b089ca5177_43371232($_smarty_tpl) {?><form id="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <p>Titulo:<br />
    <input type="texto" name="titulo" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['titulo'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo'];?>
<?php }?>" /></p>
    
    <p>Cuerpo:<br />
    <textarea name="cuerpo"><?php if (isset($_smarty_tpl->tpl_vars['datos']->value['cuerpo'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['cuerpo'];?>
<?php }?></textarea></p>
    
    <p><input type="submit" class="button" value="Guardar" /></p>
</form><?php }} ?>