<section>
Créations
<div class="container-projects">

<?php
$projets = scandir('projets');
foreach ($projets as &$file_name) {
    if($file_name == '.' || $file_name == '..') {
        continue;
    }
    $get_file = file_get_contents('projets/'.$file_name);
    $get_json = json_decode($get_file, true);
        ?>

<div class="project-box f-<?php echo $get_json['filtre']?>"
    style="background-image: url(/assets/);">
    <div class="filter-hover">
        <div class="filter-container">
            <h2><?php echo $get_json['titre']?></h2>
            <p class="summary">
                <?php echo mb_strimwidth($get_json['chapo'], 0, 300, "...")?>
            </p>
            <a href="Projet/<?php echo $get_json['filename']?>" class="black-btn">En savoir plus</a>
        </div>
    </div>
</div>

<?php
    
}
?>

</div>

</section>
