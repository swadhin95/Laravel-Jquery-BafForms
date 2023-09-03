<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Pondit\BAF\Bafform\Models\Form673;

use Pondit\BAF\Bafform\Http\Requests\Form673Request;

use Pondit\BAF\Bafform\Http\Controllers\BafformController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class Form673Controller extends BafformController
{

    public function index()
    {
        $form673  =   Form673::select(
            'id',
            'ref_no',
            'product_description',
            'product_unit',
            'returnable_product_amount',
            'repairable_product_ledger',
            'supply_product_amount',
            'usable_product_ledger',
            'reason_for_exchange',
        )->orderBy('id', 'ASC')
        ->get();

        return view('bafforms::form673.index', compact('form673'));
    }

    public function create()
    {
        return view('bafforms::form673.create');
    }

    public function store(Form673Request $request)
    {
        try
        {
            $validated     =   $request->validated();
            $form673    =   new Form673;
            $columns           =   $form673->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            $form673->uuid = (String) Str::uuid();
            foreach($mutableColumns as $mutableColumn)
            {
                $form673->$mutableColumn   =   $request->input($mutableColumn);
            }

            $form673->save();

            return redirect()
                        ->route('form673.index')
                        ->withMessage('Form-673 has been created successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form673.create')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form673.create')
                        ->withErrors($th->getMessage());
        }
    }

    public function view(Form673 $form673)
    {
        try
        {
            return view('bafforms::form673.view', compact('form673'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form673.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form673.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function edit(Form673 $form673)
    {
        try
        {
            return view('bafforms::form673.edit', compact('form673'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form673.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form673.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function update(Form673Request $request, Form673 $form673)
    {
        try
        {
            $validated     =   $request->validated();

            $columns           =   $form673->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn)
            {
                $form673->$mutableColumn   =   $request->input($mutableColumn);
            }

            $form673->save();

            return redirect()
                ->route('form673.index')
                ->withMessage('Form-675 has been updated successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form673.edit', $form673->id)
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form673.edit', $form673->id)
                        ->withErrors($th->getMessage());
        }
    }

    public function delete(form673 $form673)
    {
        try
        {
            $form673->delete();

            return redirect()
                        ->route('form673.index')
                        ->withMessage('Form-673 has been deleted successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form673.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form673.index')
                        ->withErrors($th->getMessage());
        }
    }

}
