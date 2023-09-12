<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;

class SubscriptionPlan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * @var string $table
     */
    protected $table = 'subscription_paln';

    /**
     * @var array $fillable
     */
    // protected $fillable = [
    //     'field_name_1',
    //     'field_name_2'
    // ];

    protected $guarded =[

    ];
    use HasFactory;
}
