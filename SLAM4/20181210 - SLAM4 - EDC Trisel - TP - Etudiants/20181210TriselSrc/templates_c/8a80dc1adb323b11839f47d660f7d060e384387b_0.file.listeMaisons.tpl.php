<?php
/* Smarty version 3.1.30, created on 2018-12-09 10:53:27
  from "C:\laragon\www\20181210Trisel\listeMaisons.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c0cf427c58776_69115377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a80dc1adb323b11839f47d660f7d060e384387b' => 
    array (
      0 => 'C:\\laragon\\www\\20181210Trisel\\listeMaisons.tpl',
      1 => 1544352800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0cf427c58776_69115377 (Smarty_Internal_Template $_smarty_tpl) {
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
