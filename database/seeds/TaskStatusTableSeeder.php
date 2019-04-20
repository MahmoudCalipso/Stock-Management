<?php

use App\TaskStatus;
use Illuminate\Database\Seeder;

class TaskStatusTableSeeder extends Seeder
{
    public function run()
    {
        $taskStatuses = [[
            'id'         => '1',
            'name'       => 'Open',
            'created_at' => '2019-04-20 21:11:57',
            'updated_at' => '2019-04-20 21:11:57',
        ],
            [
                'id'         => '2',
                'name'       => 'In progress',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ],
            [
                'id'         => '3',
                'name'       => 'Closed',
                'created_at' => '2019-04-20 21:11:57',
                'updated_at' => '2019-04-20 21:11:57',
            ]];

        TaskStatus::insert($taskStatuses);
    }
}
