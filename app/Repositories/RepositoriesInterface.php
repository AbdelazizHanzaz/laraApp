<?php

namespace App\Repositories;

interface RepositoriesInterface{

    function show();

    function insert($object);

    function update($id);

    function delete($id);


}
