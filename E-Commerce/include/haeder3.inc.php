<script>
function userlogout()
{
   session_destroy();
}
</script>

<style>
#header{
    width:100%;
    margin-top:0px;
    height: 7%;
    padding: 10px 16px;
    background: #555;
    color: #f1f1f1;
}

#heading{
    font-family: cursive;
    font-size: 34px;
    width : 50%;
}

#logout{
    margin-top: -34px;
    float: right;
    font-size: 22px;
}

#gotoproducts{
    margin-top: -34px;
    float: right;
    font-size: 22px;
    margin-right:80px;
}
</style>
<div id="header">
    <div id="heading">
        E-Commerce
    </div>
    <div id="gotocart">
    <a href="/E-Commerce/ProductsPage.php" style="color:white">Go to Products</a>
    </div>
    <div id="logout">
    <a onlick="userlogout" href="/E-Commerce/index.php" style="color:white;">Logout</a>
    </div>
</div>