<?php
// --- DADOS DO PERFIL ---
$nome = "Cauã";
$bio = "Meu nome é Cauã, tenho 17 anos, estou cursando o 2ª do Ensino Médio, estudo no SESI
    de segunda, terca e sexta, e eu faço SENAI de quarta e quinta o dia inteiro, faço curso
    de DEV (Desenvolvimento de Sistemas).";
$imagem = "https://i.pinimg.com/1200x/2b/7a/01/2b7a01d9272a3f00a4b380110a87d3dd.jpg";

$links = [
    "Instagram" => "https://instagram.com/07.cauazimxy",
    "WhatsApp" => "https://wa.me/17996021691",
    "Meu Jogo Favorito" => "https://rachacuca.com.br/logica/problemas/",
    "Música do Momento" => "https://www.youtube.com/watch?v=OzDkgc9bVhQ&list=RDOzDkgc9bVhQ&start_radio=1"
];

?>
<!DOCTYPE html>

<html lang="pt-br">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioLink de <?php echo $nome; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">
        <h1> <?php echo $nome; ?> </h1>
        <p> <?php echo $bio; ?> </p>

        <div class="lista-links">
            <?php
                foreach ($links as $texto => $url) {
                    $classe_extra = "";

                    if ($texto == "Instagram") {
                        $classe_extra = "destaque";
                    }

                    // O PHP constrói o botão HTML
                    echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                        $texto
                    </a>";
                }
            ?>
        </div>
    </div>
</body>
</html>