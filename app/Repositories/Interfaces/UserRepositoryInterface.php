<?php


namespace App\Repositories\Interfaces;


interface UserRepositoryInterface
{
    public function all();

    public function getAllVerification();

    public function getAllEmployer();

    public function getAllSeekers();
}
