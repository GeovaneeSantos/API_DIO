<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BandController extends Controller
{
    
    public static function getAll(){
        $bands = self::getBands();
        return response()->json($bands);
        }

    public function getByID($id){
        $bands = null;

        foreach($this->getBands() as $_band){
            if($_band['id'] == $id){
                $bands = $_band;
            } 
        }

        return $bands ? response()->json($bands) : abort(404);
        }  

    public function getByGender($gender){
        $bands = null;

        foreach($this->getBands() as $_band){
            if($_band['gender'] == $gender){
                $bands = $_band;
            } 
        }

        return $bands ? response()->json($bands) : abort(404);
        }  

    public function getByName($name){
        $bands = null;

        foreach($this->getBands() as $_band){
            if($_band['name'] == $name){
                $bands = $_band;
            } 
        }

        return $bands ? response()->json($bands) : abort(404);
        }    

    public function store(Request $request){
            $validate = $request->validate([
                `id` => ['numeric'],
                'name' => ['required']
            ]);

        return response()->json($request->all());
        }

    protected static function getBands(){
            return [
                [
                    'id' => "1", "name" => 'Dream tether', 'gender' => 'progressivo'
                ],
                [
                    'id' => "2", "name" => 'Radiohead', 'gender' => 'Punk'
                ],
                [
                    'id' => "3", "name" => 'Mettalica', 'gender' => 'Heavy mettal'
                ],
                [
                    'id' => "4", "name" => 'Kiss', 'gender' => 'Pop Rock'
                ]
            ];
        }
}
