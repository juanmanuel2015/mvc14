<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 21:41:40
         compiled from "C:\xampp\htdocs\mvc_13\views\post\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301764f95b039501781-53915332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce73f2b97733c1edca184e55b643f87fc36bb8d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_13\\views\\post\\nuevo.tpl',
      1 => 1335210079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301764f95b039501781-53915332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f95b039593c13_97966049',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f95b039593c13_97966049')) {function content_4f95b039593c13_97966049($_smarty_tpl) {?><form id="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo">
    <input type="hidden" name="guardar" value="1" />
    <p>Titulo:<br />
    <input type="texto" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" /></p>
    
    <p>Cuerpo:<br />
    <textarea name="cuerpo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea></p>
    
    <p><input type="submit" class="button" value="Guardar" /></p>
</form><?php }} ?>