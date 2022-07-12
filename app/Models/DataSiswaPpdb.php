<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswaPpdb extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        if(isset($filters['search']) ? $filters['search'] : false){
            return $query->where('name','like','%' . $filters['search'] . '%') // mencari data berdasarkan title-nya
            ->orWhere('tgl', 'like', '%'. $filters['search'] . '%'); // mencari data berdasarkan isi body-nya
        // data diatas ini kerjaannya Model
        }
    }

    public function getRouteKeyName()
    {
        return 'nisn';
    }
}
