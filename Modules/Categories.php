<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getCategories()
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM categorie");
    $query->execute();
    $request = $query->fetchAll(PDO::FETCH_CLASS, 'Category');

    return $request;
    
}

function getCategoryName(int $id)
{

    
    
}
