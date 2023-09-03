<?php

namespace Pondit\BAF\Bafform\Http\Controllers\Api;

use Exception;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Pondit\BAF\Bafform\Models\Form530;
use Pondit\BAF\Bafform\Http\Controllers\Api\BafformApiController;

class Form530ApiController extends BafformApiController
{
    public function index()
    {
        $form530  =   Form530::orderBy('id', 'DESC')->get();

        $columns   =   $this->prepareColumnsMap(new Form530());

        // $this->prepareResponse(true, 'ConcernGroup(s) have been retrieved successfully!');

        $this->res['data']     =   $form530;
        $this->res['columns']  =   $columns;

        return response()->json($this->res);
    }

    public function store(Request $request)
    {
        try
        {
            $form530    =   new Form530;

            $columns           =   $form530->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            $form530->uuid = (String) Str::uuid();
            foreach($mutableColumns as $mutableColumn)
            {
                $form530->$mutableColumn   =   $request->input($mutableColumn);
            }

            $form530->save();

            return response()->json([
                'success'  => true,
                'data'     => $form530
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

    public function view(Form530 $form530)
    {
        try
        {
            // $this->prepareResponse(true, 'ConcernGroup has been retrieved successfully!');

            $this->res['data']     =   $form530;
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

    public function edit(Form530 $form530)
    {
        try
        {
            // $this->prepareResponse(true, 'ConcernGroup has been retrieved successfully!');

            $this->res['data']     =   $form530;

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
                'item_no_of_contact'    => $request[1],
                'baf_ref_no'            => $request[2],
                'description_of_articles' => $request[3],
                'quantity_submitted_by_contractor'  => $request[4],
                'approved'  => $request[5],
                'rejected'  => $request[6],
                'rate'   => $request[7],
                'value'  => $request[8],
                'remarks'  => $request[9],
            ];
            Form530::where('id', $request[0])->update($data);
            
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

    public function delete(Form530 $form530)
    {
        try
        {

            $columns   =   $form530->getTableColumns(); // Required If History Is Enabled


            // $form600A->updateSequenceOnDelete($form600A->sequence_number);

            $form530->delete();

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
