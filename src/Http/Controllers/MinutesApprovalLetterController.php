<?php

namespace Pondit\BAF\Bafform\Http\Controllers;


use Pondit\BAF\Bafform\Models\MinuteApprovalLetter;
use Pondit\BAF\Bafform\Http\Requests\MinutesApprovalLetterRequest;


class MinutesApprovalLetterController extends BafformController
{
    public function index(){
        $index = MinuteApprovalLetter::latest()->paginate(5);
        return view('bafforms::MinutesApprovalLetter.index',compact('index'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function create(){

        return view('bafforms::MinutesApprovalLetter.create');
        
    }

    public function store(MinutesApprovalLetterRequest $request){
        $request->validate([
            'confidential'=>'required',
            'serial_no'=>'required',
            'title'=>'required',
            'serial_no_center'=>'required',
            'ref_field'=>'required',
            'equip_sele_tit'=>'required',
            'equip_sele_tit_val'=>'required',
            'name'=>'required',
            'rank'=>'required',
            'division'=>'required',
            'ext'=>'required',
            'date'=>'required',
            'acas'=>'required',         
        ]);

        MinuteApprovalLetter::create($request->all());
        return redirect(route('MinutesApprovalLetter.index'))
        ->with('success','New Data Added successfully.');

    }

    public function show($id){
        $show = MinuteApprovalLetter::find($id);
        return view('bafforms::MinutesApprovalLetter.show',compact('show'));
    }

    public function edit($id){
      $edit = MinuteApprovalLetter::find($id);
      return view('bafforms::MinutesApprovalLetter.edit',compact('edit'));
    }

    public function update(MinutesApprovalLetterRequest $request ,$id){
        $request->validate([
            'confidential'=>'required',
            'serial_no'=>'required',
            'title'=>'required',
            'serial_no_center'=>'required',
            'ref_field'=>'required',
            'equip_sele_tit'=>'required',
            'equip_sele_tit_val'=>'required',
            'name'=>'required',
            'rank'=>'required',
            'division'=>'required',
            'ext'=>'required',
            'date'=>'required',
            'acas'=>'required',     
        ]);

        $update = MinuteApprovalLetter::find($id);
        $update ->update($request->all());

        return redirect()->route('MinutesApprovalLetter.index')
        ->with('success','Data updated successfully');    
    }

    public function destroy(MinutesApprovalLetterRequest $request){
        $delete = MinuteApprovalLetter::find($request->id);
        $delete ->delete();

        return redirect()->route('MinutesApprovalLetter.index')
        ->with('success','Person deleted successfully');

    }

    public function downloadPdf(MinuteApprovalLetter $minutesApproval,$id)
    {
        $downloadPdf = MinuteApprovalLetter::find($id);
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 18,
        ]);
        $pdf = view('bafforms::MinutesApprovalLetter.pdf', compact('downloadPdf'));
        $mpdf->WriteHTML($pdf);
        $mpdf->Output(); 
   
    }
}
