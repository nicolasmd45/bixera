<style>
        *{
            font-family: sans-serif;
          }
        .linha{
          background-color: white;
          border: 1px solid black;
          text-align:center;
          width:40px;
          height:30px;
        }
        .linha:hover{
          background-color: rgb(200, 200, 200);
          border: 1px solid black;
          text-align:center;
          width:40px;
          height:30px;
        }
        table{
          border-collapse: collapse;
        }
        #update{
          position:absolute;
          right:1%;
          border:1px solid black;
          top:50%;
          box-shadow:1px 1px 2px black;
          padding:1% 1% 1% 1%;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
        .cell{
          padding:5px;
        }
        #confirmar{
          color:white;
          background-color:rgb(21, 212, 11);
          width:100%;
          height:100%;
          margin:0px;
          border:none;
          padding:6px 6px;
        }
        #confirmar:hover{
          color:white;
          background-color:rgb(12, 107, 7);
          width:100%;
          height:100%;
          margin:0px;
          border:none;
          padding:6px 6px;
        }
        #labelid{
          text-align:right;
        }
</style>
<?php
$id = 0;
#incluindo a database
include("database.php");

#essa página serve como admin dos dados da votação, realizando o CRUD

    #número de linhas
    $SQL = "SELECT * FROM dados";
    $Res = mysqli_query($conn, $SQL);
    $numLinhas = mysqli_num_rows($Res);

#for que printa a tabela
echo "<form action='admin.php' method='post'> 
  <table>
  <tr class='linha'><td>
  ID
  </td><td class='cell'>
  Nome
  </td><td class='cell'>
  Votos
  </td><td class='cell'>
  Selecione:
  </td></tr>";
for ($x = 1; $x <= $numLinhas; $x++) {
    #pré comando
    $SQL = "SELECT * FROM dados WHERE id=$x";
    #comando
    $Res = mysqli_query($conn, $SQL);
    #fetch
    $Fetch = mysqli_fetch_assoc($Res);
    $id = $Fetch["id"];
    echo
    "<tr class='linha'>
    <td class='cell'>" .
    $Fetch["id"] .
    "</td>
    <td class='cell'>" .
    $Fetch["Nome"] .
    "</td>
    <td class='cell'>" .
    $Fetch["votos"] .
    "</td>
    <td>".
    "<input type='radio' name='selected' value='$id'".
    "</td>
    </tr>";
  }
echo"<tr class='linha'> <td id='ConCell' colspan='4'>".
    "<input type='submit' value='Confirmar' id='confirmar'>".
    "</td> </tr>".
    "</table>
    </form>";


  //funciton edit
  edit($_POST["selected"], $_POST["nome"]);
?>

<div id="update">

  <form action="admin.php" method="post">
    <table>
      <tr>
        <td>
          <label for="nome">nome:</label>
        </td>
        <td>
          <input type="text" name="nome" id="Nome">
        </td>
      </tr>
      <tr>
        <td id='labelid'>
          <label>id:</label>
        </td>
        <td>
          <?php
            echo $_POST["selected"];
          ?>
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="atualizar">
        </td>
      </tr>
    </table>
  </form>
</div>