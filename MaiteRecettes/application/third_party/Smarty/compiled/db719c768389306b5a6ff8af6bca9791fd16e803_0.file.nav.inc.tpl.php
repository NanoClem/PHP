<?php
/* Smarty version 3.1.30, created on 2018-01-07 20:10:17
  from "D:\Users\Clement\Progs_files\uWampServer\www\PHP\MaiteRecettes\application\views\nav\nav.inc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a527ea9951e03_64085378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db719c768389306b5a6ff8af6bca9791fd16e803' => 
    array (
      0 => 'D:\\Users\\Clement\\Progs_files\\uWampServer\\www\\PHP\\MaiteRecettes\\application\\views\\nav\\nav.inc.tpl',
      1 => 1515336293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a527ea9951e03_64085378 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <a href="<?php echo base_url();?>
">Accueil</a>
  <a href="<?php echo base_url('/recette');?>
">les Recettes</a>
  <a href="<?php echo base_url('/membre/connexion');?>
">Espace perso</a>
<?php }
}
