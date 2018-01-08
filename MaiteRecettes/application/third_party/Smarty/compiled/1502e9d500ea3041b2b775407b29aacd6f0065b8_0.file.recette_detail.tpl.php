<?php
/* Smarty version 3.1.30, created on 2018-01-08 00:16:13
  from "D:\Users\Clement\Progs_files\uWampServer\www\PHP\MaiteRecettes\application\views\modules\recette_detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52b84d1af365_23071374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1502e9d500ea3041b2b775407b29aacd6f0065b8' => 
    array (
      0 => 'D:\\Users\\Clement\\Progs_files\\uWampServer\\www\\PHP\\MaiteRecettes\\application\\views\\modules\\recette_detail.tpl',
      1 => 1515253020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout.tpl' => 1,
  ),
),false)) {
function content_5a52b84d1af365_23071374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171655a52b84d17abd1_66893375', 'title');
?>


<!--LES DETAILS DES RECETTES -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129945a52b84d1ad074_56416708', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:application/views/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_171655a52b84d17abd1_66893375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title>Détails des recettes</title>
<?php
}
}
/* {/block 'title'} */
/* {block 'main_content'} */
class Block_129945a52b84d1ad074_56416708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article>
    <div style="width:70%; height:33%; float:left; margin:10px">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['unites']->value, 'uni');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['uni']->value) {
?>
        <h4><?php echo $_smarty_tpl->tpl_vars['uni']->value->RCT_TITRE;?>
</h4>
        <ul>
          <li>Preparation : <?php echo $_smarty_tpl->tpl_vars['uni']->value->RCT_TEMPS_PREPARATION;?>
</li>
          <li>Cuisson : <?php echo $_smarty_tpl->tpl_vars['uni']->value->RCT_TEMPS_CUISSON;?>
</li>
          <li>Difficulte : <?php echo $_smarty_tpl->tpl_vars['uni']->value->RCT_DIFFICULTE;?>
</li>
          <li>Coût : <?php echo $_smarty_tpl->tpl_vars['uni']->value->RCT_COUT;?>
</li>
          <li>Personne(s) : <?php echo $_smarty_tpl->tpl_vars['uni']->value->RCT_NBPERSONNE;?>
</li>
        </ul>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div> <br />

    <hr width=50% size="1" align=left>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ingredients']->value, 'igd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['igd']->value) {
?>
      <p>Recette proposée par : <?php echo $_smarty_tpl->tpl_vars['igd']->value->UTI_LOGIN;?>
</p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    <hr width=50% size="1" align=left>

    <p>Ingredients :</p>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ingredients']->value, 'igd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['igd']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['igd']->value->IGD_LABEL;?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
  </article>
<?php
}
}
/* {/block 'main_content'} */
}
