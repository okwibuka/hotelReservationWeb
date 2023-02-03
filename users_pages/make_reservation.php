

<?php
session_start();
include("../connection/connection.php");
include("../static/header.php");
?>

<style>
.form_section
{
    background-color:whitesmoke;
    width:70%;
    height:80%;
    margin-top:2em;
    border-radius:6px;
}
.form_section
{
    position:relative;
}
 .left
{
    position:absolute;
    background-image: url(../images/cup3.jpg);
    overflow: hidden;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height:100%;
    width:50%;
    border-bottom-left-radius:6px;
    border-top-left-radius:6px;
}
.right
{
text-align:center;
position:absolute;
height:100%;
justify-content:center;
width:50%;
left:50%
}
.right h4
{
    margin-top:1em;
    color:blue;
}
form
{
    /* background:blue; */
    position:absolute;
    left:10%;
    width:90%;
    height:90%;
    top:7%;
}
label,input
{
    position:absolute;
    left:0;
}
input
{
    margin-top:3px;
    padding:5px;
    border-radius:7px;
    width:80%;
}
button
{

    padding:5px;
    background:blue;
    color:white;
    border-radius:6px;
    cursor:pointer;
    border:none;
    width:5rem;
}

    </style>

<div class="form_container">
<center>
    <div class="form_section">
            <div class="left">
            </div>
            <div class="right">
            <h4>Make Reservation</h4>

            <form action="" method="post">

            <label for="first_name">First Name</label>
            <br>
            <input type="text" name="first_name">
            <br><br>
            <label for="last_name">Last Name</label>
            <br>
            <input type="text" name="last_name">
            <br><br>
            <label for="email">Email</label>
            <br>
            <input type="email" name="email">
            <br><br>
            <label for="phone">Phone</label>
            <br>
            <input type="phone" name="phone">
            <br><br>
            <label for="email">Email</label>
            <br>
            <input type="email" name="email">
            <br><br>
            <label for="date">Reservation Date</label>
            <br>
            <input type="date" name="date">
            <br><br>
            <label for="guest number">Guest Number</label>
            <br>
            <input type="number" name="number">
            <br><br>
            <button>Next</button>
            </form>
            
            </div>
        </form>
    </div>
</center>
</div>

</body>
</html>