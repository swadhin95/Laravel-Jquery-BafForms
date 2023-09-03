<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Pondit\BAF\Bafform\Models\PresentStockQty;
use Pondit\BAF\Bafform\Http\Requests\PresentStockQtyRequest;
use Illuminate\Database\QueryException;
use Exception;

class PresentStockQtyController extends BafformController
{
    public function index()
    {
        $data  =   PresentStockQty::orderBy('id', 'desc')->get();
        $formattedArray = [];
        if (!is_null($data)) {
            foreach ($data as $key => $datam) {
                $datam->serial_no_one               = json_decode($datam->serial_no_one);           
                $datam->description_of_items_one    = json_decode($datam->description_of_items_one);
                $datam->ui_one                      = json_decode($datam->ui_one);                  
                $datam->mu_baf_one                  = json_decode($datam->mu_baf_one);             
                $datam->dues_in_one                 = json_decode($datam->dues_in_one);             
                $datam->bbd_one                     = json_decode($datam->bbd_one);                 
                $datam->bsr_one                     = json_decode($datam->bsr_one);                 
                $datam->zhr_one                     = json_decode($datam->zhr_one);                 
                $datam->mtr_one                     = json_decode($datam->mtr_one);                 
                $datam->present_stock_one           = json_decode($datam->present_stock_one);       
                $datam->avg_yr_consumption_one      = json_decode($datam->avg_yr_consumption_one); 
                 
                $datam->serial_no_two               = json_decode($datam->serial_no_two);           
                $datam->description_of_items_two    = json_decode($datam->description_of_items_two);
                $datam->ui_two                      = json_decode($datam->ui_two);                  
                $datam->mu_baf_two                  = json_decode($datam->mu_baf_two);             
                $datam->dues_in_two                 = json_decode($datam->dues_in_two);             
                $datam->bbd_two                     = json_decode($datam->bbd_two);                 
                $datam->bsr_two                     = json_decode($datam->bsr_two);                 
                $datam->zhr_two                     = json_decode($datam->zhr_two);                 
                $datam->mtr_two                     = json_decode($datam->mtr_two);                 
                $datam->present_stock_two           = json_decode($datam->present_stock_two);       
                $datam->avg_yr_consumption_two      = json_decode($datam->avg_yr_consumption_two);

                $datam->serial_no_three             = json_decode($datam->serial_no_three);           
                $datam->description_of_items_three  = json_decode($datam->description_of_items_three);
                $datam->ui_three                    = json_decode($datam->ui_three);                  
                $datam->mu_baf_three                = json_decode($datam->mu_baf_three);             
                $datam->dues_in_three               = json_decode($datam->dues_in_three);             
                $datam->bbd_three                   = json_decode($datam->bbd_three);                 
                $datam->bsr_three                   = json_decode($datam->bsr_three);                 
                $datam->zhr_three                   = json_decode($datam->zhr_three);                 
                $datam->mtr_three                   = json_decode($datam->mtr_three);                 
                $datam->present_stock_three         = json_decode($datam->present_stock_three);       
                $datam->avg_yr_consumption_three    = json_decode($datam->avg_yr_consumption_three);
    
                array_push($formattedArray, $datam);
            }
        }
        return view('bafforms::PresentStockQty.index', compact('formattedArray'));
    }



    public function create(){
       return view('bafforms::PresentStockQty.create');
    }



