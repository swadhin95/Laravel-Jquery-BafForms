<?php

namespace Pondit\BAF\Bafform\Http\Controllers\Api;

use Exception;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Pondit\BAF\Bafform\Models\Form600A;
use Pondit\BAF\Bafform\Http\Controllers\Api\BafformApiController;

class Form600AApiController extends BafformApiController
{
    public function index()
    {
        $form600As  =   Form600A::orderBy('id', 'DESC')->get();

        $columns   =   $this->prepareColumnsMap(new Form600A());

        // $this->prepareResponse(true, 'ConcernGroup(s) have been retrieved successfully!');

        $this->res['data']     =   $form600As;
        $this->res['columns']  =   $columns;

        return response()->json($this->res);
    }

    public function store(Request $request)
    {
        try
        {
            $form600A    =   new Form600A;

            $columns           =   $form600A->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            $form600A->uuid = (String) Str::uuid();
            foreach($mutableColumns as $mutableColumn)
            {
                $form600A->$mutableColumn   =   $request->input($mutableColumn);
            }

            $form600A->save();

            return response()->json([
                'success'  => true,
                'data'     => $form600A
            ]);
        }
        catch (Exception $th)
        {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
        catch (QueryException $th)
        {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function view(Form600A $form600A)
    {
        try
        {
            // $this->prepareResponse(true, 'ConcernGroup has been retrieved successfully!');

            $this->res['data']     =   $form600A;
            return response()->json($this->res);
        }
        catch (Exception $th)
        {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);        }
        catch (QueryException $th)
        {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);        }
    }

    public function edit(Form600A $form600A)
    {
        try
        {
            // $this->prepareResponse(true, 'ConcernGroup has been retrieved successfully!');

            $this->res['data']     =   $form600A;

            return response()->json($this->res);
        }
        catch (Exception $th)
        {
            // return response()->json($this->prepareResponse(false, $th->getMessage()));
        }
        catch (QueryException $th)
        {
            // return response()->json($this->prepareResponse(false, $th->getMessage()));
        }
    }

    public function update(Request $request)
    {
        try
        {
            $data = [
                'product_count_date'          => $request[1],
                'ref_no'                      => $request[2],
                'section_product_description' => $request[3],
                'section_unit_of_goods'       => $request[4],
                'storage_wh_workable'         => $request[5],
                'storage_wh_repairable'       => $request[6],
                'stock_temporary_workable'    => $request[7],
                'stock_workable'              => $request[8],
                'stock_repairable'            => $request[9],
                'total_stock_workable'        => $request[10],
                'total_stock_repairable'      => $request[11],
                'stock_record_workable'       => $request[12],
                'stock_record_repairable'     => $request[13],
                'quotes_workable'             => $request[14],
                'quotes_repairable'           => $request[15],
                'deficit_workable'            => $request[16],
                'deficit_repairable'          => $request[17],
                'remarks'                     => $request[18]
            ];
            Form600A::where('id', $request[0])->update($data);
            
            return response()->json([
                'success'  => true,
            ]);

        }
        catch (Exception $th)
        {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
        catch (QueryException $th)
        {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function delete(Form600A $form600A)
    {
        try
        {

            $columns   =   $form600A->getTableColumns(); // Required If History Is Enabled


            // $form600A->updateSequenceOnDelete($form600A->sequence_number);

            $form600A->delete();

            // return response()->json($this->prepareResponse(true, 'ConcernGroup has been deleted successfully!'));
        }
        catch (Exception $th)
        {
            dd($th);
            // return response()->json($this->prepareResponse(false, $th->getMessage()));
        }
        catch (QueryException $th)
        {
            // return response()->json($this->prepareResponse(false, $th->getMessage()));
        }
    }

}
