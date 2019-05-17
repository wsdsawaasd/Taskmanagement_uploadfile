<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new \App\Task();
        $task->title='tao project';
        $task->content='tao project laravel';
        $task->created_at = now();
        $task->updated_at = now();
        $task->save();
        $task = new \App\Task();
        $task->title='tao migration';
        $task->content='tao migration cho bang categories';
        $task->created_at = now();
        $task->updated_at = now();
        $task->save();
        $task = new \App\Task();
        $task->title='tao seeder';
        $task->content='tao du lieu cho bang categories';
        $task->created_at = now();
        $task->updated_at = now();
        $task->save();
        $task = new \App\Task();
        $task->title='tao cau lenh if';
        $task->content='cau lenh if trong laravel';
        $task->created_at = now();
        $task->updated_at = now();
        $task->save();
    }
}
