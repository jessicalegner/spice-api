<?php

class SpiceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$spice = Spice::find($id);

		if( ! $spice) {
			return Response::json([
				'error' => [
					'message' => 'Spice does not exist.',
					'code' => '001'
				]
			], 404);
		}

		return Response::json([
			'data' => $spice->toArray()
		], 200);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Get the users spices
	 *
	 * @param int $user
	 * @return Response
	 */
	public function userSpices($user)
	{
		$spices = User::find($user)->spices()->get();

		if( ! $spices) {
			return Response::json([
				'error' => [
					'message' => 'No spices could be found for this user',
					'code' => '002'
				]
			], 404);
		}

		return Response::json([
			'data' => $spices->toArray()
		], 200);
	}
}