<?php 
include "db.php";

                $consulta = "select * from chat order BY id ASC";
                $consultaResult = sqlsrv_query($cnx, $consulta);
                
                while($fila = sqlsrv_fetch_array($consultaResult)){              
                ?>
                <div id="datos-chat">
                    <span style="color: #1c62c4"><?php echo $fila['nombre'] ?>:</span>
                    <span style="color: #848484"><?php echo $fila['mensaje'] ?></span>
                    <span style="float: right"><?php echo formatearfecha($fila['fecha'])?></span>
                </div>
                <?php } ?>