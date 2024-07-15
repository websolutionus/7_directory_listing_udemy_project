<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = array(
            array(
                "id" => 1,
                "name" => "section index",
                "group_name" => "section",
                "guard_name" => "web",
                "created_at" => "2023-11-19 06:19:35",
                "updated_at" => "2023-11-19 06:19:35",
            ),
            array(
                "id" => 2,
                "name" => "section create",
                "group_name" => "section",
                "guard_name" => "web",
                "created_at" => "2023-11-19 06:19:48",
                "updated_at" => "2023-11-19 06:19:48",
            ),
            array(
                "id" => 3,
                "name" => "section update",
                "group_name" => "section",
                "guard_name" => "web",
                "created_at" => "2023-11-19 06:19:58",
                "updated_at" => "2023-11-19 06:19:58",
            ),
            array(
                "id" => 4,
                "name" => "section delete",
                "group_name" => "section",
                "guard_name" => "web",
                "created_at" => "2023-11-19 06:20:06",
                "updated_at" => "2023-11-19 06:20:06",
            ),
            array(
                "id" => 5,
                "name" => "listing index",
                "group_name" => "listing",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:02:34",
                "updated_at" => "2023-11-19 07:02:34",
            ),
            array(
                "id" => 6,
                "name" => "listing create",
                "group_name" => "listing",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:02:46",
                "updated_at" => "2023-11-19 07:02:46",
            ),
            array(
                "id" => 7,
                "name" => "listing update",
                "group_name" => "listing",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:02:51",
                "updated_at" => "2023-11-19 07:02:51",
            ),
            array(
                "id" => 8,
                "name" => "listing delete",
                "group_name" => "listing",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:02:56",
                "updated_at" => "2023-11-19 07:02:56",
            ),
            array(
                "id" => 9,
                "name" => "pending listing",
                "group_name" => "listing",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:04:44",
                "updated_at" => "2023-11-19 07:04:44",
            ),
            array(
                "id" => 10,
                "name" => "listing review",
                "group_name" => "listing",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:04:59",
                "updated_at" => "2023-11-19 07:04:59",
            ),
            array(
                "id" => 11,
                "name" => "listing claims",
                "group_name" => "listing",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:05:11",
                "updated_at" => "2023-11-19 07:05:11",
            ),
            array(
                "id" => 12,
                "name" => "package index",
                "group_name" => "package",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:08:10",
                "updated_at" => "2023-11-19 07:08:10",
            ),
            array(
                "id" => 13,
                "name" => "package create",
                "group_name" => "package",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:08:14",
                "updated_at" => "2023-11-19 07:08:14",
            ),
            array(
                "id" => 14,
                "name" => "package update",
                "group_name" => "package",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:08:20",
                "updated_at" => "2023-11-19 07:08:20",
            ),
            array(
                "id" => 15,
                "name" => "package delete",
                "group_name" => "package",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:08:26",
                "updated_at" => "2023-11-19 07:08:26",
            ),
            array(
                "id" => 16,
                "name" => "order index",
                "group_name" => "order",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:10:22",
                "updated_at" => "2023-11-19 07:10:22",
            ),
            array(
                "id" => 17,
                "name" => "order delete",
                "group_name" => "order",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:10:27",
                "updated_at" => "2023-11-19 07:10:27",
            ),
            array(
                "id" => 18,
                "name" => "message index",
                "group_name" => "message",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:11:42",
                "updated_at" => "2023-11-19 07:11:42",
            ),
            array(
                "id" => 19,
                "name" => "testimonial index",
                "group_name" => "testimonial",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:12:22",
                "updated_at" => "2023-11-19 07:12:22",
            ),
            array(
                "id" => 20,
                "name" => "testimonial create",
                "group_name" => "testimonial",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:12:26",
                "updated_at" => "2023-11-19 07:12:26",
            ),
            array(
                "id" => 21,
                "name" => "testimonial update",
                "group_name" => "testimonial",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:12:31",
                "updated_at" => "2023-11-19 07:12:31",
            ),
            array(
                "id" => 22,
                "name" => "testimonial delete",
                "group_name" => "testimonial",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:12:36",
                "updated_at" => "2023-11-19 07:12:36",
            ),
            array(
                "id" => 23,
                "name" => "blog index",
                "group_name" => "blog",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:15:16",
                "updated_at" => "2023-11-19 07:15:16",
            ),
            array(
                "id" => 24,
                "name" => "blog create",
                "group_name" => "blog",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:15:20",
                "updated_at" => "2023-11-19 07:15:20",
            ),
            array(
                "id" => 25,
                "name" => "blog update",
                "group_name" => "blog",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:15:25",
                "updated_at" => "2023-11-19 07:15:25",
            ),
            array(
                "id" => 26,
                "name" => "blog delete",
                "group_name" => "blog",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:15:30",
                "updated_at" => "2023-11-19 07:15:30",
            ),
            array(
                "id" => 27,
                "name" => "blog comment",
                "group_name" => "blog",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:15:35",
                "updated_at" => "2023-11-19 07:15:35",
            ),
            array(
                "id" => 28,
                "name" => "about index",
                "group_name" => "pages",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:16:57",
                "updated_at" => "2023-11-19 07:16:57",
            ),
            array(
                "id" => 29,
                "name" => "contact index",
                "group_name" => "pages",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:17:07",
                "updated_at" => "2023-11-19 07:17:07",
            ),
            array(
                "id" => 30,
                "name" => "privacy policy index",
                "group_name" => "pages",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:17:28",
                "updated_at" => "2023-11-19 07:17:28",
            ),
            array(
                "id" => 31,
                "name" => "terms and condition index",
                "group_name" => "pages",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:17:46",
                "updated_at" => "2023-11-19 07:17:46",
            ),
            array(
                "id" => 32,
                "name" => "footer index",
                "group_name" => "footer",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:19:15",
                "updated_at" => "2023-11-19 07:19:15",
            ),
            array(
                "id" => 33,
                "name" => "social link index",
                "group_name" => "footer",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:19:49",
                "updated_at" => "2023-11-19 07:19:49",
            ),
            array(
                "id" => 34,
                "name" => "access management index",
                "group_name" => "access management",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:21:12",
                "updated_at" => "2023-11-19 07:21:12",
            ),
            array(
                "id" => 35,
                "name" => "menu builder index",
                "group_name" => "menu builder",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:22:03",
                "updated_at" => "2023-11-19 07:22:03",
            ),
            array(
                "id" => 36,
                "name" => "settings index",
                "group_name" => "settings",
                "guard_name" => "web",
                "created_at" => "2023-11-19 07:22:33",
                "updated_at" => "2023-11-19 07:22:33",
            ),
            array(
                "id" => 37,
                "name" => "payment settings index",
                "group_name" => "settings",
                "guard_name" => "web",
                "created_at" => "2023-11-20 05:31:49",
                "updated_at" => "2023-11-20 05:31:49",
            ),
        );

        $roles = array(
            array(
                "id" => 2,
                "name" => "Super Admin",
                "guard_name" => "web",
                "created_at" => "2023-11-19 10:41:30",
                "updated_at" => "2023-11-19 10:41:30",
            ),
            array(
                "id" => 3,
                "name" => "Writer",
                "guard_name" => "web",
                "created_at" => "2023-11-19 11:27:36",
                "updated_at" => "2023-11-19 11:27:36",
            ),
        );

        $role_has_permissions = array(
            array(
                "permission_id" => 9,
                "role_id" => 3,
            ),
            array(
                "permission_id" => 11,
                "role_id" => 3,
            ),
            array(
                "permission_id" => 23,
                "role_id" => 3,
            ),
            array(
                "permission_id" => 24,
                "role_id" => 3,
            ),
            array(
                "permission_id" => 25,
                "role_id" => 3,
            ),
            array(
                "permission_id" => 26,
                "role_id" => 3,
            ),
            array(
                "permission_id" => 27,
                "role_id" => 3,
            ),
        );

        $model_has_roles = array(
            array(
                "role_id" => 2,
                "model_type" => "App\\Models\\User",
                "model_id" => 1,
            ),
            array(
                "role_id" => 3,
                "model_type" => "App\\Models\\User",
                "model_id" => 7,
            ),
            array(
                "role_id" => 3,
                "model_type" => "App\\Models\\User",
                "model_id" => 8,
            ),
        );

        \DB::table('permissions')->insert($permissions);
        \DB::table('roles')->insert($roles);
        \DB::table('role_has_permissions')->insert($role_has_permissions);
        \DB::table('model_has_roles')->insert($model_has_roles);

    }
}
