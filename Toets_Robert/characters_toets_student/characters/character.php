<?
require 'includes/header.php';
require 'includes/data.php';
$id = $_GET["id"];
$character = getSingleCharacter($id);

?>

<div class="mb-5 mt-2">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>Bekijk hier <? echo $character["name"]; ?></h1>
        <div class="align-self-center">
            <a class="btn-lg btn-info text-white" href="#">update character</a>
            <a class="btn-lg btn-danger text-white" href="#">Delete character x</a>
        </div>
    </div>

    <div class="content mt-2">
        <div>
            <div>
                <div class="text-center border">
                    <img class="img-fluid p-1" src="img/<? echo $character["img"]; ?>"/>

                    <div class="border-bottom">
                        <strong>Naam: <? echo $character["name"]; ?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Geslacht: <? echo $character["sex"]; ?> </strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Gewicht: <? echo $character["weight"]; ?> </strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Skill: <? echo $character["skill"]; ?> </strong>
                    </div>
                    <div>
                        <strong>Type: <? echo $character["typeId"]; ?> </strong>
                    </div>
                </div>
            </div>
            <p class="card-text">
                <? echo nl2br($character["description"]); ?>
            </p>
        </div>
    </div>
    <hr>
</div>
<?
require 'includes/footer.php';