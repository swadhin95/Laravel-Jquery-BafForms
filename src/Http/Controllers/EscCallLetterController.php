<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Pondit\BAF\Bafform\Models\EscCall;
use Pondit\BAF\Bafform\Http\Requests\EscCallLetterRequest;
use Illuminate\Database\QueryException;
use Exception;

class EscCallLetterController extends BafformController
{


    public function index()
    {
        $data  =   EscCall::orderBy('id', 'desc')->get();
        $formattedArray = [];
        if (!is_null($data)) {
            foreach ($data as $key => $datam) {
                $datam->one_serial       = json_decode($datam->one_serial);
                $datam->one_indent       = json_decode($datam->one_indent);
                $datam->one_description  = json_decode($datam->one_description);
                $datam->one_qty          = json_decode($datam->one_qty);
                $datam->one_rmk          = json_decode($datam->one_rmk);
                array_push($formattedArray, $datam);
            }
        }
        return view('bafforms::EscCallLetter.index', compact('formattedArray'));
    }



    public function create(){
        return view('bafforms::EscCallLetter.create');
    }



    public function store(EscCallLetterRequest $request){

        try
        {
        $escCall= new EscCall;
        $escColumn = $escCall->getTableColumns();
        $escMultiColumns = $this->processMutableColumns($escColumn);
        foreach($escMultiColumns as $escMultiColumn){
            $escCall->$escMultiColumn = $request->input($escMultiColumn);
        }
        $escCall->one_serial =       json_encode($escCall->one_serial);
        $escCall->one_indent =       json_encode($escCall->one_indent);
        $escCall->one_description =  json_encode($escCall->one_description);
        $escCall->one_qty =          json_encode($escCall->one_qty);
        $escCall->one_rmk =          json_encode($escCall->one_rmk);
        
        $escCall->save();
            
            return redirect()
                        ->route('EscCallLetter.index')
                        ->withMessage('Esc Call Letter has been created successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('EscCallLetter.create')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('EscCallLetter.create')
                        ->withErrors($th->getMessage());
        }
    }

    public function view(EscCall $escCall)
    {
        try
        {
            return view('bafforms::EscCallLetter.view', compact('escCall'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('EscCallLetter.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('EscCallLetter.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function edit($esc_calls)
    {
        $data = EscCall::find($esc_calls);
        try
        {
            $data->one_serial       = json_decode($data->one_serial);
            $data->one_indent       = json_decode($data->one_indent);
            $data->one_description  = json_decode($data->one_description);
            $data->one_qty          = json_decode($data->one_qty);
            $data->one_rmk          = json_decode($data->one_rmk);
            return view('bafforms::EscCallLetter.edit', compact('data'));
        }
        catch (Exception $th)
        {
            dd($th->getMessage());
            return redirect()
                        ->route('EscCallLetter.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('EscCallLetter.index')
                        ->withErrors($th->getMessage());
        }
     }

    public function update(EscCallLetterRequest $request,$esc_calls)
    {
        $data = EscCall::find($esc_calls);
        try
        {
            $columns           =   $data->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn)
            {
                $data->$mutableColumn   =   $request->input($mutableColumn);
            }

            $data->save();

            return redirect()
                ->route('EscCallLetter.index')
                ->withMessage('Esc Call Letter has been updated successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('EscCallLetter.edit', $data->id)
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('EscCallLetter.edit', $data->id)
                        ->withErrors($th->getMessage());
        }
    }


    public function delete($esc_calls)
    {
        $deletedData = EscCall::find($esc_calls);
        try
        {
            $deletedData->delete();

            return redirect()
                        ->route('EscCallLetter.index')
                        ->withMessage('Esc Call Letter has been deleted successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('EscCallLetter.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('EscCallLetter.index')
                        ->withErrors($th->getMessage());
        }
    }
    

    public function downloadPdf(EscCall $escCall)
    {
        $escCall->one_serial          = json_decode($escCall->one_serial);     
        $escCall->one_indent          = json_decode($escCall->one_indent);      
        $escCall->one_description     = json_decode($escCall->one_description); 
        $escCall->one_qty             = json_decode($escCall->one_qty);         
        $escCall->one_rmk             = json_decode($escCall->one_rmk);         
        
        
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 18,
        ]);
        $pdf = view('bafforms::EscCallLetter.pdf', compact('escCall'));
        $mpdf->WriteHTML($pdf);
        $mpdf->Output(); 
   
    }




}




