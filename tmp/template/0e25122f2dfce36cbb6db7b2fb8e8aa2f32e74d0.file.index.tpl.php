<?php /* Smarty version Smarty-3.1.8, created on 2015-01-13 00:35:13
         compiled from "C:\xampp\htdocs\mvc14\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124654b45a3144eaa1-85972735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e25122f2dfce36cbb6db7b2fb8e8aa2f32e74d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc14\\views\\login\\index.tpl',
      1 => 1335204792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124654b45a3144eaa1-85972735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54b45a314df349_34336832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b45a314df349_34336832')) {function content_54b45a314df349_34336832($_smarty_tpl) {?><h2>Iniciar Sesi&oacute;n</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    
    <p>
        <label>Usuario: </labe>
        <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Password: </labe>
        <input type="password" name="pass" />
    </p>
    
    <p>
        <input type="submit" value="enviar" />
    </p>
</form><?php }} ?>