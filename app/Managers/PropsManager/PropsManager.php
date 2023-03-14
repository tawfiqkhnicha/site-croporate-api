<?php

namespace  App\Managers\PropsManager;
 
use Illuminate\Http\Request;
use App\Managers\Manager\BaseManager;
use App\Models\Props;

class PropsManager extends BaseManager{
    function index()
    {
        $success = Props::latest()->paginate(10);
        return $this->sendResponse($success, 200);
    }

    public function show($id)
    {
        $props = Props::find($id);
        if ($props) {
            return $this->sendResponse($props, 200);
        } else {
            return $this->sendError("Invalid props ID");
        }
    }

    public function destroy($id)
    {
        $props = Props::find($id);
        if ($props) {
            $props->delete();
            return $this->sendResponse(["result" => "Deleted succesfully"], 200);
        } else {
            return $this->sendError("Invalid props ID");
        }
    }
    public function update(Request $request, $id)
    {
        $props = Props::find($id);
        if ($props) {
            $validatedData = $request->validate([
                'content' => 'required|string',
                'component_id' => 'required|exists:components,_id'
            ]);
            $success = $props->update($validatedData);
            return $this->sendResponse($props, 200);
        } else {
            return $this->sendError("Invalid props ID");
        }
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|string',
            'component_id' => 'required|exists:components,_id'
        ]);
        $success = Props::create($validatedData);
        return $this->sendResponse($success, 201);
    }
}