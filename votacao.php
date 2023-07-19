<?php
    session_start();
    include("database.php");
?>
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <title>Votação - OnlyHaters</title>
    <style>
        *{
            font-family: sans-serif;
        }
        h1{
            text-shadow: 1px 1px 4px black;
            color: white;
        }
        .line{
            display: flex;
            justify-content: space-evenly;
        }
        .item{
            width: 40%;
            background-color: rgb(43, 43, 43);
            margin: 1% 1% 1% 1%;
            color: white;
            padding: 1% 1% 1% 1%;
            border-radius: 5px 5px 5px 5px;
            display: block;
        }
        #aviso{
            background-color: rgb(197, 166, 11);
            margin-bottom: 1%;
        }
        body{
            margin: 0px 0px 0px 0px;
            background-color: rgb(80, 80, 80);
        }
        #corpo{
            margin:8px 8px 8px 8px;
        }
        @media (min-width:400px) {
        h3{
            font-size: 90%;
            text-shadow: 1px 1px 2px black;
            color: white;
        }            
        }
        @media (max-width:400px){
        h3{
            font-size: 70%;
            text-shadow: 1px 1px 1px black;
            color: white;
        }
        h2{
            font-size: 70%;
            text-shadow: 1px 1px 3px black;
            color: white;
        }
        }
        img{
            width: 90%;
            margin: 5% 5% 0% 5%;
            border-radius: 2px 2px 2px 2px;
        }
        .votos{
            text-align: center;
            background-color: rgb(33, 171, 213);
            color: white;
            text-shadow: 1px 1px 3px black;
            width: 70%;
            padding: 1% 0% 1% 0%;
            margin-left:15% ;
            margin-right: 15%;
            margin-bottom: 5%;
            border-radius: 3px 3px 3px 3px;
            box-shadow:2px 2px 0px rgb(53, 131, 155);
        }
        .botao{
            border-style: none;
            background-color: rgb(33, 171, 213);
            width: 100%;
        }
        
        
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <div id="aviso">Caso algo não esteja funcionando, recarregue o site. Se ainda sim o problema não for resolvido, acesse o <a href="suporte.html">suporte</a></div>
    

    <!--variáveis-->
    <script>
        id001 = <?php echo $_SESSION["id01"]; ?>;
        id002 = <?php echo $_SESSION["id02"]; ?>;
        id003 = <?php echo $_SESSION["id03"]; ?>;
        id004 = <?php echo $_SESSION["id04"]; ?>;
        id005 = <?php echo $_SESSION["id05"]; ?>;
        id006 = <?php echo $_SESSION["id06"]; ?>;
        id007 = <?php echo $_SESSION["id07"]; ?>;
        id008 = <?php echo $_SESSION["id08"]; ?>;
        id009 = <?php echo $_SESSION["id09"]; ?>;
        id010 = <?php echo $_SESSION["id10"]; ?>;
        id011 = 0
        id012 = 0
        id013 = 0
        id014 = 0
        id015 = 0
        id016 = 0
        id017 = 0
        id018 = 0
        id019 = 0
        id020 = 0
        votado = "none"
        votando = "none"
    </script>


    <!--verificação-->
    <script>
        function votandofunc(num){
        votando = num
        if (votando != votado){
            switch(votado){
                case 1:
                jQuery.ajax({
                type: "POST",
                url: 'database.php',
                dataType: 'json',
                data: {functionname: 'verificarphp', arguments: []}
                });
                jQuery.ajax({
                type: "POST",
                url: 'database.php',
                dataType: 'json',
                data: {functionname: 'updec', arguments: [1]}
                });
                break;
                case 2:
                id002 --
                break;
                case 3:
                id003 --
                break;
                case 4:
                id004 --
                break;
                case 5:
                id005 --
                break;
                case 6:
                id006 --
                break;
                case 7:
                id007 --
                break;
                case 8:
                id008 --
                break;
                case 9:
                id009 --
                break;
                case 10:
                id010 --
                break;
            }
            switch(votando){
                case 1:
                    jQuery.ajax({
                            type: "POST",
                            url: 'database.php',
                            dataType: 'json',
                            data: {functionname: 'verificarphp', arguments: []}
                    });
                    jQuery.ajax({
                    type: "POST",
                    url: 'database.php',
                    dataType: 'json',
                    data: {functionname: 'upinc', arguments: [1]}
                    });
                    votado = 1
                break;

                case 2:
                    id002 ++
                    votado = 2
                break;
                
                case 3:
                    id003 ++
                    votado = 3
                break;
                
                case 4:
                    id004 ++
                    votado = 4
                break;
                
                case 5:
                    id005 ++
                    votado = 5
                break;
                
                case 6:
                    id006 ++
                    votado = 6
                break;
                
                case 7:
                    id007 ++
                    votado = 7
                break;
                
                case 8:
                    id008 ++
                    votado = 8
                break;
                
                case 9:
                    id009 ++
                    votado = 9
                break;
                
                case 10:
                    id010 ++
                    votado = 10
                break;
            }
        }

        else if (votando == "none" && votado == "none"){
            switch(votando){
                case 1:
                    jQuery.ajax({
                            type: "POST",
                            url: 'database.php',
                            dataType: 'json',
                            data: {functionname: 'verificarphp', arguments: []}
                    });
                    jQuery.ajax({
                            type: "POST",
                            url: 'database.php',
                            dataType: 'json',
                            data: {functionname: 'upinc', arguments: [1]}
                    });
                    votado = 1
                break;

                case 2:
                    id002 ++
                    votado = 2
                break;
                
                case 3:
                    id003 ++
                    votado = 3
                break;
                
                case 4:
                    id004 ++
                    votado = 4
                break;
                
                case 5:
                    id005 ++
                    votado = 5
                break;
                
                case 6:
                    id006 ++
                    votado = 6
                break;
                
                case 7:
                    id007 ++
                    votado = 7
                break;
                
                case 8:
                    id008 ++
                    votado = 8
                break;
                
                case 9:
                    id009 ++
                    votado = 9
                break;
                
                case 10:
                    id010 ++
                    votado = 10
                break;
            }
        }

        else if (votando == votado){
            switch(votando){
                case 1:
                    //upi = update increase
                    //supi = semi update increase, apenas acrescenta em um a variavel do voto
                    //rupi = return do sql
                    jQuery.ajax({
                            type: "POST",
                            url: 'database.php',
                            dataType: 'json',
                            data: {functionname: 'verificarphp', arguments: []}
                    });
                    jQuery.ajax({
                            type: "POST",
                            url: 'database.php',
                            dataType: 'json',
                            data: {functionname: 'updec', arguments: [1]}
                    });
                    votado = "none"
                break;
                
                case 2:
                    id002 --
                    votado = "none"
                break;
                
                case 2:
                    id002 --
                    votado = "none"
                break;
                
                case 3:
                    id003 --
                    votado = "none"
                break;
                
                case 4:
                    id004 --
                    votado = "none"
                break;
                
                case 5:
                    id005 --
                    votado = "none"
                break;
                
                case 6:
                    id006 --
                    votado = "none"
                break;
                
                case 7:
                    id007 --
                    votado = "none"
                break;
                
                case 8:
                    id008 --
                    votado = "none"
                break;
                
                case 9:
                    id009 --
                    votado = "none"
                break;
                
                case 10:
                    id010 --
                    votado = "none"
                break;
            }
            allup()
            
        }

        switch(votado){
            case 1:
                allup()
                butaodown(1)
            break;
            case 2:
                allup()
                butaodown(2)
            break;
            case 3:
                allup()
                butaodown(3)
            break;
            case 4:
                allup()
                butaodown(4)
            break;
            case 5:
                allup()
                butaodown(5)
            break;
            case 6:
                allup()
                butaodown(6)
            break;
            case 7:
                allup()
                butaodown(7)
            break;
            case 8:
                allup()
                butaodown(8)
            break;
            case 9:
                allup()
                butaodown(9)
            break;
            /*case 10:
                allup()
                butaodown(10)
            break;*/

        }
          
        console.log(`votando: ${votando}`)
        console.log(`votado: ${votado}`)
        printvotos()
        }



        function printvotos(){
            document.getElementById("sp001").innerText = id001
            document.getElementById("sp002").innerText = id002
            document.getElementById("sp003").innerText = id003
            document.getElementById("sp004").innerText = id004
            document.getElementById("sp005").innerText = id005
            document.getElementById("sp006").innerText = id006
            document.getElementById("sp007").innerText = id007
            document.getElementById("sp008").innerText = id008
            document.getElementById("sp009").innerText = id009
            //document.getElementById("sp010").innerText = id010
        }

    </script>

    <!--botao-->
    <script>
        function butaodown(n){
            document.getElementById(`a${n}`).style = "background-color:rgb(40, 252, 3); box-shadow:2px 2px 0px rgb(21, 125, 2);"
            document.getElementById(`b${n}`).style = "background-color:rgb(40, 252, 3);"
        }
        
        function butaoup(n){
            document.getElementById(`a${n}`).style = "background-color:rgb(33, 171, 213); box-shadow:2px 2px 0px rgb(53, 131, 155);"
            document.getElementById(`b${n}`).style = "background-color:rgb(33, 171, 213);"
        }

        function allup(){
            n=1
            while (n <= 20){
                if (n < 10){
                    document.getElementById(`a${n}`).style = "background-color:rgb(33, 171, 213); box-shadow:2px 2px 0px rgb(53, 131, 155);"
                    document.getElementById(`b${n}`).style = "background-color:rgb(33, 171, 213);"
                }
                n++
            }
        }

    </script>

    <!--php-->
    <?php

    //database
    ?>

    <div id="corpo">
        <h1>Vote em quem você achar mais bonito!</h1>
        <h3>São "apenas" 20 vagas, afinal, eu não sou tão desocupado assim</h3>
              <!-- linha 1-->
        <div class="line">
            <!--perfil 1-->
            <div class="item">
                <div class="perfil">
                <img src="images/001.jpeg">
                    <h2>Pogo</h2>
                    <h3>-16 anos <br>
                    -<i>Ouse conquistar a sí mesmo</i>
                </h3>
                </div>
                <div title="Clique para votar!" class="votos" id="a1">
                    <button id="b1" class="botao"  onclick="votandofunc(1)">
                        <strong>
                            Votos:
                            <span id="sp001"></span>
                        </strong>
                    </button>
                </div>
            </div>
            <!--perfil 2-->
            <div class="item">
                <div class="perfil">
                <img src="images/002.jpeg">
                    <h2>Marcel </h2>
                    <h3>-2007 <br>
                        -Dj apenas por diversão
                    </h3>
                </div>
                <div title="Clique para votar!" class="votos" id="a2">
                    <button class="botao" id="b2" onclick="votandofunc(2)">
                        <strong>
                            Votos:
                            <span id="sp002"></span>
                        </strong>
                    </button>
                </div>
            </div>
        </div><!-- linha 2-->
        <div class="line">
                <!--perfil 1-->
            <div class="item">
                <div class="perfil">
                <img src="images/003.jpeg">
                    <h2>Eduardo</h2>
                    <h3>-2008
                    </h3>
                </div>
                <div title="Clique para votar!" class="votos" id="a3">
                    <button class="botao" id="b3" onclick="votandofunc(3)">
                        <strong>
                            Votos:
                            <span id="sp003"></span>
                        </strong>
                    </button>
                </div>
            </div>
            <!--perfil 2-->
            <div class="item">
                <div class="perfil">
                <img src="images/004.jpeg">
                    <h2>Bárbara </h2>
                    <h3>-16
                    </h3>
                </div>
                <div title="Clique para votar!" class="votos" id="a4">
                    <button class="botao" id="b4" onclick="votandofunc(4)">
                        <strong>
                            Votos:
                            <span id="sp004"></span>
                        </strong>
                    </button>
                </div>
            </div>
        </div><!-- linha 3-->
        <div class="line">
            <!--perfil 1-->
            <div class="item">
                <div class="perfil">
                <img src="images/005.jpeg">
                    <h2>André</h2>
                    <h3>-2° ano
                    </h3>
                </div>
                <div title="Clique para votar!" class="votos" id="a5">
                    <button class="botao" id="b5" onclick="votandofunc(5)">
                        <strong>
                            Votos:
                            <span id="sp005"></span>
                        </strong>
                    </button>
                </div>
            </div>
            <!--perfil 2-->
            <div class="item">
                <div class="perfil">
                <img src="images/006.png">
                    <h2>Nicolas</h2>
                    <h3>-O criador <br>
                        -PHP me deixou completamente abilolado das ideia
                    </h3>
                </div>
                <div title="Clique para votar!" class="votos" id="a6">
                    <button class="botao" id="b6" onclick="votandofunc(6)">
                        <strong>
                            Votos:
                            <span id="sp006"></span>
                        </strong>
                    </button>
                </div>
            </div>
        </div><!-- linha 4-->
        <div class="line">
            <!--perfil 1-->
            <div class="item">
                <div class="perfil">
                <img src="images/007.jpeg">
                    <h2>Gustavo</h2>
                    <h3>-2007 <br>
                        -chamine <br>
                        -vulgo lobo mal <br>
                        -ᴀ ɪɴᴠᴇᴊᴀ ǫᴜᴇ ɴᴏs ᴄᴇʀᴄᴀ ᴛᴀᴍʙᴇ́ᴍ ɴᴏs ғᴏʀᴛᴀʟᴇᴄᴇ🎭
                    </h3>
                </div>
                <div title="Clique para votar!" class="votos" id="a7">
                    <button class="botao" id="b7" onclick="votandofunc(7)">
                        <strong>
                            Votos:
                            <span id="sp007"></span>
                        </strong>
                    </button>
                </div>
            </div>
            <!--perfil 2-->
            <div class="item">
                <div class="perfil">
                <img src="images/008.jpeg">
                    <h2> Sid </h2>
                    <h3>-Prefiro ser odiado pelo o que eu sou do que amado pelo o que eu não sou <br>
                    </h3>
                </div>
                <div title="Clique para votar!" class="votos" id="a8">
                    <button class="botao" id="b8" onclick="votandofunc(8)">
                        <strong>
                            Votos:
                            <span id="sp008"></span>
                        </strong>
                    </button>
                </div>
            </div>
        </div><!-- linha 5-->
        <div class="line">
            <!--perfil 1-->
            <div class="item">
                <div class="perfil">
                <img src="images/009.jpeg">
                    <h2>Kauã</h2>
                    <h3>-quero dormi
                    </h3>
                </div>
                <div title="Clique para votar!" class="votos" id="a9">
                    <button class="botao" id="b9" onclick="votandofunc(9)">
                        <strong>
                            Votos:
                            <span id="sp009"></span>
                        </strong>
                    </button>
                </div>
            </div>
            <!--perfil 2-->
            <!--<div class="item">
                <div class="perfil">
                <img src="images/010.jpeg">
                    <h2>  </h2>
                    <h3>
                </div>
                <div title="Clique para votar!" class="votos" id="a10">
                    <button class="botao" id="b10" onclick="votandofunc(10)">
                        <strong>
                            Votos:
                            <span id="sp010"></span>
                        </strong>
                    </button>
                </div>
            </div>-->
        </div>
        
    </div>
        
    <!--print inicial-->
    <script>
        document.getElementById("sp001").innerText = id001
        document.getElementById("sp002").innerText = id002
        document.getElementById("sp003").innerText = id003
        document.getElementById("sp004").innerText = id004
        document.getElementById("sp005").innerText = id005
        document.getElementById("sp006").innerText = id006
        document.getElementById("sp007").innerText = id007
        document.getElementById("sp008").innerText = id008
        document.getElementById("sp009").innerText = id009
        //document.getElementById("sp010").innerText = id010
    </script>

</body>
</html>