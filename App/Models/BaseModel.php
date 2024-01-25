<?php

use App\Models\CrudInterface;

abstract class BaseModel implements CrudInterface
{


    protected $table;

    public function getAll()
    {
        return DB::select('SELECT *FROM' . $this->table);
    }
}