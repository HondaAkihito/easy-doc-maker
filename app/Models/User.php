<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\CustomResetPassword;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
    ];

    // パスワード再設定メール
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPassword($token));
    }

    // リレーション
    public function receiptSettings()
    {
        return $this->hasOne(ReceiptSetting::class);
    }
    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }
    public function paymentMethods()
    {
        return $this->hasMany(PaymentMethod::class);
    }
    public function customerNames()
    {
        return $this->hasMany(CustomerName::class);
    }
    public function bentoBrands()
    {
        return $this->hasMany(BentoBrand::class);
    }
    public function bentoNames()
    {
        return $this->hasMany(BentoName::class);
    }

    // ゲストログイン
    public function isGuest()
    {
    return $this->email === 'guest@example.com';
    }
}
