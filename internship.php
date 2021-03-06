<?php require_once 'header.php';?>

<div class="parallax-container w3-display-container">
  <div class="parallax"><img src="<?=$IMAGE?>b2.jpg"></div>
  <div class="row w3-display-middle">
    <img src="<?=$IMAGE?>myphoto.jpg" class="circle responsive-img materialboxed" width="150">
  </div>
  <div class="row w3-display-bottommiddle">
    <h4 class="w3-center"><?=$NAME?></h4>
    <h6 class="w3-center"><?=$PROFESSION?></h6>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col s12">
      <h4 class="w3-center w3-padding-24">INTERNSHIPS</h4>
      <div id="content">
        <div class="w3-center">
          <div class="preloader-wrapper active small">
            <div class="spinner-layer spinner-red-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="divider"></div>
</div>

<?php require_once 'footer.php'; ?>

<script>
$("document").ready(function(){
	set_page_name("Internships");
  print_data();
});

function print_data(){
  var out="";
  $.post("userapi/internship_list.php","",
    function(data){
      var arr=JSON.parse(data);
      if(arr["status"]=="success"){
        for(i=0;i<arr["internship"].length;i++){
          out+='<div class="col l12 m12 s12">';
            out+='<div class="card w3-hover-shadow">';
              out+='<div class="card-content w3-justify">';
                out+='<p class="w3-large"><b class="w3-text-brown">Company : </b>'+arr["internship"][i]["company"]+' , '+arr["internship"][i]["location"]+'</p>';
                out+='<p><b class="w3-text-brown">Position : </b>'+arr["internship"][i]["position"]+'</p>';
                out+='<p><b class="w3-text-brown">Detail : </b>'+arr["internship"][i]["detail"]+'</p><br>';
                out+='<p class="w3-text-brown w3-small">From '+arr["internship"][i]["start"]+' - '+arr["internship"][i]["end"]+'</p>';
              out+='</div>';
            out+='</div>';
          out+='</div>';
        }
      }else{
        out='<p class"w3-text-red">'+arr["remark"]+'</p>';
      }
      $("#content").html(out);
    });
}

</script>