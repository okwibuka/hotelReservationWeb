

    <?php 
    include("../connection/connection.php");
    include("../static/header.php");
     ?>

    <title>Home_page</title>
   <style>

@media only screen and (max-width: 992px) {
    .section_three .container , .section_four .container
    {
      display: flex;
      flex-direction: column;
      height: auto;
      
      
    }
    .section_three .container img , .section_four .container img
    {
    
    margin-top:1em;
      text-align:center;
      align-items:center;
      margin-left:1em;
    }
  }
.section_six .card
{
   margin-top:1.6em;
}
.section_three .container , .section_four .container
{
    justify-content:space-around;
}

  </style>
    
    <div class="section_two">

    <center>

    <h2>Welcome to LaraInfo Restaurent</h2>
    <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam ad omnis,
         numquam beatae autem sed quam porro natus facilis saepe </p>
         <br>
         <a href="make_reservation.php">
         <button>Make your Reservation</button> </a>
    </center>

    </div>

    <div class="section_three">

    <center>
        <div class="container">
        <div class="left">
            <p>OUR STORY</p> 
            <br>
            <h2>Welcome</h2>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
            <p>ipsum optio? Eius temporibus aliquid eaque deleniti maiores </p>
            <p>accusamus quia numquam ad, quis odit quibusdam enim deserunt </p>
            <p>Exercitationem, facilis perferendis eos exercitationem.</p>
            <br>
            <button>Read More &#8594;</button>
        </div>
        <div class="right">
        <img src="../section_two_bg/image_one.jpg" alt="image">
        </div>

        </div>
    </center>
    </div>

    <div class="section_four">
        <center>
            <div class="container">
            <div class="left">
            <p>About Us</p> 
            <br>
            <h2>WHY CHOOSE US?</h2>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <p>ipsum optio? Eius temporibus aliquid eaque deleniti maiores</p>
            <p>accusamus quia numquam ad, quis odit quibusdam enim deserunt </p>
            <p>facilis perferendis eos exercitationem.</p>
            <br><br>

            <ul>
                <li>
                <i class="fas fa-cloud">&nbsp; faster processing and delivering</i>
                </li>
                <li>
                <i class="fas fa-car">&nbsp;  Easy transportations </i>
                </li>
                <li>
                <i class="fas fa-unlock">&nbsp;  100% protection and security </i>
                </li>
            </ul>
        </div>
        <div class="right">
        <img src="../section_two_bg/png_img.png" alt="image">
        </div>

            </div>
        </center>
    </div>

    <div class="section_five">
    <div class="container">
        <center>
            <p>Our Menu</p>
            <h2>TODAY'S SPECIALIST</h2>
        </center>

        <div class="category_container">

<?php
$query="SELECT * FROM menu order by created_at DESC ";
$query_run = mysqli_query($con , $query);
$sql = mysqli_num_rows($query_run);
if($sql > 0)
{

    $row = mysqli_fetch_array($query_run)
    
        ?>
        <div class="category">
            <div class="container">
                <div class="section">
            <div class="card">
                <div class="card-header">
                <img src="../menu_images/<?= $row['image']; ?>">
                </div>
                <div class="card-body">
                <a href=""><p>
                <?= $row['name']; ?></p></a>
                <br>
                <span><?= $row['description']; ?></span>
                <br> <br>
                <p><?= $row['price']; ?></p>
                </div>
        </div>
        </div>
        </div>
        </div>
    <?php

        
        
    }

else
{
    echo "no menu found";
}

?>

</div>

<?php

?>
</div>
</div>

    <div class="section_six">
        <div class="container">
            <center>
            <h3>Workers</h3>
            <p>Lorem ipsum lorem ipsun lorem ipsun<p>
            </center>
            <div class="section">
            
            <?php

$query="SELECT * FROM workers ";
$query_run = mysqli_query($con , $query);
$sql = mysqli_num_rows($query_run);
if($sql > 0)
{

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        
       
            <div class="card">
                <div class="card-header">

                <img src="../workers_images/<?= $row['image'] ;?>" >
                </div>
                <div class="card-body">

                <h4>_<?= $row['name'] ;?></h4>
                <br>
                <span>
                    <?= $row['description']; ?>
                </span>
                <p><?= $row['phone']; ?></p>
                </div>
            </div>

        <?php
    }
}
else
{
    echo "no worker found";
}

?>

</div>

<?php

?>


        
    </div>
</div>

<?php include("../static/footer.php") ?>

</body>
</html>