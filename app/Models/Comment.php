<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model {
    
    use HasFactory;
    
    protected $fillable = [
        'content',
    ];
    
    protected $hidden = [];
    
    public function ip() {
        return $this->getIp();
    }
    
    public function book() {
        return $this->belongsTo(Book::class, 'foreign_key', 'local_key');
    }
}
