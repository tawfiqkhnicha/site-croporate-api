<?php
namespace Interfaces;
use Illuminate\Http\Request;


interface ICrud{

    public function index();
    public function store(Request $request);
    public function show($id);
    public function update(Request $request, $id);
    public function destroy($id);

}