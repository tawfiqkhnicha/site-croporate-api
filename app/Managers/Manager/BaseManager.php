<?php

namespace App\Managers\Manager;

use App\Exceptions\MenapsException;
use App\Interfaces\ICrud;
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
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];
        return response()->json($response, 200);
    }
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}