    public function store(PresentStockQtyRequest $request){

        try
        {
        $presentStock= new PresentStockQty;
        $stockColumn = $presentStock->getTableColumns();
        $stockMultiColumns = $this->processMutableColumns($stockColumn);
        foreach($stockMultiColumns as $stockMultiColumn){
            $presentStock->$stockMultiColumn = $request->input($stockMultiColumn);
        }
                $presentStock->serial_no_one               = json_encode($presentStock->serial_no_one);           
                $presentStock->description_of_items_one    = json_encode($presentStock->description_of_items_one);
                $presentStock->ui_one                      = json_encode($presentStock->ui_one);                  
                $presentStock->mu_baf_one                  = json_encode($presentStock->mu_baf_one);             
                $presentStock->dues_in_one                 = json_encode($presentStock->dues_in_one);             
                $presentStock->bbd_one                     = json_encode($presentStock->bbd_one);                 
                $presentStock->bsr_one                     = json_encode($presentStock->bsr_one);                 
                $presentStock->zhr_one                     = json_encode($presentStock->zhr_one);                 
                $presentStock->mtr_one                     = json_encode($presentStock->mtr_one);                 
                $presentStock->present_stock_one           = json_encode($presentStock->present_stock_one);       
                $presentStock->avg_yr_consumption_one      = json_encode($presentStock->avg_yr_consumption_one); 
                  
                $presentStock->serial_no_two               = json_encode($presentStock->serial_no_two);           
                $presentStock->description_of_items_two    = json_encode($presentStock->description_of_items_two);
                $presentStock->ui_two                      = json_encode($presentStock->ui_two);                  
                $presentStock->mu_baf_two                  = json_encode($presentStock->mu_baf_two);             
                $presentStock->dues_in_two                 = json_encode($presentStock->dues_in_two);             
                $presentStock->bbd_two                     = json_encode($presentStock->bbd_two);                 
                $presentStock->bsr_two                     = json_encode($presentStock->bsr_two);                 
                $presentStock->zhr_two                     = json_encode($presentStock->zhr_two);                 
                $presentStock->mtr_two                     = json_encode($presentStock->mtr_two);                 
                $presentStock->present_stock_two           = json_encode($presentStock->present_stock_two);       
                $presentStock->avg_yr_consumption_two      = json_encode($presentStock->avg_yr_consumption_two);

                $presentStock->serial_no_three             = json_encode($presentStock->serial_no_three);           
                $presentStock->description_of_items_three  = json_encode($presentStock->description_of_items_three);
                $presentStock->ui_three                    = json_encode($presentStock->ui_three);                  
                $presentStock->mu_baf_three                = json_encode($presentStock->mu_baf_three);             
                $presentStock->dues_in_three               = json_encode($presentStock->dues_in_three);             
                $presentStock->bbd_three                   = json_encode($presentStock->bbd_three);                 
                $presentStock->bsr_three                   = json_encode($presentStock->bsr_three);                 
                $presentStock->zhr_three                   = json_encode($presentStock->zhr_three);                 
                $presentStock->mtr_three                   = json_encode($presentStock->mtr_three);                 
                $presentStock->present_stock_three         = json_encode($presentStock->present_stock_three);       
                $presentStock->avg_yr_consumption_three    = json_encode($presentStock->avg_yr_consumption_three);
        
                $presentStock->save();
            
            return redirect()
                        ->route('PresentStockQty.index')
                        ->withMessage('Present Stock Qty has been created successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('PresentStockQty.create')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('PresentStockQty.create')
                        ->withErrors($th->getMessage());
        }
    }


    public function view(PresentStockQty $presentStock,$PresentSQID)
    {
        try
        {
            return view('bafforms::PresentStockQty.view', compact('PresentSQID'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('PresentStockQty.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('PresentStockQty.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function edit($PresentSQID)
    {
        $dataEdit = PresentStockQty::find($PresentSQID);
        try
        {
                $dataEdit->serial_no_one               = json_decode($dataEdit->serial_no_one);           
                $dataEdit->description_of_items_one    = json_decode($dataEdit->description_of_items_one);
                $dataEdit->ui_one                      = json_decode($dataEdit->ui_one);                  
                $dataEdit->mu_baf_one                  = json_decode($dataEdit->mu_baf_one);             
                $dataEdit->dues_in_one                 = json_decode($dataEdit->dues_in_one);             
                $dataEdit->bbd_one                     = json_decode($dataEdit->bbd_one);                 
                $dataEdit->bsr_one                     = json_decode($dataEdit->bsr_one);                 
                $dataEdit->zhr_one                     = json_decode($dataEdit->zhr_one);                 
                $dataEdit->mtr_one                     = json_decode($dataEdit->mtr_one);                 
                $dataEdit->present_stock_one           = json_decode($dataEdit->present_stock_one);       
                $dataEdit->avg_yr_consumption_one      = json_decode($dataEdit->avg_yr_consumption_one); 
                 
                $dataEdit->serial_no_two               = json_decode($dataEdit->serial_no_two);           
                $dataEdit->description_of_items_two    = json_decode($dataEdit->description_of_items_two);
                $dataEdit->ui_two                      = json_decode($dataEdit->ui_two);                  
                $dataEdit->mu_baf_two                  = json_decode($dataEdit->mu_baf_two);             
                $dataEdit->dues_in_two                 = json_decode($dataEdit->dues_in_two);             
                $dataEdit->bbd_two                     = json_decode($dataEdit->bbd_two);                 
                $dataEdit->bsr_two                     = json_decode($dataEdit->bsr_two);                 
                $dataEdit->zhr_two                     = json_decode($dataEdit->zhr_two);                 
                $dataEdit->mtr_two                     = json_decode($dataEdit->mtr_two);                 
                $dataEdit->present_stock_two           = json_decode($dataEdit->present_stock_two);       
                $dataEdit->avg_yr_consumption_two      = json_decode($dataEdit->avg_yr_consumption_two);

                $dataEdit->serial_no_three             = json_decode($dataEdit->serial_no_three);           
                $dataEdit->description_of_items_three  = json_decode($dataEdit->description_of_items_three);
                $dataEdit->ui_three                    = json_decode($dataEdit->ui_three);                  
                $dataEdit->mu_baf_three                = json_decode($dataEdit->mu_baf_three);             
                $dataEdit->dues_in_three               = json_decode($dataEdit->dues_in_three);             
                $dataEdit->bbd_three                   = json_decode($dataEdit->bbd_three);                 
                $dataEdit->bsr_three                   = json_decode($dataEdit->bsr_three);                 
                $dataEdit->zhr_three                   = json_decode($dataEdit->zhr_three);                 
                $dataEdit->mtr_three                   = json_decode($dataEdit->mtr_three);                 
                $dataEdit->present_stock_three         = json_decode($dataEdit->present_stock_three);       
                $dataEdit->avg_yr_consumption_three    = json_decode($dataEdit->avg_yr_consumption_three);
            return view('bafforms::PresentStockQty.edit', compact('dataEdit'));
        }
        catch (Exception $th)
        {
            dd($th->getMessage());
            return redirect()
                        ->route('PresentStockQty.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('PresentStockQty.index')
                        ->withErrors($th->getMessage());
        }
     }

    public function update(PresentStockQtyRequest $request, $PresentSQID)
    {
        $dataEdited = PresentStockQty::find($PresentSQID);
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
                ->route('PresentStockQty.index')
                ->withMessage('Present Stock Qty has been updated successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('PresentStockQty.edit', $dataEdited->id)
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('PresentStockQty.edit', $dataEdited->id)
                        ->withErrors($th->getMessage());
        }
    }


    public function delete($PresentSQID)
    {
        $deletedData = PresentStockQty::find($PresentSQID);
        try
        {
            $deletedData->delete();

            return redirect()
                        ->route('PresentStockQty.index')
                        ->withMessage('Present Stock Qty has been deleted successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('PresentStockQty.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('PresentStockQty.index')
                        ->withErrors($th->getMessage());
        }
    }
    

    public function downloadPdf(PresentStockQty $PresentSQID)
    {
        $PresentSQID->serial_no_one               = json_decode($PresentSQID->serial_no_one);           
        $PresentSQID->description_of_items_one    = json_decode($PresentSQID->description_of_items_one);
        $PresentSQID->ui_one                      = json_decode($PresentSQID->ui_one);                  
        $PresentSQID->mu_baf_one                  = json_decode($PresentSQID->mu_baf_one);             
        $PresentSQID->dues_in_one                 = json_decode($PresentSQID->dues_in_one);             
        $PresentSQID->bbd_one                     = json_decode($PresentSQID->bbd_one);                 
        $PresentSQID->bsr_one                     = json_decode($PresentSQID->bsr_one);                 
        $PresentSQID->zhr_one                     = json_decode($PresentSQID->zhr_one);                 
        $PresentSQID->mtr_one                     = json_decode($PresentSQID->mtr_one);                 
        $PresentSQID->present_stock_one           = json_decode($PresentSQID->present_stock_one);       
        $PresentSQID->avg_yr_consumption_one      = json_decode($PresentSQID->avg_yr_consumption_one); 
        
        $PresentSQID->serial_no_two               = json_decode($PresentSQID->serial_no_two);           
        $PresentSQID->description_of_items_two    = json_decode($PresentSQID->description_of_items_two);
        $PresentSQID->ui_two                      = json_decode($PresentSQID->ui_two);                  
        $PresentSQID->mu_baf_two                  = json_decode($PresentSQID->mu_baf_two);             
        $PresentSQID->dues_in_two                 = json_decode($PresentSQID->dues_in_two);             
        $PresentSQID->bbd_two                     = json_decode($PresentSQID->bbd_two);                 
        $PresentSQID->bsr_two                     = json_decode($PresentSQID->bsr_two);                 
        $PresentSQID->zhr_two                     = json_decode($PresentSQID->zhr_two);                 
        $PresentSQID->mtr_two                     = json_decode($PresentSQID->mtr_two);                 
        $PresentSQID->present_stock_two           = json_decode($PresentSQID->present_stock_two);       
        $PresentSQID->avg_yr_consumption_two      = json_decode($PresentSQID->avg_yr_consumption_two);
  
        $PresentSQID->serial_no_three             = json_decode($PresentSQID->serial_no_three);           
        $PresentSQID->description_of_items_three  = json_decode($PresentSQID->description_of_items_three);
        $PresentSQID->ui_three                    = json_decode($PresentSQID->ui_three);                  
        $PresentSQID->mu_baf_three                = json_decode($PresentSQID->mu_baf_three);             
        $PresentSQID->dues_in_three               = json_decode($PresentSQID->dues_in_three);             
        $PresentSQID->bbd_three                   = json_decode($PresentSQID->bbd_three);                 
        $PresentSQID->bsr_three                   = json_decode($PresentSQID->bsr_three);                 
        $PresentSQID->zhr_three                   = json_decode($PresentSQID->zhr_three);                 
        $PresentSQID->mtr_three                   = json_decode($PresentSQID->mtr_three);                 
        $PresentSQID->present_stock_three         = json_decode($PresentSQID->present_stock_three);       
        $PresentSQID->avg_yr_consumption_three    = json_decode($PresentSQID->avg_yr_consumption_three);        
        
        
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 18,
        ]);
        $pdf = view('bafforms::PresentStockQty.pdf', compact('PresentSQID'));
        $mpdf->WriteHTML($pdf);
        $mpdf->Output();  
   
    }


}


