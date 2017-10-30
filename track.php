<?php
$currentPage = 'track';
?>
<!DOCTYPE html>
<html class="no-js">
<body>
<?php include('include/header.php'); ?>   
<div id="trackpage">
<!-- 
================================================== 
    Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Track Inventory</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Track Inventory</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>   
</section><!--/#page-header-->


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="block" id="contactinfo">
                   
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                         
                    </p>
                    <div class="contact-form">
                        <div class="col-lg-12 clearfix">
                            <div class="address wow fadeInLeft clearfix" data-wow-duration="500ms" data-wow-delay=".3s">
                                <form action="">
                                    <div class="col-lg-5" style="text-align: left; padding-top:10px;">
                                        <label for="sn"> <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">SN Number</h2></label>
                                         <input type="text" id="sn">
                                    </div>
                                    <div class="col-lg-5" style="text-align: left; padding-top:10px;">
                                         <label for="sel"> <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Length</h2></label>
                                         <select  class="form-control"  id="sel">
                                            <option>Select Length</option>
                                            <option value="all">All</option>
                                            <option value="48">48</option>
                                            <option value="54">54</option>
                                            <option value="65">65</option>
                                            <option value="72">72</option>
                                            <option value="84">84</option>
                                            <option value="96">96</option>
                                          </select>
                                    </div>
                                    <div class="col-lg-2" style="padding-top: 8px; padding-left: 30px;">
                                         <label for=""> <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">&nbsp;</h2></label>
                                            <input type="button" value="Track" class="btn btn-default" id="track">
                                    </div>
                                </form>   
                            </div>


                            <div id="res">
                                <h3 id="title"></h3>
                                <table id="ajaxresponse">
                                     
                                </table>
                            </div> 




                        </div>
                                                 
                    </div>
                </div>
            </div>
            

             

        </div>
 
    </div>
</section>
</div>
<!-- 
================================================== 
    Call To Action Section Start
================================================== -->
 

<?php include('include/footer.php'); ?>   
<script type="text/javascript" src="assets/js/app.js"></script>   
</body>
</html>


