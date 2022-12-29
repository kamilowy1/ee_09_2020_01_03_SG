<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prognoza pogody Poznań</title>
    <link rel="stylesheet" type="text/css" href="styl4.css"/>
</head>
<body>
    <div id="baner_l">
     <p>maj, 2019 r.</p>
    </div>

      <div id="baner_s">
       <h2>Prognoza dla Poznania</h2>
      </div>

        <div id="baner_p">
         <img src="logo.png" alt="prognoza"/>
        </div>

          <div id="lewy">
           <a href="kwerendy.txt">Kwerendy</a>
          </div>

            <div id="prawy">
             <img src="obraz.jpg" alt="Polska, Poznań"/>
            </div>

              <div id="glowny">
              <table>
                <tr>
                    <th>Lp.</th>
                    <th>DATA</th>
                    <th>NOC - TEMPERATURA</th>
                    <th>DZIEŃ - TEMPERATURA</th>
                    <th>OPADY [mm/h]</th>
                    <th>CIŚNIENIE [hPa]</th>
                </tr>
<?php
// utworzenie zmiennych polaczeniowych

$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "prognoza1";

$conn = mysqli_connect($server,$user,$passwd,$dbname);

//sprawdzenie polaczenia
/*
if (!$conn){
  die ("fatal error:".mysqli_error($conn));
} echo "jest okej";
*/

$sql = "SELECT `id`, `miasta_id`, `data_prognozy`, `temperatura_noc`, `temperatura_dzien`, `opady`, `cisnienie` FROM `pogoda` WHERE `miasta_id`='2' ORDER BY `data_prognozy` DESC";

$zapytanie = mysqli_query($conn,$sql);

while ($wynik = mysqli_fetch_row($zapytanie)){
  echo "<tr>";
  echo "<td>". $wynik[0] ."</td>";
  echo "<td>". $wynik[2] ."</td>";
  echo "<td>". $wynik[3] ."</td>";
  echo "<td>". $wynik[4] ."</td>";
  echo "<td>". $wynik[5] ."</td>";
  echo "<td>". $wynik[6] ."</td>";
  echo "</tr>";
}

mysqli_close($conn);
?>
              </table>
              </div>

                <div id="stopka">
                 <p>Stronę wykonał: 000000000</p>
                </div>
        
</body>
</html>