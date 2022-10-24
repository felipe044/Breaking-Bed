<h1 class="text-center">Breaking Bad</h1>

<?php
    // arquivo que sera executado
    $arquivos = "https://www.breakingbadapi.com/api/";

    //transforma json array para objs
    $dados= file_get_contents($arquivos);
    $dados = json_decode($dados);

    foreach ($dados->results as $filme){
        $poster = BB.$filme->poster_path;
        ?>
        <div class="col-12 md-12">
            <div class="card">
                <img src="<?=$poster?>" alt="<?=$filme->title?>">
                <p class="titulo"><strong><?=$filme->title?></strong></p>
                <p><a href="filme/<?=$filme->id?>" class="btn btn-warning">Ver Detalhes</a></p>
            </div>
        </div>
        <?php

    }