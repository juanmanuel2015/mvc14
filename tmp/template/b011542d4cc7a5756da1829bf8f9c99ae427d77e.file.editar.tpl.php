<?php /* Smarty version Smarty-3.1.8, created on 2015-02-04 16:10:50
         compiled from "C:\xampp\htdocs\mvc14\views\post\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1686654d2367aeea0e7-26889633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b011542d4cc7a5756da1829bf8f9c99ae427d77e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc14\\views\\post\\editar.tpl',
      1 => 1335204814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1686654d2367aeea0e7-26889633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54d2367af305f1_20948522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2367af305f1_20948522')) {function content_54d2367af305f1_20948522($_smarty_tpl) {?><form id="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <p>Titulo:<br />
    <input type="texto" name="titulo" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['titulo'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo'];?>
<?php }?>" /></p>
    
    <p>Cuerpo:<br />
    <textarea name="cuerpo"><?php if (isset($_smarty_tpl->tpl_vars['datos']->value['cuerpo'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['cuerpo'];?>
<?php }?></textarea></p>
    
    <p><input type="submit" class="button" value="Guardar" /></p>
</form><?php }} ?>