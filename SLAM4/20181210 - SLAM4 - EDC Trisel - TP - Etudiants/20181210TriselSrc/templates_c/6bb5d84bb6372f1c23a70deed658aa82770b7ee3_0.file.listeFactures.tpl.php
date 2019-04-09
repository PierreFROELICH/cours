<?php
/* Smarty version 3.1.30, created on 2018-12-09 10:53:33
  from "C:\laragon\www\20181210Trisel\listeFactures.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c0cf42d59e644_00367932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb5d84bb6372f1c23a70deed658aa82770b7ee3' => 
    array (
      0 => 'C:\\laragon\\www\\20181210Trisel\\listeFactures.tpl',
      1 => 1544352764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0cf42d59e644_00367932 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
<h1>Voici la liste de vos factures :</h1>
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
