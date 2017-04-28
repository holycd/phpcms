<?php
/* Smarty version 3.1.31, created on 2017-04-28 05:18:09
  from "D:\wwwroot\laravel\resources\views\index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5902d091b78081_96492253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da2dd405704694faf62b7024885a76ca8ffbc797' => 
    array (
      0 => 'D:\\wwwroot\\laravel\\resources\\views\\index\\index.tpl',
      1 => 1493356686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5902d091b78081_96492253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '263575902d091b41588_91581689';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_289215902d091b74207_37027495', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout/header.tpl');
}
/* {block 'body'} */
class Block_289215902d091b74207_37027495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_289215902d091b74207_37027495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    hello smarty
<?php
}
}
/* {/block 'body'} */
}
