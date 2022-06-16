<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuggestionStatus extends Model
{
    protected $table = 'suggestion_statuses';

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'status'
    ];

    public function suggestions(){
        return $this->hasMany(Suggestion::class);
    }
}
