<?php require_once '../elements/top.php' ?>
<?php
$json = file_get_contents('../data/data.json');
$obj = json_decode($json, true);
// var_dump($obj);
?>

<body>
    <?php require_once '../elements/header.php' ?>
    <div class="test">
        <div class="reseaux">
            <img src="../assets/svg/at.svg">
            <img src="../assets/svg/facebook.svg">
            <img src="../assets/svg/instagram.svg">
            <img src="../assets/svg/pinterest.svg">
            <img src="../assets/svg/twitter.svg">
        </div>
    </div>
    <div class="box">


        <?php foreach ($obj as $value) { ?>
            <?php if ($value['id'] == 1) { ?>
                <div class="kebumen">
                <?php } else { ?>
                    <div class="janeiro">
                    <?php } ?>

                    <?php if ($value['id'] == 1) { ?>

                        <img src="../assets/img/<?= $value['image'] ?>.png" class="kebumen-img">

                    <?php } else { ?>
                        <div class="janeiro-img">
                            <img src="../assets/img/<?= $value['image'] ?>.png">
                        </div>
                    <?php
                    }
                    ?>

                    <?php if ($value['id'] == 1) { ?>

                        <p class="kebumen-title"><?= $value['title'] ?></p>

                    <?php } else { ?>
                        <div class="janeiro-title">
                            <p><?= $value['title'] ?></p>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="janeiro-text"><?= $value['description'] ?></div>

                    <?php if ($value['id'] == 1) { ?>
                        <p class="kebumen-pays"><?= $value['country'] ?></p>
                    <?php } else if ($value['id'] == 2 || $value['id'] == 3) { ?>
                        <div class="janeiro-pays">
                            <p><?= $value['sous_continent'] ?></p>
                        </div>
                    <?php } else { ?>
                        <div class="janeiro-pays">
                            <p><?= $value['continent'] ?></p>
                        </div>
                    <?php
                    }
                    ?>

                    </div>

                <?php }
                ?>

                </div>
    </div>




    <?php require_once '../elements/footer.php' ?>

</body>

</html>