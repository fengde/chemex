<?php

namespace Database\Seeders;

use Dcat\Admin\Models;
use Illuminate\Database\Seeder;
use DB;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        Models\Menu::truncate();
        Models\Menu::insert(
            [
                [
                    "id" => 1,
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "Index",
                    "icon" => "feather icon-bar-chart-2",
                    "uri" => "/",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:20",
                    "updated_at" => "2020-12-29 21:39:06"
                ],
                [
                    "id" => 11,
                    "parent_id" => 0,
                    "order" => 25,
                    "title" => "Vendor Records",
                    "icon" => "feather icon-zap",
                    "uri" => "vendor/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:23",
                    "updated_at" => "2020-11-18 21:14:55"
                ],
                [
                    "id" => 16,
                    "parent_id" => 0,
                    "order" => 4,
                    "title" => "Device Management",
                    "icon" => "feather icon-monitor",
                    "uri" => "",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:25",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 17,
                    "parent_id" => 16,
                    "order" => 6,
                    "title" => "Device Categories",
                    "icon" => "",
                    "uri" => "device/categories",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:27",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 18,
                    "parent_id" => 0,
                    "order" => 16,
                    "title" => "Staff Management",
                    "icon" => "feather icon-user-check",
                    "uri" => "",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:25",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 19,
                    "parent_id" => 18,
                    "order" => 18,
                    "title" => "Staff Departments",
                    "icon" => "",
                    "uri" => "staff/departments",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:27",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 20,
                    "parent_id" => 18,
                    "order" => 17,
                    "title" => "Staff Records",
                    "icon" => "",
                    "uri" => "staff/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:26",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 21,
                    "parent_id" => 16,
                    "order" => 5,
                    "title" => "Device Records",
                    "icon" => "",
                    "uri" => "device/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:28",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 24,
                    "parent_id" => 16,
                    "order" => 7,
                    "title" => "Device Tracks",
                    "icon" => "",
                    "uri" => "device/tracks",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:29",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 25,
                    "parent_id" => 0,
                    "order" => 22,
                    "title" => "Check Management",
                    "icon" => "feather icon-check-circle",
                    "uri" => NULL,
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-04 10:22:42",
                    "updated_at" => "2020-12-19 01:10:21"
                ],
                [
                    "id" => 26,
                    "parent_id" => 25,
                    "order" => 23,
                    "title" => "Check Records",
                    "icon" => NULL,
                    "uri" => "check/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-04 10:23:17",
                    "updated_at" => "2020-12-19 01:10:21"
                ],
                [
                    "id" => 27,
                    "parent_id" => 25,
                    "order" => 24,
                    "title" => "Check Tracks",
                    "icon" => NULL,
                    "uri" => "check/tracks",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-04 10:23:33",
                    "updated_at" => "2020-12-19 01:10:21"
                ],
                [
                    "id" => 53,
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "Maintenance Records",
                    "icon" => "feather icon-shield",
                    "uri" => "maintenance/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:15",
                    "updated_at" => "2020-12-19 01:10:21"
                ],
                [
                    "id" => 54,
                    "parent_id" => 56,
                    "order" => 32,
                    "title" => "Version",
                    "icon" => "feather icon-chevrons-down",
                    "uri" => "version",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-22 15:05:00",
                    "updated_at" => "2020-12-24 21:21:34"
                ],
                [
                    "id" => 55,
                    "parent_id" => 56,
                    "order" => 38,
                    "title" => "Menu",
                    "icon" => NULL,
                    "uri" => "auth/menu",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-11-03 14:22:49",
                    "updated_at" => "2020-12-24 21:21:34"
                ],
                [
                    "id" => 56,
                    "parent_id" => 0,
                    "order" => 31,
                    "title" => "Settings",
                    "icon" => "feather icon-settings",
                    "uri" => NULL,
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-11-03 14:23:14",
                    "updated_at" => "2020-12-24 21:21:34"
                ],
                [
                    "id" => 57,
                    "parent_id" => 56,
                    "order" => 35,
                    "title" => "Users",
                    "icon" => NULL,
                    "uri" => "auth/users",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-11-03 14:25:13",
                    "updated_at" => "2020-12-24 21:21:34"
                ],
                [
                    "id" => 58,
                    "parent_id" => 56,
                    "order" => 36,
                    "title" => "Roles",
                    "icon" => NULL,
                    "uri" => "auth/roles",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-11-03 14:25:25",
                    "updated_at" => "2020-12-24 21:21:34"
                ],
                [
                    "id" => 59,
                    "parent_id" => 56,
                    "order" => 37,
                    "title" => "Permissions",
                    "icon" => NULL,
                    "uri" => "auth/permissions",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-11-03 14:26:37",
                    "updated_at" => "2020-12-24 21:21:34"
                ],
                [
                    "id" => 60,
                    "parent_id" => 0,
                    "order" => 26,
                    "title" => "Purchased Channels",
                    "icon" => "feather icon-shopping-cart",
                    "uri" => "purchased/channels",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-11-18 21:08:58",
                    "updated_at" => "2020-11-18 21:14:55"
                ],
                [
                    "id" => 61,
                    "parent_id" => 0,
                    "order" => 27,
                    "title" => "Depreciation Rules",
                    "icon" => "feather icon-trending-down",
                    "uri" => "/depreciation/rules",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-14 19:38:17",
                    "updated_at" => "2020-12-19 01:11:08"
                ],
                [
                    "id" => 62,
                    "parent_id" => 56,
                    "order" => 33,
                    "title" => "Configuration Site",
                    "icon" => NULL,
                    "uri" => "/configurations/site",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-14 19:38:17",
                    "updated_at" => "2020-12-26 17:33:08"
                ],
                [
                    "id" => 63,
                    "parent_id" => 0,
                    "order" => 28,
                    "title" => "Tools",
                    "icon" => "feather icon-layers",
                    "uri" => "",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-14 19:38:17",
                    "updated_at" => "2020-12-19 01:11:08"
                ],
                [
                    "id" => 64,
                    "parent_id" => 63,
                    "order" => 29,
                    "title" => "Chemex App",
                    "icon" => "",
                    "uri" => "/tools/chemex_app",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-14 19:38:17",
                    "updated_at" => "2020-12-19 01:11:08"
                ],
                [
                    "id" => 65,
                    "parent_id" => 63,
                    "order" => 30,
                    "title" => "QRCode Generator",
                    "icon" => "",
                    "uri" => "/tools/qrcode_generator",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-14 19:38:17",
                    "updated_at" => "2020-12-19 01:11:08"
                ],
                [
                    "id" => 66,
                    "parent_id" => 56,
                    "order" => 34,
                    "title" => "Configuration LDAP",
                    "icon" => NULL,
                    "uri" => "/configurations/ldap",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-24 21:21:27",
                    "updated_at" => "2020-12-24 21:21:27"
                ]
            ]
        );

        Models\Permission::truncate();
        Models\Permission::insert(
            [
                [
                    "id" => 1,
                    "name" => "认证管理",
                    "slug" => "auth-management",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 1,
                    "parent_id" => 0,
                    "created_at" => "2020-09-18 09:45:49",
                    "updated_at" => "2020-11-18 17:45:54"
                ],
                [
                    "id" => 2,
                    "name" => "管理员管理",
                    "slug" => "users",
                    "http_method" => "",
                    "http_path" => "/auth/users*",
                    "order" => 2,
                    "parent_id" => 1,
                    "created_at" => "2020-09-18 09:45:49",
                    "updated_at" => "2020-11-18 17:46:18"
                ],
                [
                    "id" => 3,
                    "name" => "角色管理",
                    "slug" => "roles",
                    "http_method" => "",
                    "http_path" => "/auth/roles*",
                    "order" => 3,
                    "parent_id" => 1,
                    "created_at" => "2020-09-18 09:45:49",
                    "updated_at" => "2020-11-18 17:46:10"
                ],
                [
                    "id" => 4,
                    "name" => "权限管理",
                    "slug" => "permissions",
                    "http_method" => "",
                    "http_path" => "/auth/permissions*",
                    "order" => 4,
                    "parent_id" => 1,
                    "created_at" => "2020-09-18 09:45:49",
                    "updated_at" => "2020-11-18 17:46:26"
                ],
                [
                    "id" => 5,
                    "name" => "菜单管理",
                    "slug" => "menu",
                    "http_method" => "",
                    "http_path" => "/auth/menu*",
                    "order" => 5,
                    "parent_id" => 1,
                    "created_at" => "2020-09-18 09:45:49",
                    "updated_at" => "2020-11-18 17:46:33"
                ],
                [
                    "id" => 7,
                    "name" => "动作",
                    "slug" => "device.action",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 9,
                    "parent_id" => 14,
                    "created_at" => "2020-11-19 08:57:47",
                    "updated_at" => "2020-11-19 13:32:55"
                ],
                [
                    "id" => 8,
                    "name" => "设备删除",
                    "slug" => "device.record.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 10,
                    "parent_id" => 7,
                    "created_at" => "2020-11-19 08:58:10",
                    "updated_at" => "2020-11-19 13:24:56"
                ],
                [
                    "id" => 9,
                    "name" => "设备归属",
                    "slug" => "device.track.create_update",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 12,
                    "parent_id" => 7,
                    "created_at" => "2020-11-19 08:58:23",
                    "updated_at" => "2020-12-28 16:24:30"
                ],
                [
                    "id" => 10,
                    "name" => "设备归属解除",
                    "slug" => "device.track.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 13,
                    "parent_id" => 7,
                    "created_at" => "2020-11-19 08:59:02",
                    "updated_at" => "2020-12-28 16:24:30"
                ],
                [
                    "id" => 11,
                    "name" => "设备关联信息清单",
                    "slug" => "device.related",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 14,
                    "parent_id" => 7,
                    "created_at" => "2020-11-19 08:59:54",
                    "updated_at" => "2020-12-28 16:24:30"
                ],
                [
                    "id" => 12,
                    "name" => "设备变动履历",
                    "slug" => "device.history",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 15,
                    "parent_id" => 7,
                    "created_at" => "2020-11-19 09:00:27",
                    "updated_at" => "2020-12-28 16:24:30"
                ],
                [
                    "id" => 13,
                    "name" => "设备故障",
                    "slug" => "device.maintenance.create",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 16,
                    "parent_id" => 7,
                    "created_at" => "2020-11-19 09:23:03",
                    "updated_at" => "2020-12-28 16:24:30"
                ],
                [
                    "id" => 14,
                    "name" => "设备管理",
                    "slug" => "device",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 6,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 09:55:45",
                    "updated_at" => "2020-11-19 13:11:45"
                ],
                [
                    "id" => 15,
                    "name" => "软件管理",
                    "slug" => "software",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 17,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 09:59:31",
                    "updated_at" => "2020-12-28 16:24:30"
                ],
                [
                    "id" => 16,
                    "name" => "配件管理",
                    "slug" => "part",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 27,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 09:59:57",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 17,
                    "name" => "组织管理",
                    "slug" => "staff",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 37,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:00:31",
                    "updated_at" => "2020-12-29 23:52:18"
                ],
                [
                    "id" => 18,
                    "name" => "服务管理",
                    "slug" => "service",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 43,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:00:55",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 19,
                    "name" => "盘点管理",
                    "slug" => "check",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 52,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:01:27",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 20,
                    "name" => "物资故障",
                    "slug" => "maintenance",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 59,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:01:59",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 21,
                    "name" => "厂商",
                    "slug" => "vendor",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 64,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:03:42",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 22,
                    "name" => "购入途径",
                    "slug" => "purchased",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 67,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:04:11",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 23,
                    "name" => "版本信息",
                    "slug" => "version",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 70,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:04:37",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 24,
                    "name" => "动作",
                    "slug" => "software.action",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 20,
                    "parent_id" => 15,
                    "created_at" => "2020-11-19 10:06:25",
                    "updated_at" => "2020-12-28 16:24:30"
                ],
                [
                    "id" => 25,
                    "name" => "软件删除",
                    "slug" => "software.record.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 21,
                    "parent_id" => 24,
                    "created_at" => "2020-11-19 10:09:16",
                    "updated_at" => "2020-12-28 16:24:30"
                ],
                [
                    "id" => 26,
                    "name" => "软件归属",
                    "slug" => "software.track.create_update",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 23,
                    "parent_id" => 24,
                    "created_at" => "2020-11-19 10:09:40",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 27,
                    "name" => "软件归属解除",
                    "slug" => "software.track.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 24,
                    "parent_id" => 24,
                    "created_at" => "2020-11-19 10:10:02",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 28,
                    "name" => "软件变动履历",
                    "slug" => "software.history",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 25,
                    "parent_id" => 24,
                    "created_at" => "2020-11-19 10:10:28",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 29,
                    "name" => "软件管理归属",
                    "slug" => "software.track.list",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 26,
                    "parent_id" => 24,
                    "created_at" => "2020-11-19 10:11:19",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 30,
                    "name" => "动作",
                    "slug" => "part.action",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 30,
                    "parent_id" => 16,
                    "created_at" => "2020-11-19 10:14:24",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 31,
                    "name" => "配件删除",
                    "slug" => "part.record.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 31,
                    "parent_id" => 30,
                    "created_at" => "2020-11-19 10:15:02",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 32,
                    "name" => "配件归属",
                    "slug" => "part.track.create_update",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 33,
                    "parent_id" => 30,
                    "created_at" => "2020-11-19 10:15:12",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 33,
                    "name" => "配件变动履历",
                    "slug" => "part.history",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 35,
                    "parent_id" => 30,
                    "created_at" => "2020-11-19 10:15:27",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 34,
                    "name" => "配件故障",
                    "slug" => "part.maintenance.create",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 36,
                    "parent_id" => 30,
                    "created_at" => "2020-11-19 10:15:44",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 35,
                    "name" => "配件归属解除",
                    "slug" => "part.track.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 34,
                    "parent_id" => 30,
                    "created_at" => "2020-11-19 10:16:04",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 36,
                    "name" => "动作",
                    "slug" => "staff.action",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 40,
                    "parent_id" => 17,
                    "created_at" => "2020-11-19 10:18:46",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 37,
                    "name" => "雇员删除",
                    "slug" => "staff.record.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 41,
                    "parent_id" => 36,
                    "created_at" => "2020-11-19 10:18:57",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 38,
                    "name" => "动作",
                    "slug" => "service.action",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 46,
                    "parent_id" => 18,
                    "created_at" => "2020-11-19 10:19:54",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 39,
                    "name" => "服务删除",
                    "slug" => "service.record.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 47,
                    "parent_id" => 38,
                    "created_at" => "2020-11-19 10:20:16",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 40,
                    "name" => "服务归属",
                    "slug" => "service.track.create_update",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 48,
                    "parent_id" => 38,
                    "created_at" => "2020-11-19 10:20:26",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 41,
                    "name" => "服务故障",
                    "slug" => "service.issue.create",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 49,
                    "parent_id" => 38,
                    "created_at" => "2020-11-19 10:21:32",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 42,
                    "name" => "服务归属解除",
                    "slug" => "service.track.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 50,
                    "parent_id" => 38,
                    "created_at" => "2020-11-19 10:21:56",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 43,
                    "name" => "服务故障修复",
                    "slug" => "service.issue.update",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 51,
                    "parent_id" => 38,
                    "created_at" => "2020-11-19 10:22:25",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 44,
                    "name" => "动作",
                    "slug" => "check.action",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 55,
                    "parent_id" => 19,
                    "created_at" => "2020-11-19 10:29:48",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 45,
                    "name" => "盘点动作",
                    "slug" => "check.track.update",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 56,
                    "parent_id" => 44,
                    "created_at" => "2020-11-19 10:30:28",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 47,
                    "name" => "动作",
                    "slug" => "maintenance.action",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 62,
                    "parent_id" => 20,
                    "created_at" => "2020-11-19 10:31:18",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 48,
                    "name" => "物资故障修复",
                    "slug" => "maintenance.update",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 63,
                    "parent_id" => 47,
                    "created_at" => "2020-11-19 10:31:43",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 49,
                    "name" => "盘点完成",
                    "slug" => "check.record.update.yes",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 57,
                    "parent_id" => 44,
                    "created_at" => "2020-11-19 10:35:29",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 50,
                    "name" => "盘点取消",
                    "slug" => "check.record.update.no",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 58,
                    "parent_id" => 44,
                    "created_at" => "2020-11-19 10:35:38",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 51,
                    "name" => "表单基础：只读",
                    "slug" => "device.read-only",
                    "http_method" => "GET",
                    "http_path" => "device/tracks*,device/records*,device/categories*",
                    "order" => 7,
                    "parent_id" => 14,
                    "created_at" => "2020-11-19 13:18:12",
                    "updated_at" => "2020-11-19 13:32:26"
                ],
                [
                    "id" => 52,
                    "name" => "表单基础：全部",
                    "slug" => "device.all",
                    "http_method" => "",
                    "http_path" => "device/tracks*,device/records*,device/categories*",
                    "order" => 8,
                    "parent_id" => 14,
                    "created_at" => "2020-11-19 13:21:28",
                    "updated_at" => "2020-12-19 01:19:54"
                ],
                [
                    "id" => 53,
                    "name" => "表单基础：只读",
                    "slug" => "software.read-only",
                    "http_method" => "GET",
                    "http_path" => "software/tracks*,software/records*,software/categories*",
                    "order" => 18,
                    "parent_id" => 15,
                    "created_at" => "2020-11-19 13:22:53",
                    "updated_at" => "2020-12-28 16:24:30"
                ],
                [
                    "id" => 54,
                    "name" => "表单基础：全部",
                    "slug" => "software.all",
                    "http_method" => "",
                    "http_path" => "software/tracks*,software/records*,software/categories*",
                    "order" => 19,
                    "parent_id" => 15,
                    "created_at" => "2020-11-19 13:23:56",
                    "updated_at" => "2020-12-28 16:24:30"
                ],
                [
                    "id" => 55,
                    "name" => "表单基础：只读",
                    "slug" => "hardware.read-only",
                    "http_method" => "GET",
                    "http_path" => "part/tracks*,part/records*,part/categories*",
                    "order" => 28,
                    "parent_id" => 16,
                    "created_at" => "2020-11-19 13:37:36",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 56,
                    "name" => "表单基础：全部",
                    "slug" => "hardware.all",
                    "http_method" => "",
                    "http_path" => "part/tracks*,part/records*,part/categories*",
                    "order" => 29,
                    "parent_id" => 16,
                    "created_at" => "2020-11-19 13:38:18",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 57,
                    "name" => "表单基础：只读",
                    "slug" => "staff.read-only",
                    "http_method" => "GET",
                    "http_path" => "staff/records*,staff/departments*",
                    "order" => 38,
                    "parent_id" => 17,
                    "created_at" => "2020-11-19 13:40:44",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 58,
                    "name" => "表单基础：全部",
                    "slug" => "staff.all",
                    "http_method" => "",
                    "http_path" => "staff/records*,staff/departments*",
                    "order" => 39,
                    "parent_id" => 17,
                    "created_at" => "2020-11-19 13:41:10",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 59,
                    "name" => "表单基础：只读",
                    "slug" => "service.read-only",
                    "http_method" => "GET",
                    "http_path" => "service/records*,service/tracks*,service/issues*",
                    "order" => 44,
                    "parent_id" => 18,
                    "created_at" => "2020-11-19 13:44:25",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 60,
                    "name" => "表单基础：全部",
                    "slug" => "service.all",
                    "http_method" => "",
                    "http_path" => "service/records*,service/tracks*,service/issues*",
                    "order" => 45,
                    "parent_id" => 18,
                    "created_at" => "2020-11-19 13:45:00",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 61,
                    "name" => "表单基础：只读",
                    "slug" => "check.read-only",
                    "http_method" => "GET",
                    "http_path" => "check/records*,check/tracks*",
                    "order" => 53,
                    "parent_id" => 19,
                    "created_at" => "2020-11-19 14:00:10",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 62,
                    "name" => "表单基础：全部",
                    "slug" => "check.all",
                    "http_method" => "",
                    "http_path" => "check/records*,check/tracks*",
                    "order" => 54,
                    "parent_id" => 19,
                    "created_at" => "2020-11-19 14:00:45",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 63,
                    "name" => "表单基础：只读",
                    "slug" => "maintenance.read-only",
                    "http_method" => "GET",
                    "http_path" => "maintenance/records*",
                    "order" => 60,
                    "parent_id" => 20,
                    "created_at" => "2020-11-19 14:01:46",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 64,
                    "name" => "表单基础：全部",
                    "slug" => "maintenance.all",
                    "http_method" => "",
                    "http_path" => "maintenance/records*",
                    "order" => 61,
                    "parent_id" => 20,
                    "created_at" => "2020-11-19 14:02:10",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 65,
                    "name" => "表单基础：只读",
                    "slug" => "vendor.read-only",
                    "http_method" => "GET",
                    "http_path" => "vendor/records*",
                    "order" => 65,
                    "parent_id" => 21,
                    "created_at" => "2020-11-19 14:03:07",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 66,
                    "name" => "表单基础：全部",
                    "slug" => "vendor.all",
                    "http_method" => "",
                    "http_path" => "vendor/records*",
                    "order" => 66,
                    "parent_id" => 21,
                    "created_at" => "2020-11-19 14:03:24",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 67,
                    "name" => "表单基础：只读",
                    "slug" => "puchased.read-only",
                    "http_method" => "GET",
                    "http_path" => "purchased/channels*",
                    "order" => 68,
                    "parent_id" => 22,
                    "created_at" => "2020-11-19 14:04:08",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 68,
                    "name" => "表单基础：全部",
                    "slug" => "purchased.all",
                    "http_method" => "",
                    "http_path" => "purchased/channels*",
                    "order" => 69,
                    "parent_id" => 22,
                    "created_at" => "2020-11-19 14:04:39",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 69,
                    "name" => "表单基础：只读",
                    "slug" => "version.read-only",
                    "http_method" => "GET",
                    "http_path" => "version",
                    "order" => 71,
                    "parent_id" => 23,
                    "created_at" => "2020-11-19 14:05:14",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 70,
                    "name" => "动作",
                    "slug" => "version.action",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 72,
                    "parent_id" => 23,
                    "created_at" => "2020-11-19 14:05:40",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 72,
                    "name" => "更新数据库结构",
                    "slug" => "version.migrate",
                    "http_method" => "",
                    "http_path" => "version/migrate",
                    "order" => 73,
                    "parent_id" => 70,
                    "created_at" => "2020-11-19 14:06:39",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 73,
                    "name" => "折旧规则",
                    "slug" => "depreciation_rule",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 74,
                    "parent_id" => 0,
                    "created_at" => "2020-12-19 01:16:23",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 74,
                    "name" => "表单基础：只读",
                    "slug" => "depreciation_rule.read-only",
                    "http_method" => "GET",
                    "http_path" => "depreciation/rules*",
                    "order" => 75,
                    "parent_id" => 73,
                    "created_at" => "2020-12-19 01:17:19",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 75,
                    "name" => "表单基础：全部",
                    "slug" => "depreciation_rule.all",
                    "http_method" => "",
                    "http_path" => "depreciation/rules*",
                    "order" => 76,
                    "parent_id" => 73,
                    "created_at" => "2020-12-19 01:18:30",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 76,
                    "name" => "站点配置",
                    "slug" => "configuration",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 77,
                    "parent_id" => 0,
                    "created_at" => "2020-12-19 01:18:30",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 77,
                    "name" => "表单基础：只读",
                    "slug" => "configuration.read-only",
                    "http_method" => "GET",
                    "http_path" => "configurations*",
                    "order" => 78,
                    "parent_id" => 76,
                    "created_at" => "2020-12-19 01:18:30",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 78,
                    "name" => "表单基础：全部",
                    "slug" => "configuration.all",
                    "http_method" => "",
                    "http_path" => "configurations*",
                    "order" => 79,
                    "parent_id" => 76,
                    "created_at" => "2020-12-19 01:18:30",
                    "updated_at" => "2020-12-29 23:52:05"
                ],
                [
                    "id" => 79,
                    "name" => "设备批量删除",
                    "slug" => "device.record.batch.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 11,
                    "parent_id" => 7,
                    "created_at" => "2020-12-28 16:24:23",
                    "updated_at" => "2020-12-28 16:24:30"
                ],
                [
                    "id" => 80,
                    "name" => "软件批量删除",
                    "slug" => "software.record.batch.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 22,
                    "parent_id" => 24,
                    "created_at" => "2020-12-28 16:24:50",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 81,
                    "name" => "配件批量删除",
                    "slug" => "part.record.batch.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 32,
                    "parent_id" => 30,
                    "created_at" => "2020-12-28 16:25:06",
                    "updated_at" => "2020-12-28 16:25:16"
                ],
                [
                    "id" => 82,
                    "name" => "雇员批量删除",
                    "slug" => "staff.record.batch.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 42,
                    "parent_id" => 36,
                    "created_at" => "2020-12-29 23:51:57",
                    "updated_at" => "2020-12-29 23:52:05"
                ]
            ]
        );

        Models\Role::truncate();
        Models\Role::insert(
            [
                [
                    "id" => 1,
                    "name" => "超级管理员",
                    "slug" => "administrator",
                    "created_at" => "2020-09-18 09:45:49",
                    "updated_at" => "2020-11-18 17:45:16"
                ],
                [
                    "id" => 2,
                    "name" => "观察者",
                    "slug" => "observer",
                    "created_at" => "2020-11-19 09:25:18",
                    "updated_at" => "2020-11-19 14:09:37"
                ]
            ]
        );

        Models\Setting::truncate();
		Models\Setting::insert(
			[
                [
                    "slug" => "celaraze:dcatadmin-menu-switch",
                    "value" => "[0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1]",
                    "created_at" => "2020-11-09 16:22:52",
                    "updated_at" => "2020-11-09 16:23:06"
                ],
                [
                    "slug" => "dcat-admin:operation-log",
                    "value" => "{\"except\":[],\"allowed_methods\":[],\"secret_fields\":[]}",
                    "created_at" => "2020-11-04 15:19:51",
                    "updated_at" => "2020-11-04 15:19:51"
                ],
                [
                    "slug" => "site_logo",
                    "value" => "",
                    "created_at" => "2020-12-20 13:57:11",
                    "updated_at" => "2020-12-20 13:57:11"
                ],
                [
                    "slug" => "site_logo_mini",
                    "value" => "",
                    "created_at" => "2020-12-20 13:57:11",
                    "updated_at" => "2020-12-20 13:57:11"
                ],
                [
                    "slug" => "site_logo_text",
                    "value" => "咖啡壶",
                    "created_at" => "2020-12-20 13:57:11",
                    "updated_at" => "2020-12-20 13:57:11"
                ],
                [
                    "slug" => "site_title",
                    "value" => "咖啡壶",
                    "created_at" => "2020-12-20 13:57:11",
                    "updated_at" => "2020-12-20 13:57:11"
                ]
            ]
		);

		Models\Extension::truncate();
		Models\Extension::insert(
			[

            ]
		);

		Models\ExtensionHistory::truncate();
		Models\ExtensionHistory::insert(
			[

            ]
		);

        // pivot tables
        DB::table('admin_permission_menu')->truncate();
		DB::table('admin_permission_menu')->insert(
			[
                [
                    "permission_id" => 2,
                    "menu_id" => 32,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 33,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 34,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 35,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 36,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 37,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 38,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 39,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 40,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 41,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 42,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 43,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 44,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 45,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 46,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 47,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 48,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 49,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 50,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 51,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 52,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 32,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 33,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 34,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 35,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 36,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 37,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 38,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 39,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 40,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 41,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 42,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 43,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 44,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 45,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 46,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 47,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 48,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 49,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 50,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 51,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 52,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 32,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 33,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 34,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 35,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 36,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 37,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 38,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 39,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 40,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 41,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 42,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 43,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 44,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 45,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 46,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 47,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 48,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 49,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 50,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 51,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 52,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 32,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 33,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 34,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 35,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 36,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 37,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 38,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 39,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 40,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 41,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 42,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 43,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 44,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 45,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 46,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 47,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 48,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 49,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 50,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 51,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 52,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 32,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 33,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 34,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 35,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 36,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 37,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 38,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 39,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 40,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 41,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 42,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 43,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 44,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 45,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 46,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 47,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 48,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 49,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 50,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 51,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 52,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ]
            ]
		);

        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [

            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [
                [
                    "role_id" => 2,
                    "permission_id" => 51,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 53,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 55,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 57,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 59,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 61,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 63,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 65,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 67,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 69,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ]
            ]
        );

        // users tables
        Models\Administrator::truncate();
        Models\Administrator::insert(
            [
                [
                    "id" => 1,
                    "username" => "admin",
                    "password" => "\$2y\$10\$FXUHalDQfy1nTA6IO5D.huoxAsHdlIESqnGJNGpGaidfCz4TYPvuS",
                    "name" => "Administrator",
                    "avatar" => NULL,
                    "remember_token" => NULL,
                    "created_at" => "2020-11-30 09:58:49",
                    "updated_at" => "2021-01-22 13:11:04"
                ]
            ]
        );

        DB::table('admin_role_users')->truncate();
        DB::table('admin_role_users')->insert(
            [
                [
                    "role_id" => 1,
                    "user_id" => 1,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ]
            ]
        );

        // finish
    }
}
