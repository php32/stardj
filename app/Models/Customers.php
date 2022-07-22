<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';

    const LEADIN = 1;
    const CONTACTMADE = 2;
    const QUOTED = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'sales_pipeline_status',
        'customer_pipeline_status',
        'email',
        'contact_number',
        'isDelete'
    ];

    public function event()
    {
        return $this->hasOne(Event::class);
    }

}
