<?php
/* Smarty version 3.1.32-dev-38, created on 2017-11-29 09:22:58
  from 'D:\Program_files(x86)\DevTools\UwAmp\www\PartageRecette\application\views\nav\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a1e7c728942d1_83806561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e9d6985ca4be06b16dbc8fd878b84152a3c0cc5' => 
    array (
      0 => 'D:\\Program_files(x86)\\DevTools\\UwAmp\\www\\PartageRecette\\application\\views\\nav\\layout.tpl',
      1 => 1511900708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout/layout_entete.inc.tpl' => 1,
    'file:application/views/layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a1e7c728942d1_83806561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">

  <header>
    <?php $_smarty_tpl->_subTemplateRender('file:application/views/layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </header>

  <body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_261385a1e7c7288e724_38513576', 'main_content');
?>

  </body>

  <footer>
    <?php $_smarty_tpl->_subTemplateRender('file:application/views/layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </footer>
</html>
<?php }
/* {block 'main_content'} */
class Block_261385a1e7c7288e724_38513576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_content' => 
  array (
    0 => 'Block_261385a1e7c7288e724_38513576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'main_content'} */
}
