<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
/** 
 * The attributes that are mass assignable.
 * 
   * @var array
*/
    protected $fillable = [
        'title',
        'description',
        'price',
        'stock',
        'status',
        'venue',
    ];
}