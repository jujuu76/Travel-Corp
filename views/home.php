<?php require_once '../elements/top.php' ?>

<body>

    <?php require_once '../elements/header.php' ?>

    <?php

    $json = file_get_contents('../data/data.json');
    $obj = json_decode($json, true);
    // var_dump($obj);

    foreach ($obj as $value) { ?>

        <?php if ($value['id'] == 1) { ?>
            <img src="../assets/img/<?= $value['image'] ?>.png" class="kebumen-img">
        <?php } else { ?>
            <img src="../assets/img/<?= $value['image'] ?>.png">
        <?php
        }
        ?>

        <?php if ($value['id'] == 1) { ?>
            <p class="kebumen-title"><?= $value['title'] ?></p>
        <?php } else { ?>
            <p><?= $value['title'] ?></p>
        <?php
        }
        ?>

        <?php if ($value['id'] == 1) { ?>
            <p class="kebumen-text"><?= $value['description'] ?></p>
        <?php } else { ?>
            <p><?= $value['description'] ?></p>
        <?php
        }
        ?>


        <?php if ($value['id'] == 1) { ?>
            <p><?= $value['country'] ?></p>
        <?php } else if ($value['id'] == 2 || $value['id'] == 3) { ?>
            <p><?= $value['sous_continent'] ?></p>
        <?php } else { ?>
            <p><?= $value['continent'] ?></p>
        <?php
        }
        ?>

    <?php }
    ?>



    <?php require_once '../elements/footer.php' ?>

</body>

</html>