<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ippocratis</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=greek,greek-ext,latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="./main.css">
    </head>
<body>  
    <!--include Menu here-->
    <?php include 'includes/nav.php' ?>
        
    <!--<div class="slider">
        slider
    </div>-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img_chania.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img_chania2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img_flower.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="container product-container">
        <div class="row main-page-row">
            <div class="col-md-8">
                <div class="row icon-row">
                    <div class="col-xs-4 icon-col">
                        <img class="top-flaticons" src="./img/flaticons/shield.png">
                        <br>Text here
                    </div>
                    <div class="col-xs-4 icon-col">
                        <img class="top-flaticons" src="./img/flaticons/guarantee.png">
                        <br>Text here
                    </div>
                    <div class="col-xs-4 icon-col">
                        <img class="top-flaticons" src="./img/flaticons/five-stars-outlines.png">
                        <br>Text here
                    </div>
                </div><!-- ICON ROW -->

                <hr>
            
                <div class="general-info-ul">
                    <div class="col-md-6">
                        <ul class>
                            <li>Έτος: 2017</li>
                            <li>Κατασκευαστής: Alpine</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class>
                            <li>Κατάσταση: Καλη</li>
                            <li>Τιμή: 150$</li>
                        </ul>
                    </div>
                    
                </div><!-- GENERAL INFO UL -->

                <hr>

                <div class="description">
                    Ο υπέρηχος ECUBE 9 συνδιάζει προηγμένη τεχνολογία, ευφυείς κι εύχρηστες λειτουργίες με διαχρονικό design. Ιδανικά σχεδιασμένο για ευκολία στη χρήση με εξαιρετικό design, το οποίο απέσπασε 3 βραβεία. Οι τελευταίας γενιάς τεχνολογίες (OIS™) χρησιμοποιούνται για εξαιρετική απεικόνιση των ιστών απουσία θορύβων. Έχει δοθεί ιδιαίτερη προσοχή σε κάθε λεπτομέρεια, ώστε να σας προσφέρουμε την απόλυτη εμπειρία υπερηχογραφίας.
                </div><!-- Description -->
                
                <hr>

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1
                            </a>
                        </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2
                            </a>
                        </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                            </a>
                        </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    </div><!-- #ACCODION -->
            
            </div><!-- COL-MD-8 -->

            <div class="col-md-4 sidebar">

                <div class="sidebar-title">
                    <img class="top-flaticons" src="./img/flaticons/phone-call.png">
                    <a href="">2610 123 456</a>
                </div>

                <div class="form-container">
                    <!--<h3 class="contact-form-h3">Contact</h3>-->
                    <div class="col-xs-3">
                        <img src="https://www.spotawheel.gr/media/enthusiast/image_1110968918.jpg"  class="img-circle litol-img">
                        
                    </div>
                    <div class="col-xs-9">
                        <p class="shors-desc">Είμαι ο Γιάννης και ξέρω τα πάντα για αυτό το 320!
                        Αν χρειάζεσαι κάτι στείλε μου:</p>
                    </div>
                    

                    <form id="contact-form" method="post" action="contact.php" role="form">
                        <div class="messages"></div>
                            <div class="controls">

                            <div class="row">
                                <div class="col-xs-12 form-col">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control"  required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 form-col">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control"  required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 form-col">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control"  required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 form-col">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 form-col">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 contact-form-btn-col">
                                    <input type="submit" class="btn btn-success btn-send axbutton" value="Send message">
                                </div>
                            </div>
                    </form>

                </div><!-- FORM CONTAINER -->

            </div><!-- sidebar -->

        </div><!-- row -->
    </div>
        <div class="row suggested-products">
            <h3 class="">Μπορεί να σας ενδιαφέρουν</h3>
            <div class="col-xs-12">
                <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://www.ippocratis.gr/sites/default/files/alpinion_ecube_7_0.jpg" alt="...">
                    <div class="caption">
                        <h3>ALPINION E CUBE 15</h3>
                        <p>Το σύστημα υπερήχων E-CUBE 15 προσφέρει εξαιρετικής ποιότητας εικόνες σε συνδυασμό με την ανώτατη ανάλυση που χρειάζεστε για μια σίγουρη διάγνωση....</p>
                        <p class="two-buttons"><a href="#" class="two-button-display btn btn-primary" role="button">Button</a> <a href="#" class="two-button-display btn btn-default" role="button">Button</a></p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                    <img class="img-responsive" src="http://www.ippocratis.gr/sites/default/files/alpinion_ecube_7_0.jpg" alt="...">
                    <div class="caption">
                        <h3>ALPINION E CUBE 15</h3>
                        <p>Το σύστημα υπερήχων E-CUBE 15 προσφέρει εξαιρετικής ποιότητας εικόνες σε συνδυασμό με την ανώτατη ανάλυση που χρειάζεστε για μια σίγουρη διάγνωση....</p>
                        <p class="two-buttons"><a href="#" class="two-button-display btn btn-primary" role="button">Button</a> <a href="#" class="two-button-display btn btn-default" role="button">Button</a></p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                    <img class="img-responsive" src="http://www.ippocratis.gr/sites/default/files/alpinion_ecube_7_0.jpg" alt="...">
                    <div class="caption">
                        <h3>ALPINION E CUBE 15</h3>
                        <p>Το σύστημα υπερήχων E-CUBE 15 προσφέρει εξαιρετικής ποιότητας εικόνες σε συνδυασμό με την ανώτατη ανάλυση που χρειάζεστε για μια σίγουρη διάγνωση....</p>
                        <p class="two-buttons"><a href="#" class="two-button-display btn btn-primary" role="button">Button</a> <a href="#" class="two-button-display btn btn-default" role="button">Button</a></p>
                    </div>
                    </div>
                    </div>
            </div>
        </div>

    </div><!-- product container -->
            
            
        

    <!--include Menu here-->
    <?php include 'includes/footer.php' ?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>