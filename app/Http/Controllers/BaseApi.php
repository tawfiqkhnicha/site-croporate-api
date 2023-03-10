<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Interfaces\ICrud;

abstract class BaseApi extends Controller implements ICrud 
{

    abstract function defaultManager();

    function index()
    {
        return $this->defaultManager()->index();
    }

    public function store(Request $request)
    {

        return  $this->defaultManager()->store($request);
    }
    public function show($id)
    {

        return  $this->defaultManager()->show($id);
    }

    public function update(Request $request, $id)
    {
        return  $this->defaultManager()->update($request, $id);
    }

    public function destroy($id)
    {

        return  $this->defaultManager()->destroy($id);
    }
}
