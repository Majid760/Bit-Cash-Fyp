<?php

namespace App;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\UserResetPasswordNotification;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username'
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

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserResetPasswordNotification($token));
    }


    // Relations

    public function products() {

        return $this->belongsToMany('App\Product','user_clicks');

    }


    public function userComplaints() {
        return $this->hasMany('App\UserComplaints','id');
    }

    public function paymentAccount(){
        return $this->hasOne('App\PaymentAccount','id');
    }


    public function paymentAccounts(){
        return $this->hasMany('App\PaymentAccount');
    }


    // Relations with transaction history

    public function transactionHistories(){
        return $this->hasMany('App\TransactionHistory');
    }




}
