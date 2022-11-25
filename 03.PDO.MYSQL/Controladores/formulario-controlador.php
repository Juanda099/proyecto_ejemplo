<?php

class ControladorFormularios {


    static public function ctrRegistro(){
        
        if(isset($_POST["registroNombre"])){
            
           $tabla = "registros";
           $datos = array("nombre"=> $_POST["registroNombre"],
                          "email"=> $_POST["registroEmail"],
                           "password"=> $_POST["registroPwd"] );
            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

            return $respuesta;
            
    }   
  
}
//selecionar registros
static public function ctrSleccionarRegistros ($item, $valor){
    $tabla= "registros";
    $respuesta = ModeloFormularios::mdlSlecionarRegistros($tabla, $item, $valor);
    return $respuesta;
}

//Ingreeso
public function ctrIngreso(){
    if (isset ($_POST ["ingresoEmail"])) {
        $tabla = "registros";
        $item = "email";
        $valor = $_POST ["ingresoEmail"];

        $respuesta = ModeloFormularios::mdlSlecionarRegistros($tabla, $item, $valor);
        if ($respuesta["email"] == $_POST ["ingresoEmail"] && $respuesta["password"] == $_POST ["ingresoPwd"]) {
        
            $_SESSION ["validaringreso"] = "ok";

            echo '<script> if (window.history.replaceState) {
            window.history.replaceState (null, null, window.location.href);
            }
            window,location = "index.php?ruta=inicio";
            </script>'; 

        } else { 
        echo '<script> if (window.history.replaceState) {
        
            window.history.replaceState (null, null, window.location.href);
            }</script>';                  
            echo '<div class="alert alert-danger">Error al ingresar al sistema, el email o la contraseña no coinciden</div>';
}
}
} 
//Atualzar registro
static public function ctrActualizarRegistro(){
    if(isset($_POST["updateNombre"])){

        if($_POST["updatePwd"] != ""){
            $password = $_POST["updatePwd"];
        }else {
            $password = $_POST["passworActual"];
        }
            
        $tabla = "registros";
        $datos = array( "id" => $_POST["idUsuario"],
                        "nombre"=> $_POST["updateNombre"],
                       "email"=> $_POST["updateEmail"],
                        "password"=> $password);

         $respuesta = ModeloFormularios::mdlActuzlizarRegistro($tabla, $datos);

         return $respuesta;         

}
}
//Eliminar Registros
public function ctrEliminarRegistro(){
    if(isset($_POST["eliminarRegistro"])){
        $tabla = "registros";
        $valor = $_POST["eliminarRegistro"];
        
    $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);
    if ($respuesta == "ok") {
        echo '<script> if (window.history.replaceState) {
            window.history.replaceState (null, null, window.location.href);
            }
            window,location = "index.php?ruta=inicio";
            </script>'; 

    }


    }

}

}