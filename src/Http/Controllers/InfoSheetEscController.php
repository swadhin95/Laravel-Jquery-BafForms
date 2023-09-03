<?php

namespace Pondit\BAF\Bafform\Http\Controllers;


use Pondit\BAF\Bafform\Models\InfoSheetEsc;
use Pondit\BAF\Bafform\Http\Requests\InfoSheetEscRequest;
use Illuminate\Database\QueryException;
use Exception;

class InfoSheetEscController extends BafformController
{
    public function index(){
        $index = InfoSheetEsc::latest()->paginate(5);
        return view('bafforms::InfoSheetEsc.index',compact('index'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function create(){

        return view('bafforms::InfoSheetEsc.create');
        
    }

    public function store(InfoSheetEscRequest $request){
        $request->validate([
            'info_title'=>'required',
            'scale_officer'=>'required',
            'scale_officer_value'=>'required',
            'scale_cadets'=>'required',
            'scale_cadets_value'=>'required',
            'scale_airmen'=>'required',
            'scale_airmen_value'=>'required',
            'scale_airmen_value_two'=>'required',
            'scale_recruits'=>'required',
            'scale_recruits_value'=>'required',
            'strength_officers'=>'required',
            'strength_officers_value'=>'required',
            'strength_cadets'=>'required',
            'strength_cadets_value'=>'required',
            'strength_airmen'=>'required',
            'strength_airmen_value'=>'required',
            'strength_recruits'=>'required',
            'strength_recruits_value'=>'required',
            'yearly_rec'=>'required',
            'yearly_rec_value'=>'required',
            'three_yearly_rec'=>'required',
            'three_yearly_rec_value'=>'required',
            'avg_yr_costume'=>'required',
            'avg_yr_costume_value'=>'required',
            'per_stock'=>'required',
            'per_stock_value'=>'required',
            'dues_in'=>'required',
            'dues_in_value'=>'required',
            'int_qty_procure'=>'required',
            'int_qty_procure_value'=>'required',
            'esc_rec_qty'=>'required',
            'esc_rec_qty_value'=>'required',
            'note'=>'required',         
        ]);

        InfoSheetEsc::create($request->all());
        return redirect(route('InfoSheetEsc.index'))
        ->with('success','New Data Added successfully.');

    }

    public function show($id){
        $show = InfoSheetEsc::find($id);
        return view('bafforms::InfoSheetEsc.show',compact('show'));
    }

    public function edit($id){
      $edit = InfoSheetEsc::find($id);
      return view('bafforms::InfoSheetEsc.edit',compact('edit'));
    }

    public function update(InfoSheetEscRequest $request ,$id){
        $request->validate([
            'info_title'=>'required',
            'scale_officer'=>'required',
            'scale_officer_value'=>'required',
            'scale_cadets'=>'required',
            'scale_cadets_value'=>'required',
            'scale_airmen'=>'required',
            'scale_airmen_value'=>'required',
            'scale_airmen_value_two'=>'required',
            'scale_recruits'=>'required',
            'scale_recruits_value'=>'required',
            'strength_officers'=>'required',
            'strength_officers_value'=>'required',
            'strength_cadets'=>'required',
            'strength_cadets_value'=>'required',
            'strength_airmen'=>'required',
            'strength_airmen_value'=>'required',
            'strength_recruits'=>'required',
            'strength_recruits_value'=>'required',
            'yearly_rec'=>'required',
            'yearly_rec_value'=>'required',
            'three_yearly_rec'=>'required',
            'three_yearly_rec_value'=>'required',
            'avg_yr_costume'=>'required',
            'avg_yr_costume_value'=>'required',
            'per_stock'=>'required',
            'per_stock_value'=>'required',
            'dues_in'=>'required',
            'dues_in_value'=>'required',
            'int_qty_procure'=>'required',
            'int_qty_procure_value'=>'required',
            'esc_rec_qty'=>'required',
            'esc_rec_qty_value'=>'required',
            'note'=>'required',         
        ]);

        $update = InfoSheetEsc::find($id);
        $update ->update($request->all());

        return redirect()->route('InfoSheetEsc.index')
        ->with('success','Data updated successfully');    
    }

    public function destroy(InfoSheetEscRequest $request){
        $delete = InfoSheetEsc::find($request->id);
        $delete ->delete();

        return redirect()->route('InfoSheetEsc.index')
        ->with('success','Person deleted successfully');

    }


    public function downloadPdf(InfoSheetEsc $infoSheet,$id)
    {
        $downloadPdf = InfoSheetEsc::find($id);
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 18,
        ]);
        $pdf = view('bafforms::InfoSheetEsc.pdf', compact('downloadPdf'));
        $mpdf->WriteHTML($pdf);
        $mpdf->Output(); 
   
    }
}
