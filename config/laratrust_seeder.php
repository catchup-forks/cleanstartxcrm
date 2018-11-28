<?php

return [
    'role_structure' => [
        'owner' => [
            'users' => 'c,p,r,u,d',
            'acl' => 'c,p,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,p,r,u,d',
            'acl' => 'c,p,r,u,d',
            'profile' => 'r,u'
        ],
        'manager' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,p,r,u,d',
            'profile' => 'r,u'
        ],
        'staff' => [
            'users' => 'c,p,r,u,d',
            'acl' => 'c,p,r,u,d',
            'profile' => 'r,u'
        ],
        'user' => [
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'p' => 'copy',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
