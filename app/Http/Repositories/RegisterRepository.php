<?php

namespace App\Http\Repositories;

class RegisterRepository extends BaseRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}