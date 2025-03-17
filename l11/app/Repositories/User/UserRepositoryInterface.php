<?php

namespace App\Repositories\User;

use App\Models\User;

interface UserRepositoryInterface
{
    public function register(array $data);
    public function login(array $credentials);
    public function logout();
    public function getUser();
}
