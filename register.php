<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tarun's Corner</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#register").click(function () {

                fname = $("#First").val();
                lname = $("#Last").val();
                age = $("#Age").val();
                password = $("#Password").val();

                $.ajax({
                    type: "POST",
                    url: "config.php",
                    data: "fname=" + fname + "&lname=" + lname + "&age=" + age + "&password=" + password,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Account</strong> processed. \ \
                                                 </div>');

                            window.location.href = "index.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> already in system. \ \
                                                 </div>');                    

                        } else if (html == 'fe') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> is required. \ \
                                                 </div>');
												 
						} else if (html == 'le') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'pe') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'ae') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Age needed</strong>. \ \
                                                 </div>');
												 
						} else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> must be at least 4 characters . \ \
                                                 </div>');

                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>

</head>

<body>

    <div class="brand">TM Blogs</div>
    <div class="address-bar">Bangalore,Karnataka,India | Student</div>

    <?php require_once 'nav.php'; ?>

    

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Registration
                        <strong>form</strong>
                    </h2>
                    <div id = "add_err2"></div>
                    <hr>
                    <p>Members Only</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" id = 'First' name = 'First' class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Last</label>
                                <input type="email" id = 'Last' name = 'Last'  class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Password</label>
                                <input type="password"id = 'Password' name = 'Password' class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Age</label>
                                <input type="number" id = 'Age' name = 'Age' class="form-control">
                                
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" id = 'register' class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Tarun Murali 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
