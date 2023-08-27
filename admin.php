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
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<?php
$id = 0;
function idupdate($x){
  $id=$x;
  echo"<script>document.getElementById('labelid').innerText= 'Id: &nbsp; $id'</script>";
}
#incluindo a database
include("database.php");

#essa página serve como admin dos dados da votação, realizando o CRUD

    #número de linhas
    $SQL = "SELECT * FROM dados";
    $Res = mysqli_query($conn, $SQL);
    $numLinhas = mysqli_num_rows($Res);

#for que printa a tabela
echo "<table>
  <tr class='linha'><td>
  ID
  </td><td>
  Nome
  </td><td>
  Votos
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
    <td>" .
    $Fetch["id"] .
    "</td>
    <td>" .
    $Fetch["Nome"] .
    "</td>
    <td>" .
    $Fetch["votos"] .
    "</td>
    <td>".
    "<button id='botao' onclick='atualizar($id)'>atualizar</button>".
    "</td
    </tr>";
  }
echo "</table>";

?>
<script>
  function atualizar(x){
  jQuery.ajax({
    type: "POST",
    url: 'admin.php',
    dataType: 'json',
    data: {functionname: 'idupdate', arguments: [x]}
  })

  }
</script>

<div id="update">
  <form>
    <label for="nome">nome:</label>
    <input type="text" name="nome" id="nome">
    <label ><span id="labelid">Id: &nbsp; <?php  echo$id; ?></span></label>

  </form>
</div>