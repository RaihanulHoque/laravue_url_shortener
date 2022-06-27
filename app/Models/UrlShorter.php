<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlShorter extends Model
{
    use HasFactory;
    protected $table = 'short_urls';
}
