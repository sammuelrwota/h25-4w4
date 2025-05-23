<?php
add_filter('theme_page_templates', function($templates) {
    $templates['template-pays.php'] = 'Pays';
    return $templates;
});
