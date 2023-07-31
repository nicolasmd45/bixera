<?php
echo "<style>
        *{
            font-family: sans-serif;
          }
        .linha{
          border: 1px solid black;
          background-color:grey;
          text-align:center;
        }
      </style>";
#incluindo a database
include("database.php");

#essa página serve como admin dos dados da votação, realizando o CRUD

    #número de linhas
    $SQL = "SELECT * FROM dados";
    $Res = mysqli_query($conn, $SQL);
    $numLinhas = mysqli_num_rows($Res);

#for que printa a tabela
echo "<table>";
echo "<tr><td>
      id
      </td>
      <td>
      votos
      </td></tr>";
for ($x = 0; $x <= $numLinhas; $x++) {
    #pré comando
    $SQL = "SELECT * FROM dados WHERE id=$x";
    #comando
    $Res = mysqli_query($conn, $SQL);
    #fetch
    $Fetch = mysqli_fetch_assoc($Res);

    echo
    "<tr class='linha'>
    <td>" .
    $Fetch["id"] .
    "</td>
    <td>" .
    $Fetch["votos"] .
    "</td>
    </tr>";
  }
echo "</table>";

?>
