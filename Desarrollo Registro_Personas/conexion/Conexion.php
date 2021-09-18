<?php
require_once "global.php"
$ conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_query($conexion, 'SET NAME'.DB_ENCODE. '"' );

if(mysqli_connect_errno()){
    print(" sin conexión a la base de datos",mysqli_connect_errno() );
    exit();
}
if (!function_exists("ejecutar consulta"))
{
        function ejecutarConsulta($sql)
        {
            global $conexion;
            $query = $conexion -> query($sql);
            return $query;
        }
        function LimpiarCadena($str)
        {
            global $conexion;
            $str = mysqli_real_escape_string($conexion, trin ($str));
            return htmlspecialchars($str);

        }
        function ejecutarConsulta_returID($sql)
        {
            global $conexion;
            $query = $conexion -> query($sql);
            return $conexion -> insert_id;
        }
}
?>