<?php
$query = "SELECT *FROM tbl_Recipes WHERE Ingredients_id = 1";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("query failed");
}
else {
    mysqli_free_result($result);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Spectral:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- js -->
    <script src="js/scripts.js"></script>

    <title>Object Page</title>
</head>

<body>
    <header>
        <section class="header-container">
            <section>
                <a id="logo" href="index.html"></a>
            </section>
        <section id="loginSides">
            <section class="container">
            <a href="#" class="heart "><img src="images/heart.png"></a>
            <a href="#" class="login "><img src="images/login.png"></a>
            <a href="#" class="Dots3 "><img src="images/3 dots.png"></a>
            </section>
        </section>
        </section>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid element.style">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Healthy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link CFB" href="#">Cruelty Free Brands</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <aside id="headlineZone">
    <?php
        $query = "SELECT *FROM tbl_Recipes WHERE Ingredients_id = 1";
        $result = mysqli_query($connection,$query);
        if (!$result) {
            die("query failed");
        }
        else {
            echo "<p id="'"headline"'">";
            echo . $row["Recipes_title"];
            echo "</p>";
            mysqli_free_result($result);
        }
        ?>
        <section id="asideLinks">
            <a href="#">Home </a> <span>&nbsp;/&nbsp;</span>
            <a href="#">Recipes </a> <span>&nbsp;/&nbsp;</span>
            <a href="#">Lunch </a> <span>&nbsp;/&nbsp;</span>
            <span class="asideLinksSelected">Maqlubah</span>
        </section>
    </aside>
    <main id="wrapper">
        <section class="mainImg-Container">
            <section class=mainImgLeft-item>
                <img src="images/maqlubah.jpeg" alt="Maqlubah">
                <a href="#" class="infoMobile"></a>
                <section class="utiFunc-Container">
                    <section class="utiFuncPrint-item">
                        <a href="#"><img src="images/print.png" alt=""> Print</a>
                    </section>
                    <section class="utiFuncSave-item">
                        <a  href="" ><img src="images/heart1.png" id="save2Favslink" alt="" id="heart"> Save</a>
                    </section>
                    <section class="utiFuncShare-item">
                        <a href="#"><img src="images/share.png" alt=""> Share</a>
                    </section>

                </section>
            </section>
            <section class=mainImgRight-item>
                <section class="explImgs-Container">
                    <section class="explImg1-item">
                    <?php
                    $query = "SELECT *FROM tbl_Recipes WHERE Ingredients_id = 1";
                    $result = mysqli_query($connection,$query);
                    if (!$result) {
                        die("query failed");
                    }
                    else {
                        echo "<p>";
                        echo . $row["People"];
                        echo "</p>";
                        mysqli_free_result($result);
                    }
                    ?>
                    </section>
                    <section class="explImg2-item">
                    <?php
                    $query = "SELECT *FROM tbl_Recipes WHERE Ingredients_id = 1";
                    $result = mysqli_query($connection,$query);
                    if (!$result) {
                        die("query failed");
                    }
                    else {
                        echo "<p>";
                        echo . $row["dificulty"];
                        echo "</p>";
                        mysqli_free_result($result);
                    }
                    ?>
                    </section>
                    <section class="explImg3-item">
                    <?php
                    $query = "SELECT *FROM tbl_Recipes WHERE Ingredients_id = 1";
                    $result = mysqli_query($connection,$query);
                    if (!$result) {
                        die("query failed");
                    }
                    else {
                        echo "<p>";
                        echo . $row["Preparation_Time"] . "Minutes";
                        echo "</p>";
                        mysqli_free_result($result);
                    }
                    ?>
                    </section>
                </section>
                    <?php
                    $query = "SELECT *FROM tbl_Recipes WHERE Ingredients_id = 1";
                    $result = mysqli_query($connection,$query);
                    if (!$result) {
                        die("query failed");
                    }
                    else {
                        echo "<p>";
                        echo . $row["People"];
                        echo "</p>";
                        mysqli_free_result($result);
                    }
                    ?>
                <p class="foodExplain">
                    It is a popular Arabic food, consisting of rice and many vegetables that are added according to
                    desire,
                    such as eggplant, peas, carrots and others. <br>
                    They are relatively hard, but delicious.
                </p>
                <section class="calImgs-Container">
                    <section class="calImg1-item">
                    <?php
                    $query = "SELECT *FROM tbl_Recipes WHERE Ingredients_id = 1";
                    $result = mysqli_query($connection,$query);
                    if (!$result) {
                        die("query failed");
                    }
                    else {
                        echo "<p id="'"headline"'">";
                        echo . $row["cal"] . " calories";
                        echo "</p>";
                        mysqli_free_result($result);
                    }
                    ?>
                    </section>
                    <section class="calImg2-item">
                    <?php
                    $query = "SELECT *FROM tbl_Recipes WHERE Ingredients_id = 1";
                    $result = mysqli_query($connection,$query);
                    if (!$result) {
                        die("query failed");
                    }
                    else {
                        echo "<p>";
                        echo . $row["fats"]. "g Fats";
                        echo "</p>";
                        mysqli_free_result($result);
                    }
                    ?>
                    </section>
                    <section class="calImg3-item">
                    <?php
                    $query = "SELECT *FROM tbl_Recipes WHERE Ingredients_id = 1";
                    $result = mysqli_query($connection,$query);
                    if (!$result) {
                        die("query failed");
                    }
                    else {
                        echo "<p>";
                        echo . $row["prots"]. "g Prots.";
                        echo "</p>";
                        mysqli_free_result($result);
                    }
                    ?>
                    </section>
                </section>
            </section>
        </section>
        <section class="explnations-container">
            <section id="ingredients-item">
                <h2>Ingredients:</h2>
                <ul class="list-group list-group-flush ingList">
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Rice - 400 gr
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Olive oil - 4 teasps
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Aubergine - 2                    
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Onion - 1                    
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Carrots - 1                    
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Cauliflower - 1                    
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Peas - 400gr                    
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Garlic - 2 Cloves                    
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Corn - 1 cup                    
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Salt - 1 teaspoons                    
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Black pepper - 1⁄2 teasps                    
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Boiling water - 1 Liter                    
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Cinnamon powder- 1 teasps                    
                    </li>
                </ul>
            </section>
            <section id="how2Prepare-item">
                <h2>How to Prepare:</h2>
                <ol class="list-group list-group-numbered list-group-flush ingList prepMobile">
                    <li class="list-group-item">First we prepare the vegetables we cut the cauliflower, eggplant, onions and carrots into small pieces.</li>
                    <li class="list-group-item">Add the peas and corn as desired and rinse well with water. And we fry it for a short period until it acquires a golden color.</li>
                    <li class="list-group-item">In another cooker add rice , salt, pepper and ground cinnamon.</li>
                    <li class="list-group-item">Add the vegetables and coveedr them with water up to the ceiling for about an hour.</li>
                  </ol>

            </section>
        </section>
        <section class="utilitiesLinks-container">
            <section class="utilitiesLinkList-item">
                <a href="#">Create list</a>            
            </section>
            <section class="utilitiesLinkButton-item">
                <button class="btn iMadeItButton" type="submit">I made it!</button>
            </section>
            <?php if (isset($_SESSION["kind"])=="admin"){
                echo " <section class="utilitiesLinkButton-item">
                    <a href="#">Edit Recipt</a>
                </section>; }
                ?>
        </section>
        <section id="Reviews">
            <h2>Reviews:</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="reviwsImg"></th>
                    <th scope="col">Nickname</th>
                    <th scope="col">Review</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="reviwsImg"><img src="images/login.png" alt=""></th>
                    <td>Lina33</td>
                    <td>I have made this recipe for my children many times...</td>
                    <td><a href="#">Read full Review</a></td>
                    <?php if (isset($_SESSION["kind"])=="admin"){
                        echo "<td><a href="#">edit Comment</a></td>"; }
                        ?>
                  </tr>
                  <tr>
                    <th scope="row" class="reviwsImg"><img src="images/login.png" alt=""></th>
                    <td>Reutveg</td>
                    <td>I advise mothers to try it with children it is...</td>
                    <td><a href="#">Read full Review</a></td>
                    <?php if (isset($_SESSION["kind"])=="admin"){
                    echo "<td><a href="#">edit Comment</a></td>"; }
                    ?>
                  </tr>
                  <tr>
                    <th scope="row" class="reviwsImg"><img src="images/login.png" alt=""></th>
                    <td>Reutveg</td>
                    <td>It is an amazing recipe!</td>
                    <td><a href="#">Read full Review</a></td>
                    <?php if (isset($_SESSION["kind"])=="admin"){
                        echo "<td><a href="#">edit Comment</a></td>"; }
                        ?>
                  </tr>
                </tbody>
              </table>
              <a class="lastElement" href="">see all reviews</a>
        </section>
    </main>
    <footer id="footerZone">
        <a id="footerElement" href="#">Back to top</a>
    </footer>
</body>

</html>