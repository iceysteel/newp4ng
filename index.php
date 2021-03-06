<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spreadthecode</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/flat-ui/2.0/css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/flat-ui/2.0/css/flat-ui.css"> 

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- jquery goodness-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <!-- smooth scrolling script -->
    <script>
        $(function () {
            $('a[href*=#]:not([href=#])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
    
    
</head>

<body>

    <!-- include Static navbar -->
<?php 
    include 'navbar.php';
?>

    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->



        <div class="row clearfix">


            <div class="column">
                <div class="jumbotron">
                    <h1>Hey, Highschoolers!</h1>
                    <h2>Learn to code, then teach  it!</h2>
                    <p>Doing those community service hours can be interesting and related to your Computer science major!</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#About" role="button">Three easy steps! &raquo;</a>
                    </p>
                </div>
            </div>

        </div>
        <!-- /row -->

        <section id="About"> 
        
        <div class="row clearfix">
            <div class="col-md-4 column">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>1: Learn to code</h2>
                    </div>
                    <div class="panel-body">
                        <img src="images/pc.jpg" class="img-responsive">
                        <p class="steps">Learn to code using our 100% online Code Trainer. You can even skip this step if you already know how to code!</p>
                    </div>
                </div>

            </div>
            
            <div class="col-md-4 column">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>2: Setup a Class</h2>
                    </div>
                    <div class="panel-body">
                        <img src="images/calendar.jpg" class="img-responsive">
                        <p class="steps">Next you need to setup the class with your local library</p>
                    </div>
                </div>

            </div>
            
            <div class="col-md-4 column">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>3: Teach!</h2>
                    </div>
                    <div class="panel-body">
                        <img src="images/gradcap.jpg" class="img-responsive">
                        <p id="class"></p>Basic panel example
                    </div>
                </div>

            </div>

        </div>
        </section>
        <!-- /row2 -->



    </div>
    <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>