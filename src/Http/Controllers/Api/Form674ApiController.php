<?php

namespace Pondit\BAF\Bafform\Http\Controllers\Api;

use Exception;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Pondit\BAF\Bafform\Models\Form674;
use Pondit\BAF\Bafform\Http\Controllers\Api\BafformApiController;

class Form674ApiController extends BafformApiController
{
    public function index()
    {
        $form674  =   Form674::orderBy('id', 'DESC')->get();

        $columns   =   $this->prepareColumnsMap(new Form674());

        // $this->prepareResponse(true, 'ConcernGroup(s) have been retrieved successfully!');

        $this->res['data']     =   $form674;
        $this->res['columns']  =   $columns;

        return response()->json($this->res);
    }

    public function store(Request $request)
    {
        try
        {
            $form674    =   new Form674;

            $columns           =   $form674->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            $form674->uuid = (String) Str::uuid();
            foreach($mutableColumns as $mutableColumn)
            {
                $form674->$mutableColumn   =   $request->input($mutableColumn);
            }

            $form674->save();

            return response()->json([
                'success'  => true,
                'data'     => $form674
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

    public function view(Form674 $form674)
    {
        try
        {
            // $this->prepareResponse(true, 'ConcernGroup has been retrieved successfully!');

            $this->res['data']  =  $form674;
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

    public function edit(Form674 $form674)
    {
        try
        {
            // $this->prepareResponse(true, 'ConcernGroup has been retrieved successfully!');

            $this->res['data']     =   $form674;

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
                'sl_no'   => $request[1],
                'ref_no'   => $request[2],
                'product_description' => $request[3],
                'product_unit'  => $request[4],
                'demand'  => $request[5],
                'issue'  => $request[6],
                'posted'  => $request[7],
                'information_for_consideration'  => $request[8],
            ];
            Form674::where('id', $request[0])->update($data);
            
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

    public function delete(Form674 $form674)
    {
        try
        {
            $columns   =   $form674->getTableColumns(); // Required If History Is Enabled

            // $form674->updateSequenceOnDelete($form674->sequence_number);

            $form674->delete();

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
