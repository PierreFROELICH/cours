<?php
/* Smarty version 3.1.30, created on 2017-11-12 18:40:03
  from "C:\xampp\htdocs\20171113 - Soluce\listeFactures.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a08877336ae61_47567773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31530fbe0676b8d2e31fbbfb906992aa2f80fdd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\20171113 - Soluce\\listeFactures.tpl',
      1 => 1510504141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a08877336ae61_47567773 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
<h1>Vos factures :</h1>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lesFactures']->value, 'uneFacture');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['uneFacture']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['uneFacture']->value["anMois"];?>
 
		<a href = "<?php echo $_smarty_tpl->tpl_vars['uneFacture']->value["nomFichier"];?>
">
			<?php echo $_smarty_tpl->tpl_vars['uneFacture']->value["nomFichier"];?>

		</a>
		<br/>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
<?php }
}
