<?php

namespace App\Models\Traits\Relations;

use App\Models\User;
use Illuminate\Support\str;

trait ProdukRelations {
    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }
}