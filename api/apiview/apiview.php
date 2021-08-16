<?php
    require_once("api/apicontroller/apicontroller.php");

    class apiView{
      /*Esta función recibe la data del model, del controller, y el estado.
      Luego, indica que el tipo es JSON, en el header. Indica el protocolo, el estado, 
      e invoca a la otra funcion que devuelve un mensaje segunel estado pasado.
      Finalmente imprime por pantalla la data en formato JSON.*/
      public function response($data, $status) {
          header("Content-Type: application/json");
          header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
          echo json_encode($data);
      }

      /*Segun el numero de estado que le pase, devolvera el mensaje correspondiente */
      private function _requestStatus($code){
          $status = array(
            200 => "OK",
            404 => "Not found",
            500 => "Internal Server Error"
          );
          return (isset($status[$code]))? $status[$code] : $status[500];
        }
  }

?>