<?php
// Making child widgets

function child_create_widget($name, $id, $description) {

  register_sidebar(array (
    'name' => __( $name ),
    'id' => $id,
    'description' => __( $description),
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

}

// In addition to 5 default sidebars created by GLW theme (3 on front page, general category, general page)

child_create_widget( 'News', 'news-sidebar', 'The News section sidebar.');
child_create_widget( 'Opinion', 'opinion-sidebar', 'The Opinion section sidebar.');
child_create_widget( 'Features', 'features-sidebar', 'The Features section sidebar.');
child_create_widget( 'Culture', 'culture-sidebar', 'The Culture section sidebar.');
child_create_widget( 'De Minimus', 'de-minimus-sidebar', 'The De Minimus section sidebar.');
child_create_widget( 'Front Page Top Right', 'front-page-top-right', 'The Front Page Top Right section sidebar.');

?>