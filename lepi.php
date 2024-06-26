<!DOCTYPE html>
<html>
<head>
<title>lepi.co.id</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
</head>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-snapchat"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-flickr"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>levy store</b></h1>
    <h6>Welcome to the store of <span class="w3-tag">levy</span></h6>
  </header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="html/gmbr/33.jpg" alt="Fashion Blog" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">levy</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>levy store</b></h1>
      <h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('subscribe').style.display='block'">SUBSCRIBE</button></h6>
    </div>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Nike x Patta</h3>
          <h5>Outer Layers Capsule<span class="w3-opacity">May 2, 2024</span></h5>
        </div>

        <div class="w3-justify">
          <img src="html/gmbr/2.png" alt="Girl Hat" style="width:100%" class="w3-padding-16">
          <p><strong>neww</strong> Bekerja sama dengan label ikonik Amsterdam, Koleksi Nike x Patta terbaru kami mengeksplorasi kemungkinan membawa pakaian pertunjukan lebih jauh lagi. Saat Anda menghabiskan banyak waktu untuk melakukan pekerjaan, yang penting bukan hanya untuk merasakan kenyamanan bebas gangguan—Anda juga ingin tampil menarik. Setiap bagian dirancang untuk meningkatkan perlengkapan lari dan gaya jalanan Anda. Saat Anda berlari dengan Nike x Patta, Anda akan melampaui batas performa dan streetwear Anda.</p>
          <p>lets,gooo</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo1')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white">1</span></button></p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
            <hr>
              <div class="w3-col l2 m3">
                <img src="html/gmbr/3.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4> <span class="w3-opacity w3-medium">May 3, 2024, 6:32 PM</span></h4>
                <p>bang berapa bang</p>
              </div>
          </div>
        </div>
      </div>
      <hr>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Women's Air Jordan 1 Low OG x Travis Scott</h3>
          <h5>Canary <span class="w3-opacity">April 23, 2024</span></h5>
        </div>

        <div class="w3-justify">
          <img src="html/gmbr/4.png" alt="Men in Hats" style="width:100%" class="w3-padding-16">
          <p><strong>brand</strong> letsgo</p>
          <p>Jordan Brand dan Travis Scott memberi isyarat lain dalam warisan kolaboratif berkelanjutan dari duo ini. AJ1 edisi khusus ini memberikan penghormatan penuh warna kepada almamater sekolah menengah ikon hip-hop tersebut di Missouri City, Texas. Itu terbuat dari kulit premium dan berseragam Canary dan Light Silver, ditambah sentuhan Racer Blue. Detail merek bersama dan logo Swoosh terbalik yang khas membawa penghormatan ini ke puncak tangga lagu.</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo2')"><b>Replies  </b> <span class="w3-tag w3-white">2</span></button></p>
          <p class="w3-clear"></p>
          
          <!-- Example of comment field -->
          <div id="demo2" style="display:none">
            <div class="w3-row">
              <hr>
              <div class="w3-col l2 m3">
                <img src="html/gmbr/blue.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>windah bersuara <span class="w3-opacity w3-medium">April 26, 2024, 10:52 PM</span></h4>
                <p>bang beli 1 doang bisa gak??</p><br>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="html/gmbr/pnp.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>ME <span class="w3-opacity w3-medium">April 26, 2024, 14:12 PM</span></h4>
                <p>bisa,bisa gila luh nya</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Nike x Patta</h3>
          <h5>Tops Capsule <span class="w3-opacity">April 1, 2024</span></h5>
        </div>

        <div class="w3-justify">
          <img src="html/gmbr/444.png" alt="Runway" style="width:100%" class="w3-padding-16">
          <p><strong>Dont miss!</strong>!!!</p>
          <p>Bekerja sama dengan label ikonik Amsterdam, Koleksi Nike x Patta terbaru kami mengeksplorasi kemungkinan membawa pakaian pertunjukan lebih jauh lagi. Saat Anda menghabiskan banyak waktu untuk melakukan pekerjaan, yang penting bukan hanya untuk merasakan kenyamanan bebas gangguan—Anda juga ingin tampil menarik. Setiap bagian dirancang untuk meningkatkan perlengkapan lari dan gaya jalanan Anda. Saat Anda berlari dengan Nike x Patta, Anda akan melampaui batas performa dan streetwear Anda.</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo3')"><b>Replies  </b> <span class="w3-tag w3-white">3</span></button></p>
          <p class="w3-clear"></p>
          
          <!-- Example of comment field -->
          <div id="demo3" style="display:none">
            <hr>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="html/gmbr/pp.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>supri kane <span class="w3-opacity w3-medium">April 10, 2024, 7:22 PM</span></h4>
                <p>tuker sama gap basis mau gak??</p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="html/gmbr/pnp.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>ME<span class="w3-opacity w3-medium">April 8, 2024, 10:32 PM</span></h4>
                <p>mauuuu,mau gw injek luh nya</p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="html/gmbr/o.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>henry moodie yg nyanyi druk text temen nya lepi<span class="w3-opacity w3-medium">April 7, 2024, 9:12 PM</span></h4>
                <p>ahhaahahahahhahhahahahahah</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        <img src="html/gmbr/ss.jpg" alt="Jane" style="width:100%" class="w3-grayscale">
        <div class="w3-container w3-black">
          <h4>levy stay cool</h4>
          <p>Kamu harus mengalami kesedihan untuk mengetahui kebahagiaan, dan aku mengingatkan diri sendiri bahwa tidak setiap hari akan menjadi hari yang baik, begitulah adanya!</p>
      </div>
      <hr>

