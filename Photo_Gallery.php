<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="css/style2.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap1.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">

    <style>
        body {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                font-family: sans-serif;
            }
        h1 {
            color: black;
            }
        .grid-container {
            columns: 5 200px;
            column-gap: 1.5rem;
            width: 90%;
            margin: 0 auto;
        div {
            width: 150px;
            margin: 0 1.5rem 1.5rem 0;
            display: inline-block;
            width: 100%;
            border: solid 2px black;
            padding: 5px;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
            border-radius: 5px;
            transition: all .25s ease-in-out;
            &:hover img {
            filter: grayscale(0);
            }
        &:hover {
            border-color: blue;
            }
        img {
            width: 100%;
            filter: grayscale(100%);
            border-radius: 10px;
            transition: all .25s ease-in-out;
            }
        p {
            margin: 10px 0;
            padding: 10;
            text-align: center;
            font-style: italic;
        }
            }
    }
    </style>
    </head>
    <body>
        <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="portfolio.php">Portfolio</a></li>
              <li><a href="Photo_Gallery.php">Photo Gallery</a></li>
              <li><a href="Page_2.php">Education</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="comment.php">Comment</a></li>
              <li><a href="calculator.php">Calculator</a></li>
            </ul>
        </nav>
    <h1>My Favourite Food Gallery</h1>
    <div class="grid-container">
      <div>
      <img class='grid-item grid-item-1' src="image/topglobal.jpeg"</img>
        <p>Ayam Gepuk Top Global kegemaran semua orang!<p>
      </div>
      <div>
      <img class='grid-item grid-item-2' src="image/nasilemak.jpg"</img>
        <p>Nasi Lemak SOOOOOOOOOO YUMMY<p>
      </div>
      <div>
      <img class='grid-item grid-item-3' src="image/4jari.jpg"</img>
        <p>The Chicken is so tasty!<p>
      </div>
      <div>
        <img class='grid-item grid-item-4' src='image/baskbear.jpg'</img>
        <p>"COFFEEEEEEEEEEEEEEE"</p>
      </div>
      <div>
        <img class='grid-item grid-item-5' src='image/coolblog1.jpg'</img>
        <p>"air sedap"</p>
      </div>
      <div>
        <img class='grid-item grid-item-6' src='image/firewood.jpg'>
        <p>"BURGER WOODFIRE ALWAYS ON TOP!"</p>
      </div>
      <div>
        <img class='grid-item grid-item-7' src='image/hanora.jpg'>
        <p>"fav place to eat butterchicken"</p>
      </div>
      <div>
        <img class='grid-item grid-item-8' src='image/matchaicecream.jpg'>
        <p>"Matcha ON TOP!"</p>
      </div>
      <div>
        <img class='grid-item grid-item-9' src='image/mykoroi.jpg'>
        <p>"Ice cream hsshsh"</p>
      </div>
      <div>
        <img class='grid-item grid-item-10' src='image/richeese1.jpg'>
        <p>"THE CHICKEN IS SO PEDASSSSS!"</p>
      </div>
      <div>
        <img class='grid-item grid-item-11' src='image/richeese2.jpg'>
        <p>"ice cream cheese!"</p>
      </div>
        <div>
        <img class='grid-item grid-item-12' src='image/soru.jpg'>
        <p>"Burger+LambChop+Spagetti=BOOOM!"</p>
      </div>
      <div>
        <img class='grid-item grid-item-13' src='image/shawarma.jpg'>
        <p>"YUMMMMMMMMMMY"</p>
      </div>
      <div>
        <img class='grid-item grid-item-14' src='image/zus.jpg'>
        <p>"COFFEEE AGAIN!"</p>
      </div>
      <div>
        <img class='grid-item grid-item-15' src='image/wagyu.jpg'>
        <p>"THE BEST MEAT OF ALL TIME"</p>
      </div>
    </div>
    </body>

    <!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>My Bunker</h4>
					<p>
						No 78, Jalan Desa 4/10,<br/>
						Bandar Country Homes,  <br/>
						48000, Rawang,         <br/>
                        Selangor Darul Ehsan.
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
            <h4>My Links</h4>
            <p>
                <a href="http://www.youtube.com/@hazhaziqq9401" target="_blank">YouTube</a><br/>
                <a href="https://x.com/gujigole" target="_blank">Twitter</a><br/>
                <a href="https://www.tiktok.com/@gujigole?" target="_blank">TikTok</a>
            </p>
        </div>
				
				<div class="col-lg-4">
					<h4>About Me</h4>
					<p>I love studying Science Computer and Programming Interactive System.</p>
				</div><!-- /col-lg-4 -->
			</div>
		</div>
	</div>
</html>