<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    //
    use SoftDeletes;
    //
    protected $table = 'jobs';
    protected $fillable = [
        'id', 'user_id','title','description','perks&benifits','job_category_id','employement_type_id','job_experience_id','location','salary',
        'upload_limit','placement_fee','fixed_fee'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    public function user(){
		  return $this->hasMany('App\User','id','user_id');
    } 
    public function job_category(){
		  return $this->hasMany('App\JobCategory','id','job_category_id');
    }
    public function job_experience(){
		  return $this->hasMany('App\JobExperience','id','job_experience_id');
    }
    public function employee_type(){
		  return $this->hasMany('App\Employeetypes','id','employement_type_id');
    }
    public function skills()
    {
      return $this->belongsToMany(Skills::class,'skills_job','job_id','skills_id');
    }
}
