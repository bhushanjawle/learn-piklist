<?php
piklist('field', array(
    'type' => 'text'
    ,'field' => 'pk_text'
    ,'label' => 'Demo Text Box'
    ,'description' => 'Demo Field Description'
    ,'value' => 'Demo Default text'
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