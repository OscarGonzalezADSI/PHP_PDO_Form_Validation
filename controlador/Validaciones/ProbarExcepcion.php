<?php
//include "MiExcepcion.php";

/**
 * Crear una clase para probar la excepción
 */
class ProbarExcepcion {
    public $var;
    const THROW_NONE    = 0;
    const THROW_CUSTOM  = 1;
    const THROW_DEFAULT = 2;
    function __construct($avalue = self::THROW_NONE) {
        switch ($avalue) {
            case self::THROW_CUSTOM:
                // lanzar la excepción personalizada
                throw new MiExcepcion('<br>1 no es un parámetro válido.<br>', 5);
                break;
            case self::THROW_DEFAULT:
                // lanzar la predeterminada.
                throw new Exception('<br>2 no está permitido como parámetro.<br>', 6);
                break;
            default: 
                // No hay excepción, el objeto se creará.
                $this->var = $avalue;
				
                break;
        }
    }
}

?>