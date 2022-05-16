<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();

        if ($data){
            return ApiFormatter::createApi(200, 'Success',$data);
        }
        else{
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'file_name' => 'required',
                'description' => 'required',
            ]);

            $file_name = $request->file('file_name')->getClientOriginalName();
            $request->file('file_name')->move('upload_product',$file_name);
            $product = Product::create([
                'name' => $request->name,
                'file_name' => $file_name,
                'description' => $request->description,
            ]);

            $data = Product::where('id', '=', $product->id)->get();

            if ($data){
                return ApiFormatter::createApi(200, 'Success',$data);
            }
            else{
                return ApiFormatter::createApi(400, 'Failed');
            }

        } catch (exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::where('id', '=', $id)->get();

        if ($data){
            return ApiFormatter::createApi(200, 'Success',$data);
        }
        else{
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'file_name' => 'required',
                'description' => 'required',
            ]);

            $product = Product::findOrFail($id);
            $destination = public_path("upload_product\\".$product->file_name);
            if($request->hasFile('new_file_name')){
                
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file_name = $request->file('new_file_name')->getClientOriginalName();
                $request->file('new_file_name')->move('upload_product',$file_name);    

            }
            $product->update([
                'name' => $request->name,
                'file_name' => $file_name,
                'description' => $request->description,
            ]);

            $data = Product::where('id', '=', $product->id)->get();

            if ($data){
                return ApiFormatter::createApi(200, 'Success',$data);
            }
            else{
                return ApiFormatter::createApi(400, 'Failed');
            }

        } catch (exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $destination = public_path("upload_product\\".$product->file_name);
            if(File::exists($destination)){
                File::delete($destination);
            }
            $data = $product->delete();
    
            if ($data){
                return ApiFormatter::createApi(200, 'Success Destroy Data');
            }
            else{
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
}
