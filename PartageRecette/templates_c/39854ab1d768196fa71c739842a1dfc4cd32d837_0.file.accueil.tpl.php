<?php
/* Smarty version 3.1.32-dev-38, created on 2017-11-29 12:27:52
  from 'D:\Program_files(x86)\DevTools\UwAmp\www\PartageRecette\application\views\modules\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a1ea7c84dbfe6_88485657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39854ab1d768196fa71c739842a1dfc4cd32d837' => 
    array (
      0 => 'D:\\Program_files(x86)\\DevTools\\UwAmp\\www\\PartageRecette\\application\\views\\modules\\accueil.tpl',
      1 => 1511951178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1ea7c84dbfe6_88485657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13875a1ea7c84c0793_25734036', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'application/views/layout.tpl');
}
/* {block 'main_content'} */
class Block_13875a1ea7c84c0793_25734036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_content' => 
  array (
    0 => 'Block_13875a1ea7c84c0793_25734036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article>
    <p>Edito</p>
  </article>

  <article>
    <p>Tableau alea</p>
    <p>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['alea'], 'nb_alea');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nb_alea']->value) {
?>
      <?php echo $_smarty_tpl->tpl_vars['nb_alea']->value;?>
 est un nombre aléatoire <br/>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </p>
  </article>
<?php
}
}
/* {/block 'main_content'} */
}
