<?php
$pageTitle = "Quintin's posts";
?>
<!DOCTYPE html>
<head>
    <title><?php echo $pageTitle;?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script
    <![endif]-->
</head>

    <div class="navbar">
        <div class="navbar-inner">

<header>
    <h1>running</h1>
    <nav>
    <ul class="nav">
        <li><a href="#" class="brand">Home</a></li>
        <li><a href="bacon.html">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    </nav>
        </div>
    </div>
</header>
    <div class="container" role="main">
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

        <article>
            <h2>Clueless</h2>
            <mark>HTML5</mark>
        </article>

        <figure>
            <img src="http://d2o0t5hpnwv4c1.cloudfront.net/1086_dojo/dojo.jpg" alt="Dojo">
            <figcaption>
                Talking about Dojo!
            </figcaption>
        </figure>

        <ul class="breadcrumb">
            <li><a href="#">Blog 1</a><span class="divider">/</span></li>
            <li><a href="#">Blog 2</a><span class="divider">/</span></li>
            <li><a href="#" data-amazing-blog>Amazing Blog 3</a><span class="divider">/</span></li>
            <li><a href="#">Blog 4</a><span class="divider">/</span></li>
            <li><a href="#" data-amazing-blog>Amazing Blog 5</a><span class="divider">/</span></li>
            
        </ul>

<footer>
    <h5>This is the Web</h5>
    <nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#" class="close" data-dimiss="alert">Contact</a></li>
    </ul>
    </nav>
</footer>
</body>
</html>