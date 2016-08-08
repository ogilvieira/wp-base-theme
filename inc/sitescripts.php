<?php

$sitescripts = array();


$sitescripts['stylesheet'] = array(
  'bootstrap' => 'lib/bootstrap.css',
  'bootstrap-theme' => 'lib/bootstrap-theme.css',
  'app' => 'app.css');


$sitescripts['javascript'] = array(
  'jquery' => 'lib/jquery.js',
  'jquery-lazyload' => 'lib/jquery.lazyload.js',
  'jquery-bootstrap' => 'lib/bootstrap.js',
  'app' => 'app.js');

// if(IS_PRODUCTION):
//   $sitescripts['stylesheet'] = array('app' => 'app.min.css');
//   $sitescripts['javascript'] = array('app' => 'app.min.js');
// endif;