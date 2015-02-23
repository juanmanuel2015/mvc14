<?php /* Smarty version Smarty-3.1.8, created on 2015-01-13 22:33:44
         compiled from "C:\xampp\htdocs\mvc14\views\post\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:375254b58f38aefe88-53772737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9edd5c1cb9e9db23a98a5465b51e6dd3737e161' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc14\\views\\post\\nuevo.tpl',
      1 => 1336716120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '375254b58f38aefe88-53772737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54b58f38d60f11_99236605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b58f38d60f11_99236605')) {function content_54b58f38d60f11_99236605($_smarty_tpl) {?><form id="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo"
      enctype="multipart/form-data">
    <input type="hidden" name="guardar" value="1" />
    <p>Titulo:<br />
    <input type="texto" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" /></p>
    
    <p>Cuerpo:<br />
    <textarea name="cuerpo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea></p>
    
    <input type="file" name="imagen" />
    
    <p><input type="submit" class="button" value="Guardar" /></p>
</form><?php }} ?>