<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 25px;
  font-family: Arial, sans-serif;
}

.w3-white {
  background-color: #fff !important;
}

.w3-margin {
  margin: 16px !important;
}

.w3-container {
  padding: 0.01em 16px;
}

.w3-padding {
  padding: 8px 16px !important;
}

.w3-black {
  color: #fff !important;
  background-color: #000 !important;
}

.w3-ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.w3-hoverable li:hover {
  background-color: #f1f1f1;
}

.w3-padding-16 {
  padding: 16px !important;
}

.w3-left {
  float: left !important;
}

.w3-margin-right {
  margin-right: 16px !important;
}

.w3-large {
  font-size: 18px !important;
}

.w3-sepia {
  filter: sepia(100%);
}

a {
  text-decoration: none;
  color: inherit;
}

a:hover {
  text-decoration: underline;
}
</style>
</head>
<body>

<!-- Posts -->
<div class="w3-white w3-margin">
  <div class="w3-container w3-padding w3-black">
    <h4>Popular Posts</h4>
  </div>
  <ul class="w3-ul w3-hoverable w3-white">
    <li class="w3-padding-16">
      <a href="html/ss.php">
        <img src="html/gmbr/333.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Alchemy Pink and Diffused Blue</span>
        <br>
        <span>Air Terra Humara</span>
      </a>
    </li>
    <li class="w3-padding-16">
      <a href="html/jj.php">
        <img src="html/gmbr/zz.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Nike Air Force 1 '07 Fresh</span>
        <br>
        <span>top sale</span>
      </a>
    </li>
    <li class="w3-padding-16">
      <a href="html/yy.php">
        <img src="html/gmbr/ll.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Nike Blazer Mid '77</span>
        <br>
        <span>orange nike!!</span>
      </a>
    </li>
    <li class="w3-padding-16">
      <a href="html/ii.php">
        <img src="html/gmbr/jj.png" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
        <span class="w3-large">Nike Zoom Blazer Mid Pro GT</span>
        <br>
        <span>nice cokolate!!</span>
      </a>
    </li>
  </ul>
</div>
<hr>

</body>
</html>

      <!-- Advertising -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Advertise</h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:200px">
            <span class="w3-display-middle">buy now bro</span>
          </div>
        </div>
      </div>
      <hr>

      <!-- Tags -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Tags</h4>
        </div>
        <div class="w3-container w3-white">
          <p>
            <span class="w3-tag w3-black w3-margin-bottom">Fashion</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Hats</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Norway</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sweaters</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Deals</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Accessories</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Jeans</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Trends</span>
          </p>
        </div>
      </div>
      <hr>

      <!-- Inspiration -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>cloths</h4>
        </div>
        <div class="w3-row-padding w3-white">
          <div class="w3-col s6">
            <p><img src="html/gmbr/oo.png" alt="Jeans" style="width:50%"></p>
            <p><img src="html/gmbr/kk.png" alt="Jeans" style="width:50%"></p>
          </div>
          <div class="w3-col s6">
            <p><img src="html/gmbr/uuu.png" alt="Men in Hats" style="width:50%" class="w3-grayscale"></p>
            <p><img src="html/gmbr/555.png" alt="Jeans" style="width:50%"></p>
         </div>
        </div>
      </div>
      <hr>

      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Follow Me</h4>
        </div>
        <div class="w3-container w3-xlarge w3-padding">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
      </div>
      <hr>
      
      <!-- Subscribe -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Subscribe</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest blog posts.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
          <p><button type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-red">Subscribe</button></p>
        </div>
      </div>

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">@levy_vyy</a></p>
</footer>

<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Liked";
}
</script>

</body>
</html>
