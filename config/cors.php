<?php

return [
    // 'paths' => ['api/*', 'uploads/*'], // Allow image uploads
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'],  // Allow all frontend URLs
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];

