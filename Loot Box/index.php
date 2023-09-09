<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<head>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<style>
body{
  padding: 0;
  margin: 0;
}
.parallax {
  /* Full height */
  height: 90%;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.video video{
  min-height: 100%;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: -999;
}
.parallax2 {
  /* The image used */
  background-image: url('images/bg.jpg');

  /* Full height */
  height: 200%;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.carousel{
	top: 15%;
	position: absolute;
	left: 17%;
}


</style>
</head>
<body class="hold-transition layout-top-nav">
  <?php include 'includes/navbar.php'; ?>

<!-- 1st Parallax-->
<div class="parallax">
  <div class="video">
    <video src="images/cod.mp4" autoplay loop muted>
    </video>
  </div>

</div>


<div class="parallax2">

<!-- PRODUCT LIST -->

<div class="wrapper">
<div class="container">
<!-- SCRIPT -->
                <?php

                $conn = $pdo->open();

                try{
                  $inc = 3;
                $stmt = $conn->prepare("SELECT * FROM products");
                $stmt->execute();
                foreach ($stmt as $row) {
                  $image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
                  $inc = ($inc == 3) ? 1 : $inc + 1;
                    if($inc == 1) echo "<div class='row'>";
                    echo "
                      <div class='col-sm-4'>
                        <div class='box box-solid'>
                          <div class='box-body prod-body'>
                            <img src='".$image."' width='100%' height='230px' class='thumbnail'>
                            <h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
                          </div>
                          <div class='box-footer'>
                            <b>&#8369; ".number_format($row['price'], 2)."</b>
                          </div>
                        </div>
                      </div>
                    ";
                    if($inc == 3) echo "</div>";
                }
                if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>";
              if($inc == 2) echo "<div class='col-sm-4'></div></div>";
            }
            catch(PDOException $e){
              echo "There is some problem in connection: " . $e->getMessage();
            }

            $pdo->close();

              ?>
</div>
<div>
<?php include 'includes/footer.php'; ?>
</div>



</body>
</html>
