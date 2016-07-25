<?php
namespace Todos\Service;

use RedBeanPHP\Facade as R;

class Task
{
    public function getList()
    {
        $tasks = R::findAll('tasks');

        return $tasks;
    }

    public function create($data)
    {
        $task = R::dispense('tasks');
        $task->title = $data['title'];
        $task->description = $data['description'];

        $id = R::store($task);
    }

    public function find(int $id)
    {
        $task = R::findOne('tasks', $id);

        return $task;
    }

    public function update(int $id, array $data)
    {
        $task = $this->find($id);
        $task->title = $data['title'];
        $task->description = $data['description'];

        $id = R::store($task);
    }

    public function remove(int $id)
    {
        $task = $this->find($id);

        R::trash($task);
    }

    public function add($a, $b)
    {
        $c = $a+$b;

        return $c;
    }
}
