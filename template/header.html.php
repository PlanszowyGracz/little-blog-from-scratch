<?php
//TODO: make $data  From Model
//but for now use example dont matter data
$data = ['Co to Litrpg' => '#', 'Losowa Recenzja' => '#', 'Lista recenzji' => '#', 'Ranking' => '#'];
?>
<?php
function addMobileClass($num)
{
    if ($num === 1) {
        echo "--mobile";
    }
}

?>


<div class="container-header">

    <div class="logo-container">
        <div class="logo-img"></div>
        <div class="logo-text">
            <h1>Opinie o Litrpg </h1>

        </div>

    </div>
    <?php for ($i = 0; $i <= 1; $i++): ?>
        <?php if ($i === 1) : ?>
            <span id="main-navigation-mobile-open"><i class="fa fa-bars fa-3x" aria-hidden="true"></i></span>
        <?php endif; ?>
        <div class="main-navigation-container<?php addMobileClass($i); ?>">
            <?php if ($i === 1) : ?>
                <span id="main-navigation-mobile-close"><i class="fa fa-times fa-3x" aria-hidden="true"></i></span>
            <?php endif; ?>
            <ul class="main-navigation-list<?php addMobileClass($i); ?>">
                <?php foreach ($data as $key => $value): ?>
                    <li class="main-navigation-list__el<?php addMobileClass($i); ?>">
                        <a class="main-navigation-list__el__link<?php addMobileClass($i); ?>"
                           href="<?php echo $value ?>">
                            <?php echo $key; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endfor; ?>
</div>
