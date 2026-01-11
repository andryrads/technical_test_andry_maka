<?php

namespace App\Repositories\Contracts;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\User;

interface UserRepositoryContract {
    public function list(int $perPage, string $search): LengthAwarePaginator;
    public function store(array $data): User;
    public function update(User $user, array $data);
    public function destroy(User $user);
}