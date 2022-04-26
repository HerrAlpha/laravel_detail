<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BmwController extends Controller
{
    // function_construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('admin')->only('index','proses','update','delete');
    // }
    public function index()
    {
        return view('CarsAdd');
    }
    public function proses(Request $request){
        $rules = [
            'name' => 'required',
            'price' => 'required|numeric',
            'engine' => 'required',
            'transmission' => 'required',
            'city' => 'required',
            'country' => 'required',
            'drive_position' => 'required',
            'color' => 'required',
            'year' => 'required|numeric',
            'mileage' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            
        ];
        $error_message = [
            'name.required' => 'Name is required',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price must be numeric',
            'engine.required' => 'Engine is required',
            'transmission.required' => 'Transmission is required',
            'city.required' => 'City is required',
            'country.required' => 'Country is required',
            'drive_position.required' => 'Drive Position is required',
            'color.required' => 'Color is required',
            'year.required' => 'Year is required',
            'year.numeric' => 'Year must be numeric',
            'mileage.required' => 'Mileage is required',
            'mileage.numeric' => 'Mileage must be numeric',
            'description.required' => 'Description is required',
            'image.required' => 'Image is required',
            'image.image' => 'Image must be image',
            'image.mimes' => 'Image must be jpeg,png,jpg,gif,svg',
            'image.max' => 'Image must be less than 8192kb',
        ];
        $validator = Validator::make($request->all(), $rules, $error_message);
        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        } else {
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/picture/cars'), $new_name);

            $data = array(
                'name' => $request->name,
                'price' => $request->price,
                'engine' => $request->engine,
                'transmission' => $request->transmission,
                'city' => $request->city,
                'country' => $request->country,
                'drive_position' => $request->drive_position,
                'color' => $request->color,
                'year' => $request->year,
                'mileage' => $request->mileage,
                'description' => $request->description,
                'image' => $new_name,
            );
            DB::table('cars')->insert($data);
            return redirect('/')->with('success', 'Data Added');
        }
    }
    public function view(){
        $cars = DB::table('cars')->orderBy('created_at', 'desc')->get();
        return view('Cars', ['cars' => $cars]);
    }
    
    public function update(Request $id){

        $data = array(
            'name' => $id->name,
            'price' => $id->price,
            'engine' => $id->engine,
            'transmission' => $id->transmission,
            'city' => $id->city,
            'country' => $id->country,
            'drive_position' => $id->drive_position,
            'color' => $id->color,
            'year' => $id->year,
            'mileage' => $id->mileage,
            'description' => $id->description,
            'image' => $id->image,
            );
        DB::table('cars')->where('id', $id->id)->update($data);
        return redirect('/')->with('success', 'Data Updated');

    }

    public function delete(Request $request){
        DB::table('cars')->where('id', $request->id)->delete();
        return redirect('/');
    }
    public function detail (Request $id){
        $cars = DB::table('cars')->where('id', $id->id)->get();
        return view('CarsDetail', ['carsDetail' => $cars]);
    }
    public function search(){

    }
}
