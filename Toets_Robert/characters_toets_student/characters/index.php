<?
require 'includes/header.php';
require 'includes/data.php';
$id = $_GET["id"];
$character = getSingleCharacter($id);
$characters = getAllCharacters();
?>
<div class="mb-5 mt-2">
    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>Bekijk hier alle characters</h1>
        <a class="btn-lg btn-primary text-white align-self-center" href="createCharacter.php">Nieuw character +</a>
    </div>
    <div class="mt-2">
        <?
        foreach ($characters as $character) {
        ?>
        <div class="card">
            <img class="card-img-top img-fluid" src="img/<? echo $character["img"]; ?>" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><? echo $character["name"]; ?></h4>
                <p class="card-text">
                    <? echo nl2br($character["description"]); ?>
                </p>
                <a href="character.php?id=<? echo $character ["id"]; ?>" class="btn btn-primary">Meer details</a>
            </div>
        </div>
            <? } ?>
    </div>
</div>
<?
require 'includes/footer.php';
?>