<?php

namespace App\Models;

use App\Models\Customers;
use App\Models\Dj;
use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event_details';

    const WAITING_FOR_RESPONSE = 0;
    const ACCEPTED = 1;
    const DECLINED = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'venue_name',
        'contact_name',
        'contact_number',
        'contact_email',
        'parking',
        'event_name',
        'event_date',
        'event_type',
        'no_guest',
        'event_address',
        'lead_source',
        'note',
        'city',
        'instruction',
        'email2',
        'partner_name',
        'partner_number',
        'partner_email',
        'package',
        'custom_package_name',
        'custom_package_amount',
        'custom_package_desc',
        'custom_package_note',
        'package_offer',
        'assign_dj',
        'is_delete'
    ];

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'user_id');
    }

    public function dj()
    {
        return $this->belongsTo(Dj::class, 'assign_dj', 'user_id');
    }
}
