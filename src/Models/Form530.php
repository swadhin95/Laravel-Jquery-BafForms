<?php

namespace Pondit\BAF\Bafform\Models;

use Pondit\BAF\Bafform\Models\Bafform;

class Form530 extends Bafform
{

    protected $table   =   'form530';
    protected $guarded =   [];
    //protected $fillable  =   [ 'columnOne', 'columnTwo', 'columnThree' ];


    public function getRouteKeyName()
    {
        return 'uuid';
    }

}
