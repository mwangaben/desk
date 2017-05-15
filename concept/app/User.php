<?php

namespace App;

use App\Customer;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
 
    public function add($customer)
    {
        return $this->customer()->save($customer);
    }

    public function edit($id, $data)
    {
        return $this->customer()->where('id' ,$id)->update();
    }

    public function count()
    {
        return $this->customer()->count();
    }
}
