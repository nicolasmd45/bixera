<?php
#incluindo a database
include("database.php");

#essa página serve como admin, realizando o CRUD

#pré comando
$numLinhasSQL = "SELECT * FROM dados";

#comando na query
$numLinhasRES = mysqli_query($conn, $numLinhasSQL);

#numero de inhas
$numLinhas = mysqli_num_rows($numLinhasRES);


#for que printa a tabela
echo "<table>";
echo "<tr>
        <td>
            id
        </td>
        
        <td>
            votos
        </td>
      </tr>
      <hr>";
for ($x = 0; $x <= $numLinhas; $x++) {

    #id
    $idSQL = "SELECT id FROM dados WHERE id = $x";
    $idRES = mysqli_query($conn, $idSQL);
    $id = mysqli_fetch_assoc($idRES);

    #votos
    $votosSQL = "SELECT votos FROM dados WHERE id = $x";
    $votosRES = mysqli_query($conn, $votosSQL);
    $votos = mysqli_fetch_assoc($votosRES);

    #print da tabela
    echo "<tr> <td>";
    echo $idRES;
    echo "</td> <td>";
    echo $votosRES;
    echo "</td> </tr>";

  }

echo "</table>"
?>