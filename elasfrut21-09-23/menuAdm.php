<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Menu Administrador</title>
</head>
<style>
    body{
        padding: 0;
        margin: 0;
        background-color: #EFEBC9;
    }

    #box1{
        background-color: #FFFAFA;
        width: 50%;
        height: 900px;
        float: left;
       
    }
    #box1 .midia-menu-adm{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 30vh;

    }
    #box1 .midia-menu-adm a{
        display: flex;
        background: #915AC3;
        height: 90px;
        width: 90px;
        margin: 0 15px;
        border-radius: 10px;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        box-shadow: 6px 6px 10px -1px rgb(0,0,0) ;

    }
    #box1 .midia-menu-adm a i{
        font-size: 25px;
        color: #fff;
    }
 
    #box1 .midia-menu-adm a:hover i{
        transform: scale(0.90);
        color: #000;
    }
    #box1 .midia-menu-adm a:hover{
        transform: scale(0.80);
        
    }
    #box2{
        background-color: #FFFAFA;
        width: 50%;
        height:900px;
        float: right;
    }
    #box2 img{
        margin-top: 250px;
        margin-left: 50px;
    }
     h1 {
    text-align: center;
    font-size: 70px;
    color:#915AC3;
    }
    h4{
    text-align: center;
    font-size: 30px;
    color: #198754;
    }
    p{
    text-align: center;
    }
</style>

<body>
    
<div id="box1">
    <img src="img/logo4.png" width="250" height="250" >
    <h1>Elas Frut</h1>
    <h4>Área Administrador</h4>
    <p>Seja Bem-vindo(a)</p>
        <div class="midia-menu-adm">
 
        <a href="configlistafornecedor.php"><i class="bi bi-pencil"></i></a>
        <a href="listafornecedores.php"><i class="bi bi-person"></i></a>
        <a href="index.php"><i class="bi bi-hand-index"></i></a>
        <a href="contato.php"><i class="bi bi-telephone"></i></a>
        <a href="listaprodut.php"><i class="bi bi-truck"></i></a>
        <a href="adm.php"><i class="bi bi-box-arrow-right"></i></a> 
        </div>
    </div>

    <div id="box2">
    <img class="imgfrutas" src="img/imgmenuadm.png" width="700" height="600">
    </div>
    <footer class="footer bg-success text-white text-center">
         Copyright &copy; 2023 Elas Frut
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>