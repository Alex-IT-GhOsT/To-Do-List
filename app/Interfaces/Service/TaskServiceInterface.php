<?php

namespace Service;

use App\Models\Task;

interface TaskServiceInterface
{
    public function getAll(): array;
    public function getById(int $id): ?Task;
    public function create(array $data): Task;
    public function update($id, array $data): bool;
    public function delete(int $id): bool;

}
