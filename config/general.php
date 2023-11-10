<?php

return [
    'pattern' => '--slug--',
    'supported' => [
        'Admingate\Page\Models\Page' => 'Pages',
    ],
    'prefixes' => [],
    'disable_preview' => [],
    'slug_generated_columns' => [],
    'enable_slug_translator' => env('CMS_ENABLE_SLUG_TRANSLATOR', false),
];
