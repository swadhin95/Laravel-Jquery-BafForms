<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Pondit\BAF\Bafform\Models\Form600A;

use Pondit\BAF\Bafform\Http\Requests\Form600ARequest;

use Pondit\BAF\Bafform\Http\Controllers\BafformController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class Form600AController extends BafformController
{

    public function index()
    {
        $form600As  =   Form600A::select(
            'id',
            'product_count_date',
            'ref_no',
            'section_product_description',
            'section_unit_of_goods',
            'storage_wh_workable',
            'storage_wh_repairable',
            'stock_temporary_workable',
            'stock_workable',
            'stock_repairable',
            'total_stock_workable',
            'total_stock_repairable',
            'stock_record_workable',
            'stock_record_repairable',
            'quotes_workable',
            'quotes_repairable',
            'deficit_workable',
            'deficit_repairable',
            'remarks'

        )->orderBy('id', 'ASC')
        ->get();

        return view('bafforms::form600A.index', compact('form600As'));
    }

    public function create()
    {
        return view('bafforms::form600A.create');
    }

    public function store(Form600ARequest $request)
    {
        try
        {
            $validated     =   $request->validated();

            $form600A    =   new Form600A;

            $columns           =   $form600A->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            $form600A->uuid = (String) Str::uuid();
            foreach($mutableColumns as $mutableColumn)
            {
                $form600A->$mutableColumn   =   $request->input($mutableColumn);
            }

            $form600A->save();

            return redirect()
                        ->route('form600As.index')
                        ->withMessage('Form-600A has been created successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form600As.create')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form600As.create')
                        ->withErrors($th->getMessage());
        }
    }

    public function view(Form600A $form600A)
    {
        try
        {
            return view('bafforms::form600A.view', compact('form600A'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form600As.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form600As.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function edit(Form600A $form600A)
    {
        try
        {
            return view('bafforms::form600A.edit', compact('form600A'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form600As.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form600As.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function update(Form600ARequest $request, Form600A $form600A)
    {
        try
        {
            $validated     =   $request->validated();

            $columns           =   $form600A->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn)
            {
                $form600A->$mutableColumn   =   $request->input($mutableColumn);
            }

            $form600A->save();

            return redirect()
                ->route('form600As.index')
                ->withMessage('Form-600A has been updated successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form600As.edit', $form600A->id)
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form600As.edit', $form600A->id)
                        ->withErrors($th->getMessage());
        }
    }

    public function delete(Form600A $form600A)
    {
        try
        {
            $form600A->delete();

            return redirect()
                        ->route('form600As.index')
                        ->withMessage('Form-600A has been deleted successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form600As.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form600As.index')
                        ->withErrors($th->getMessage());
        }
    }

}
