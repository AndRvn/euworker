<?php


namespace App\Repositories;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{
    public function all()
    {
        User::all();
    }

    public function getAllEmployer()
    {
        // TODO: Implement getAllEmployer() method.
    }

    public function getAllSeekers()
    {
        // TODO: Implement getAllSeekers() method.
    }

    public function getAllVerification()
    {
        // TODO: Implement getAllVerification() method.
    }
}
