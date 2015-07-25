<?php 

namespace Curso\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

/**
 * 	
 */
class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository
{
	public function model()
	{
		return \Curso\Entities\Project::class;
	}
}