<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'avatar',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Convert email to lowercase
     * @return  bool
     */
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    /**
     * Get the validation rules that apply to the request.
     * @return  array
     */
    public static $rules = [
        'name' => 'required||min:3|max:50',
        'email' => 'required|email|max:50|unique:users',
        'phone' => 'nullable|numeric|digits_between:10,15|unique:users',
        'password' => 'required|min:8|max:20',
        'passwordAgain' => 'required|same:password',
        'status' => 'required'
    ];

    /**
     * Check user has role Admin
     * 
     * @return bool
     */
    public function checkIsAdmin()
    {
        return $this->hasRole('admin');
    }

    /**
     * Check user has role Manager
     * 
     * @return bool
     */
    public function checkIsManager()
    {
        return $this->hasRole('manager');
    }


}
