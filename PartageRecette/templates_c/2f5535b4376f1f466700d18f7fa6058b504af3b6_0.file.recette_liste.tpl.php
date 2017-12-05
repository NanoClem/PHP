<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-04 13:55:00
  from 'D:\Program_files(x86)\DevTools\UwAmp\www\PartageRecette\application\views\modules\recette_liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a2553b4e2f642_59952704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f5535b4376f1f466700d18f7fa6058b504af3b6' => 
    array (
      0 => 'D:\\Program_files(x86)\\DevTools\\UwAmp\\www\\PartageRecette\\application\\views\\modules\\recette_liste.tpl',
      1 => 1512395697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2553b4e2f642_59952704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_247305a2553b4e14bc0_62248302', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'application/views/layout.tpl');
}
/* {block 'main_content'} */
class Block_247305a2553b4e14bc0_62248302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_content' => 
  array (
    0 => 'Block_247305a2553b4e14bc0_62248302',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article>
    <h2>Catégories</h2>

    <table style="text-align:left"><tr> <th>ID</th> <th>Label</th> <th>Description</th> <th>Illustration</th> </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['categorie'], 'ligne');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
?>
        <tr>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ligne']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
            <td><?php echo $_smarty_tpl->tpl_vars['categorie']->value;?>
</td>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table> <br />


          
              <a href="#">voir les recettes</a>
  </article> <br />
<?php
}
}
/* {/block 'main_content'} */
}
