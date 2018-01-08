<?php
/* Smarty version 3.1.30, created on 2018-01-08 00:07:14
  from "D:\Users\Clement\Progs_files\uWampServer\www\PHP\MaiteRecettes\application\views\modules\connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52b63283b1f8_91559655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7394fa0ca4915a10fa287bbb2696211ffc265ed2' => 
    array (
      0 => 'D:\\Users\\Clement\\Progs_files\\uWampServer\\www\\PHP\\MaiteRecettes\\application\\views\\modules\\connexion.tpl',
      1 => 1515369145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout.tpl' => 1,
  ),
),false)) {
function content_5a52b63283b1f8_91559655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146465a52b632825cd6_27985272', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_555a52b632839474_38308910', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:application/views/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_146465a52b632825cd6_27985272 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title>Connexion</title>
<?php
}
}
/* {/block 'title'} */
/* {block 'main_content'} */
class Block_555a52b632839474_38308910 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <form action="<?php echo base_url('/membre/connexion');?>
" method="post">
    <p>
      Login :        <input type="text" name="login" size="25" value="<?php echo set_value('login');?>
" />   <br />
                     <?php echo form_error('login');?>

      Mot de passe : <input type="password" name="pwd" size="25" /> <br />
                     <?php echo form_error('pwd');?>

                     <input type="submit" name="send_log" value="Connexion" />
    </p>
  </form>

  <p><a href="<?php echo base_url('/membre/inscription');?>
">Pas encore inscrit ?</a>
<?php
}
}
/* {/block 'main_content'} */
}
