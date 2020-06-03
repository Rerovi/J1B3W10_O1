<?
require 'includes/header.php';
require 'includes/data.php';
$types = getAllTypes();
?>
<div class="mb-5 mt-2">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>Bekijk hier alle types</h1>
    </div>

    <ul class="list-group">
        <? foreach ($types as $type) { ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#"> <? echo $type["name"]; ?></a>
        </li>
    <? } ?>
    </ul>
</div>
<?
require 'includes/footer.php';
?>