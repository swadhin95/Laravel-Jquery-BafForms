<?php

namespace Pondit\BAF\Bafform\Http\Controllers;

use Pondit\BAF\Bafform\Models\Form87;
use Pondit\BAF\Bafform\Http\Requests\Form87Request;
use Illuminate\Database\QueryException;
use Exception;
use Illuminate\Support\Str;

class Form87Controller extends BafformController
{


    public function index()
    {
        $data  =   Form87::orderBy('id', 'desc')->get();
        $formattedArray = [];
        if (!is_null($data)) {
            foreach ($data as $key => $datam) {
                $datam->section_no                           = json_decode($datam->section_no);
                $datam->part_no                              = json_decode($datam->part_no);
                $datam->details                              = json_decode($datam->details);
                $datam->stock_workable                       = json_decode($datam->stock_workable);
                $datam->stock_base_repairable                = json_decode($datam->stock_base_repairable);
                $datam->stock_depo_repairable                = json_decode($datam->stock_depo_repairable);
                $datam->stock_useless                        = json_decode($datam->stock_useless);
                $datam->quality_control_workable             = json_decode($datam->quality_control_workable);
                $datam->quality_control_base_repairable      = json_decode($datam->quality_control_base_repairable);
                $datam->quality_control_depo_repairable      = json_decode($datam->quality_control_depo_repairable);
                $datam->quality_control_useless              = json_decode($datam->quality_control_useless);
                $datam->unclassified                         = json_decode($datam->unclassified);

                array_push($formattedArray, $datam);
            }
        }
        return view('bafforms::form87.index', compact('formattedArray'));
    }



    public function create()
    {
        return view('bafforms::form87.create');
    }



    public function store(Form87Request $request)
    {

        try {
            $validated          = $request->validated();
            $form87             = new Form87;
            $form87Column       = $form87->getTableColumns();
            $form87MultiColumns = $this->processMutableColumns($form87Column);
            foreach ($form87MultiColumns as $form87MultiColumn) {
                $form87->$form87MultiColumn = $request->input($form87MultiColumn);
            }
            $form87->section_no                           = json_encode($form87->section_no);
            $form87->part_no                              = json_encode($form87->part_no);
            $form87->details                              = json_encode($form87->details);
            $form87->stock_workable                       = json_encode($form87->stock_workable);
            $form87->stock_base_repairable                = json_encode($form87->stock_base_repairable);
            $form87->stock_depo_repairable                = json_encode($form87->stock_depo_repairable);
            $form87->stock_useless                        = json_encode($form87->stock_useless);
            $form87->quality_control_workable             = json_encode($form87->quality_control_workable);
            $form87->quality_control_base_repairable      = json_encode($form87->quality_control_base_repairable);
            $form87->quality_control_depo_repairable      = json_encode($form87->quality_control_depo_repairable);
            $form87->quality_control_useless              = json_encode($form87->quality_control_useless);
            $form87->unclassified                         = json_encode($form87->unclassified);

            $form87->uuid = (string) Str::uuid();
            // dd($form87);
            $form87->save();



            return redirect()
                ->route('form87.index')
                ->withMessage('Form 87 has been created successfully!');
        } catch (Exception $th) {
            // dd($th->getMessage());
            return redirect()
                ->route('form87.create')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form87.create')
                ->withErrors($th->getMessage());
        }
    }

    public function view($form87)
    {
    }

    public function edit($form87)
    {
        $dataEdit = Form87::find($form87);
        try {
            $dataEdit->section_no                           = json_decode($dataEdit->section_no);
            $dataEdit->part_no                              = json_decode($dataEdit->part_no);
            $dataEdit->details                              = json_decode($dataEdit->details);
            $dataEdit->stock_workable                       = json_decode($dataEdit->stock_workable);
            $dataEdit->stock_base_repairable                = json_decode($dataEdit->stock_base_repairable);
            $dataEdit->stock_depo_repairable                = json_decode($dataEdit->stock_depo_repairable);
            $dataEdit->stock_useless                        = json_decode($dataEdit->stock_useless);
            $dataEdit->quality_control_workable             = json_decode($dataEdit->quality_control_workable);
            $dataEdit->quality_control_base_repairable      = json_decode($dataEdit->quality_control_base_repairable);
            $dataEdit->quality_control_depo_repairable      = json_decode($dataEdit->quality_control_depo_repairable);
            $dataEdit->quality_control_useless              = json_decode($dataEdit->quality_control_useless);
            $dataEdit->unclassified                         = json_decode($dataEdit->unclassified);

            return view('bafforms::form87.edit', compact('dataEdit'));
        } catch (Exception $th) {
            // dd($th->getMessage());
            return redirect()
                ->route('form87.index')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form87.index')
                ->withErrors($th->getMessage());
        }
    }

    public function update(Form87Request $request, $form87)
    {
        $dataEdited = Form87::find($form87);
        try {
            $columns           =   $dataEdited->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            foreach ($mutableColumns as $mutableColumn) {
                $dataEdited->$mutableColumn   =   $request->input($mutableColumn);
            }

            $dataEdited->save();

            return redirect()
                ->route('form87.index')
                ->withMessage('Form 87 has been updated successfully!');
        } catch (Exception $th) {
            return redirect()
                ->route('form87.edit', $dataEdited->id)
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form87.edit', $dataEdited->id)
                ->withErrors($th->getMessage());
        }
    }


    public function delete($form87)
    {
        $deletedData = Form87::find($form87);
        try {
            $deletedData->delete();

            return redirect()
                ->route('form87.index')
                ->withMessage('Form 87 has been deleted successfully!');
        } catch (Exception $th) {
            return redirect()
                ->route('form87.index')
                ->withErrors($th->getMessage());
        } catch (QueryException $th) {
            return redirect()
                ->route('form87.index')
                ->withErrors($th->getMessage());
        }
    }


    public function downloadPdf(Form87 $form87)
    {
            $form87->section_no                           = json_decode($form87->section_no);
            $form87->part_no                              = json_decode($form87->part_no);
            $form87->details                              = json_decode($form87->details);
            $form87->stock_workable                       = json_decode($form87->stock_workable);
            $form87->stock_base_repairable                = json_decode($form87->stock_base_repairable);
            $form87->stock_depo_repairable                = json_decode($form87->stock_depo_repairable);
            $form87->stock_useless                        = json_decode($form87->stock_useless);
            $form87->quality_control_workable             = json_decode($form87->quality_control_workable);
            $form87->quality_control_base_repairable      = json_decode($form87->quality_control_base_repairable);
            $form87->quality_control_depo_repairable      = json_decode($form87->quality_control_depo_repairable);
            $form87->quality_control_useless              = json_decode($form87->quality_control_useless);
            $form87->unclassified                         = json_decode($form87->unclassified);

        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 18,
        ]);
        $pdf = view('bafforms::form87.pdf', compact('form87'));
        $mpdf->WriteHTML($pdf);
        $mpdf->Output();
    }
}
