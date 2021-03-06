<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;

use Curso\Http\Requests;
use Curso\Http\Controllers\Controller;

class ProjectController extends Controller
{

    private $repository;
    private $service;

    public function __construct(\Curso\Repositories\ProjectRepository $repository, \Curso\Services\ProjectService $service) {
        $this->repository = $repository;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->repository->with(['client', 'owner'])->all();
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
        return $this->repository->with(['client', 'owner'])->find($id);
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
        $this->repository->find($id)->delete();
    }
}
