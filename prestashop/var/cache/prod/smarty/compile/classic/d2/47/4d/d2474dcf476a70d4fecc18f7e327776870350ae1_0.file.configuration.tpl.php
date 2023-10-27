<?php
/* Smarty version 4.3.1, created on 2023-10-27 17:46:37
  from 'C:\xampp\htdocs\prestashop\modules\ps_checkout\views\templates\admin\configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653bdb5dc43c87_27289015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2474dcf476a70d4fecc18f7e327776870350ae1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ps_checkout\\views\\templates\\admin\\configuration.tpl',
      1 => 1697795490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653bdb5dc43c87_27289015 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="app"></div>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
