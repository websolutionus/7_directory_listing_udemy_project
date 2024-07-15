<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = array(
            array(
                "id" => 1,
                "key" => "site_name",
                "value" => "Listing",
                "created_at" => "2023-10-22 05:24:03",
                "updated_at" => "2023-10-22 07:27:37",
            ),
            array(
                "id" => 2,
                "key" => "site_email",
                "value" => "demo@mailinator.com",
                "created_at" => "2023-10-22 05:24:03",
                "updated_at" => "2023-10-22 05:26:06",
            ),
            array(
                "id" => 3,
                "key" => "site_phone",
                "value" => "01128473201",
                "created_at" => "2023-10-22 05:24:03",
                "updated_at" => "2023-10-22 05:26:06",
            ),
            array(
                "id" => 4,
                "key" => "site_default_currency",
                "value" => "USD",
                "created_at" => "2023-10-22 05:24:03",
                "updated_at" => "2023-10-23 06:32:25",
            ),
            array(
                "id" => 5,
                "key" => "site_currency_icon",
                "value" => "$",
                "created_at" => "2023-10-22 05:24:03",
                "updated_at" => "2023-10-22 05:24:03",
            ),
            array(
                "id" => 6,
                "key" => "site_currency_position",
                "value" => "left",
                "created_at" => "2023-10-22 05:24:03",
                "updated_at" => "2023-10-22 10:09:36",
            ),
            array(
                "id" => 7,
                "key" => "site_timezone",
                "value" => "Asia/Dhaka",
                "created_at" => "2023-10-29 06:51:52",
                "updated_at" => "2023-10-29 11:36:48",
            ),
            array(
                "id" => 8,
                "key" => "pusher_app_id",
                "value" => "1698821",
                "created_at" => "2023-11-02 13:10:58",
                "updated_at" => "2023-11-02 13:10:58",
            ),
            array(
                "id" => 9,
                "key" => "pusher_app_key",
                "value" => "4c4b94a607f080d17043",
                "created_at" => "2023-11-02 13:10:58",
                "updated_at" => "2023-11-02 13:10:58",
            ),
            array(
                "id" => 10,
                "key" => "pusher_secret_key",
                "value" => "3e8d1d3a08938c843b13",
                "created_at" => "2023-11-02 13:10:58",
                "updated_at" => "2023-11-02 13:10:58",
            ),
            array(
                "id" => 11,
                "key" => "pusher_cluster",
                "value" => "mt1",
                "created_at" => "2023-11-02 13:10:58",
                "updated_at" => "2023-11-02 13:10:58",
            ),
            array(
                "id" => 12,
                "key" => "logo",
                "value" => "/uploads/media_655c569a10301.png",
                "created_at" => "2023-11-21 07:03:53",
                "updated_at" => "2023-11-21 13:04:58",
            ),
            array(
                "id" => 13,
                "key" => "favicon",
                "value" => "/uploads/media_655c569a108e6.png",
                "created_at" => "2023-11-21 07:03:53",
                "updated_at" => "2023-11-21 13:04:58",
            ),
            array(
                "id" => 14,
                "key" => "site_default_color",
                "value" => "#f80f1b",
                "created_at" => "2023-11-21 13:53:24",
                "updated_at" => "2023-11-21 14:00:50",
            ),
        );

        \DB::table('settings')->insert($settings);
    }
}
