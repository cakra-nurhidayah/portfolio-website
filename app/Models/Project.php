<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $table = 'projek';
    protected $primaryKey = 'id_projek';
  
    
    protected $fillable = [
        'judul',
        'deskripsi'
    ];

    public function gambar(): HasMany
    {
        
        return $this->hasMany(Gambar::class, 'id_projek', 'id_projek');
    }
}
