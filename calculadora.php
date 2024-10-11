<?php
class Calculadora{
    private int $numero1;
    private int $numero2;
    private string $operador;

    //Constructor Parametrizado
    public function __construct($numero1,$numero2,$operador) {
        $this->numero1 = $numero1;
        $this->numero1 = $numero2;
        $this->operador = $operador;
    }

    //Ordenar numeros
    private function ordenarNumeros(){
        $aux = null; //Se inicializa la variable con un valor nulo

        //Se invierten los valores
        if($this->numero1 < $this->numero2){
            $aux = $this->numero1;
            $this->numero1 = $this->numero2;
            $this->numero2 = $aux;
        }
    } 
    
    
    
    //Metodo en la que se va a seleccionar que operacion se realizará
    public function calcular(){
        //Se va a utilizar un switch case para redireccionar el codigo a la calculadora. Fuente: https://www.php.net/manual/en/control-structures.switch.php
            
            $this->ordenarNumeros(); //Se ha llamado la funcion de ordenacion de numeros
            switch ($this->operador) {
                case 'sumar':
                    return $this->numero1 + $this->numero2;
    
                case 'restar':
                    return $this->numero1 - $this->numero2;
                    
                case 'multiplicar':
                    return $this->numero1 * $this->numero2;
                    
                case 'dividir':
                    if ($this->numero2 == 0) {
                        return "Error: División por cero"; // Manejo de división por cero
                    }
                    return $this->numero1 / $this->numero2;
                    
                default:
                    return "Operador no válido"; // Manejo de caso de operador no reconocido    
            }
            
    }

}