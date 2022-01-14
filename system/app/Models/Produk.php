<?php

namespace App\Models;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

class produk extends Model{

	use ProdukAttributes, ProdukRelations;


	protected $table =  'product';

	protected $casts = [
         'ccreated_at' => 'datetime',
         'updated_at'  => 'datetime',
         'harga' => 'decimal:2'
	];	
}