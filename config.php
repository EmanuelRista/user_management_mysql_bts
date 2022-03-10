<?php

return [
    'mysql_host' => 'localhost',
    'mysql_user' => 'root',
    'mysql_password' => '',
    'mysql_db' => 'user_management_mysql_bts',
    'recordsPerPage' => 10,
    'recordsPerPageOptions' => [
        5, 10, 20, 30, 50, 100
    ],
    'orderByColumns' => [
        'id', 'email', 'fiscalcode', 'age', 'username'
    ],
    'numLinkNavigator' => 5
];