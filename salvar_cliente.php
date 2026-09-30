<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salvar cliente</title>
    <link rel="stylesheet" href="css/estilo.css">
    <style>
         body {
            display: flex;            /* Ativa o sistema de posicionamento Flexbox */
            justify-content: center;  /* Centraliza na HORIZONTAL (esquerda/direita) */
            align-items: center;      /* Centraliza na VERTICAL (cima/baixo) */
            margin: 0;                /* Remove espaços em branco nas bordas da tela */
            background-color: #f0f0f0; /* Um fundo cinza claro para destacar sua caixa branca */
    }
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
</head>
<body>
    <div>
        <div>
            <h2 style"text-align: center;">
<?php
require_once "conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cliente (nome, email, telefone, senha) VALUES ('$nome','$email','$telefone','$senha')";
if(mysqli_query($conexao,$sql)){
echo " Salvo com sucesso";
}else{
echo "Falhou";
}
?>
</h2>
            <br><br>
            <a href="login_cliente.html">
                <button>Voltar</button>
            </a>
        </div>    
    </div>
</body>
</html>