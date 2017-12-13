<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-06 08:48:16
  from 'D:\Program_files(x86)\DevTools\UwAmp\www\PartageRecette\application\views\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a27aed05602f2_81449390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f69bbd02aaa74426b855a49608d958e79426231c' => 
    array (
      0 => 'D:\\Program_files(x86)\\DevTools\\UwAmp\\www\\PartageRecette\\application\\views\\layout.tpl',
      1 => 1512550095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout/layout_entete.inc.tpl' => 1,
    'file:application/views/nav/nav.inc.tpl' => 1,
    'file:application/views/layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a27aed05602f2_81449390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">

  <header>
    <?php $_smarty_tpl->_subTemplateRender('file:application/views/layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </header>

  <nav>
    <?php $_smarty_tpl->_subTemplateRender('file:application/views/nav/nav.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </nav> <br />

  <body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_218365a27aed0559e36_92305456', 'main_content');
?>

  </body> <br />

  <footer style="bottom:0; position:fixed;">
    <?php $_smarty_tpl->_subTemplateRender('file:application/views/layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </footer>
</html>
<?php }
/* {block 'main_content'} */
class Block_218365a27aed0559e36_92305456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_content' => 
  array (
    0 => 'Block_218365a27aed0559e36_92305456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'main_content'} */
}
