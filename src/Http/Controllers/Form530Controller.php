<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Pondit\BAF\Bafform\Models\Form530;

use Pondit\BAF\Bafform\Http\Requests\Form530Request;

use Pondit\BAF\Bafform\Http\Controllers\BafformController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class Form530Controller extends BafformController
{

    public function index()
    {
        $form530  =   Form530::select(
            'id',
            'item_no_of_contact',
            'baf_ref_no',
            'description_of_articles',
            'quantity_submitted_by_contractor',
            'approved',
            'rejected',
            'rate',
            'value',
            'remarks',
        )->orderBy('id', 'ASC')
        ->get();
        return view('bafforms::form530.index', compact('form530'));
    }

    public function create()
    {
        return view('bafforms::form530.create');
    }

    public function store(Form530Request $request)
    {
        try
        {
            $validated     =   $request->validated();

            $form530    =   new Form530;

            $columns           =   $form530->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            $form530->uuid = (String) Str::uuid();
            foreach($mutableColumns as $mutableColumn)
            {
                $form530->$mutableColumn   =   $request->input($mutableColumn);
            }

            $form530->save();

            return redirect()
                        ->route('form530.index')
                        ->withMessage('Form-530 has been created successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form530.create')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form530.create')
                        ->withErrors($th->getMessage());
        }
    }

    public function view(Form530 $form530)
    {
        try
        {
            return view('bafforms::form530.view', compact('form530'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form530.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form530.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function edit(Form530 $form530)
    {
        try
        {
            return view('bafforms::form530.edit', compact('form530'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form530.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form530.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function update(Form5305Request $request, Form530 $form530)
    {
        try
        {
            $validated     =   $request->validated();

            $columns           =   $form530->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn)
            {
                $form530->$mutableColumn   =   $request->input($mutableColumn);
            }

            $form530->save();

            return redirect()
                ->route('form530.index')
                ->withMessage('Form-530 has been updated successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form530.edit', $form530->id)
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form530.edit', $form530->id)
                        ->withErrors($th->getMessage());
        }
    }

    public function delete(Form530 $form530)
    {
        try
        {
            $form530->delete();

            return redirect()
                        ->route('form530.index')
                        ->withMessage('Form-530 has been deleted successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('form530.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('form530.index')
                        ->withErrors($th->getMessage());
        }
    }

}
