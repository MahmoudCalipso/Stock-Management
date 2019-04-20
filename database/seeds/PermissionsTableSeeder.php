<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-04-20 21:11:57',
            'updated_at' => '2019-04-20 21:11:57',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '17',
                'title'      => 'product_management_access',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '18',
                'title'      => 'product_category_create',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '19',
                'title'      => 'product_category_edit',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '20',
                'title'      => 'product_category_show',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '21',
                'title'      => 'product_category_delete',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '22',
                'title'      => 'product_category_access',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '23',
                'title'      => 'product_tag_create',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '24',
                'title'      => 'product_tag_edit',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '25',
                'title'      => 'product_tag_show',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '26',
                'title'      => 'product_tag_delete',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '27',
                'title'      => 'product_tag_access',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '28',
                'title'      => 'product_create',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '29',
                'title'      => 'product_edit',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '30',
                'title'      => 'product_show',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '31',
                'title'      => 'product_delete',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '32',
                'title'      => 'product_access',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '33',
                'title'      => 'task_management_access',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '34',
                'title'      => 'task_status_create',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '35',
                'title'      => 'task_status_edit',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '36',
                'title'      => 'task_status_show',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '37',
                'title'      => 'task_status_delete',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '38',
                'title'      => 'task_status_access',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '39',
                'title'      => 'task_tag_create',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '40',
                'title'      => 'task_tag_edit',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '41',
                'title'      => 'task_tag_show',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '42',
                'title'      => 'task_tag_delete',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '43',
                'title'      => 'task_tag_access',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '44',
                'title'      => 'task_create',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '45',
                'title'      => 'task_edit',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '46',
                'title'      => 'task_show',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '47',
                'title'      => 'task_delete',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '48',
                'title'      => 'task_access',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '49',
                'title'      => 'tasks_calendar_access',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ]];

        Permission::insert($permissions);
    }
}
