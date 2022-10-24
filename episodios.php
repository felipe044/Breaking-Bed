<?php
    $id = $param[1] ?? null;

    if (empty ($id) ) {
        ?>
        <p class="alert alert-danger text-center">Episodio inválido!</p>
        <?php
    }else {
        $arquivo = "https://www.breakingbadapi.com/api/episodes";
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        $poster = BB.$dados->poster_path;
        
        ?>
        <div class="card">
            <div class="row">
                <div class="col-12 col-md-13">
                    <img src="<?=$poster?>" alt="<?$dados->title?>" class="w-100">
                </div>
                <div class="col-12 col-md-9">
                    <h1 class="text-center"><?=$dados->title?></h1>
                    <p><?=$dados->biography?></p>
                </div>
            </div>
        </div>
        <?php
            }   