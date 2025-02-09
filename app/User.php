<?php

namespace App;

use App\Models\Profile;
use Cmgmyr\Messenger\Traits\Messagable;
use Eloquent;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * App\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $phone
 * @property integer $status
 * @property integer $type
 * @property string $avatar
 * @property boolean $is_company
 * @property boolean $is_hidden
 * @property string $company_name
 * @property integer $view_count
 * @property array $social_link
 * @mixin Eloquent
 */
class User extends Authenticatable implements JWTSubject, CanResetPasswordContract
{
    use Notifiable;
    use CanResetPassword;
    use HasRoles;
    use Messagable;
    use HasTranslations;
    use SoftDeletes;

    const ROLE_ADMIN = 'admin';
    const ROLE_MODERATOR = 'moderator';
    const ROLE_CLIENT = 'client';
    const ROLE_CUSTOMER = 'customer';

    const STATUS_ACTIVE = 'active';
    const STATUS_BLOCK = 'block';

    const EMPLOYER = 'employer';
    const SEEKER = 'seeker';

    const STATUSES = [
        0 => self::STATUS_BLOCK,
        1 => self::STATUS_ACTIVE,
    ];

    const ROLES = [
        1 => self::ROLE_ADMIN,
        2 => self::ROLE_MODERATOR,
        3 => self::ROLE_CLIENT,
        4 => self::ROLE_CUSTOMER,
    ];

    const TYPES = [
        0 => self::EMPLOYER,
        1 => self::SEEKER,
    ];

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'type',
        'avatar',
        'is_company',
        'view_count',
        'social_link',
        'is_hidden',
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

    public $translatable = ['company_name'];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function generateVerifyToken()
    {
        do {
            $verifyToken = Str::random(15);
            $this->setAttribute('verify_token', $verifyToken);
        } while (!is_null(\App\User::where('verify_token', $verifyToken)->first()));
    }

    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }
}
