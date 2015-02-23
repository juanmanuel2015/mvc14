<?php /* Smarty version Smarty-3.1.8, created on 2015-01-13 00:35:14
         compiled from "C:\xampp\htdocs\mvc14\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2630354b45a32badb79-60007875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd21c4bf08320d0c8c4259130000d533b520fc9ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc14\\views\\registro\\index.tpl',
      1 => 1335207432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2630354b45a32badb79-60007875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54b45a32be84f4_07184287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b45a32be84f4_07184287')) {function content_54b45a32be84f4_07184287($_smarty_tpl) {?><h2>Registro</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    
    <p>
        <label>Nombre: </label>
        <input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Usuario: </label>
        <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Email: </label>
        <input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Password: </label>
        <input type="password" name="pass" />
    </p>
    
    <p>
        <label>Confirmar: </label>
        <input type="password" name="confirmar" />
    </p>    
        
    <p>
        <input type="submit" value="enviar" />
    </p>
</form><?php }} ?>