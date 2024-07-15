<?php

function random() {
    return rand(1, 1000);
}

function get_data($url): array {
    if (empty($url)) {
        throw new Exception("La URL está vacía.");
    }

    $result = @file_get_contents($url);  // El @ suprime las advertencias de PHP
    if ($result === FALSE) {
        throw new Exception("Error al obtener datos de la URL: $url");
    }
    $data = json_decode($result, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception("Error al decodificar JSON: " . json_last_error_msg());
    }
    return $data;
}

$pokemon_id = isset($_GET['pokemon']) ? $_GET['pokemon'] : null;

if ($pokemon_id) {
    $pokemon = $pokemon_id;
} else {
    $pokemon = random();
}

$link = "https://pokeapi.co/api/v2/pokemon/$pokemon";
$evo = "https://pokeapi.co/api/v2/pokemon-species/$pokemon";

$group = [];

try {
    $data = get_data($link);
    $evolutionChain = get_data($evo);
    $family = get_data($evolutionChain["evolution_chain"]["url"]);

    function get_evolution($self) {
        global $group;

        if (count($self["chain"]["evolves_to"]) > 0 && count($self["chain"]["evolves_to"][0]["evolves_to"]) > 0) {
            $mid = $self["chain"]["evolves_to"][0]["species"]["name"];
            $final = $self["chain"]["evolves_to"][0]["evolves_to"][0]["species"]["name"];
            $first = $self["chain"]["species"]["name"];

            array_push($group, $first, $mid, $final);
            return $group;
        } elseif (count($self["chain"]["evolves_to"]) > 0 && count($self["chain"]["evolves_to"][0]["evolves_to"]) == 0) {
            $mid = $self["chain"]["evolves_to"][0]["species"]["name"];
            $first = $self["chain"]["species"]["name"];

            array_push($group, $first, $mid);
            return $group;
        } else {
            $first = $self["chain"]["species"]["name"];

            array_push($group, $first);
            return $group;
        }
    }

    get_evolution($family);

} catch (Exception $e) {
    // Redirigir a la página principal en caso de error
    header("Location: http://localhost:8000");
    exit();
}

?>
