<?php

use App\Models\Task;

interface RepositoryInterface
{
    public function all(): array;
    public function find(string $id): ?Task;
    public function create(array $data): Task;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
