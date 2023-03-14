<?php


namespace  App\Managers\ComponentManager;

use Illuminate\Http\Request;
use App\Managers\Manager\BaseManager;
use App\Models\Component;

class ComponentManager extends BaseManager
{
    function index()
    {
        $success = Component::with(["props"])->latest()->paginate(10);
        return $this->sendResponse($success, 200);
    }

    public function show($id)
    {
        $component = Component::with("props")->find($id);
        if ($component) {
            return $this->sendResponse($component, 200);
        } else {
            return $this->sendError("Invalid component ID");
        }
    }

    public function destroy($id)
    {
        $component = Component::find($id);
        if ($component) {
            $component->delete();
            return $this->sendResponse(["result" => "Deleted succesfully"], 200);
        } else {
            return $this->sendError("Invalid component ID");
        }
    }
    public function update(Request $request, $id)
    {
        $component = Component::with("props")->find($id);
        if ($component) {
            $validatedData = $request->validate([
                'type' => 'required|string|max:255',
                'icon' => 'required|string|max:255',
                'content' => 'required|string',
                'page_id' => 'required|exists:pages,_id',
                'children' => ['required', 'array']
            ]);
            $success = $component->update($validatedData);
            return $this->sendResponse($component, 200);
        } else {
            return $this->sendError("Invalid component ID");
        }
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'content' => 'required|string',
            'page_id' => 'required|exists:pages,_id',
            'children' => ['required', 'array']
        ]);
        $success = Component::create($validatedData);
        return $this->sendResponse($success, 201);
    }
}
