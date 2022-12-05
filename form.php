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


        <div id="contactphp">
            <div class="row">
                <div class="col-md-12">
                    <h1>Thankyou For Filling the Form</h1>
                    <h2>Your Response is...</h2>
                        <em>Name:   <?php echo $_POST["name"]?></em>
                        <em>Email:   <?php echo $_POST["email"]?> </em>
                       <em>Subject:   <?php echo $_POST["subject"]?></em>
                       <em>Message:   <?php echo $_POST["message"]?></em>
                        
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