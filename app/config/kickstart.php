<?php
return array(
    'user_field'=>'email',
    'password_field'=>'password',
    'user_collection'=>'members',
    'invalidchars'=>array('%','&','|',' ','"',':',';','\'','\\','?','#','(',')','/'),
    'default_theme'=>'default',

    'salutation'=>array(
            'Mr'=>'Mr',
            'Mrs'=>'Mrs',
            'Ms'=>'Ms',
        ),
    'admin_roles'=>array(
            'root'=>'Super Administrator',
            'admin'=>'Administrator',
            'cashier'=>'Cashier',
            'warehouse'=>'Warehouse'
        ),
    'app_types'=>array(
            ''=>'Select Business Type',
            'retail'=>'Retail ( General )',
            'culinary'=>'Retail ( Culinary )',
            'service'=>'Service Management',
            'office'=>'Office Management',
            'building'=>'Building Management'
        ),
    'employee_number'=>array(
            ''=>'Select Number of Personnel',
            '8'=>'Less than 8',
            '16'=>'9 to 16',
            '24'=>'17 or More'
        ),

    );