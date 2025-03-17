<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserRepositoryInterface;

class AuthController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        return response()->json($this->userRepository->register($validated), 201);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        return response()->json($this->userRepository->login($validated));
    }

    public function logout()
    {
        return response()->json($this->userRepository->logout());
    }

    public function getUser()
    {
        return response()->json($this->userRepository->getUser());
    }
}
