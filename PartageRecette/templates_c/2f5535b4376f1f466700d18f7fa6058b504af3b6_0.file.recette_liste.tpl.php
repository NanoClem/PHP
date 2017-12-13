<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-13 08:36:33
  from 'D:\Program_files(x86)\DevTools\UwAmp\www\PartageRecette\application\views\modules\recette_liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a30e69132d6f8_41981265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f5535b4376f1f466700d18f7fa6058b504af3b6' => 
    array (
      0 => 'D:\\Program_files(x86)\\DevTools\\UwAmp\\www\\PartageRecette\\application\\views\\modules\\recette_liste.tpl',
      1 => 1513154174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a30e69132d6f8_41981265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61935a30e6912f6860_56565353', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'application/views/layout.tpl');
}
/* {block 'main_content'} */
class Block_61935a30e6912f6860_56565353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_content' => 
  array (
    0 => 'Block_61935a30e6912f6860_56565353',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article>
    <h2>Catégories</h2>

<!--ENTREES-->
    <div style="width:70%; height:33%; border:solid 1px red; float:left; margin:10px">
      <table style="text-align:right">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['entree'], 'ligne');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ligne']->value, 'entree');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entree']->value) {
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['entree']->value;?>
</td>
            </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <tr> <td><a href="index.php?page=recette&idc=1">voir les recettes</a></td> </tr>
      </table>
    </div> <br />

<!--PLATS-->
    <div style="width:70%; height:33%; border:solid 1px red; float:left; margin:10px">
      <table style="text-align:right">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['plat'], 'ligne');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ligne']->value, 'plat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plat']->value) {
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['plat']->value;?>
</td>
            </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <tr> <td><a href="index.php?page=recette&idc=2">voir les recettes</a></td> </tr>
      </table>
    </div>

<!--DESSERTS-->
    <div style="width:70%; height:33%; border:solid 1px red; margin:10px">
      <table style="text-align:right">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['dessert'], 'ligne');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ligne']->value, 'dessert');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dessert']->value) {
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['dessert']->value;?>
</td>
            </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <tr> <td><a href="index.php?page=recette&idc=3">voir les recettes</a></td> </tr>
      </table>
    </div>

  </article> <br />
<?php
}
}
/* {/block 'main_content'} */
}
