<?php

namespace Database\Seeders;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
        $tasks = [
            [
                'title' => 'Task 1',
                'description' => 'Description for Task 1',
                'status' => 'pending',
                'due_date' => Carbon::now()->addDays(7),
            ],
            [
                'title' => 'Task 2',
                'description' => 'Description for Task 2',
                'status' => 'completed',
                'due_date' => Carbon::now()->addDays(3),
            ],
            [
                'title' => 'Task 3',
                'description' => 'Description for Task 3',
                'status' => 'pending',
                'due_date' => Carbon::now()->addDays(10),
            ],
            [
                'title' => 'Task 4',
                'description' => 'Description for Task 4',
                'status' => 'pending',
                'due_date' => Carbon::now()->addDays(10),
            ],
            [
                'title' => 'Task 5',
                'description' => 'Description for Task 5',
                'status' => 'pending',
                'due_date' => Carbon::now()->addDays(5),
            ],
            [
                'title' => 'Task 6',
                'description' => 'Description for Task 6',
                'status' => 'completed',
                'due_date' => Carbon::now()->addDays(1),
            ],
            [
                'title' => 'Task 7',
                'description' => 'Description for Task 7',
                'status' => 'pending',
                'due_date' => Carbon::now()->addDays(2),
            ],
            [
                'title' => 'Task 8',
                'description' => 'Description for Task 8',
                'status' => 'pending',
                'due_date' => Carbon::now()->addDays(15),
            ],
            [
                'title' => 'Task 9',
                'description' => 'Description for Task 9',
                'status' => 'completed',
                'due_date' => Carbon::now()->addDays(8),
            ],
            [
                'title' => 'Task 10',
                'description' => 'Description for Task 10',
                'status' => 'pending',
                'due_date' => Carbon::now()->addDays(12),
            ],
        ];

        foreach ($tasks as $task) {
            Task::updateOrCreate(
                [
                    'title' => $task['title'],
                ],
                [
                    'title' => $task['title'],
                    'description' => $task['description'],
                    'status' => $task['status'],
                    'due_date' => $task['due_date'],
                ]
            );
        }
    }
}
