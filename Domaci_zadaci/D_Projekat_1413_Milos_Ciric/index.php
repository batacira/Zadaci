<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekat 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
<style>
body{
    background-image: url(https://i.pinimg.com/originals/a3/7a/8c/a37a8c207fa0f98c8aede6cfe405b531.jpg);
    color:black;
    background-size:cover;
    background-repeat:no-repeat;
    
}

.carousel-item>img{
    max-height: 300px;
    
}


section {
    height:200px;
    font-family: 'Brush Script MT', cursive;
    font-size:17px;   
}

.footer {
    position: fixed;
    left: 0;
    bottom: 0; 
    width: 102%;
    text-align: center;
}
</style>


</head>
<body>
<div class="container">

    <header class="row"> 
        <div class="col-3"></div>
        <div class="col-6 m-3">
            <?php
                $slike = array('slika1', 'slika2', 'slika3', 'slika4','slika5','slika6','slika7','slika8','slika9','slika10');
                $sl_slika = array_rand($slike, 3);
                $img1 = 'images/' . $slike[$sl_slika[0]];
                $img2 = 'images/' . $slike[$sl_slika[1]];
                $img3 = 'images/' . $slike[$sl_slika[2]];

            ?>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $img1; ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $img2; ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $img3; ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
            </div>
        </div>
            <div class="col-3"></div>

    </header>
    
    <section class="row">
        <div class="col-4 ">
            <form action="" method = "POST">
            <select name="izbor">
                <option value=""></option>
                <option value="ljubav">Ljubav</option>
                <option value="motivacija">Motivacija</option>
                <option value="zdravlje">Zdravlje</option>
                <option value="posao">Posao</option>
            </select>
            <input type="submit" value="Izaberi citat dana" class="btn btn-success">
            </form>
            <?php
            if(!empty($_POST["izbor"])) {
                $val = $_POST["izbor"];
            }else {
                $val = "";
            }
            ?>
        </div>

        <div class="col-4 bg-light">
            <?php
                if($val === "") {
                    $neki_niz = ['motivacija', 'ljubav', 'posao', 'zdravlje'];
                    $val = $neki_niz[rand (0, 3)];
                }

                $motivacija = fopen("motivacija.txt", "r");
                $citati1 = [];
                while($red1 = fgets($motivacija))
                {
                    array_push($citati1,$red1);
                }
                fclose($motivacija);
                
                $k1;
                $index1 = rand(0, count($citati1)-1);
                if($val === 'motivacija') {
                    if($index1 % 2 === 0)
                    {
                        echo "<p>$citati1[$index1]</p>";
                        $k1 = $index1 + 1;
                        echo "<p>$citati1[$k1]</p>";
                    }else
                    {
                        $k1 = $index1 - 1;
                        echo "<p>$citati1[$k1]</p>";
                        echo "<p>$citati1[$index1]</p>";
                    }
                }

                $ljubav = fopen("ljubav.txt", "r");
                $citati2 = [];
                while($red2 = fgets($ljubav))
                {
                    array_push($citati2,$red2);
                }
                fclose($ljubav);
                
                $k2;
                $index2 = rand(0, count($citati2)-1);
                if($val === 'ljubav') {
                    if($index2 % 2 === 0)
                    {
                        echo "<p>$citati2[$index2]</p>";
                        $k2 = $index2 + 1;
                        echo "<p>$citati2[$k2]</p>";
                    }else
                    {
                        $k2 = $index2 - 1;
                        echo "<p>$citati2[$k2]</p>";
                        echo "<p>$citati2[$index2]</p>";
                    }
                }

                $posao = fopen("posao.txt", "r");
                $citati3 = [];
                while($red3 = fgets($posao))
                {
                    array_push($citati3,$red3);
                }
                fclose($posao);
                
                $k3;
                $index3 = rand(0, count($citati3)-1);
                if($val === 'posao') {
                    if($index3 % 2 === 0)
                    {
                        echo "<p>$citati3[$index3]</p>";
                        $k3 = $index3 + 1;
                        echo "<p>$citati3[$k3]</p>";
                    }else
                    {
                        $k3 = $index3 - 1;
                        echo "<p>$citati3[$k3]</p>";
                        echo "<p>$citati3[$index3]</p>";
                    }
                }

                $zdravlje = fopen("zdravlje.txt", "r");
                $citati4 = [];
                while($red4 = fgets($zdravlje))
                {
                    array_push($citati4,$red4);
                }
                fclose($zdravlje);
                
                $k4;
                $index4 = rand(0, count($citati4)-1);
                if($val === 'zdravlje') {
                    if($index4 % 2 === 0)
                    {
                        echo "<p>$citati4[$index4]</p>";
                        $k4 = $index4 + 1;
                        echo "<p>$citati4[$k4]</p>";
                    }else
                    {
                        $k4 = $index4 - 1;
                        echo "<p>$citati4[$k4]</p>";
                        echo "<p>$citati4[$index4]</p>";
                    }
                }
            ?>
            
        </div>
    </section>

    <footer class="container-fluid row footer text-warning bg-primary">
        <div class="col-5"></div>
        <div class="col-2 ">
        <?php
        
        $godina = date("Y");
        $mesec = date("m");
        $datum = date("d");
        $dan = date("D");
        
        if($dan === "Mon") {
            echo "Ponedeljak";
        }
        if($dan === "Tue") {
            echo "Utorak";
        }
        if($dan === "Wed") {
            echo "Sreda";
        }
        if($dan === "Thu") {
            echo "Cetvrtak";
        }
        if($dan === "Fri") {
            echo "Petak";
        }
        if($dan === "Sat") {
            echo "Subota";
        }
        if($dan === "Sun") {
            echo "Nedelja";
        }
        echo "<p>$datum $mesec $godina</p>";
        $sati = date("H");
        $minuti = date("i");
        
        echo "Vreme $sati : $minuti";
        ?>
        </div>
        <div class="col-5"></div>
    </footer>
</div>    

    
</body>
</html>