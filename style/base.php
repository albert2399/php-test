<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="png icon" href="../media/icon.png" type="image/png">
    <title>Pokemon Random</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="/">
                <img src="../media/pokeloho.png" alt="logo" height="75" width="180">
            </a>
            <div class="search">
                <form action="" method="get">
                    <img src="../media/search.png" alt="" height="18" width="23">
                    <input type="text" id="pokemon" name="pokemon" required placeholder="Pikachu...">
                    <button type="submit" class="submit">Buscar</button>
                </form>
            </div>
        </div>
        <div class="content">
            <div class="description">
                <div class="info">
                    <h1 id="nombrePokemon"><?= $data["name"]; ?></h1>
                    <h1 id="numeroPokemon">#<?= $data["id"]; ?></h1>
                </div>
                <div class="status">
                    <div class="img">
                        <img id="imagenPokemon" src="<?= $data["sprites"]["other"]["official-artwork"]["front_default"] ?>" alt="">
                    </div>
                    <div class="attributes">
                        <span id="descripcionPokemon"></span>
                        <br>
                        <div class="stats" id="statsPokemon">

                                <!-- <div class="list">
                                    <span class="name">Altura</span>
                                    <span class="value">0.4m</span>
                                </div>
                                <div class="list">
                                    <span class="name">Categoria</span>
                                    <span class="value">Raton</span>
                                </div>
                                <div class="list">
                                    <span class="name">Peso</span>
                                    <span class="value">6kg</span>
                                </div>
                                <div class="list">
                                    <span class="name">Habilidad</span>
                                    <span class="value">Elec. Estatica</span>
                                </div>
                                <div class="list">
                                    <span class="name">Sexo</span>
                                    <span class="value"></span>
                                </div> -->
                        </div>
                    </div>

                    <div class="type" id="tipoPokemon">
                        <span>Tipo</span>
                        <ul class="hypa">
                            <?php if (is_array($data["types"])): // Verificar si la respuesta es un array ?>
                                <?php foreach ($data["types"] as $item): // Recorrer todos los elementos del array ?>
                                    <li><?= $item["type"]["name"]; ?></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <div class="graphic">
                        <h2>Evolution Chain</h2>
                        <div id="evolutionChain">
                            <?php if (is_array($group)): // Verificar si la respuesta es un array ?>
                                <?php foreach ($group as $item): // Recorrer todos los elementos del array ?>
                                    <p><?= $item; ?></p>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
        © 2024 - Albert Fernandez PokeApi Web Project
            <div class="links">
                <a href="#">LinkedIn</a>
                <a href="#">Instragram</a>
                <a href="#">Twitter</a>
            </div>
        </footer>

    </div>
    
</body>
</html>