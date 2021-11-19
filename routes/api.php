<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/myname", function() {  
    return response()->json(["my_name" => "Davit Osadze"], 200);
});


Route::get("/age", function() {  
    return response()->json(["age" => 20], 200);
});

Route::get("/hobbie", function() {  
    return response()->json(["hobbie" => "Codding"], 200);
});

Route::get("/car", function() {  
    return response()->json(["car" => "BMW"], 200);
});

Route::get("/food", function() {  
    return response()->json(["food" => "Khinkali"], 200);
});

Route::post("/endp", function() {
    $array["message"] = "წარმატებით დაემატა";
    return response()->json($array, 200);
});

Route::put("/endp", function() {
    $array["message"] = "წარმატებით განახლდა";
    return response()->json($array, 200);
});

Route::delete("/endp", function() {
    $array["message"] = "წარმატებით წაიშალა";
    return response()->json($array, 200);
});