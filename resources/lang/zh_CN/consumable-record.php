<?php
return [
    'labels' => [
        'title' => '耗材',
        'description' => '主数据列表',
        'records' => '耗材',
        'Category' => '分类',
        'Vendor' => '厂商',
        'In' => '入库',
        'Out' => '领用',
        'In Success' => '成功！',
        'In Fail' => '失败：',
        'Track None' => '没有此条记录！',
        'Out Success' => '成功！',
        'Out Fail' => '失败：',
    ],
    'fields' => [
        'name' => '名称',
        'description' => '描述',
        'specification' => '规格',
        'category' => [
            'name' => '分类'
        ],
        'vendor' => [
            'name' => '厂商'
        ],
        'price' => '价格',
        'number' => '总数',
        'consumable_id' => '耗材',
        'user_id' => '用户（领用人）',
        'purchased' => '购入日期',
        'expired' => '过保日期',
        'category_id' => '分类',
        'vendor_id' => '厂商',
        'extended_fields' => '自定义信息'
    ]
];
