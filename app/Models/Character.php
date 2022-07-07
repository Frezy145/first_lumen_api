<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Character extends Model {
    
    use HasFactory;
    
    protected $fillable = [
        'name',
        'gender',
        'culture',
        'born',
        'died',
        'titles',
        'father',
        'mother',
        'spouse',
        'allegiances',
        'tvSeries',
        'playedBy',
    ];
    
    protected $hidden = [];
    
    public function book() {
        return $this->belongsToMany(Book::class, 'foreign_key', 'local_key');
    }
    
}
