<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<?php require'conexion.php';
	if(ISSET($_POST['mm'])){
		echo '<tr>';
                echo '<th scope="col">Fecha</th>';
		$cmaxtem = "off";
		$cmintem = "off";
		$cmaxhum = "off";
		$cminhum = "off";
		if(ISSET($_POST['cmtem'])){
			if(ISSET($_POST['cmaxtem'])){
				echo '<th scope="col">Temperatura máxima</th>';
			}
			if(ISSET($_POST['cmintem'])){
				echo '<th scope="col">Temperatura mínima</th>';
			}
		}
		if(ISSET($_POST['cmhum'])){
			if(ISSET($_POST['cmaxhum'])){
				echo '<th scope="col">Humedad máxima</th>';
			}
			if(ISSET($_POST['cmaxtem'])){
				echo '<th scope="col">Humedad mínima</th>';
			}
		}
		?>
                    </tr>
                </thead>
            <tbody>
<?php
	}else{
?>
					<tr>
                        <th scope="col">ID</th>
                        <th scope="col">Temperatura</th>
                        <th scope="col">Humedad</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                    </tr>
                </thead>
            <tbody>
	<?php
	}
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($conn, "SELECT id, Temperatura, Humedad, LEFT((fecha_actual),10) AS Fecha, SUBSTRING((fecha_actual),12,8) as Hora from `Tb_DHT11` WHERE `fecha_actual` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
	?>
	<tr>
		<td><?php echo $fetch['id']?></td>
		<td><?php echo $fetch['Temperatura']?></td>
		<td><?php echo $fetch['Humedad']?></td>
		<td><?php echo $fetch['Fecha']?></td>
		<td><?php echo $fetch['Hora']?></td>
	</tr>
	<?php
		}
		}else{
			echo'
			<tr>
			<td colspan = "4"><center>Registros no Existen</center></td>
			</tr>';
		}
		}else if(ISSET($_POST['corte'])){
			$campo = $_POST["rcampo"];
			$corte = $_POST["rcorte"];
			$num = $_POST["ncorte"];
			if($campo == "rtemp"){
				switch ($corte) {
					case "rmenor":
						$query=mysqli_query($conn, "SELECT id, Temperatura, Humedad, LEFT((fecha_actual),10) AS Fecha, SUBSTRING((fecha_actual),12,8) as Hora from `Tb_DHT11` WHERE `Temperatura` < $num") or die(mysqli_error());
						break;
					case "rmayor":
						$query=mysqli_query($conn, "SELECT id, Temperatura, Humedad, LEFT((fecha_actual),10) AS Fecha, SUBSTRING((fecha_actual),12,8) as Hora from `Tb_DHT11` WHERE `Temperatura` > $num") or die(mysqli_error());
						break;
					case "rigual":
						$query=mysqli_query($conn, "SELECT id, Temperatura, Humedad, LEFT((fecha_actual),10) AS Fecha, SUBSTRING((fecha_actual),12,8) as Hora from `Tb_DHT11` WHERE `Temperatura` = $num") or die(mysqli_error());
						break;
				}
			}else{
				switch ($corte) {
					case "rmenor":
						$query=mysqli_query($conn, "SELECT id, Temperatura, Humedad, LEFT((fecha_actual),10) AS Fecha, SUBSTRING((fecha_actual),12,8) as Hora from `Tb_DHT11` WHERE `Humedad` < $num") or die(mysqli_error());
						break;
					case "rmayor":
						$query=mysqli_query($conn, "SELECT id, Temperatura, Humedad, LEFT((fecha_actual),10) AS Fecha, SUBSTRING((fecha_actual),12,8) as Hora from `Tb_DHT11` WHERE `Humedad` > $num") or die(mysqli_error());
						break;
					case "rigual":
						$query=mysqli_query($conn, "SELECT id, Temperatura, Humedad, LEFT((fecha_actual),10) AS Fecha, SUBSTRING((fecha_actual),12,8) as Hora from `Tb_DHT11` WHERE `Humedad` = $num") or die(mysqli_error());
						break;
				}
			}
			$row=mysqli_num_rows($query);
			if($row>0){
				while($fetch=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $fetch['id']?></td>
			<td><?php echo $fetch['Temperatura']?></td>
			<td><?php echo $fetch['Humedad']?></td>
			<td><?php echo $fetch['Fecha']?></td>
			<td><?php echo $fetch['Hora']?></td>
		</tr>
		<?php
			}
			}else{
				echo'
				<tr>
				<td colspan = "4"><center>Registros no Existen</center></td>
				</tr>';
			}
			}else if(ISSET($_POST['res'])) {
				if(ISSET($_POST['ctem'])){
					$tem = $_POST["ctem"];
					$numtem = $_POST["ntres"];
					$cortem = $_POST["stem"];
					$coltem = $_POST["tcolor"];
				}else{
					$tem = "off";
				}
				if(ISSET($_POST['chum'])){
					$hum = $_POST["chum"];
					$numhum = $_POST["nhres"];
					$corhum = $_POST["shum"];
					$colhum = $_POST["hcolor"];
				}else{
					$hum = "off";
				}
				$query=mysqli_query($conn, "SELECT id, Temperatura, Humedad, LEFT((fecha_actual),10) AS Fecha, SUBSTRING((fecha_actual),12,8) as Hora from `Tb_DHT11`") or die(mysqli_error());
				$row=mysqli_num_rows($query);
			if($row>0){
				while($fetch=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $fetch['id']?></td>
			<?php
			if($tem == "on"){
				switch ($cortem){
					case "smenor":
						if($fetch['Temperatura']<$numtem){
							?><td <?php echo "style='background-color:$coltem'"?>><?php echo $fetch['Temperatura']?></td><?php
						}else{
							?><td><?php echo $fetch['Temperatura']?></td><?php
						}
						break;
					case "sigual":
						if($fetch['Temperatura']=$numtem){
							?><td <?php echo "style='background-color:$coltem'"?>><?php echo $fetch['Temperatura']?></td><?php
						}else{
							?><td><?php echo $fetch['Temperatura']?></td><?php
						}
						break;
					case "smayor":
						if($fetch['Temperatura']>$numtem){
							?><td <?php echo "style='background-color:$coltem'"?>><?php echo $fetch['Temperatura']?></td><?php
						}else{
							?><td><?php echo $fetch['Temperatura']?></td><?php
						}
						break;
				}
			}else{
				?><td><?php echo $fetch['Temperatura']?></td><?php
			}
			?>
			<?php
			if($hum == "on"){
				switch ($corhum){
					case "smenor":
						if($fetch['Humedad']<$numhum){
							?><td <?php echo "style='background-color:$colhum'"?>><?php echo $fetch['Humedad']?></td><?php
						}else{
							?><td><?php echo $fetch['Humedad']?></td><?php
						}
						break;
					case "sigual":
						if($fetch['Humedad']=$numhum){
							?><td <?php echo "style='background-color:$colhum'"?>><?php echo $fetch['Humedad']?></td><?php
						}else{
							?><td><?php echo $fetch['Humedad']?></td><?php
						}
						break;
					case "smayor":
						if($fetch['Humedad']>$numhum){
							?><td <?php echo "style='background-color:$colhum'"?>><?php echo $fetch['Humedad']?></td><?php
						}else{
							?><td><?php echo $fetch['Humedad']?></td><?php
						}
						break;
				}
			}else{
				?><td><?php echo $fetch['Humedad']?></td><?php
			}
			?>
			<td><?php echo $fetch['Fecha']?></td>
			<td><?php echo $fetch['Hora']?></td>
		</tr>
		<?php
			}
			}else{
				echo'
				<tr>
				<td colspan = "4"><center>Registros no Existen</center></td>
				</tr>';
			}
			}else if(ISSET($_POST['mm'])){
				$query=mysqli_query($conn,"CREATE TABLE temp (Temperatura FLOAT,Humedad float,fecha_actual TIMESTAMP(6));");
				$query=mysqli_query($conn,"CREATE TABLE ma (maxTemperatura FLOAT,prtemp float,prhum float,maxHumedad float,minTemperatura FLOAT,minHumedad float,fecha_actual TIMESTAMP(6));");
				$query=mysqli_query($conn,"INSERT INTO temp (Temperatura, Humedad, fecha_actual) SELECT CAST(Temperatura as FLOAT),CAST(Humedad as FLOAT), fecha_actual FROM `tb_dth11` WHERE Temperatura != 'nan';");
				$query=mysqli_query($conn,"INSERT INTO ma (fecha_actual, maxTemperatura, maxHumedad,prtemp,prhum,minTemperatura, minHumedad)SELECT LEFT((fecha_actual),10) AS Fecha, MAX(Temperatura), MAX(Humedad),avg(Temperatura),avg(Humedad),MIN(Temperatura), MIN(Humedad) FROM temp GROUP BY Fecha;");
				$query=mysqli_query($conn,'SELECT LEFT((fecha_actual),10) AS Fecha, maxTemperatura as tMaxima, minTemperatura as tminima, round((prtemp),1) as prtemp,round((prhum),1) as prhum,maxHumedad as hMaxima, minHumedad as hminima FROM ma;');
				while($fetch=mysqli_fetch_array($query)){
					echo '<tr>';
					echo '<td>';
					echo $fetch['Fecha'];
					echo '</td>';
					if(ISSET($_POST['cmaxtem'])){
							echo '<td>';
							echo $fetch['tMaxima'];
							echo '</td>';
					}
					if(ISSET($_POST['cmintem'])){
							echo '<td>';
							echo $fetch['tminima'];
							echo '</td>';
					}
					if(ISSET($_POST['cmaxhum'])){
							echo '<td>';
							echo $fetch['hMaxima'];
							echo '</td>';
					}
					if(ISSET($_POST['cminhum'])){
							echo '<td>';
							echo $fetch['hminima'];
							echo '</td>';
					}
					echo '</tr>';
				}
				$query=mysqli_query($conn,'DROP TABLE temp,ma,mi,mmth;');
		}else{
			$query=mysqli_query($conn, "SELECT id, Temperatura, Humedad, LEFT((fecha_actual),10) AS Fecha, SUBSTRING((fecha_actual),12,8) as Hora from `tb_dht11`;") or die(mysqli_error());
			while($fetch=mysqli_fetch_array($query)){
		?>
			<tr>
				<td><?php echo $fetch['id']?></td>
				<td><?php echo $fetch['Temperatura']?></td>
				<td><?php echo $fetch['Humedad']?></td>
				<td><?php echo $fetch['Fecha']?></td>
				<td><?php echo $fetch['Hora']?></td>
			</tr>
		<?php
			}
		}
	?>
</body>
</html>