<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Repositories\BaseRepository;

class RegisterRepository extends BaseRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function storeRegister($request)
    {
        return DB::transaction(function () use ($request) {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'apk_id' => '123456789',
            ];
            
        });
    }
}