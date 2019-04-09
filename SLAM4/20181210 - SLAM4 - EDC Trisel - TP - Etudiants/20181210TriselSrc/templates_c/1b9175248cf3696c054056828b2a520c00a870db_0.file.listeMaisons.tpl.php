<?php
/* Smarty version 3.1.30, created on 2017-11-12 18:36:03
  from "C:\xampp\htdocs\20171113 - Soluce\listeMaisons.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a088683a741b1_65067269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b9175248cf3696c054056828b2a520c00a870db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\20171113 - Soluce\\listeMaisons.tpl',
      1 => 1510504101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a088683a741b1_65067269 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
<h1>Vos adresses :</h1>
	<form method = "POST" action="consulterFactures.php?action=affiFactures">
		<select name = "laMaison">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lesMaisons']->value, 'uneMaison');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['uneMaison']->value) {
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['uneMaison']->value["id"];?>
">
				<?php echo $_smarty_tpl->tpl_vars['uneMaison']->value["adresse"];?>

			</option>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<input type="submit" value="Valider">
	</form>
</body>
<?php }
}
