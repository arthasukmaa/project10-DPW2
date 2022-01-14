<?php

namespace App\Models\Traits\Attributes;

use App\Models\User;
use Illuminate\Support\str;

trait ProdukAttributes {


	 function getHargaStringAttribute(){
    	return "Rp.".number_format($this->attributes['harga']);
    }


   function handleUploadFoto(){
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "image/produk";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();
    	}
    }
}
