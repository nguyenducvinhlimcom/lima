<?php

return [
    'dashboard' => [
        'label' => 'Dashboard',
        'icon'  => 'icon icon-speedometer',
        'url'   => 'admin/Dashboard',
    ],
    'home' => [
        'label' => 'Trang chủ',
        'icon'  => 'icon icon-layers',
        'url'   => 'admin/Home/*',
        'children' => [
            'banner' => [
                'label' => 'Cài đặt Banner',
                'url'   => 'admin/Home/banners',
            ],
            'feedback' => [
                'label' => 'Cài đặt nhận xét',
                'url'   => 'admin/Home/feedbacks',
            ],
        ],
    ],

    'categories' => [
        'label' => 'Dịch vụ',
        'icon'  => 'icon icon-handbag',
        'url'   => 'admin/Categories/*',
        'children' => [
            'service_groups' => [
                'label' => 'Danh mục dịch vụ',
                'url'   => 'admin/Categories/service_groups',
            ],
            'services' => [
                'label' => 'Danh sách dịch vụ',
                'url'   => 'admin/Categories/services',
            ]
        ],
    ],

    'system' => [
        'label' => 'Hệ thống',
        'icon'  => 'icon icon-settings',
        'url'   => 'admin/ManageSystem/*',
        'children' => [
            'company_info' => [
                'label' => 'Thông tin công ty',
                'url'   => 'admin/ManageSystem/company_info',
            ],
        ],

    ],
];
