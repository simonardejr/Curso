<?php

namespace Curso\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [ 'owner_id', 'client_id', 'name', 'description', 'progress', 'status', 'due_date' ];

    public function client()
    {
    	return $this->belongsTo('\Curso\Entities\Client');
    }

    public function owner()
    {
    	return $this->belongsTo('\Curso\Entities\User');
    }
}
