<body>
    <!-- header  -->
    <header class="nav">
        <img src="../assets/img/img-original/logo-travelcorp.png" class="logo">
        <div class="topnav continent" id="myTopnav">
            <a href="#news" class="continent-u"></a>

            <?php

            $json = file_get_contents('../data/continents.json');
            $continents = json_decode($json, true);
            foreach ($continents as $value) { ?>
                <a href="#news" class="continent-u"><?= $value['continent'] ?></a>
            <?php } ?>

          



            <div class="continent-u"> <img src="../assets/svg/account-outline.svg" class="account-online" class="continent">
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>