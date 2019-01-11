<?php
    require "header.php"
?>

<div class="grid-x">   
    <div class="cell small-7">
        <h5> Photos</h5>
        <h3> The perfect weekend getaway </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        <br>Sem viverra aliquet eget sit amet tellus cras adipiscing enim. Ullamcorper sit amet risus nullam eget. 
        <br>Vitae ultricies leo integer malesuada. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. 
        <br>Vulputate ut pharetra sit amet aliquam. Tincidunt id aliquet risus feugiat in ante metus. 
        <br>Consequat nisl vel pretium lectus. A condimentum vitae sapien pellentesque habitant morbi. 
        <br>Tortor condimentum lacinia quis vel eros donec ac odio tempor. Facilisis magna etiam tempor orci eu lobortis. 
        <br>Viverra vitae congue eu consequat ac felis donec. Faucibus purus in massa tempor nec. 
        <br>Viverra ipsum nunc aliquet bibendum.</p>
    </div>
    <div class="cell small-1">
    </div>
    <div class="cell small-2">
        <h3>About me</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        <br>Sem viverra aliquet eget sit amet tellus cras adipiscing enim. Ullamcorper sit amet risus nullam eget. 
        <br>
        <h5> TOP POSTS </h5>
        <?php
            $sql = "SELECT * FROM posts WHERE post_type= 'article'";
            if (!$result = $mysqli->query($sql)) {
                echo "Pas de résultats pour cette requête..";
                exit;
            }

            // Imprime 3 personnes dans une liste HTML
            echo "<ul>\n";
            while ($sql = $result->fetch_assoc()) { // while = tant que fetch_assoc renvoie des résultats, continue d’afficher
                echo "<li>\n";
                echo $sql['post_date']." ".$sql['post_title'];
                echo "</li>\n";
            }
            echo "</ul>\n";
        ?>
            <div class="column column-block">
             <img src="https://placehold.it/250x250" class="thumbnail" alt="">
            </div>
    </div>
</div>
<?php
    require "footer.php"
    ?>