<?php

namespace Pondit\BAF\Bafform\Models;

use Pondit\BAF\Bafform\Models\Bafform;

class Form675 extends Bafform
{

    protected $table   =   'form675';
    protected $guarded =   [];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

}
