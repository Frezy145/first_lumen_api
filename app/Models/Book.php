<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model {
    
    use HasFactory;
    
    protected $fillable = [
        'name',
        'isbn',
        'authors',
        'numberOfPages',
        'publisher',
        'country',
        'mediaType',
        'released',
    ];
    
    public function character() {
        return $this->belongsToMany(Character::class, 'foreign_key', 'local_key');
    }
    
    public function povcharacter() {
        return $this->belongsToMany(Povcharacter::class, 'foreign_key', 'local_key');
    }
    
    public function comment() {
        return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    }
    
    protected $hidden = [];
    
}
