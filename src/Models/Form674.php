<?php

namespace Pondit\BAF\Bafform\Models;

use Pondit\BAF\Bafform\Models\Bafform;

class Form674 extends Bafform
{

    protected $table   =   'form674';
    protected $guarded =   [];
    //protected $fillable  =   [ 'columnOne', 'columnTwo', 'columnThree' ];


    public function getRouteKeyName()
    {
        return 'uuid';
    }

}
