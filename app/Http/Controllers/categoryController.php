<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\item;
class categoryController extends Controller
{

	
    public function getCategory(){
    	$data = category::all();
		
    	$myItems = category::find(2)->items;
    	
		echo $myItems;

    	
    }


 	public function getCategoryById(Request $request){
    	$data = category::with('items')->where('id', $request->id)->first();
    	return $data;
    }


    public function addCategory(Request $request){
    	$newData = [
    		'name' => $request->name
    	]  ;	
    	category::create($newData);
    	return $newData;
    }
    public function deleteCategory(Request $request){
    	$result =  	
    	category::where('id',$request->id)->delete();
    	if ($result == 0){
    		return "Delete failed; Data not found";
    	}else {
    		return "Delete success";
    	}
   	 	
    }
    public function updateCategory(Request $request){
    	
    	$result = category::where('id', $request->id)->update([
    		'name' => $request->name
    	]
    	);
    	if ($result == 0){
    		return "Update failed; Data not found";
    	}else {
    		return "Update success";
    	}
    }

}
