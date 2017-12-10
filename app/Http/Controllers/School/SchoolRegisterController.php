<?php
namespace App\Http\Controllers\School;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolRegisterController extends Controller{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        $divisions=divisions();
        return view('school.schoolRegister',compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function districts(Request $request,$key){
        //$division=$request->division;
        // dd('here');
       // dd($key);
        $divisions=districtList($key);
       //dd($divisions);
        return $divisions;
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
     *  part two registration of school form
     */
    public function partTwoSchoolRegistrationForm(){

        $mainsubjects_9   = main_subjects(null,9);
        $mainsubjects_10 =  main_subjects(null,10);

        $vocational_9  =  vocational_subjects(null,9);
        $vocational_10 =  vocational_subjects(null,10);

        $optional_9  =  optional_subjects(null,9);
        $optional_10 =  optional_subjects(null,10);





        $mainSubjects = array(
             'subject_9th' => $mainsubjects_9,
             'subject_10th' => $mainsubjects_10,

             'vocational_9th' => $vocational_9,
             'vocational_10th' => $vocational_10, 

             'optional_9th' =>   $optional_9,
             'optional_10th' =>  $optional_10,
            
            );



        return view('school.schoolPartTwoRegistration')->with($mainSubjects);  
        
    }
    /**
     *  part two registration of school
     */
    public function partTwoSchoolRegistrationSave(Request $request){

        
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
}
