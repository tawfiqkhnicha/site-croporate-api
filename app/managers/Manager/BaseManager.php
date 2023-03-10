<?php

namespace App\Manager;

use App\Exceptions\MenapsException;
use Interfaces\ICrud;
use Illuminate\Http\Request;


class BaseManager implements ICrud
{

    function index()
    {
        throw new MenapsException("This method is not defined");
    }

    public function store(Request $request)
    {
        throw new MenapsException("This method is not defined");
    }
    public function show($id)
    {
        throw new MenapsException("This method is not defined");
    }

    public function update(Request $request, $id)
    {

        throw new MenapsException("This method is not defined");
    }

    public function destroy($id)
    {
        throw new MenapsException("This method is not defined");
    }
}
