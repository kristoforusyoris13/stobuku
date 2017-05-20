<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'stoks';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tanggal_masuk', 'nama_buku', 'nama_penerbit', 'jumlah'];

    public function buku()
    {
        return $this->belongsTo('App\buku','nama_buku');
    }

    public function penerbit()
    {
        return $this->belongsTo('App\penerbit','nama_penerbit');
    }
    
}
