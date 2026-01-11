<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\UserRepositoryContract;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\User;

class UserEloquent implements UserRepositoryContract {
    public function list(int $perPage, ?string $search = null): LengthAwarePaginator
    {
        return User::query()
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'ILIKE', "%{$search}%")
                    ->orWhere('address', 'ILIKE', "%{$search}%");
                });
            })
            ->paginate($perPage);
    }

    public function store(array $data): User
    {
        return User::create($data);
    }

    public function update(User $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    public function destroy(User $user) {
        return (bool) $user->delete();
    }
}