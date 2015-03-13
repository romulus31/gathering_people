<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />

        <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="dist/js/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="dist/js/bootstrap.js"></script>
        <title> 
            Pictures
        </title>
    </head>

    <body>
        <?php include("includes/header.php"); ?>


        <?php include("includes/menu.php"); ?>

        <br><br>
        <!-- Wrapper for slides -->
        <div class="container">

            <div class="col-lg-10">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">

                            <img src="spacegallery/images/gat.png" class="img-responsive center-block img-rounded" alt="california_bike3" />
                            <div class="carousel-caption">   
                            </div>
                        </div>
                        <div class="item">
                            <img src="spacegallery/images/global.jpg" class="img-responsive center-block img-rounded" alt="california_bike4" />
                            <div class="carousel-caption"> 
                            </div>
                        </div>
                        <div class="item">
                            <img src="spacegallery/images/10-gathering.jpg" class="img-responsive center-block img-rounded" alt="california_bike5" />
                            <div class="carousel-caption"> 
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>

