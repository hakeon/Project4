<?php

class ProjectsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /projects
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();
		$this->layout->content = View::make('projects.index', compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /projects/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('projects.create', compact('project'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /projects
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->layout->content = View::make('projects.store', compact('project'));
	}

	/**
	 * Display the specified resource.
	 * GET /projects/{id}
	 *
	 * @param  Project $project
	 * @return Response
	 */
	public function show(Project $project)
	{
		$this->layout->content = View::make('projects.show', compact('project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /projects/{id}/edit
	 *
	 * @param  Project $project
	 * @return Response
	 */
	public function edit(Project $project)
	{
		$this->layout->content = View::make('projects.edit', compact('project'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /projects/{id}
	 *
	 * @param  Project $project
	 * @return Response
	 */
	public function update(Project $project)
	{
		$this->layout->content = View::make('projects.update', compact('project'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /projects/{id}
	 *
	 * @param  Project $project
	 * @return Response
	 */
	public function destroy(Project $project)
	{
		$this->layout->content = View::make('projects.destroy', compact('project'));
	}

}