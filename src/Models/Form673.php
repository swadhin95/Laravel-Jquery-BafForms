<?php

namespace Pondit\BAF\Bafform\Models;

use Pondit\BAF\Bafform\Models\Bafform;

class Form673 extends Bafform
{

    protected $table   =   'form673';
    protected $guarded =   [];
    //protected $fillable  =   [ 'columnOne', 'columnTwo', 'columnThree' ];


    public function getRouteKeyName()
    {
        return 'uuid';
    }

}
