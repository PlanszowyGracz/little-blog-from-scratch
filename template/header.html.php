<?php
//TODO: make $data  From Model
//but for now use example dont matter data
$data=['Co to Litrpg'=>'#','Losowa Recenzja'=>'#','Lista recenzji'=>'#', 'Ranking'=>'#' ];
?>
<div class="container-header">

    <div class="logo-container">
        <div class="logo-img"></div>
        <div class="logo-text">
            <h1>Opinie o Litrpg </h1>

        </div>

    </div>
    <div class="main-navigation-container">
        <ul class="main-navigation-list">
            <?php foreach ($data as $key => $value):?>
            <li class="main-navigation-list__el">
                <a class="main-navigation-list__el__link"href="<?php echo $value ?>">
                    <?php echo $key;?>
                </a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
