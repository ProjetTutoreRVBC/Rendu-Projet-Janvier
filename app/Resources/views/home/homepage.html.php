<!-- app/Resources/views/home/homepage.html.php -->
<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forms</title>
    <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/framework/css/foundation.css') ?>" type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
</head>

<body>
    <?php
      $images_google=$view['assets']->getUrl('bundles/framework/images/google.gif');
      $images_profile=$view['assets']->getUrl('bundles/framework/images/profile.jpg');      
    ?>
    <div class="title-bar" style="height:100px;">
        <div class="title-bar-left ">
            <img class="thumbnail " src="<?php echo $images_google?>" style="width:250px;height:75px; ">
        </div>
        <div class="title-bar-right" style="height:30px;">
            <ul class="vertical menu " data-drilldown style="width:150px;height:50px; ">
                <li>
                    <img class="thumbnail " src="<?php echo $images_profile?>" style="width:75px;height:75px;" href="# ">
                    <ul class="vertical menu ">
                        <li>
                            <a href="# ">Se déconnecter</a>
                        </li>
                        <li>
                            <a href="# ">Mon profil</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>



    <ul class="tabs " data-tabs id="tabs_example ">
        <li class="tabs-title "><a href="#tab2">Vidéastes</a></li>
        <li class="tabs-title "><a href="#tab3">Chaînes</a></li>
        <li class="tabs-title "><a href="#tab4">Actualité</a></li>
        <li class="tabs-title "><a href="#tab5">Abonnements</a></li>
        <li class="tabs-title is-active "><a href="#tab1">Tendances</a></li>
    </ul>

    <div class="tabs-content " data-tabs-content="tabs_example">
        <div class="tabs-panel is-active " id="tab1">
            <table>
                <tr>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="squeezie.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MON NOUVEAU METIER...</a><br>
                                <font size="2 ">Squeezie</font><br>
                                <font size="1 ">625484 vues</font><br>
                                <font size="1 ">le 29/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="detek.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>Un robot qui detek les mouches</a><br>
                                <font size="2 ">Mec louche</font><br>
                                <font size="1 ">6 vues</font><br>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="atlas.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>Metallica: Atlas, Rise!</a><br>
                                <font size="2 ">MetallicaTV</font><br>
                                <font size="1 ">2 354 988 vues</font><br>
                                <font size="1 ">le 11/11/16</font><br>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="squeezie.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MON NOUVEAU METIER...</a><br>
                                <font size="2 ">Squeezie</font><br>
                                <font size="1 ">625484 vues</font><br>
                                <font size="1 ">le 29/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="detek.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>Un robot qui detek les mouches</a><br>
                                <font size="2 ">Mec louche</font><br>
                                <font size="1 ">6 vues</font><br>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="atlas.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>Metallica: Atlas, Rise!</a><br>
                                <font size="2 ">MetallicaTV</font><br>
                                <font size="1 ">2 354 988 vues</font><br>
                                <font size="1 ">le 11/11/16</font><br>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="squeezie.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MON NOUVEAU METIER...</a><br>
                                <font size="2 ">Squeezie</font><br>
                                <font size="1 ">625484 vues</font><br>
                                <font size="1 ">le 29/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="detek.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>Un robot qui detek les mouches</a><br>
                                <font size="2 ">Mec louche</font><br>
                                <font size="1 ">6 vues</font><br>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="atlas.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>Metallica: Atlas, Rise!</a><br>
                                <font size="2 ">MetallicaTV</font><br>
                                <font size="1 ">2 354 988 vues</font><br>
                                <font size="1 ">le 11/11/16</font><br>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="tabs-panel " id="tab2">
            <p>Second Player</p>
            <p>M S Dhoni</p>
        </div>
        <div class="tabs-panel " id="tab3 ">
            <p>Third Player</p>
            <p>Shane Warne</p>
        </div>
        <div class="tabs-panel " id="tab4 ">
            <p>Fourth Player</p>
            <p>Shaun Pollock</p>
        </div>
        <div class="tabs-panel " id="tab5 ">
            <p>Five Player</p>
            <p>Adam Gilchrist</p>
        </div>
    </div>
    <script src="<?php echo $view['assets']->getUrl('bundles/framework/js')?>">
        $(document).ready(function() {
            $(document).foundation();
        })
    </script>

</body>

</html>