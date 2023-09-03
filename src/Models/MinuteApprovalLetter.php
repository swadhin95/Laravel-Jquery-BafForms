<?php

namespace App\Models;

namespace Pondit\BAF\Bafform\Models;

use Pondit\BAF\Bafform\Models\Bafform;

class MinuteApprovalLetter extends Bafform
{
    protected $table = 'minute_approval_letters';
    protected $fillable  =   [ 
        'confidential',
        'serial_no',
        'title',
        'serial_no_center',
        'ref_field',
        'equip_sele_tit',
        'equip_sele_tit_val',
        'name',
        'rank',
        'division',
        'ext',
        'date',
        'acas'     
    ];
}
