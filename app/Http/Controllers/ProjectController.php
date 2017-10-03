<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Project;
use App\Model\Name;
use App\Http\Requests\Project\Insert;

class ProjectController extends Controller
{
    public function index()
    {	
    	$data = Project::all();
    	return view('home', ['data' => $data]);
    }

    public function create(Insert $request)
    {
    	$students = $request->input('students');
    	$teacher = $request->input('teacher');
    	$customer = $request->input('customer');

    	/*remove empty array values from string*/
    	$keys = array_keys($students,"");
		foreach ($keys as $k)
        	unset($students[$k]);
        /*insert names in database*/
    	foreach ($students as $student) {

    	$object = $this->insertName($student);
    		
        $manyObj[] = [
    		'object' => $object,
    		'type' => 'student'];
    	}
    	$manyObj[] = [
    		'object' => $this->insertName($teacher),
    		'type' => 'teacher'];
    	$manyObj[] = [
    		'object' => $this->insertName($customer),
    		'type' => 'customer'];

    	$project = Project::create([
    			'name' => $request->input('title'),
    			'description' => $request->input('description')
    		]);

    	foreach ($manyObj as $obj) {
    		    		switch ($obj['type']) {
    			case 'student':
    				$project->student()->attach($obj['object'],['name_type' => 'student']);
    				break;

    			case 'teacher':
    				$project->teacher()->attach($obj['object'],['name_type' => 'teacher']);
    				break;
    			
    			case 'customer':
    				$project->customer()->attach($obj['object'],['name_type' => 'customer']);
    				break;
    		};
    	}
    	
        return redirect()->route('home')->with('status', 'Project ingevoerd!');


    	// $teachers =
    	// $students =
    }

    public function createForm()
    {
    	return view('Projects.form');
    }

    private function insertName($value)
    {
    	return Name::firstOrCreate([
                'name' => $value,
            ]);
    }
}
