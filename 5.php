<?php
$pageTitle = "Quintin's posts";
?>
<!DOCTYPE html>
<head>
    <title><?php echo $pageTitle;?></title>
    <link rel="stylesheet" href="style2.css">
</head>

<header>
    <h1>running</h1>
    <nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    </nav>
</header>
    <div id="main" role="main">
        <article>
            <header>
            <h1>blog post</h1>
            <h4>posted <a href="#"><?php echo date("F j, Y, g:i a");?></a></h4>
            <p>Content will go in here</p>
                <details>
                    <summary>Dig into Dojo</summary>
                    <img src="http://d2o0t5hpnwv4c1.cloudfront.net/1086_dojo/dojo.jpg" alt="Dojo"
                    <div>
                        <h3>Dig into Dojo: DOM Basics</h3>
                        <p>Maybe you saw that tweet: "Query is a gateway drug"</p>
                    </div>
                </details>
            </header>
        </article>
    </div>
    </div>
<footer>
    <h5>This is the Web</h5>
    <nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    </nav>
</footer>
</body>
</html>