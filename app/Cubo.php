<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cubo extends Model
{
	//Variable que establece el tamaño del cubo
	private $x;
	//Variable que establece el número de operaciones a realizar
	private $y;
	//Cubo en tres dimensiones en el cual se realizan las operaciones
	private $cube;

	/**
	* Contrunstor del modelo sin parametros
	*/
	function __construct()
	{
		$cube = array();
	}
	/**
	* Metodo que inicia el cubo partiendo de un tamaño x, 
	* todos los campos del cubo inicialmente tienen un valor de 0.
	*/
	public function startCube($x)
	{
		for ($i=1; $i <= $x ; $i++) 
		{ 
			for ($j=1; $j <= $x ; $j++) 
			{ 
				for ($k=1; $k <= $x; $k++) 
				{ 
					$this->cube[$i][$j][$k] = 0;
				}
			}
		}

		return $this->cube;
	}
	/**
	* Metodo que permite actualizar el valor de un campo 
	* del cubo que se encuentra en las coordenadas X,Y,Z 
	*/
	function cupdate($x,$y,$z, $value)
	{
		$this->cube[$x][$y][$z] = $value;
	}
	/**
	* Metodo que permite realizar la suma de los campos del cubo
	* que se encuentran entre las coordenadas x1,x2, y1, y2, z1,z2
	* retornando el resultado obtenido
	*/
	function cquery($x1, $y1, $z1, $x2, $y2, $z2)
	{
		$aux = "";
		for ($i= $x1; $i <= $x2 ; $i++) 
		{ 
			for ($j= $y1; $j <= $y2 ; $j++) 
			{ 
				for ($k=$z1; $k <= $z2 ; $k++) 
				{ 
					$aux += $this->cube[$i][$j][$k];
					$aux = $aux."\n";
				}
			}
		}
		return $aux;
	}
	/**
	* Metodo que permite obtener el valor del tamaño del cubo
	*/
	function getX()
	{
		return $this->x;
	}
	/**
	* Metodo que permite obtener el valor de las operaciones a realizar
	*/
	function getY()
	{
		return $this->y;
	}
	/**
	* metodo que permite obtener el cubo sobre el cual se esta trabajando
	*/
	function getCube()
	{
		return $this->cube;
	}

	function hola()
	{
		return "esto es un hola";
	}
}