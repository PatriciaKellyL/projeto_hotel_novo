<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minhas reservas</title>
    <link rel="stylesheet" href="css/estilo.css">
    <style>
     
        input {
            width: 100%;             /* Faz a caixa ocupar toda a largura do formulário */
            padding: 8px;           /* Deixa a caixa mais alta e espaçosa por dentro */
            border: 1px solid black; /* Cria uma borda preta simples */
            border-radius: 5px;
            box-sizing: border-box;  /* Evita que o input passe do limite do formulário */
    }
        label {
            display: block;
            text-align: left;
            margin-top: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
    }  
        form {
      
            width: 500px;              /* Largura da caixa */
            background-color: white;   /* Cor de fundo da caixa */
            border: solid black;
            border-radius:  10px ;   /* Linha ao redor da caixa */
            padding: 20px;             /* Espaço interno para o texto não encostar na borda */
    }   
         /* ESTILO DO BOTÃO SALVAR */
        button {
            display: block;          /* Necessário para o botão aceitar a centralização por margem */
            margin: 20px auto 0 auto;/* Centraliza o botão (0 auto nas laterais) e dá espaço no topo */
            padding: 10px 30px;      /* Espaço interno para o botão não ficar esmagado */
            font-size: 16px;         /* Tamanho da letra */
            font-weight: bold;       /* Letra em negrito */
            background-color: #28a745;/* Cor de fundo verde inicial */
            color: white;            /* Cor da letra branca */
            border: none;            /* Remove a borda padrão feia do navegador */
            border-radius: 5px;      /* Cantos levemente arredondados */
            cursor: pointer;         /* Faz a seta do mouse virar a "mãozinha" de clique */
            transition: background-color 0.2s ease; /* Faz a mudança de cor ser suave, não estática */
    }

        /* EFEITO SENSÍVEL AO MOUSE (:HOVER) */
        button:hover {
            background-color: #218838; /* Fica um verde mais escuro quando o mouse passa por cima */
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>    

            
                <?php
                require_once "conexao.php";

                ?>
        
             <nav style="background-color: black;" class="navbar navbar-dark">
                <div class="container">
                    <h2><a href="" style="color: white;" class="nav-brand fw-bolb nav-link">Waldorf Astoria Jeddah – Qasr Al Sharq</a></h2>
                        <ul class="nav">
                            <li class="nav-item"><a href="logout.php"class="nav-link text-white" ><button class= "btn btn-danger" >Sair</button></a></li>  
                        </ul>
                </div>        
            </nav>    
</body>
</html>