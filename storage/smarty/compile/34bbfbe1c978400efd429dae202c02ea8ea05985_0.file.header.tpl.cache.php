<?php
/* Smarty version 3.1.31, created on 2017-04-28 05:18:29
  from "D:\wwwroot\laravel\resources\views\layout\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5902d0a5c89786_83668367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34bbfbe1c978400efd429dae202c02ea8ea05985' => 
    array (
      0 => 'D:\\wwwroot\\laravel\\resources\\views\\layout\\header.tpl',
      1 => 1493356706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5902d0a5c89786_83668367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '302845902d0a5c3f405_31670023';
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27665902d0a5c79d85_83642574', 'title');
?>
</title>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153475902d0a5c85907_91321972', 'body');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_27665902d0a5c79d85_83642574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_27665902d0a5c79d85_83642574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
laravel<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_153475902d0a5c85907_91321972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_153475902d0a5c85907_91321972',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
