<?php

include "config.php";



$searchString = $_GET['search'];
//edited

$testsearch = $conn->query("SELECT r.recipe_id,r.recipename, FROM recipes as r INNER JOIN rating_and_review as rr ON r.recipe_id = rr.recipe_id  WHERE recipename LIKE '$searchString%'");


$searchedRecipe = $conn->query("SELECT * from (SELECT u.bio, r.nationality, r.recipename, r.recipe_id, r.meal_type, concat(u.firstname, ' ', u.lastname) as Name  from users u JOIN recipes r ON (u.user_id = r.user_id) 
JOIN rating_and_review rr ON (r.recipe_id = rr.recipe_id)) as t1 
join (select recipe_id, AVG(rating) from rating_and_review group by recipe_id) as 
t2 on (t1.recipe_id = t2.recipe_id) where recipename LIKE '$searchString%'");
//print_r($testsearch);
$contents = array();
while ($row = $searchedRecipe->fetch_row()) {
    $contents[] = $row;
}

echo (json_encode($contents));




while ($row = $searchedRecipe->fetch_assoc()) {
    $num_Of_Searched =  $conn->query("SELECT COUNT(*) FROM likes where post_id = {$row['recipe_id']} ");
    //print_r($num_Of_Searched);
}

//print_r($searchedRecipe);
