<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <div class="row">
        <header class="col-12 header"> 
            <h1>Dobrodosli na moj sajt!</h1>
            <?php
                $dan = date("D");
                $d = date("d");
                $m = date("m");
                $g = date("Y");
                
                echo "<p>Danas je $dan $d.$m.$g</p>";
                
                
            ?>
        </header>
    </div>
    <div class="row">
        <nav class="col-12">
            <ul>
                <li><a href="#">O meni</a></li>
                <li><a href="#">O mom kucnom ljubimcu</a></li>
                <li><a href="#">O mojim interesovanjima</a></li>
                <li class ="navDesni"><a href="#">O mom poslu</a></li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <section class="col-9">
            <h2>O meni..</h2>
            <p class ="prviP">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ullam aspernatur pariatur saepe dolores quibusdam ipsum perspiciatis nesciunt, eos reprehenderit fugit quisquam asperiores inventore dolorem aliquam iusto voluptatibus, cupiditate neque maxime repellat sequi minima. Ab porro eligendi suscipit reiciendis earum sit voluptatum voluptatem nam vitae laudantium, doloribus iusto aut ratione.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ullam aspernatur pariatur saepe dolores quibusdam ipsum perspiciatis nesciunt, eos reprehenderit fugit quisquam asperiores inventore dolorem aliquam iusto voluptatibus, cupiditate neque maxime repellat sequi minima. Ab porro eligendi suscipit reiciendis earum sit voluptatum voluptatem nam vitae laudantium, doloribus iusto aut ratione.</p>
            <h2>O meni..</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ullam aspernatur pariatur saepe dolores quibusdam ipsum perspiciatis nesciunt, eos reprehenderit fugit quisquam asperiores inventore dolorem aliquam iusto voluptatibus, cupiditate neque maxime repellat sequi minima. Ab porro eligendi suscipit reiciendis earum sit voluptatum voluptatem nam vitae laudantium, doloribus iusto aut ratione.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ullam aspernatur pariatur saepe dolores quibusdam ipsum perspiciatis nesciunt, eos reprehenderit fugit quisquam asperiores inventore dolorem aliquam iusto voluptatibus, cupiditate neque maxime repellat sequi minima. Ab porro eligendi suscipit reiciendis earum sit voluptatum voluptatem nam vitae laudantium, doloribus iusto aut ratione.</p>
            <h2>O mom kucnom ljubimcu..</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ullam aspernatur pariatur saepe dolores quibusdam ipsum perspiciatis nesciunt, eos reprehenderit fugit quisquam asperiores inventore dolorem aliquam iusto voluptatibus, cupiditate neque maxime repellat sequi minima. Ab porro eligendi suscipit reiciendis earum sit voluptatum voluptatem nam vitae laudantium, doloribus iusto aut ratione.</p>
            <h2>O mom kucnom ljubimcu..</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ullam aspernatur pariatur saepe dolores quibusdam ipsum perspiciatis nesciunt, eos reprehenderit fugit quisquam asperiores inventore dolorem aliquam iusto voluptatibus, cupiditate neque maxime repellat sequi minima. Ab porro eligendi suscipit reiciendis earum sit voluptatum voluptatem nam vitae laudantium, doloribus iusto aut ratione.</p>
        </section>
    
        
        <aside class="col-3"> 
            <h3>Moja fotografija</h3>
            <?php
            $pol = "m";
            if($pol == "m"){
                echo "<p><img src = 'slike/muski.jpg' alt = 'muski'></p>";
            }elseif($pol =="z") {
                echo "<p><img src = 'slike/zenski.jpg' alt = 'zenski'></p>";
            }
            else {
                echo "<p><img src = 'slike/no.png' alt = 'No avatar'></p>";
            }
                
            ?>
        </aside>
    </div>
    <div>
        <footer class="col-12">
            <h1>Footer</h1>
        </footer>
    </div>
</body>
</html>