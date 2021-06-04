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
        
        'coaches' => [
            'dashboard'  => 'r',
        ],
        
        'super_admin' => [
            'dashboard'        => 'r',
            'advisoryServices' => 'c,r,u,d',
            'certificates'     => 'c,r,u,d',
            'posts'            => 'c,r,u,d',
            'courses'          => 'c,r,u,d',
            'coaches'          => 'c,r,u,d',
            'categories'       => 'c,r,u,d',
            'users'            => 'c,r,u,d',
        ],


        'admin'   => [],
        
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
