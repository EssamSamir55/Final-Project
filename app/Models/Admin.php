<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasFactory , HasApiTokens , SoftDeletes;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
    ];
    protected $hidden = [
        'password',
        'status',
        'gender',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function user() {
    //     return $this->morphOne(User::class , 'actor' , 'actor_type' , 'actor_id' , 'id');
    // }

    //full_name
    // public function getFullNameAttribute()
    // {
    //     return $this->user->firstname . " " . $this->user->lastname;

    // }

    // protected static function boot() {
    //     parent::boot();

    //     static::deleting(function($admin){
    //         $admin->user()->delete();
    //     });
      }

