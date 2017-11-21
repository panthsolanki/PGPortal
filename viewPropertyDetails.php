<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<!-- HEAD SECTION -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Properties List</title>
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLE -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="index.html">Title</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Search</a></li>
                    <li><a href="#">Property</a></li>
                    <li><a href="#">SignOut</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row main-low-margin">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <h1>Property Title</h1>
                    <h3>Staff Bank Colony, Piska More, Ratu Road, Ranchi Pin-834005</h3>
                </div>
            </div>
        </div>
    </div>


    <!-- body goes here -->
    <div class="container">
        <div class="row main-low-margin">
            
            <div class="col-sm-7 col-md-7">
                <img class="big_img img-responsive" src="http://eastcdnspimgsulekhalive.blob.core.windows.net/cdn/images/roommate/postanadimages/full/2017_08_30_08_19_28_967_1.jpeg">
            </div>
            <div class="col-sm-5 col-md-5">
                <ul>
                    <li class="list"><h3 class="h3-des">Description</h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod natus, sint obcaecati id perferendis architecto molestias non temporibus ullam! Non dicta rerum est laboriosam eveniet incidunt hic odio harum consectetur!</li><hr>
                    <li class="list"><h3 class="h3-head">Furniture type</h3> Unfurnished</li><hr>
                    <li class="list"><h3 class="h3-head">Aminities</h3> AC, TV, Fridge, Gyeser, wi-fi, RO, Bed</li><hr>
                    <li class="list"><h3 class="h3-head">Preferable Tenant</h3>Married, Students</li><hr>
                    <li class="list"><h3 class="h3-head">No. of Rooms</h3> 3</li><hr> 
                    <li class="list"><h3 class="h3-head">Rent</h3> 3000</li><hr>
                    <li class="list">
                        <a href="#" class="btn btn-primary btn-lg">Contact</a>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Give Review </button>
                    </li>    
                </ul>
                
                </ul>
            </div>
            <div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Give Review for this property</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Title</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="form-control-label">Review</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit Review</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="space-bottom"></div>
        
    <!--END PRICING SECTION -->
    <!--FOOTER SECTION -->
    <div id="footer">
        <div class="navbar" >
            <div class="container">
                <div class="col-md-4">
                    Group No - 4
                </div>
                <div class="col-md-4">
                
                </div>
                <div class="col-md-4" align="right">
                    Design for MIS </a>
                </div>
            </div>
        </div>
    </div>
    <!--END FOOTER SECTION -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY LIBRARY -->
    <script src="assets/js/jquery.js"></script>
    <!-- CORE BOOTSTRAP LIBRARY -->
    <script src="assets/js/bootstrap.min.js"></script>
   
</body>
</html>
