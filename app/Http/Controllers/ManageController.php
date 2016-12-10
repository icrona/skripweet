<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;
use Validator;
use Illuminate\Support\Facades\Input;
use App\Flavour;
use App\Size;
use App\Shape;
use App\Frosting;

class ManageController extends Controller
{
	public function showFlavour()
	{
		$flavours = Flavour::paginate(10);
		$response = [
          'pagination' => [
            'total' => $flavours->total(),
            'per_page' => $flavours->perPage(),
            'current_page' => $flavours->currentPage(),
            'last_page' => $flavours->lastPage(),
            'from' => $flavours->firstItem(),
            'to' => $flavours->lastItem()
          ],
          'data' => $flavours
        ];
        return response()->json($response);
	}

	public function addFlavour(Request $request){
		$this->validate($request,array(
            'name' => 'required|max:255',
            'price' => 'required|max:255',
        ));
        $flavour = Flavour::create($request->all());
        $flavour->save();
        return response()->json($flavour);

	}

	public function editFlavour(Request $request,$id)
    {
        $this->validate($request,array(
            'name' => 'required|max:255',
            'price' => 'required|max:255',
        ));
        $edit = Flavour::find($id)->update($request->all());
        return response()->json($edit);
    }

    public function deleteFlavour($id)
    {
        Flavour::find($id)->delete();
        return response()->json(['done']);
    }

    public function showSize()
    {
        $sizes = Size::orderBy('size','asc')->paginate(10);
        $response = [
          'pagination' => [
            'total' => $sizes->total(),
            'per_page' => $sizes->perPage(),
            'current_page' => $sizes->currentPage(),
            'last_page' => $sizes->lastPage(),
            'from' => $sizes->firstItem(),
            'to' => $sizes->lastItem()
          ],
          'data' => $sizes
        ];
        return response()->json($response);
    }

    public function addSize(Request $request){
        $this->validate($request,array(
            'size' => 'required',
            'rate' => 'required',
        ));
        $size = Size::create($request->all());
        $size->save();
        return response()->json($size);

    }

    public function editSize(Request $request,$id)
    {
        $this->validate($request,array(
            'size' => 'required',
            'rate' => 'required',
        ));
        $edit = Size::find($id)->update($request->all());
        return response()->json($edit);
    }

    public function deleteSize($id)
    {
        Size::find($id)->delete();
        return response()->json(['done']);
    }

    public function showShape()
    {
        $shapes = Shape::all();
        $response = [
          'data' => $shapes
        ];
        return response()->json($response);
    }

    public function editShape(Request $request,$id)
    {
        $this->validate($request,array(
            'name' => 'required',
            'availability' => 'required',
        ));
        $edit = Shape::find($id)->update($request->all());
        return response()->json($edit);
    }

    public function showFrosting()
    {
        $frostings = Frosting::all();
        $response = [
          'data' => $frostings
        ];
        return response()->json($response);
    }

    public function editFrosting(Request $request,$id)
    {
        $this->validate($request,array(
            'one' => 'required',
            'availability'=>'required',
        ));
        $edit = Frosting::find($id)->update($request->all());
        return response()->json($edit);
    }
}
