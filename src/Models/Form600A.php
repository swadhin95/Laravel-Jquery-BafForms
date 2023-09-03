<?php

namespace Pondit\BAF\Bafform\Models;

use Pondit\BAF\Bafform\Models\Bafform;

class Form600A extends Bafform
{

    protected $table   =   'form600A';
    protected $guarded =   [];
    //protected $fillable  =   [ 'columnOne', 'columnTwo', 'columnThree' ];


    public function getRouteKeyName()
    {
        return 'uuid';
    }

}
