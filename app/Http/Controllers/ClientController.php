<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;

use Curso\Http\Requests;
use Curso\Http\Controllers\Controller;

class ClientController extends Controller
{

    private $repository;
    private $service;

    public function __construct(\Curso\Repositories\ClientRepository $repository, \Curso\Services\ClientService $service, \Curso\Repositories\ProjectRepository $project_repository) {
        $this->repository = $repository;
        $this->service = $service;
        $this->project_repository = $project_repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->repository->with(['projects'])->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(\Illuminate\Http\Request $request)
    {
        return $this->service->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $this->repository->with(['projects'])->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, \Illuminate\Http\Request $request)
    {
        return $this->repository->update($request->all(), $id);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->repository->find($id);
        $projects = $this->project_repository->findWhere(['client_id'=>$user->id]);
        if(!$projects->isEmpty()) {
            foreach($projects as $project) {
                $this->project_repository->find($project->id)->delete();
            }
        }
        $this->repository->find($id)->delete();
    }
}
