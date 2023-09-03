<?php

namespace Pondit\BAF\Bafform\Http\Controllers\Api;

use Exception;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Pondit\BAF\Bafform\Models\Form673;
use Pondit\BAF\Bafform\Http\Controllers\Api\BafformApiController;

class Form673ApiController extends BafformApiController
{
    public function index()
    {
        $form673  =   Form673::orderBy('id', 'DESC')->get();

        $columns   =   $this->prepareColumnsMap(new Form673());

        // $this->prepareResponse(true, 'ConcernGroup(s) have been retrieved successfully!');

        $this->res['data']     =   $form673;
        $this->res['columns']  =   $columns;

        return response()->json($this->res);
    }

    public function store(Request $request)
    {
        try
        {
            $form673    =   new Form673;

            $columns           =   $form673->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            $form673->uuid = (String) Str::uuid();
            foreach($mutableColumns as $mutableColumn)
            {
                $form673->$mutableColumn   =   $request->input($mutableColumn);
            }

            $form673->save();

            return response()->json([
                'success'  => true,
                'data'     => $form673
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

    public function view(Form673 $form673)
    {
        try
        {
            // $this->prepareResponse(true, 'ConcernGroup has been retrieved successfully!');

            $this->res['data']     =   $form673;
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

    public function edit(Form673 $form673)
    {
        try
        {
            // $this->prepareResponse(true, 'ConcernGroup has been retrieved successfully!');

            $this->res['data']     =   $form673;

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
                'ref_no'                      => $request[1],
                'product_description'         => $request[2],
                'product_unit'                => $request[3],
                'returnable_product_amount'   => $request[4],
                'repairable_product_ledger'   => $request[5],
                'supply_product_amount'       => $request[6],
                'usable_product_ledger'       => $request[7],
                'reason_for_exchange'         => $request[8],
            ];
            Form673::where('id', $request[0])->update($data);
            
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

    public function delete(Form673 $form673)
    {
        try
        {

            $columns   =   $form673->getTableColumns(); // Required If History Is Enabled


            // $form600A->updateSequenceOnDelete($form600A->sequence_number);

            $form673->delete();

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
