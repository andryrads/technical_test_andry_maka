<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Contracts\UserServiceContract;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct(
        private UserServiceContract $userSvc,
    ) {}

    public function index(Request $request){
        return UserResource::collection(
            $this->userSvc->list($request->get('per_page', 10), $request->get('search'))
        );
    }

    public function store(UserRequest $request){
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')
                ->store('users', 'public');
        }

        return new UserResource(
            $this->userSvc->store($data)
        );
    }

    public function update(User $user, UserRequest $request){
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($user->image) {
                \Storage::disk('public')->delete($user->image);
            }
            $data['image'] = $request->file('image')
                ->store('users', 'public');
        }

        return new UserResource(
            $this->userSvc->update($user, $data)
        );
    }


    public function destroy(User $user){
        return response()->json(
            [
                'success' => $this->userSvc->destroy($user)
            ]
        );
    }
}
