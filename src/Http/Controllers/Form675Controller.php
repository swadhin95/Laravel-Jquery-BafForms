<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Pondit\BAF\Bafform\Models\Form675;

use Pondit\BAF\Bafform\Http\Requests\Form675Request;

use Pondit\BAF\Bafform\Http\Controllers\BafformController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class Form675Controller extends BafformController
{

    public function index()
    {
        $data  =   Form675::orderBy('id', 'desc')->get();
        $formattedArray = [];
        if (!is_null($data)) {
            foreach ($data as $key => $datam) {
                $datam->ref_no                   = json_decode($datam->ref_no);
                $datam->description_of_goods     = json_decode($datam->description_of_goods);
                $datam->unit                     = json_decode($datam->unit);
                $datam->qty_workable             = json_decode($datam->qty_workable);
                $datam->qty_repairable           = json_decode($datam->qty_repairable);
                $datam->stock_record_card_posted = json_decode($datam->stock_record_card_posted);
                $datam->reason_for_refund        = json_decode($datam->reason_for_refund);
                array_push($formattedArray, $datam);
            }
        }
        return view('bafforms::form675.index', compact('formattedArray'));
    }

    public function create()
    {
        return view('bafforms::form675.create');
    }

    
    public function store(Form675Request $request)
    {
        try
        {
            $validated      = $request->validated();
            $form675        = new Form675;
            $columns        = $form675->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);

            $form675->uuid = (String) Str::uuid();
            foreach($mutableColumns as $mutableColumn)
            {
                $form675->$mutableColumn   =   $request->input($mutableColumn);
            }
            $form675->ref_no                   = json_encode($form675->ref_no);
            $form675->description_of_goods     = json_encode($form675->description_of_goods);
            $form675->unit                     = json_encode($form675->unit);
            $form675->qty_workable             = json_encode($form675->qty_workable);
            $form675->qty_repairable           = json_encode($form675->qty_repairable);
            $form675->stock_record_card_posted = json_encode($form675->stock_record_card_posted);
            $form675->reason_for_refund        = json_encode($form675->reason_for_refund);

            $form675->save();
            
            return redirect()
                        ->route('form675.index')
                        ->withMessage('Form-675 has been created successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form675.create')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form675.create')
                        ->withErrors($th->getMessage());
        }
    }

    public function view(Form675 $form675)
    {
        try
        {
            return view('bafforms::form675.view', compact('form675'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form675.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form675.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function edit(Form675 $form675)
    {
         $data = Form675::find($form675);
        try
        {
            return view('bafforms::form675.edit', compact('data'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form675.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form675.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function update(Form675Request $request, Form675 $form675)
    {
                    
        try
        {
            $validated         =   $request->validated();
            $columns           =   $form675->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn)
            {
                $form675->$mutableColumn   =   $request->input($mutableColumn);
            }

            $form675->save();

            return redirect()
                ->route('form675.index')
                ->withMessage('Form-675 has been updated successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form675.edit', $form675->id)
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form675.edit', $form675->id)
                        ->withErrors($th->getMessage());
        }
    }

    public function delete(Form675 $form675)
    {
        try
        {
            $form675->delete();

            return redirect()
                        ->route('form675.index')
                        ->withMessage('Form-675 has been deleted successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form675.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form675.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function downloadPdf(Form675 $form675)
    {
        $form675->ref_no                   = json_decode($form675->ref_no);
        $form675->description_of_goods     = json_decode($form675->description_of_goods);
        $form675->unit                     = json_decode($form675->unit);
        $form675->qty_workable             = json_decode($form675->qty_workable);
        $form675->qty_repairable           = json_decode($form675->qty_repairable);
        $form675->stock_record_card_posted = json_decode($form675->stock_record_card_posted);
        $form675->reason_for_refund        = json_decode($form675->reason_for_refund);
        
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 18,
        ]);
        $pdf = view('bafforms::form675.pdf', compact('form675'));
        $mpdf->WriteHTML($pdf);
        $mpdf->Output(); 
   
    }


}
