<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'owner' => [
            'users' => 'c,r,u,d',
            'customers' => 'c,r,u,d',
            'products' => 'c,r,u,d',            
            'subscriptions' => 'c,r,u,d'
        ],
        'admin' => [
            'users' => 'c,r,u,d',
            'customers' => 'c,r,u,d',
            'products' => 'c,r,u,d',
            'subscriptions' => 'c,r,u,d',
        ],
        'customer_care' => [
            'customers' => 'r',
            'subscriptions' => 'r',
            'products' => 'r',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ],

    'create_users' => true
];
