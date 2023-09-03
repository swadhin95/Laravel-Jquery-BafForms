<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Pondit\BAF\Bafform\Models\Form34;
use Pondit\BAF\Bafform\Http\Requests\Form34Request;
use Illuminate\Database\QueryException;
use Exception;
use Illuminate\Support\Str;

class Form34Controller extends BafformController
{


    public function index()
    {
        $data  =   Form34::orderBy('id', 'desc')->get();
        $formattedArray = [];
        if (!is_null($data)) {
            foreach ($data as $key => $datam) {
                $datam->part_reference_no        = json_decode($datam->part_reference_no);
                $datam->product_des              = json_decode($datam->product_des);
                $datam->product_unit             = json_decode($datam->product_unit);
                $datam->product_number           = json_decode($datam->product_number);
                $datam->product_cond             = json_decode($datam->product_cond);
                $datam->price_in_book            = json_decode($datam->price_in_book);
                $datam->determining_price        = json_decode($datam->determining_price);
                $datam->price_in_taka            = json_decode($datam->price_in_taka);
                $datam->price_in_poisha          = json_decode($datam->price_in_poisha);
                $datam->search_committee         = json_decode($datam->search_committee);
                $datam->posted                   = json_decode($datam->posted);
                $datam->comment_consideration    = json_decode($datam->comment_consideration);

                array_push($formattedArray, $datam);
            }
        }
        return view('bafforms::form34.index', compact('formattedArray'));
    }



    public function create()
    {
        return view('bafforms::form34.create');
    }



    public function store(Form34Request $request)
    {

        try {
            $validated          = $request->validated();
            $form34             = new Form34;
            $form34Column       = $form34->getTableColumns();
            $form34MultiColumns = $this->processMutableColumns($form34Column);
            foreach ($form34MultiColumns as $form34MultiColumn) {
                $form34->$form34MultiColumn = $request->input($form34MultiColumn);
            }
            $form34->part_reference_no        = json_encode($form34->part_reference_no);
            $form34->product_des              = json_encode($form34->product_des);
            $form34->product_unit             = json_encode($form34->product_unit);
            $form34->product_number           = json_encode($form34->product_number);
            $form34->product_cond             = json_encode($form34->product_cond);
            $form34->price_in_book            = json_encode($form34->price_in_book);
            $form34->determining_price        = json_encode($form34->determining_price);
            $form34->price_in_taka            = json_encode($form34->price_in_taka);
            $form34->price_in_poisha          = json_encode($form34->price_in_poisha);
            $form34->search_committee         = json_encode($form34->search_committee);
            $form34->posted                   = json_encode($form34->posted);
            $form34->comment_consideration    = json_encode($form34->comment_consideration);

            $form34->uuid = (string) Str::uuid();
            // dd($form34);
            $form34->save();



            return redirect()
                ->route('form34.index')
                ->withMessage('Form 34 has been created successfully!');
        } catch (Exception $th) {
            // dd($th->getMessage());
            return redirect()
                ->route('form34.create')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form34.create')
                ->withErrors($th->getMessage());
        }
    }

    public function view($esc1)
    {
    }

    public function edit($form34)
    {
        $dataEdit = Form34::find($form34);
        try {
            $dataEdit->part_reference_no        = json_decode($dataEdit->part_reference_no);
            $dataEdit->product_des              = json_decode($dataEdit->product_des);
            $dataEdit->product_unit             = json_decode($dataEdit->product_unit);
            $dataEdit->product_number           = json_decode($dataEdit->product_number);
            $dataEdit->product_cond             = json_decode($dataEdit->product_cond);
            $dataEdit->price_in_book            = json_decode($dataEdit->price_in_book);
            $dataEdit->determining_price        = json_decode($dataEdit->determining_price);
            $dataEdit->price_in_taka            = json_decode($dataEdit->price_in_taka);
            $dataEdit->price_in_poisha          = json_decode($dataEdit->price_in_poisha);
            $dataEdit->search_committee         = json_decode($dataEdit->search_committee);
            $dataEdit->posted                   = json_decode($dataEdit->posted);
            $dataEdit->comment_consideration    = json_decode($dataEdit->comment_consideration);

            return view('bafforms::form34.edit', compact('dataEdit'));
        } catch (Exception $th) {
            // dd($th->getMessage());
            return redirect()
                ->route('form34.index')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form34.index')
                ->withErrors($th->getMessage());
        }
    }

    public function update(Form34Request $request, $form34)
    {
        $dataEdited = Form34::find($form34);
        try {
            $columns           =   $dataEdited->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            foreach ($mutableColumns as $mutableColumn) {
                $dataEdited->$mutableColumn   =   $request->input($mutableColumn);
            }

            $dataEdited->save();

            return redirect()
                ->route('form34.index')
                ->withMessage('Form 34 has been updated successfully!');
        } catch (Exception $th) {
            return redirect()
                ->route('form34.edit', $dataEdited->id)
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form34.edit', $dataEdited->id)
                ->withErrors($th->getMessage());
        }
    }


    public function delete($form34)
    {
        $deletedData = Form34::find($form34);
        try {
            $deletedData->delete();

            return redirect()
                ->route('form34.index')
                ->withMessage('Form 34 has been deleted successfully!');
        } catch (Exception $th) {
            return redirect()
                ->route('form34.index')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form34.index')
                ->withErrors($th->getMessage());
        }
    }


    public function downloadPdf(Form34 $form34)
    {
        $form34->part_reference_no        = json_decode($form34->part_reference_no);
        $form34->product_des              = json_decode($form34->product_des);
        $form34->product_unit             = json_decode($form34->product_unit);
        $form34->product_number           = json_decode($form34->product_number);
        $form34->product_cond             = json_decode($form34->product_cond);
        $form34->price_in_book            = json_decode($form34->price_in_book);
        $form34->determining_price        = json_decode($form34->determining_price);
        $form34->price_in_taka            = json_decode($form34->price_in_taka);
        $form34->price_in_poisha          = json_decode($form34->price_in_poisha);
        $form34->search_committee         = json_decode($form34->search_committee);
        $form34->posted                   = json_decode($form34->posted);
        $form34->comment_consideration    = json_decode($form34->comment_consideration);

        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 18,
        ]);
        $pdf = view('bafforms::form34.pdf', compact('form34'));
        $mpdf->WriteHTML($pdf);
        $mpdf->Output();
    }
}
