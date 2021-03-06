<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PartCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('part_categories')->delete();

        DB::table('part_categories')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'CPU',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:26:50',
                    'updated_at' => '2021-01-19 19:26:50',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => '内存',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:26:58',
                    'updated_at' => '2021-01-19 19:26:58',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => '内存（笔记本）',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:27:04',
                    'updated_at' => '2021-01-19 19:27:04',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => '硬盘',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:27:08',
                    'updated_at' => '2021-01-19 19:27:08',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => '硬盘（3.5英寸）',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:27:28',
                    'updated_at' => '2021-01-19 19:27:28',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => '硬盘（2.5英寸）',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:27:36',
                    'updated_at' => '2021-01-19 19:27:36',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => '硬盘（NGFF）',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:29:33',
                    'updated_at' => '2021-01-19 19:29:50',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => '显卡',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:29:56',
                    'updated_at' => '2021-01-19 19:29:56',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => '网卡',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:30:00',
                    'updated_at' => '2021-01-19 19:30:00',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            9 =>
                array(
                    'id' => 10,
                    'name' => '声卡',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:30:04',
                    'updated_at' => '2021-01-19 19:30:04',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            10 =>
                array(
                    'id' => 11,
                    'name' => '蓝牙适配器',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:30:30',
                    'updated_at' => '2021-01-19 19:30:30',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            11 =>
                array(
                    'id' => 12,
                    'name' => '电源',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:30:35',
                    'updated_at' => '2021-01-19 19:30:35',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            12 =>
                array(
                    'id' => 13,
                    'name' => 'GBIC',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:30:42',
                    'updated_at' => '2021-01-19 19:30:42',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            13 =>
                array(
                    'id' => 14,
                    'name' => '主板',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:30:49',
                    'updated_at' => '2021-01-19 19:30:49',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            14 =>
                array(
                    'id' => 15,
                    'name' => '机箱',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:30:54',
                    'updated_at' => '2021-01-19 19:31:00',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            15 =>
                array(
                    'id' => 16,
                    'name' => '音响',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:31:07',
                    'updated_at' => '2021-01-19 19:31:07',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            16 =>
                array(
                    'id' => 17,
                    'name' => '耳机',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:31:09',
                    'updated_at' => '2021-01-19 19:31:09',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            17 =>
                array(
                    'id' => 18,
                    'name' => '键盘',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:31:13',
                    'updated_at' => '2021-01-19 19:31:13',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
            18 =>
                array(
                    'id' => 19,
                    'name' => '鼠标',
                    'description' => NULL,
                    'deleted_at' => NULL,
                    'created_at' => '2021-01-19 19:31:16',
                    'updated_at' => '2021-01-19 19:31:16',
                    'depreciation_rule_id' => NULL,
                    'parent_id' => NULL,
                    'order' => '0',
                ),
        ));


    }
}
