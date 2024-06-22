<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable=['nom_cat'];
    
    public function sites()
    {
        return $this->hasMany(Site::class, 'categorie_id');
    }
        
}
