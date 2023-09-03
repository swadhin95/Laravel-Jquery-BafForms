<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Pondit\BAF\Bafform\Models\Form6;

use Pondit\BAF\Bafform\Http\Requests\Form6Request;

use Pondit\BAF\Bafform\Http\Controllers\BafformController;
use Illuminate\Database\QueryException;
use Exception;


class Form6Controller extends BafformController
{

    public function index()
    {
        $data  =   Form6::orderBy('id', 'desc')->get();
        $formattedArray = [];
        if (!is_null($data)) {
            foreach ($data as $key => $datam) {
                $datam->reg_no               = json_decode($datam->reg_no);
                $datam->part_no              = json_decode($datam->part_no);
                $datam->product_name         = json_decode($datam->product_name);
                $datam->work_type            = json_decode($datam->work_type);
                $datam->store                = json_decode($datam->store);
                $datam->next_six_month_store = json_decode($datam->next_six_month_store);
                $datam->rep_or_build         = json_decode($datam->rep_or_build);
                $datam->workable             = json_decode($datam->workable);
                $datam->not_workable         = json_decode($datam->not_workable);
                $datam->repairable           = json_decode($datam->repairable);
                $datam->convert              = json_decode($datam->convert);
                $datam->comment              = json_decode($datam->comment);
                array_push($formattedArray, $datam);
            }
        }
        // dd($formattedArray);
        return view('bafforms::form6.index', compact('formattedArray'));
    }

    public function create()
    {
        return view('bafforms::form6.create');
    }

    public function store(Form6Request $request){

        try
        {
        $form6= new Form6;
        $formSixColumn = $form6->getTableColumns();
        $formSixMultiColumns = $this->processMutableColumns($formSixColumn);
        foreach($formSixMultiColumns as $formSixMultiColumn){
            $form6->$formSixMultiColumn = $request->input($formSixMultiColumn);
        }
        $form6->reg_no                = json_encode($form6->reg_no);
        $form6->part_no               = json_encode($form6->part_no);
        $form6->product_name          = json_encode($form6->product_name);
        $form6->work_type             = json_encode($form6->work_type);
        $form6->store                 = json_encode($form6->store);
        $form6->next_six_month_store  = json_encode($form6->next_six_month_store);
        $form6->rep_or_build          = json_encode($form6->rep_or_build);
        $form6->workable              = json_encode($form6->workable);
        $form6->not_workable          = json_encode($form6->not_workable);
        $form6->repairable            = json_encode($form6->repairable);
        $form6->convert               = json_encode($form6->convert);
        $form6->comment               = json_encode($form6->comment);
        // dd($form6);
        $form6->save();
            
            return redirect()
                        ->route('form6.index')
                        ->withMessage('Form 6 has been created successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form6.create')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form6.create')
                        ->withErrors($th->getMessage());
        }
    }

    public function view(Form6 $form6)
    {
        try
        {
            return view('bafforms::form6.view', compact('form6'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form6.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form6.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function edit($form6)
    {
        $dataEdit = Form6::find($form6);
        try
        {
                $dataEdit->reg_no               = json_decode($dataEdit->reg_no);
                $dataEdit->part_no              = json_decode($dataEdit->part_no);
                $dataEdit->product_name         = json_decode($dataEdit->product_name);
                $dataEdit->work_type            = json_decode($dataEdit->work_type);
                $dataEdit->store                = json_decode($dataEdit->store);
                $dataEdit->next_six_month_store = json_decode($dataEdit->next_six_month_store);
                $dataEdit->rep_or_build         = json_decode($dataEdit->rep_or_build);
                $dataEdit->workable             = json_decode($dataEdit->workable);
                $dataEdit->not_workable         = json_decode($dataEdit->not_workable);
                $dataEdit->repairable           = json_decode($dataEdit->repairable);
                $dataEdit->convert              = json_decode($dataEdit->convert);
                $dataEdit->comment              = json_decode($dataEdit->comment);
            return view('bafforms::form6.edit', compact('dataEdit'));
        }
        catch (Exception $th)
        {
            // dd($th->getMessage());
            return redirect()
                        ->route('form6.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form6.index')
                        ->withErrors($th->getMessage());
        }
     }

    public function update(Form6Request $request,$form6)
    {
        $dataEdited = Form6::find($form6);
        try
        {
            $columns           =   $dataEdited->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn)
            {
                $dataEdited->$mutableColumn   =   $request->input($mutableColumn);
            }

            
            $dataEdited->save();

            return redirect()
                ->route('form6.index')
                ->withMessage('Form 6 has been updated successfully!');
        }
        catch (Exception $th)
        {
            // dd($th->getMessage());
            return redirect()
                        ->route('form6.edit', $dataEdited->id)
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            
            return redirect()
                        ->route('form6.edit', $dataEdited->id)
                        ->withErrors($th->getMessage());
        }
    }


    public function delete($form6)
    {
        $deletedData = Form6::find($form6);
        // dd($deletedData);
        try
        {
            $deletedData->delete();

            return redirect()
                        ->route('form6.index')
                        ->withMessage('Form 6 has been deleted successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form6.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form6.index')
                        ->withErrors($th->getMessage());
        }
    }
    

    public function downloadPdf(Form6 $form6)
    {
        $form6->reg_no                   = json_decode($form6->reg_no);
        $form6->part_no                  = json_decode($form6->part_no);
        $form6->work_type                = json_decode($form6->work_type);
        $form6->store                    = json_decode($form6->store);
        $form6->next_six_month_store     = json_decode($form6->next_six_month_store);
        $form6->rep_or_build             = json_decode($form6->rep_or_build);
        $form6->workable                 = json_decode($form6->workable);
        $form6->not_workable             = json_decode($form6->not_workable);
        $form6->repairable               = json_decode($form6->repairable);
        $form6->convert                  = json_decode($form6->convert);
        $form6->comment                  = json_decode($form6->comment);         
        
        
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 18,
        ]);
        $pdf = view('bafforms::form6.pdf', compact('form6'));
        $mpdf->WriteHTML($pdf);
        $mpdf->Output(); 
   
    }




}