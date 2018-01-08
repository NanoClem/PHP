<?php
/* Smarty version 3.1.30, created on 2018-01-07 18:04:55
  from "D:\Users\Clement\Progs_files\uWampServer\www\PHP\CodeIgniter-3.1.6\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5261479de484_07614123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7ec5416e8a53e63a91a99dda5b20567ff3caa98' => 
    array (
      0 => 'D:\\Users\\Clement\\Progs_files\\uWampServer\\www\\PHP\\CodeIgniter-3.1.6\\application\\views\\layout.tpl',
      1 => 1515281354,
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
function content_5a5261479de484_07614123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">

  <header>
    <?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_entete.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203945a5261479d1f78_22496997', 'title');
?>

    <p style="float:rigth; position:top;">
      <a href="<?php echo base_url('/membre/deconnexion');?>
">Se déconnecter</a>
    </p>
  </header>

  <nav>
    <?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </nav> <br />

  <body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_265235a5261479da810_34807008', 'main_content');
?>

  </body>

  <!-- <footer style="text-align:center; bottom:0; position:fixed; width:100%; margin-top:50px; padding:13px; background-color : rgba(0,0,0,0.5);">
    <?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_pied.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </footer> -->
</html>
<?php }
/* {block 'title'} */
class Block_203945a5261479d1f78_22496997 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'title'} */
/* {block 'main_content'} */
class Block_265235a5261479da810_34807008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'main_content'} */
}
