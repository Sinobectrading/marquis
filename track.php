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
                                <table id="track"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Length</th>
                                            <th>Cataloge</th>
                                            <th>Dims</th>
                                            <th>Die No.</th>
                                            <th>Finish</th>
                                            <th>Alloy</th>
                                            <th>Color</th>
                                            <th>FAB</th>
                                        </tr>
                                    </thead>
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
<script type="text/javascript" language="javascript" >
$(document).ready(function() {
 
            var dataTable = $('#track').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"trackbck.php", // json datasource
                    type: "post",  // method  , by default get
                    error: function(){  
                        $(".error").html("");
                        $("#inventory-grid").append('<tbody class="inventory-grid-error"><tr><th colspan="9">No data found in the server</th></tr></tbody>');
                        $("#inventory-grid_processing").css("display","none");
                        
                    }
                }
            });

 
 
});
</script>
 
</body>
</html>


