<p>
   {{$produk->harga}}
   stok : {{$produk->stok}} |
   seller : {{$produk->seller->username}} |
   Tanggal Produk : {{$produk->created_at->diffForHumans()}}
</p>