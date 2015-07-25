<?php 

namespace Curso\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

/**
 * 	
 */
class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
	public function model()
	{
		return \Curso\Entities\Client::class;
	}
}