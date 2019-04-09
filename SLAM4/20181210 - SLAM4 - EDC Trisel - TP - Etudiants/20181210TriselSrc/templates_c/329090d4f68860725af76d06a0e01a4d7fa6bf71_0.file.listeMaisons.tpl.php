<?php
/* Smarty version 3.1.30, created on 2018-12-10 06:55:52
  from "C:\laragon\www\20181210trisel\listeMaisons.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c0e0df87f6613_83401251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '329090d4f68860725af76d06a0e01a4d7fa6bf71' => 
    array (
      0 => 'C:\\laragon\\www\\20181210trisel\\listeMaisons.tpl',
      1 => 1544349200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e0df87f6613_83401251 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
<h1>Voici les adresses dont nous disposons pour cet identifiant:</h1>
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
