<?php

namespace App\Services\UseCases;

use App\Models\User;
use App\Services\Contracts\UserServiceContract;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Contracts\UserRepositoryContract;

class UserService implements UserServiceContract {

    public function __construct(
        private UserRepositoryContract $userRepo,
    ) {}

    public function list(int $perPage, ?string $search = null): LengthAwarePaginator
    {
        return $this->userRepo->list($perPage, $search);
    }

    public function store(array $data): User
    {
        return $this->userRepo->store($data);
    }

    public function update(User $user, array $data): User
    {
        return $this->userRepo->update($user, $data);
    }

    public function destroy(User $user): bool
    {
        return $this->userRepo->destroy($user);
    }
}