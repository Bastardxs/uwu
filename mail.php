<html>
<body>
<?php require'conexion.php';
    $query=mysqli_query($conn, "SELECT id, TemPers, LEFT((fecha_actual),10) AS Fecha, SUBSTRING((fecha_actual),12,8) as Hora,Notificado FROM `Tb_DHT11`");
    $row=mysqli_num_rows($query);
			if($row>0){
				while($fetch=mysqli_fetch_array($query)){
				    $idw = $fetch['id'];
				    $tempw = $fetch['TemPers'];
				    $fechaw = $fetch['Fecha'];
				    $horaw = $fetch['Hora'];
                    if($fetch['Notificado']==0){
                        $update=mysqli_query($conn, "UPDATE `Tb_DHT11` SET noti = '1' WHERE id = '$idw'");
                        if ($fetch['TemPers']>37){
                            $cuerpo = "Se ha registrado una persona con temperatura alta \n ID: ".$idw."\nTemperatura: ".$tempw."\nEn la fecha: ".$fechaw."\nHora: ".$horaw;
                            $correo = mail("jhon.yelor@hotmail.com","uwu",$cuerpo,"a");
                        }
                    }
				}
			}
?>
</body>
</html>