<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class User extends Authenticatable
implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
        public function timeZone()
        {
            return $this->belongsTo(TimeZone::class,'time_zone_id','id');
        }

        public function getCreatedAtAttribute()
        {
            $time_zone = Auth::user()->timeZone->time_zone;
            return Carbon::parse($this->attributes['created_at'])->setTimezone($time_zone);
        }

        public function getUpdatedAtAttribute()
        {
            $time_zone = Auth::user()->timeZone->time_zone;
            return Carbon::parse($this->attributes['updated_at'])->setTimezone($time_zone);
        }

        public function createdBy()
        {
            return $this->belongsTo(User::class,'created_by','id');
        }

        public function updatedBy()
        {
            return $this->belongsTo(User::class,'updated_by','id');
        }


        public function cityName()
        {
            return $this->belongsTo(Country_state_district_city::class,'city_id','id');
        }
        public function blood()
        {
            return $this->belongsTo(Blood::class,'blood_id','id');
        }
}
