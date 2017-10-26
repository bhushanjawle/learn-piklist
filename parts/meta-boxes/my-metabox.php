<?php
/*
  Title: My Meta Box
  Post Type: post, page
*/
piklist('field', array(
    'type' => 'text'
    ,'field' => 'my_text'
    ,'label' => 'Text Box'
    ,'description' => 'Field Description'
    ,'value' => 'Default value'
    ,'help' => 'This is my help text.'
    ,'attributes' => array(
    'class' => 'text'
    )
));

piklist('field', array(
    'type' => 'colorpicker'
    ,'field' => 'pk_colorpicker'
    ,'label' => 'Choose a color'
    ,'value' => '#aee029'
    ,'description' => 'Click in the box to select a color.'
    ,'attributes' => array(
    'class' => 'text'
    )
    ));

    piklist('field', array(
        'type' => 'select'
        ,'field' => 'pk_select'
        ,'label' => 'Select box'
        ,'description' => 'Choose from the dropdown.'
        ,'attributes' => array(
        'class' => 'text'
        )
        ,'choices' => array(
        'option1' => 'Option 1'
        ,'option2' => 'Option 2'
        ,'option3' => 'Option 3'
        )
));