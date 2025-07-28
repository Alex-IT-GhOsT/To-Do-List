<?php
namespace App\Services\TaskService;

use App\Interfaces\Repositories\TaskRepositoryInterface;
use App\Interfaces\Service\TaskServiceInterface;
use App\Models\Task;

class TaskService implements TaskServiceInterface
{
    public function __construct(
        private TaskRepositoryInterface $taskRepository
    ){}
    public function getAll(): array
    {
        return $this->taskRepository->all();
    }

    public function getById(int $id): ?Task
    {
        return $this->taskRepository->find($id);
    }

    public function create(array $data): Task
    {
        return $this->taskRepository->create($data);
    }

    public function update($id, array $data): bool
    {
        return $this->taskRepository->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->taskRepository->delete($id);
    }
}
