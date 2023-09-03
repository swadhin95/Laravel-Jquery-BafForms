<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Illuminate\Http\Request;
use Pondit\BAF\Bafform\Http\Requests\Form674Request;
use Pondit\BAF\Bafform\Models\Form674;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Database\QueryException;
use Pondit\BAF\Bafform\Http\Controllers\BafformController;

class Form674Controller extends BafformController
{
    
    public function create(){
        return view("bafforms::form674.create");
    }

    public function index(){
       $data =  Form674::orderBy('id', 'desc')->get();

       $formatedArray = [];
        if(!is_null($data))
        {
          foreach($data as $key => $datam){
            $datam->ref_no = json_decode($datam->ref_no);
            $datam->description_of_goods = json_decode($datam->description_of_goods);
            $datam->demand = json_decode($datam->demand);
            $datam->issue = json_decode($datam->issue);
            $datam->posted = json_decode($datam->posted);
            $datam->important_data = json_decode($datam->important_data);
            array_push($formatedArray, $datam);
          }
          
        }
        return view('bafforms::form674.index', compact('formatedArray'));
    }

    public function store(Form674Request $request){
        try{
            $validated =  $request->validated();  
            $form674 =   new Form674;  

            $columns = $form674->getTableColumns();
            $mutableColumns =  $this->processMutableColumns($columns);
            $form674->uuid = (string) Str::uuid();
     
            foreach($mutableColumns as $mutableColumn)
                {
                    $form674->$mutableColumn   =   $request->input($mutableColumn);
                }
    
                $form674->ref_no = json_encode($form674->ref_no);
                $form674->description_of_goods = json_encode($form674->description_of_goods);
                $form674->demand = json_encode($form674->demand);
                $form674->issue = json_encode($form674->issue);
                $form674->posted = json_encode($form674->posted);
                $form674->important_data = json_encode($form674->important_data);
                $form674->save();

                return redirect()
                ->route('form674.index')
                ->withMessage('Form-674 has been created successfully!');
        }
       
        catch(Exception $th){
            return redirect()->route('create')->withErrors($th->getMessage());
        } 
        catch(QueryException $th){
            return redirect()->route('create')->withError($th->getMessage());
        }

    }


}
