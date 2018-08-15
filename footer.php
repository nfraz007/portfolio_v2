<footer class="page-footer w3-white">
    <div class="container">
      <div class="row w3-center">
        <div>
          <a href="https://www.facebook.com/nfraz007" target="_blank" class="waves-effect waves-light btn-floating btn-large w3-brown"><i class="fa fa-facebook"></i></a>
          <!-- <a class="waves-effect waves-light btn-floating btn-large w3-brown"><i class="fa fa-google-plus"></i></a> -->
          <a href="https://in.linkedin.com/in/nazish-fraz-442b61105" target="_blank" class="waves-effect waves-light btn-floating btn-large w3-brown"><i class="fa fa-linkedin"></i></a>
          <a href="https://github.com/nfraz007" target="_blank" class="waves-effect waves-light btn-floating btn-large w3-brown"><i class="fa fa-github"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-copyright w3-brown">
      <div class="container">
        Created by Nazish Fraz
      </div>
    </div>
</footer>


  <!--  Scripts-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>
  <script src="assets/pagination/pagination.js" type="text/javascript"></script>

  </body>
</html>

<script>

$("#document").ready(function(){
  $('.parallax').parallax();
  print_count();
});

function print_count(){
  var out="";
  $.post("userapi/count_data.php","",
    function(data){
      var arr=JSON.parse(data);
      if(arr["status"]=="success"){
        $(".count_internship").html(arr["internship"]);
        $(".count_project").html(arr["project"]);
        $(".count_certificate").html(arr["certificate"]);
        // $(".count_achievement").html(arr["achievement"]);
      }
    })
}

//*************************************************************function for set page title************************
function set_page_name(name){
  $("#page_name").html(' / '+name);
}

</script>