<!--
==================================================
Footer Section Start
================================================== -->
<footer id="footer">
    <div class="container">
        <div class="col-md-8">
            <p class="copyright">@Copyright Reserved By MARQUIS: <span>2015</span> . Design and Developed by <a href="mailto:alex.gao@sinometalresourcesinc.com">Marquis</a></p>
        </div>
        <div class="col-md-4">
            <!-- Social Media -->
            <ul class="social">
                <li>
                    <a href="#" class="Facebook">
                        <i class="ion-social-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="Twitter">
                        <i class="ion-social-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="Linkedin">
                        <i class="ion-social-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="Google Plus">
                        <i class="ion-social-googleplus"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer> <!-- /#footer -->
<!-- Template Javascript Files
================================================== -->
<!-- modernizr js -->
<script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
<!-- jquery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- owl carouserl js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- bootstrap js -->

<script src="assets/js/bootstrap.min.js"></script>
<!-- wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- slider js -->
<script src="assets/js/slider.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<!-- template main js -->
<script src="assets/js/main.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76603570-1', 'auto');
  ga('send', 'pageview');
</script>
<script>
$(document).ready(function(){

$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
// $("#track").prop('disabled', true);
$(window).unload(function(){
    $('.valid').val("");
    $("#ponumber").removeClass('err');
    $("#sn").removeClass('err');
    $("#sn").attr("placeholder", "SN number").val("");
    $("#ponumber").attr("placeholder", "PO number").val("");
    $("#track").prop('disabled', true);
    $('#ajaxresponse').empty();
});
 
$('#track').on({ 
    click: function(event){
        event.preventDefault();
        // var ponumber = $('#ponumber').val();
        $.ajax({
            type: "POST",
            url:"sn.php",
            dataType: "json",
            data:{
                selvalue: $('#sel').val(),
                snvalue:$('#sn').val()
                },
            success: function(datat){
               if (datat.success) {
                    $("#sel").removeClass('err');
                    $('#title').replaceWith('<h3 id="title">Tracking Result:</h3>');
                    $('#ajaxresponse').replaceWith('<table class="table table-hover table-responsive" id="ajaxresponse"><thead class="thead-inverse"><tr><td>ITEM No.</td><td>Description</td><td>DIE#</td><td>Length</td><td>Finish</td><td>Alloy</td><td>Color</td></tr></thead><tbody></tbody></table>');
                    for (var i = 0; i < datat.size; i++) {  
                        var newString = ['<tr><td>'+datat.result[i].item+'</td><td>'+datat.result[i].des+'</td><td>'+datat.result[i].die+'</td><td>'+datat.result[i].length+'</td><td>'+datat.result[i].finish+'</td><td>'+datat.result[i].alloy+'</td>'+'</td><td>'+datat.result[i].color+'</td></tr>'].join('');
                        $('#ajaxresponse tbody').append(newString);
                    }
                     console.log('povalid');
                    // if(result == "cp") {
                    //  $("#track").prop('disabled', false);
                    // }
                }           
                else {
                    $("#sel").addClass('err');
                    $("#sn").addClass('err');
                    $('#title').replaceWith('<h3 id="title">Tracking Result:</h3>');
                    $('#ajaxresponse').replaceWith('<table class="table table-hover table-responsive" id="ajaxresponse"><thead class="thead-inverse"><tr><td>ITEM No.</td><td>Description</td><td>DIE#</td><td>Length</td><td>Finish</td><td>Alloy</td><td>Color</td></tr></thead><tbody></tbody></table>');
                     
                        var newString = ['<tr><td span="7">'+datat.message+'</td></tr>'].join('');
                        $('#ajaxresponse tbody').append(newString);
                    console.log("po number is false");
                }
            },
            error:function(jqXHR, status, err){
                console.log("po wrong: "+status);
            },
        });
    },
});

});
</script>


