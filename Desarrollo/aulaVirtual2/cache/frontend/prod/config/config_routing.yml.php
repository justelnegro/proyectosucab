<?php
// auto-generated by sfRoutingConfigHandler
// date: 2010/05/20 20:25:15
return array(
'homepage' => new sfRoute('/', array (
  'module' => 'default',
  'action' => 'index',
), array (
), array (
)),
'default_index' => new sfRoute('/:module', array (
  'action' => 'index',
), array (
), array (
)),
'default' => new sfRoute('/:module/:action/*', array (
), array (
), array (
)),
);
