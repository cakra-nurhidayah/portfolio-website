<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gambar extends Model
{
    protected $table = 'gambar';
    protected $primaryKey = 'id_gambar';
    
    protected $fillable = [
        'id_projek',
        'url',
        'caption',
        'sort_order'
    ];
    
    public $timestamps = false;

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'id_projek', 'id_projek');
    }
}
