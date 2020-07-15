<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="pokedex.css">
    <title>Pokedex</title>
</head>

<body>

    <?php
    if (isset($_GET["pokemon"])) {
        $data = file_get_contents("https://pokeapi.co/api/v2/pokemon/" . strtolower($_GET["pokemon"]));
        $pokeData = json_decode($data, true);
        // echo $pokemon->name."<br>";
    }

    ?>

    </form>
    <div class="pokedex">
        <div class="left-container">
            <div class="left-container_main-section-container">
                <div class="left-container_main-section">

                    <div class="main-section_white">
                        <div class="main-section_black">

                            <div class="main-screen hide">

                                <div class="screen_header">
                                    <span class="poke-name"></span>
                                    <span class="poke-id"></span>
                                </div>
                                <div class="screen_image">
                                    <img src="<?php echo $pokeData['sprites']['front_default']; ?>" class="poke-front-image" alt="front">
                                    <img src="" class="poke-back-image" alt="back">
                                </div>
                                <div class="screen_description">
                                    <div class="stats_types">
                                        <span class="poke-type-one"></span>
                                        <span class="poke-type-two"></span>
                                    </div>
                                    <div class="screenStats">
                                        <p class="stats_weight">
                                            weight: <span class="poke-weight"></span>
                                        </p>
                                        <p class="stats__height">
                                            height: <span class="poke-height"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="left-container_controllers">
                        <div class="left-container_buttons">

                            <div class="left-button" id="previous">Prev</div>
                            <div class="right-button" id="next">Next</div>
                            <form action="pokedex.php" method="get">
                                <input type="text" name="pokemon">
                                <input type="submit" value="search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>