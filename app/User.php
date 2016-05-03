<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password' ,'image'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    /**
     * A user can have many vlist
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vlist()
    {
        return $this->hasMany('App\Vlist');
    }

    public function mr()
    {
        return $this->hasMany('App\MR');
    }

    public function po()
    {
        return $this->hasMany('App\PO');
    }

    public function budgetry()
    {
        return $this->hasMany('App\Budgetry');
    }

    public function tender()
    {
        return $this->hasMany('App\Tender');
    }


    public function material()
    {
        return $this->hasMany('App\Material');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        if (is_string($role)){
            return $this->roles->contains('name',$role);
        }
        return  !! $role->intersection($this->roles)->count();
    }
}
