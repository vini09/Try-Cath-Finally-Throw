<?php

    try {

            echo '<h3> *** Try *** </h3>';

           // $sql = 'Select * from clientes';
          //    mysql_query($sql); //Erro

          if(!file_exists('require_arquivo_a.php')) {
            throw new Exception('O arquivo em questão deveria estar disponível as' . date('d/m/Y H:i:s'). 'mas não estava, mesmo assim vamos seguir');
          }

    } catch (Error $e) {
        echo '<h3> *** Cath *** </h3>';
        echo '<p style="color: red">' . $e . '</p>';
  

    } catch (Exception $e) {
        echo '<h3> *** Catch Exception *** </h3>';
        echo '<p style="color: red">' . $e . '</p>';
    }