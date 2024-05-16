<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;

class Career extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];


    public function creator()
    {
        return $this->belongsTo(User::class);
    }
}
