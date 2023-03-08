<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;



class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // relationships

    public function projects()
    {
        return $this->belongsToMany('App\Models\Project');
    }

    public function canTake(Incident $incident)
    {
        return ProjectUser::where('user_id', $this->id)
                        ->where('level_id', $incident->level_id)
                        ->first();
    }

    // accessors
    public function getAvatarPathAttribute()
    {
        if ($this->is_client)
        return '/images/client.png';

        return '/images/support.png';
    }

    public function getListOfProjectsAttribute()
    {
        if ($this->role == 1)
            return $this->projects;

        return Project::all();
    }

    public function getIsAdminAttribute()
    {
        return $this->role == 0;
    }
    public function getIsSupportAttribute()
    {
        return $this->role == 1;
    }
    public function getIsClientAttribute()
    {
        return $this->role == 2;   
    }
}
