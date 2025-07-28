<?php

use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface
{
    public function all(): array
    {
        return Task::all()->toArray();
    }

    public function find(string $id): ?Task
    {
        return Task::fing($id);
    }

    public function create(array $data): Task
    {
        return Task::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $task = Task::find($id);
        return $task ? $task->update($id, $data) : false;
    }

    public function delete(int $id): bool
    {
        $task = Task::find($id);
        return $task ? $task->delete($id) : false;
    }
}
