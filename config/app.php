<?php

declare(strict_types=1);

return [
    'app_name' => 'PRO-SYS (Integrated Manufacturing System)',
    'client_name' => 'PT. Promindo Graha Cemerlang Utama',
    'version' => '2.1',
    'timezone' => 'Asia/Jakarta',
    'base_url' => getenv('APP_BASE_URL') ?: 'http://localhost',
    'environment' => getenv('APP_ENV') ?: 'development',
    'debug' => filter_var(getenv('APP_DEBUG') ?: true, FILTER_VALIDATE_BOOL),
    'currency' => 'IDR',
    'philosophy' => 'One Gate, One Truth | Start-Hold-Close Accountability',
];
