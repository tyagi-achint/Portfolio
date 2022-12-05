<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--head bar-->
    <div id="head-placeholder"></div>
    <script>
        $(function () {
            $("#head-placeholder").load("head.html");
        });
    </script>
    <title>Contact</title>
</head>

<body>
    <!--Error Tab-->

    <div id="error_page"></div>

    <script>
        $(function () {
            $("#error_page").load("error.html");
        });
    </script>
    <!--end of Error Tab-->
    <div id="normalbody">
        <!--Navigation bar-->

        <div id="nav-placeholder"></div>

        <script>
            $(function () {
                $("#nav-placeholder").load("nav.html");
            });
        </script>


        <div id="cookies">
            <div class="row">
                <div class="col-md-5">
                    
                    <h2>Your Cookies details...</h2>
                    <h4>
                    <?php
if(count($_COOKIE) > 0) {

echo "Cookies are enabled<br>";
echo "Cookies count : ".count($_COOKIE);

} else {

echo "Cookies are disabled";

}

?>
                    </h4>
                    
        </div>
        <div class="col-md-2"> 
            <div></div>
                </div>
                    <div class="col-md-5"> 
                    <h2>Your Session details...</h2>
                    <h4> <?php
session_start();
if (!isset($_SESSION['counter'])) {
$_SESSION['counter'] = 1;
} else {
$_SESSION['counter']++;
}
echo ("You have Visited this page<br> ");
echo ($_SESSION['counter']." times");

?></h4>

                </div>
            </div>
        </div>


        <!--Footer bar-->

        <div id="footer-placeholder"></div>

        <script>
            $(function () {
                $("#footer-placeholder").load("footer.html");
            });
        </script>
</body>

</html>