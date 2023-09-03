<?php

namespace Pondit\BAF\Bafform\Models;

use Illuminate\Database\Eloquent\Model;

class Bafform extends Model
{
    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
