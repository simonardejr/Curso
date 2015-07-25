<?php 

namespace Curso\Services;

use Prettus\Validator\Exceptions\ValidatorException;

/**
 * 
 */
class ProjectService
{
	protected $repository;
	protected $validator;

	function __construct(\Curso\Repositories\ProjectRepository $repository, \Curso\Validators\ProjectValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

	public function create(array $data)
	{
		try {
			$this->validator->with($data)->passesOrFail();
			return $this->repository->create($data);
		} catch(ValidatorException $e) {
			return [
				'error' => true,
				'message' => $e->getMessageBag()
			];
		}
	}

	public function update(array $data, $id)
	{
		try {
			$this->validator->with($data)->passesOrFail();
			return $this->repository->update($data, $id);
		} catch(ValidatorException $e) {
			return [
				'error' => true,
				'message' => $e->getMessageBag()
			];
		}
	}
}
 ?>