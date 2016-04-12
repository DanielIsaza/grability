<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cubo;

class cubeController extends Controller
{
	/**
	* Metodo que permite visualizar la pagina de inicio de la aplicacion
	*/
	public function view()
	{
		return view('index',['output'=>"",'in'=>""]);
	}
	/**
	*Metodo que permite procesar y mostrar los datos de la suma del cubo
	*/
	public function execute(Request $request)
	{
		$cube = new Cubo();
		$output = "";
        $in = $request->input('name');
		$instructions = explode(PHP_EOL,$in);
		$actLine = 0;
		$line = $instructions[$actLine];
		$actLine++;
		$iterations = intval($line);

		for($i = 0; $i < $iterations; $i++)
		{

		    $line = $instructions[$actLine];
		    $actLine++;
		    $parts = explode(" ",$line);
		    $matrixSize = intval($parts[0]);
		    $matrix = $cube->startCube($matrixSize);
		    $ops = intval($parts[1]);

		    for($j = 0; $j < $ops; $j++)
		    {
		        $line = $instructions[$actLine];
		        $actLine++;
		        $operation = explode(" ",$line);
		        $x1 = intval($operation[1]);
		        $y1 = intval($operation[2]);
		        $z1 = intval($operation[3]);

		        if($operation[0] == "UPDATE")
		        {
		            $newValue = intval($operation[4]);
		            $cube->cupdate($x1,$y1,$z1,intval($newValue));
		        }
		        else if($operation[0] == "QUERY")
		        {
		            $sum = 0;
		            $x2 = intval($operation[4]);
		            $y2 = intval($operation[5]);
		            $z2 = intval($operation[6]);
					$output = $output. strval($cube->cquery($x1, $y1, $z1, $x2, $y2, $z2));
		        }
		    }
		}
		return view('index',['output'=>$output,'in'=>$in]);
	}
}
