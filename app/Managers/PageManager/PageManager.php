<?php

namespace  App\Managers\PageManager;

use App\Managers\Manager\BaseManager;
use App\Models\Page;
use Illuminate\Http\Request;

class PageManager extends BaseManager {

    function index() 
    {
        $success = Page::with(["component.props"])->latest()->paginate(10);
        return $this->sendResponse($success, 200); 
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'url' => ['required']
        ]);
        $success = Page::create($validatedData);
        return $this->sendResponse($success, 201);
    }
    public function show($id)
    {
        $page = Page::find($id);
        if($page){
            return $this->sendResponse($page, 200);
        }else{
            return $this->sendError("Invalid page ID");
        }
    }
    public function update(Request $request, $id)
    {
        $page = Page::find($id);
        if($page){
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'url' => ['required']
            ]);
            $success = $page->update($validatedData);
            return $this->sendResponse($page, 200);
        }else{
            return $this->sendError("Invalid page ID");
        }
    }
    public function destroy($id)
    {
        $page = Page::find($id);
        if($page){
            $page->delete();
            return $this->sendResponse(["result" => "Deleted succesfully"], 200);
        }else{
            return $this->sendError("Invalid page ID");
        }
    }
}