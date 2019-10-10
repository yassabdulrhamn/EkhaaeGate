<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'empNationalID', 'email', 'empFirstname', 'empSecName', 'empThirdName', 'empMobile', 'empGender', 'empJobTitle', 'empBranch', 'empRoles', 'empPassword',
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
 * Get the password for the user.
 *
 * @return string
 */
public function getAuthPassword()
{
    return $this->empPassword;
}
}
