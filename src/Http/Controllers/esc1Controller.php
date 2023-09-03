<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Pondit\BAF\Bafform\Models\Esc1;
use Pondit\BAF\Bafform\Http\Requests\Esc1Request;
use Illuminate\Database\QueryException;
use Exception;

class esc1Controller extends BafformController
{


    public function index()
    {
        $data  =   Esc1::orderBy('id', 'desc')->get();
        $formattedArray = [];
        if (!is_null($data)) {
            foreach ($data as $key => $datam) {
                $datam->accept_code_no        = json_decode($datam->accept_code_no);
                $datam->accept_obsn_sample    = json_decode($datam->accept_obsn_sample);
                $datam->accept_rmk            = json_decode($datam->accept_rmk);
                $datam->reject_code_no        = json_decode($datam->reject_code_no);
                $datam->reject_obsn_sample    = json_decode($datam->reject_obsn_sample);
                $datam->reject_rmk            = json_decode($datam->reject_rmk);

                array_push($formattedArray, $datam);
            }
        }
        return view('bafforms::esc1.index', compact('formattedArray'));
    }



    public function create()
    {
        return view('bafforms::esc1.create');
    }



    public function store(Esc1Request $request)
    {

        try {
            $esc1 = new Esc1;
            $esc1Column = $esc1->getTableColumns();
            $esc1MultiColumns = $this->processMutableColumns($esc1Column);
            foreach ($esc1MultiColumns as $esc1MultiColumn) {
                $esc1->$esc1MultiColumn = $request->input($esc1MultiColumn);
            }
            $esc1->accept_code_no        = json_encode($esc1->accept_code_no);
            $esc1->accept_obsn_sample    = json_encode($esc1->accept_obsn_sample);
            $esc1->accept_rmk            = json_encode($esc1->accept_rmk);
            $esc1->reject_code_no        = json_encode($esc1->reject_code_no);
            $esc1->reject_obsn_sample    = json_encode($esc1->reject_obsn_sample);
            $esc1->reject_rmk            = json_encode($esc1->reject_rmk);
           
            $esc1->save();

            return redirect()
                ->route('esc1.index')
                ->withMessage('ESC 1 has been created successfully!');
        } catch (Exception $th) {
            return redirect()
                ->route('esc1.create')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('esc1.create')
                ->withErrors($th->getMessage());
        }
    }

    public function view($esc1)
    {
    }

    public function edit($esc1)
    {
        $dataEdit = Esc1::find($esc1);
        try
        {
                $dataEdit->accept_code_no       = json_decode($dataEdit->accept_code_no);    
                $dataEdit->accept_obsn_sample   = json_decode($dataEdit->accept_obsn_sample); 
                $dataEdit->accept_rmk           = json_decode($dataEdit->accept_rmk);         
                $dataEdit->reject_code_no       = json_decode($dataEdit->reject_code_no);     
                $dataEdit->reject_obsn_sample   = json_decode($dataEdit->reject_obsn_sample); 
                $dataEdit->reject_rmk           = json_decode($dataEdit->reject_rmk);         
               
            return view('bafforms::esc1.edit', compact('dataEdit'));
        }
        catch (Exception $th)
        {
            dd($th->getMessage());
            return redirect()
                        ->route('esc1.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('esc1.index')
                        ->withErrors($th->getMessage());
        }
     }

     public function update(Esc1Request $request, $esc1)
     {
         $dataEdited = Esc1::find($esc1);
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
                 ->route('esc1.index')
                 ->withMessage('ESC 1 has been updated successfully!');
         }
         catch (Exception $th)
         {
             return redirect()
                         ->route('esc1.edit', $dataEdited->id)
                         ->withErrors($th->getMessage());
         }
         catch (QueryException $th)
         {
             return redirect()
                         ->route('esc1.edit', $dataEdited->id)
                         ->withErrors($th->getMessage());
         }
     }


     public function delete($esc1)
     {
         $deletedData = Esc1::find($esc1);
         try
         {
             $deletedData->delete();
 
             return redirect()
                         ->route('esc1.index')
                         ->withMessage('ESC 1 has been deleted successfully!');
         }
         catch (Exception $th)
         {
             return redirect()
                         ->route('esc1.index')
                         ->withErrors($th->getMessage());
         }
         catch (QueryException $th)
         {
             return redirect()
                         ->route('esc1.index')
                         ->withErrors($th->getMessage());
         }
     }
     
 
     public function downloadPdf(Esc1 $esc1)
     {
        $esc1->accept_code_no       = json_decode($esc1->accept_code_no);    
        $esc1->accept_obsn_sample   = json_decode($esc1->accept_obsn_sample); 
        $esc1->accept_rmk           = json_decode($esc1->accept_rmk);         
        $esc1->reject_code_no       = json_decode($esc1->reject_code_no);     
        $esc1->reject_obsn_sample   = json_decode($esc1->reject_obsn_sample); 
        $esc1->reject_rmk           = json_decode($esc1->reject_rmk);                         
         
         $mpdf = new \Mpdf\Mpdf([
             'default_font_size' => 18,
         ]);
        //  dd($esc1);
         $pdf = view('bafforms::esc1.pdf', compact('esc1'));
         $mpdf->WriteHTML($pdf);
         $mpdf->Output();  
    
     }
 
 
 }