<?php

use Ibd\Ksiazki;

$ksiazki = new Ksiazki();
$bestselery = $ksiazki->pobierzBestsellery();

?>

<div class="col-md-2">
	<h1>Bestsellery</h1>
    <table class="table">
        <?php foreach ($bestselery as $b) : ?>
            <tr>
                <td class="text-center">
                    <a href="ksiazki.szczegoly.php?id=<?= $b['id'] ?>" title="szczegóły">
                        <?php if (!empty($b['zdjecie'])) : ?>
                            <img src="zdjecia/<?= $b['zdjecie'] ?>" alt="<?= $b['tytul'] ?>" class="img-thumbnail"/>
                        <?php else : ?>
                            brak zdjęcia
                        <?php endif; ?>
                        <h5><?= $b['tytul'] ?></h5>
                        <?= $b['imie'] ?>
                        <?= $b['nazwisko'] ?>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>