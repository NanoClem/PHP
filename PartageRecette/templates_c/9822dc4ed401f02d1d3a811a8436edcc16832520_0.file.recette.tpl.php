<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-13 08:39:55
  from 'D:\Program_files(x86)\DevTools\UwAmp\www\PartageRecette\application\views\modules\recette.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a30e75b1f40e4_06994421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9822dc4ed401f02d1d3a811a8436edcc16832520' => 
    array (
      0 => 'D:\\Program_files(x86)\\DevTools\\UwAmp\\www\\PartageRecette\\application\\views\\modules\\recette.tpl',
      1 => 1513154389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a30e75b1f40e4_06994421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<!--LES RECETTES -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165395a30e75b1cfde7_55472571', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'application/views/layout.tpl');
}
/* {block 'main_content'} */
class Block_165395a30e75b1cfde7_55472571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_content' => 
  array (
    0 => 'Block_165395a30e75b1cfde7_55472571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article>
    <div style="width:70%; height:33%; border:solid 1px red; float:left; margin:10px">
      <table style="text-align:right">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['recette'], 'ligne');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ligne']->value, 'recette');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['recette']->value) {
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['recette']->value;?>
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
        <tr> <td><a href="index.php?page=detail&idr=i">lire la recette</a></td> </tr>
      </table>
    </div> <br />
  </article>
<?php
}
}
/* {/block 'main_content'} */
}
