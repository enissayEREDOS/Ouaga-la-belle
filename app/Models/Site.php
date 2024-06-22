<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'description',
        'longitude',
        'latitude',
        'date_creation',
        'categorie_id',
        'quartier_id',
        'img'
    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
    public function quartier()
    {
        return $this->belongsTo(Quartier::class, 'quartier_id');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'site_id');
    }
}
