<?php

namespace App\Http\Controllers;

use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use App\Certificate;
use App\Student;
use App\Course;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $this->build_dashboard();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     *
     */
    public function build_dashboard()
    {
        //count number of certificates generated in the system
        $sql="SELECT count(cs.id) as total, c.description
                from certificates cs, courses c
                where cs.course_id = c.id
                GROUP BY c.description";


        $data = DB::select($sql);

        $labels = array();
        $values = array();

        foreach($data as $data_new){
            array_push($labels, $data_new->description);
            array_push($values, $data_new->total);

        }


        //build the chart here
        $chart = Charts::create('bar', 'highcharts')
            ->title('Certificates issued per course')
            ->elementLabel('Courses')
            ->labels($labels)
            ->values($values)
            ->dimensions(1000,500)
            ->responsive(false);

        return view('layouts.dashboard', ['chart' => $chart]);

    }
}
