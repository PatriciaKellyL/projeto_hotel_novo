<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar quartos</title>
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
            <h1 style="text-align: center;">Listar quartos<h1>
                
                 <!-- A DIV de fora cria o contorno com bordas arredondadas -->
<div style="border: 1px solid black; border-radius: 10px; overflow: hidden; margin-top: 15px; background-color: white;">
    
    <table style="width: 100%; border-collapse: separate; border-spacing: 0; text-align: left;">
        <thead>
            <tr style="background-color: #60606a;">
                <!-- Adicionado border-right nas duas primeiras colunas -->
                <th style="padding: 10px; border-bottom: 1px solid black; border-right: 1px solid black;">Número do Quarto</th>
                <th style="padding: 10px; border-bottom: 1px solid black; border-right: 1px solid black;">Tipo</th>
                <!-- A última coluna não tem border-right para não estragar o canto direito -->
                <th style="padding: 10px; border-bottom: 1px solid black;">Preço da Diária</th>
            </tr>
        </thead>
        <tbody>

        <?php
        require_once "conexao.php";
        if(!empty($_GET['id'])){
            $id_quarto = $_GET['id'];
        } else {
            $id_quarto = 1;
        }

        // Busca os dados de todos os quartos no banco
        $sql = "SELECT * FROM quartos";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            // O laço while percorre os dados e cria uma nova linha (<tr>) para cada quarto
            while ($dados = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                // Divisórias verticais adicionadas com border-right nos dois primeiros itens
                echo "<td style='padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;'>" . $dados['numero'] . "</td>";
                echo "<td style='padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;'>" . $dados['tipo'] . "</td>";
                // O último item da linha fica sem a borda direita
                echo "<td style='padding: 10px; border-bottom: 1px solid #ccc;'>R$ " . number_format($dados['preco_diaria'], 2, ',', '.') . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3' style='padding: 10px; text-align: center; color: red;'>Nenhum quarto encontrado.</td></tr>";
        }
        ?>

        </tbody>
    </table>
</div>

<!-- Os botões ficam organizados aqui fora, abaixo da tabela -->
<br>
<a href="cadastrar_quarto.html" style="text-decoration: none;">
    <button>Cadastrar outro quarto</button>
</a>
<br>
<a href="logout.php" style="text-decoration: none;">
    <button style="background-color: #dc3545;">Sair</button>
</a>
  
    </div>
</body>
</html>