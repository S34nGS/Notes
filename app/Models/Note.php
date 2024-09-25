<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = encrypt($value);
    }

    // Encrypt the content before saving it to the database
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = encrypt($value);
    }

    // Decrypt the title when retrieving it
    public function getTitleAttribute($value)
    {
        return decrypt($value);
    }

    // Decrypt the content when retrieving it
    public function getContentAttribute($value)
    {
        return decrypt($value);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
