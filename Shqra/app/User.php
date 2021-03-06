<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    use HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function ads()
    {
        return $this->hasMany(Ads::class);
    }

    public function offers()
    {
        return $this->hasMany(Offers::class);
    }

    public function favourite()
    {
        return $this->hasMany(Favourite::class);
    }


    public function product()
    {
        return $this->hasMany(Post::class,'user_id');
    }

    public function rating()
    {
        return $this->hasMany(Rating::class,'users_id');
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // Check if i have a review 
    public function check_review($product_id)
    {
        foreach(auth()->user()->rating as $rate)
            {
                if($rate->product_id == $product_id)
                {
                    return $true = $rate->rating;
                }
                 
            }

            return "0";
    }

    

    


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * 
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    





}
