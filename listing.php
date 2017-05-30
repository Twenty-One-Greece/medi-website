<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ippocratis</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="./main.css">
    </head>
<body>  
    <!--include Menu here-->
    <?php include 'includes/nav.php' ?>
        
       <div class="container">
       <div class="col-md-3">
            <div class="">
                <h2>Filtering divs</h2>
            </div>
            <h3 class="filter-heading">Ειδικότητα</h3>
            <ul class="filter-ul">
            
                <li class="filter-button" data-filter="all"><input id="checkBox" type="checkbox">Καρδιολογία</li>
                <li class="filter-button" data-filter="photo"><input id="checkBox" type="checkbox">Μαιευτική / Γυναικολογία</li>
                <li class="filter-button" data-filter="graphic"><input id="checkBox" type="checkbox">Ουρολογία</li>
                <li class="filter-button" data-filter="webdesign"><input id="checkBox" type="checkbox">Ακτινολογία</li>
            </ul>
            <h3 class="filter-heading">Κατηγορία</h3>
            <ul class="filter-ul">
                <li class="filter-button" data-filter="all"><input id="checkBox" type="checkbox">Απινιδωτές</li>
                <li class="filter-button" data-filter="photo"><input id="checkBox" type="checkbox">καρδιογράφοι</li>
                <li class="filter-button" data-filter="graphic"><input id="checkBox" type="checkbox">Τεστ κοπωσεως</li>
                <li class="filter-button" data-filter="webdesign"><input id="checkBox" type="checkbox">Monitors</li>
            </ul>
            <h3 class="filter-heading">Κατάσταση</h3>
            <ul class="filter-ul">
                <li class="filter-button" data-filter="all"><input id="checkBox" type="checkbox">Μεταχειριμένο</li>
                <li class="filter-button" data-filter="photo"><input id="checkBox" type="checkbox">Νέο</li>
            </ul>
            
            </div>
            <div class="col-md-9 col-listing-results">
            <h3 class="filter-heading">Μηχανήματα</h3>
            <div class="row row-listing-results">
                <div class="col-md-4 filter photo">
                    <div class="each-item">
                        <img class="port-image" src="http://www.ippocratis.gr/sites/default/files/styles/portfolio_4_column/public/alpinion_e_cube9_diamond_4d_0.jpg?itok=sAnwV9Ek"/>
                        <!--<div class="cap1">
                            <h3>Car show</h3>
                            <p>A car showroom for all verities of cars to display</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Visit</p>
                        </div>-->
                        <div class="listing-price">
                            <p class="listing-price-p">
                                1.500$
                            </p>
                        </div>
                        <div class="on-sale-tag">
                            <p class="on-salte-tag-p">On Sale</p>
                        </div>
                        <div class="listing-description">
                            <p class="listing-description-p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    
                </div>
                
                
                
                <div class="col-md-4 filter webdesign">
                    <div class="each-item">
                        <img class="port-image" src="http://www.ippocratis.gr/sites/default/files/styles/portfolio_4_column/public/ec0_1_1.jpg?itok=Ma3UJalm"/>
                        <!--<div class="cap1">
                            <h3>Car show</h3>
                            <p>A car showroom for all verities of cars to display</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Visit</p>
                        </div>-->
                        <div class="listing-price">
                            <p class="listing-price-p">
                                1.300$
                            </p>
                        </div>
                        <div class="listing-description">
                            <p class="listing-description-p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 filter graphic photo">
                    <div class="each-item">
                        <img class="port-image" src="http://www.ippocratis.gr/sites/default/files/styles/portfolio_4_column/public/phillips_hd11_1.jpg?itok=0Cw68t2q"/>
                        <!--<div class="cap1">
                            <h3>Car show</h3>
                            <p>A car showroom for all verities of cars to display</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Visit</p>
                        </div>-->
                        <div class="listing-price">
                            <p class="listing-price-p">
                                1.500$
                            </p>
                        </div>
                        <div class="listing-description">
                            <p class="listing-description-p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 filter photo">
                    <div class="each-item">
                        <img class="port-image" src="http://www.ippocratis.gr/sites/default/files/styles/portfolio_4_column/public/portfolios/microtel_0.jpg?itok=rMJ-Lq1L"/>
                        <!--<div class="cap1">
                            <h3>Car show</h3>
                            <p>A car showroom for all verities of cars to display</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Visit</p>
                        </div>-->
                        <div class="listing-price">
                            <p class="listing-price-p">
                                1.500$
                            </p>
                        </div>
                        <div class="on-sale-tag">
                            <p class="on-salte-tag-p">On Sale</p>
                        </div>
                        <div class="listing-description">
                            <p class="listing-description-p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-md-4 filter webdesign graphic">
                    <div class="each-item">
                        <img class="port-image" src="http://www.ippocratis.gr/sites/default/files/styles/portfolio_4_column/public/portfolios/touch_ecg_hd.jpg?itok=KljtaE9K"/>
                        <!--<div class="cap1">
                            <h3>Car show</h3>
                            <p>A car showroom for all verities of cars to display</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Visit</p>
                        </div>-->
                        <div class="listing-price">
                            <p class="listing-price-p">
                                1.500$
                            </p>
                        </div>
                        <div class="listing-description">
                            <p class="listing-description-p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 filter photo">
                    <div class="each-item">
                        <img class="port-image" src="http://www.ippocratis.gr/sites/default/files/styles/portfolio_4_column/public/alpinion_e_cube_inno.jpg?itok=uKvVRcQt"/>
                        <!--<div class="cap1">
                            <h3>Car show</h3>
                            <p>A car showroom for all verities of cars to display</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Visit</p>
                        </div>-->
                        <div class="listing-price">
                            <p class="listing-price-p">
                                1.500$
                            </p>
                        </div>
                        <div class="on-sale-tag">
                            <p class="on-salte-tag-p">On Sale</p>
                        </div>
                        <div class="listing-description">
                            <p class="listing-description-p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- RESULTS COL -->
            
            
        

    <!--include Menu here-->
    <?php include 'includes/footer.php' ?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
        $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

});
    </script>
</body>
</html>