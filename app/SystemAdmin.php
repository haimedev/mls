<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemAdmin extends Model
{
    protected $table = "sys_admin";

    public function setActiveValue($value)
    {
        $this->attributes["sa_active"] = ($value== "1") ? "Active" : "Not active";
    }
}
