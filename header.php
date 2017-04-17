<style>
#container {
    width:100%;
    text-align:center;
}

#left {
    float:left;
    width:100px;
    height: 20px;
    background: #ff0000;
}

#center {
    display: inline-block;
    margin:0 auto;
    width:100px;
    height: 20px;
    background: #00ff00;
}

#right {
    float:right;
    width:100px;
    height: 20px;
    background: #0000ff;
}
</style>

<div id="container">
  <div id="left"></div>
  <div id="center"></div>
  <div id="right">
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
