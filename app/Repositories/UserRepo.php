<?php

namespace App\Repositories;

use App\Models\User;

class UserRepo implements RepositoriesInterface {

    function show()
    {
        return User::all();
    }

    function insert($object)
    {
        if($object instanceof User){
              User::factory()->create();
        }
    }

    function update($id)
    {
    }

    function delete($id)
    {
    }
}
