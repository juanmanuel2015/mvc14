<?php /* Smarty version Smarty-3.1.8, created on 2012-05-11 02:36:02
         compiled from "/var/www/mvc/views/ajax/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12346758634facae7fa4cab1-04888484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e23bb1cfa93ae102e83ee40fdb06be207da14a6' => 
    array (
      0 => '/var/www/mvc/views/ajax/index.tpl',
      1 => 1336718158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12346758634facae7fa4cab1-04888484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4facae801ba964_29184675',
  'variables' => 
  array (
    'paises' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4facae801ba964_29184675')) {function content_4facae801ba964_29184675($_smarty_tpl) {?><h2>Ejemplo de AJAX</h2>

<form>
    Pais: 
    <select id="pais">
        <option value=""> -seleccione- </option>
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paises']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            
            <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['pais'];?>
</option>
            
        <?php } ?>
    </select>
    
    <p> </p>
    
    Ciudad: 
    <select id="ciudad"></select>
    
    <p> </p>
    Ciudad a insertar: 
    <input type="text" id="ins_ciudad" />
    <input type="button" value="Insertar" id="btn_insertar" />
</form><?php }} ?>