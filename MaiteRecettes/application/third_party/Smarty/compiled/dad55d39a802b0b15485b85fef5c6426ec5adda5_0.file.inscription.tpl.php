<?php
/* Smarty version 3.1.30, created on 2018-01-08 00:20:30
  from "D:\Users\Clement\Progs_files\uWampServer\www\PHP\MaiteRecettes\application\views\modules\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52b94e219652_05920211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dad55d39a802b0b15485b85fef5c6426ec5adda5' => 
    array (
      0 => 'D:\\Users\\Clement\\Progs_files\\uWampServer\\www\\PHP\\MaiteRecettes\\application\\views\\modules\\inscription.tpl',
      1 => 1515369168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout.tpl' => 1,
  ),
),false)) {
function content_5a52b94e219652_05920211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_246935a52b94e1e5182_85855278', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_266345a52b94e215c52_51327331', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:application/views/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_246935a52b94e1e5182_85855278 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title>Inscription</title>
<?php
}
}
/* {/block 'title'} */
/* {block 'main_content'} */
class Block_266345a52b94e215c52_51327331 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <form action="<?php echo base_url('/membre/inscription');?>
" method="post">
    <p>
      Login *        : <input type="text" name="login" size="25" value="<?php echo set_value('login');?>
" />   <br />
                       <?php echo form_error('login');?>

      Mail *         : <input type="email" name="mail" size="25" value="<?php echo set_value('mail');?>
" />   <br />
                       <?php echo form_error('mail');?>

      Nom *          : <input type="text" name="nom" size="25" value="<?php echo set_value('nom');?>
" />   <br />
                       <?php echo form_error('nom');?>

      Prenom *       : <input type="text" name="prenom" size="25" value="<?php echo set_value('prenom');?>
" />   <br />
                       <?php echo form_error('prenom');?>

      Mot de passe * : <input type="password" name="pwd" size="25" /> <br />
                       <?php echo form_error('pwd');?>

      Verification * : <input type="password" name="check_pwd" size="25" /> <br />
                       <?php echo form_error('check_pwd');?>

      Avatar         : <input type="file" name="avatar" /> <br /> <br />
    <input type="submit" name="send_log" value="S'inscrire" />
  </p>
  </form> <br /> <br />

  <p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value, 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?> <?php echo $_smarty_tpl->tpl_vars['err']->value;?>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</p>
<?php
}
}
/* {/block 'main_content'} */
}
