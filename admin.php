<?php
echo "<style>
        *{
            font-family: sans-serif;
         }
      </style>";
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

echo "id &nbsp; votos";

echo "<table>";

for ($x = 0; $x <= $numLinhas; $x++) {
    
    #id
    $idSQL = "SELECT id FROM dados WHERE id=$x";
    $idRES = mysqli_query($conn, $idSQL);
    $idFetch = mysqli_fetch_assoc($idRES);
    $idROW = $idFetch["id"];

    #votos
    $votosSQL = "SELECT votos FROM dados WHERE id=$x";
    $votosRES = mysqli_query($conn, $votosSQL);
    $votosFetch = mysqli_fetch_assoc($votosRES);
    $votosROW = $votosFetch["votos"];

    #print da tabela
    echo
    "<tr>
        <td>
        $idROW
        </td>

        <td>
        $votosROW
        </td>
    </tr>";
  }
echo "</table>";
?>
