<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Pondit\BAF\Bafform\Models\Form664;
use Pondit\BAF\Bafform\Http\Requests\Form664Request;
use Illuminate\Database\QueryException;
use Exception;
use Illuminate\Support\Str;

class Form664Controller extends BafformController
{


    public function index()
    {
        $data  =   Form664::orderBy('id', 'desc')->get();
        $formattedArray = [];
        if (!is_null($data)) {
            foreach ($data as $key => $datam) {
                $datam->name          = json_decode($datam->name);
            
                array_push($formattedArray, $datam);
            }
        }
        return view('bafforms::form664.index', compact('formattedArray'));
    }



    public function create()
    {
        return view('bafforms::form664.create');
    }



    public function store(Form664Request $request)
    {

        try {
            $validated          = $request->validated();
            $form664             = new Form664;
            $form664Column       = $form664->getTableColumns();
            $form664MultiColumns = $this->processMutableColumns($form664Column);
            foreach ($form664MultiColumns as $form664MultiColumn) {
                $form664->$form664MultiColumn = $request->input($form664MultiColumn);
            }
            $form664->name          = json_encode($form664->name);

            $form664->uuid = (string) Str::uuid();
            // dd($form664);
            $form664->save();



            return redirect()
                ->route('form664.index')
                ->withMessage('Form 664 has been created successfully!');
        } catch (Exception $th) {
            // dd($th->getMessage());
            return redirect()
                ->route('form664.create')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form664.create')
                ->withErrors($th->getMessage());
        }
    }

    public function view($form664)
    {
    }

    public function edit($form664)
    {
        $dataEdit = Form664::find($form664);
        try {
            $dataEdit->name          = json_decode($dataEdit->name);
            
            return view('bafforms::form664.edit', compact('dataEdit'));
        } catch (Exception $th) {
            // dd($th->getMessage());
            return redirect()
                ->route('form664.index')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form664.index')
                ->withErrors($th->getMessage());
        }
    }

    public function update(Form664Request $request, $form664)
    {
        $dataEdited = Form664::find($form664);
        try {
            $columns           =   $dataEdited->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            foreach ($mutableColumns as $mutableColumn) {
                $dataEdited->$mutableColumn   =   $request->input($mutableColumn);
            }

            $dataEdited->save();

            return redirect()
                ->route('form664.index')
                ->withMessage('Form 664 has been updated successfully!');
        } catch (Exception $th) {
            return redirect()
                ->route('form664.edit', $dataEdited->id)
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form664.edit', $dataEdited->id)
                ->withErrors($th->getMessage());
        }
    }


    public function delete($form664)
    {
        $deletedData = Form664::find($form664);
        try {
            $deletedData->delete();

            return redirect()
                ->route('form664.index')
                ->withMessage('Form 664 has been deleted successfully!');
        } catch (Exception $th) {
            return redirect()
                ->route('form664.index')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form664.index')
                ->withErrors($th->getMessage());
        }
    }


    public function downloadPdf(Form664 $form664)
    {
        $form664->name          = json_decode($form664->name);
      
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 18,
        ]);
        // dd($form664);
        $pdf = view('bafforms::form664.pdf', compact('form664'));
        $mpdf->WriteHTML($pdf);
        $mpdf->Output();
    }
}
