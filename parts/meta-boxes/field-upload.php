<?php
/*
Title: Upload Fields <span class="piklist-title-right">Meta Box Removed</span>
Post Type: carousel
Order: 110
Collapse: false
*/
  piklist('field', array(
    'type' => 'text'
    ,'scope' => 'post'
    ,'field' => 'post_title'
    ,'label' => 'Image Title'
    ,'attributes' => array(
      'class' => 'regular-text'
      ,'placeholder' => 'Enter text or this page won\'t save.'
    )
  ));
  

  piklist('field', array(
    'type' => 'file'
    ,'field' => 'upload_media'
    ,'scope' => 'post_meta'
    ,'label' => __('Image','piklist-demo')
    ,'description' => __('Validation rule set: Upload no more than two files.','piklist-demo')
    ,'options' => array(
      'modal_title' => __('Add File(s)','piklist-demo')
      ,'button' => __('Add Image','piklist-demo')
    )
  ));