<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'contenue'
    ];
    use HasFactory;
    public function dateFormated()  {
        return date_format($this->created_at,'d M Y');
    }
}
