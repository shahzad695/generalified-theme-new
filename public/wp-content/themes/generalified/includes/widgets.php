<?php
function generalified_registar_sidebar(){
    register_sidebar([
        'name'          =>  __('My First Theme sidebar','generalified'),
        'id'            =>  'generalified_sidebar',
        'description'   =>  __('Sidebar for the Generalified Theme','generalified'),
        'before_widget' => '<div id="%1$s" class="widget cleafix %2$s">',
        'after_widget'  => '</div>',
        'before_head'   =>  '<h4>',
        'after_head'    =>  '</h4>'
    ]);
}