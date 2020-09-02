<?php
class Exception{
    protected $message = 'Unknown exception';   // mensaje de excepción
    private   $string;                          // caché de __toString
    protected $code = 0;                        // código de excepción definido por el usuario
    protected $file;                            // nombre de archivo fuente de la excepción
    protected $line;                            // línea fuente de la excepción
    private   $trace;                           // determinación del origen
    private   $previous;                        // excepción previa si la excepción está anidada

    public function __construct($message = null, $code = 0, Exception $previous = null);

    final private function __clone();           // Inhibe la clonación de excepciones.

    final public  function getMessage();        // mensaje de excepción
    final public  function getCode();           // código de excepción
    final public  function getFile();           // nombre de archivo fuente
    final public  function getLine();           // línea fuente
    final public  function getTrace();          // un array de backtrace()
    final public  function getPrevious();       // excepción anterior
    final public  function getTraceAsString();  // string formateado del seguimiento del origen

    // Sobrescribible
    public function __toString();               // string formateado para mostrar
}
?>