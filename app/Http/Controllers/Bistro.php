<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tb_bistro;
use App\Repositories\BistroRepository;

class Bistro extends Controller {

    /**
     * The task repository instance.
     *
     * @var BistroRepository
     */
    protected $bistros;

    /**
     * Create a new controller instance.
     *
     * @param  BistroRepository  $bistros
     * @return void
     */
    public function __construct(BistroRepository $bistros) {
//        $this->middleware('auth');

        $this->bistros = $bistros;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request) {
        print_r($this->bistros->update(1,array('name'=>'a123423w323424')));
        exit;
        return view('bistro.bistro', [
            'bistros' => $this->bistros->findAll(),
        ]);
    }

    /**
     * Create a new bistro.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->bistros()->create([
            'name' => $request->name,
        ]);

        return redirect('/bistro');
    }

    /**
     * Destroy the given bistro.
     *
     * @param  Request  $request
     * @param  Bistro   $bistro
     * @return Response
     */
    public function destroy(Request $request, Tb_bistro $bistro) {
        $this->authorize('destroy', $bistro);

        $bistro->delete();

        return redirect('/bistro');
    }

}
