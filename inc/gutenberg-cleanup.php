<?php

function voyager_starter_gutenberg_supported_features() {

    add_theme_support( 'editor-color-palette',
        '#a156b4',
        '#d0a5db',
        '#eee',
        '#444'
    );

    add_theme_support( 'align-wide' );
}

add_action( 'after_setup_theme', 'voyager_starter_gutenberg_supported_features' );
