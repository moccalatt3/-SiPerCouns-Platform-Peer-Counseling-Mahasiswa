<?php

// auth.php

return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'konselor' => [
            'driver' => 'session',
            'provider' => 'konselors',
        ],
        'pengguna' => [
            'driver' => 'session',
            'provider' => 'pengguna',
        ],
    ],

    'providers' => [
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
        'konselors' => [
            'driver' => 'eloquent',
            'model' => App\Models\Konselor::class,
        ],
        'pengguna' => [
            'driver' => 'eloquent',
            'model' => App\Models\Pengguna::class, // Ganti provider dengan model yang sesuai
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,
];

