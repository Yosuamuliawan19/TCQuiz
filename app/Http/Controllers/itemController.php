<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class itemController extends Controller
{
    public function getItem(){
    	$data = item::all();
    	return $data;
    }
    public function getItemById(Request $request){
        $data = item::with('categories')->where('id', $request->id)->first();
        return $data;
    }

    public function addItem(Request $request){
    	$newData = [

    		'name' => $request->name 	,
    		'category_id' => $request->category_id 	,
    		'price' => $request->price 	,
    		'stock' => $request->stock 	,
    	]    ;	
    	item::create($newData);
    	return $newData;
    }
    public function deleteItem(Request $request){
    	$result =  	
    	item::where('id',$request->id)->delete();
   	 	return $result;
    }
    public function updateItem(Request $request){
    	
    	$result = item::where('id', $request->id)->update([
    		'name' => $request->name 	,
    		'category_id' => $request->category_id 	,
    		'price' => $request->price 	,
    		'stock' => $request->stock 	,
    	]
    	);
    	return $result;
    }
}
