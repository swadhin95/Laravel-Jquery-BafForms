<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Pondit\BAF\Bafform\Models\Form10289;
use Pondit\BAF\Bafform\Http\Requests\Form10289Request;
use Illuminate\Database\QueryException;
use Exception;
use Illuminate\Support\Str;

class Form10289Controller extends BafformController
{


    public function index()
    {
        $data  =   Form10289::orderBy('id', 'desc')->get();
        $formattedArray = [];
        if (!is_null($data)) {
            foreach ($data as $key => $datam) {
                $datam->date          = json_decode($datam->date);
                $datam->dawn          = json_decode($datam->dawn);
                $datam->sunrise       = json_decode($datam->sunrise);
                $datam->sunset        = json_decode($datam->sunset);
                $datam->twilight      = json_decode($datam->twilight);
                $datam->moonrise      = json_decode($datam->moonrise);
                $datam->moonset       = json_decode($datam->moonset);
                $datam->crescent      = json_decode($datam->crescent);

                array_push($formattedArray, $datam);
            }
        }
        return view('bafforms::form10289.index', compact('formattedArray'));
    }



    public function create()
    {
        return view('bafforms::form10289.create');
    }



    public function store(Form10289Request $request)
    {

        try {
            $validated          = $request->validated();
            $form10289             = new Form10289;
            $form10289Column       = $form10289->getTableColumns();
            $form10289MultiColumns = $this->processMutableColumns($form10289Column);
            foreach ($form10289MultiColumns as $form10289MultiColumn) {
                $form10289->$form10289MultiColumn = $request->input($form10289MultiColumn);
            }
            $form10289->date          = json_encode($form10289->date);
            $form10289->dawn          = json_encode($form10289->dawn);
            $form10289->sunrise       = json_encode($form10289->sunrise);
            $form10289->sunset        = json_encode($form10289->sunset);
            $form10289->twilight      = json_encode($form10289->twilight);
            $form10289->moonrise      = json_encode($form10289->moonrise);
            $form10289->moonset       = json_encode($form10289->moonset);
            $form10289->crescent      = json_encode($form10289->crescent);

            $form10289->uuid = (string) Str::uuid();
            // dd($form10289);
            $form10289->save();



            return redirect()
                ->route('form10289.index')
                ->withMessage('Form 10289 has been created successfully!');
        } catch (Exception $th) {
            // dd($th->getMessage());
            return redirect()
                ->route('form10289.create')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form10289.create')
                ->withErrors($th->getMessage());
        }
    }

    public function view($form10289)
    {
    }

    public function edit($form10289)
    {
        $dataEdit = Form10289::find($form10289);
        try {
            $dataEdit->date          = json_decode($dataEdit->date);
            $dataEdit->dawn          = json_decode($dataEdit->dawn);
            $dataEdit->sunrise       = json_decode($dataEdit->sunrise);
            $dataEdit->sunset        = json_decode($dataEdit->sunset);
            $dataEdit->twilight      = json_decode($dataEdit->twilight);
            $dataEdit->moonrise      = json_decode($dataEdit->moonrise);
            $dataEdit->moonset       = json_decode($dataEdit->moonset);
            $dataEdit->crescent      = json_decode($dataEdit->crescent);

            return view('bafforms::form10289.edit', compact('dataEdit'));
        } catch (Exception $th) {
            // dd($th->getMessage());
            return redirect()
                ->route('form10289.index')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form10289.index')
                ->withErrors($th->getMessage());
        }
    }

    public function update(Form10289Request $request, $form10289)
    {
        $dataEdited = Form10289::find($form10289);
        try {
            $columns           =   $dataEdited->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            foreach ($mutableColumns as $mutableColumn) {
                $dataEdited->$mutableColumn   =   $request->input($mutableColumn);
            }

            $dataEdited->save();

            return redirect()
                ->route('form10289.index')
                ->withMessage('Form 10289 has been updated successfully!');
        } catch (Exception $th) {
            return redirect()
                ->route('form10289.edit', $dataEdited->id)
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form10289.edit', $dataEdited->id)
                ->withErrors($th->getMessage());
        }
    }


    public function delete($form10289)
    {
        $deletedData = Form10289::find($form10289);
        try {
            $deletedData->delete();

            return redirect()
                ->route('form10289.index')
                ->withMessage('Form 10289 has been deleted successfully!');
        } catch (Exception $th) {
            return redirect()
                ->route('form10289.index')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form10289.index')
                ->withErrors($th->getMessage());
        }
    }


    public function downloadPdf(Form10289 $form10289)
    {
        $form10289->date          = json_decode($form10289->date);
        $form10289->dawn          = json_decode($form10289->dawn);
        $form10289->sunrise       = json_decode($form10289->sunrise);
        $form10289->sunset        = json_decode($form10289->sunset);
        $form10289->twilight      = json_decode($form10289->twilight);
        $form10289->moonrise      = json_decode($form10289->moonrise);
        $form10289->moonset       = json_decode($form10289->moonset);
        $form10289->crescent      = json_decode($form10289->crescent);

        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 18,
        ]);
        $pdf = view('bafforms::form10289.pdf', compact('form10289'));
        $mpdf->WriteHTML($pdf);
        $mpdf->Output();
    }
}
