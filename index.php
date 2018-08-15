<?php require_once 'header.php';?>

<div class="parallax-container w3-display-container">
  <div class="parallax"><img src="<?=$IMAGE?>b1.jpg"></div>
  <div class="row w3-display-middle">
    <img src="<?=$IMAGE?>myphoto.jpg" class="circle responsive-img materialboxed" width="150">
  </div>
  <div class="row w3-display-bottommiddle">
    <h4 class="w3-center"><?=$NAME?></h4>
    <h6 class="w3-center"><?=$PROFESSION?></h6>
  </div>
</div>

<div class="container">
  <div class="row w3-padding-64">
    <div class="col l4 m4 s12 w3-center">
      <div class="w3-xxlarge"><i class="fa fa-briefcase"></i></div>
      <div class="w3-xxxlarge count_internship">0</div>
      <a href="internship.php" class="waves-effect waves-light btn w3-brown">Internships</a>
    </div>
    <div class="col l4 m4 s12 w3-center">
      <div class="w3-xxlarge"><i class="fa fa-flask"></i></div>
      <div class="w3-xxxlarge count_project">0</div>
      <a href="project.php" class="waves-effect waves-light btn w3-brown">Projects</a>
    </div>
    <div class="col l4 m4 s12 w3-center">
      <div class="w3-xxlarge"><i class="fa fa-certificate"></i></div>
      <div class="w3-xxxlarge count_certificate">0</div>
      <a href="certificate.php" class="waves-effect waves-light btn w3-brown">Certifications</a>
    </div><!-- 
    <div class="col l3 m6 s12 w3-center">
      <div class="w3-xxlarge"><i class="fa fa-trophy"></i></div>
      <div class="w3-xxxlarge" id="count_achievement">0</div>
      <a href="#achievement" class="waves-effect waves-light btn w3-brown">Achievements</a>
    </div> -->
  </div>
  <div class="row">
    <div class="col l4 m12 s12">
      <div class="card">
        <div class="card-content">
          <span class="card-title">About me</span>
          <p><b>Name : </b><?=$NAME?></p>
          <p><b>DOB : </b>05 June 1995</p>
          <p><b>Address : </b>Kolkata, India</p>
          <p><b>Mobile : </b><a href="tel:<?=$MOBILE?>" class="w3-text-brown"><?=$MOBILE?></a></p>
          <p><b>Email : </b><a href="mailto:<?=$EMAIL?>" class="w3-text-brown"><?=$EMAIL?></a></p>
        </div>
      </div>
    </div>
    <div class="col l4 m12 s12">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Education</span>
          <p><b>Degree : </b>B.Tech</p>
          <p><b>College : </b>MAKAUT, WB</p>
          <p><b>Stream : </b>Information Technology</p>
          <p><b>Year : </b>2013-17</p>
          <p><b>CGPA : </b>7.5</p>
        </div>
      </div>
    </div>
    <div class="col l4 m12 s12">
      <div class="card">
        <div class="card-content">
          <span class="card-title">What I do</span>
          <p>Web Development</p>
          <p>Android Development</p>
          <p>Coding &amp; Programming</p>
          <p>Problem Setter</p>
          <p>Photoshop</p>
        </div>
      </div>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
    <div class="col s12 w3-center">
      <h4 class="w3-padding-24">SKILLS</h4>
      <div id="skill">
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
  <div class="divider"></div>
  <div class="row">
    <div class="col s12 w3-center">
      <h4 class="w3-padding-24">ACHIEVEMENTS</h4>
      <div id="achievement">
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
  <div class="divider"></div>
</div>

<?php require_once 'footer.php'; ?>

<script>
$("document").ready(function(){
	set_page_name("Home");
  print_skill();
  print_achievement();
});

function print_skill(){
  var out="";
  $.post("userapi/skill_list.php","",
    function(data){
      var arr=JSON.parse(data);
      if(arr["status"]=="success"){
        for(i=0;i<arr["skill"].length;i++){
          out+='<div class="chip w3-brown">'+arr["skill"][i]["skill"]+'</div>';
        }
      }else{
        out='<p class"w3-text-red">'+arr["remark"]+'</p>';
      }
      $("#skill").html(out);
    })
}

function print_achievement(){
  var out="";
  $.post("userapi/achievement_list.php","",
    function(data){
      var arr=JSON.parse(data);
      if(arr["status"]=="success"){
        for(i=0;i<arr["achievement"].length;i++){
          out+='<div class="col l6 m12 s12">';
            out+='<div class="card w3-hover-shadow">';
              out+='<div class="card-content">';
                out+='<a class="w3-text-black w3-hover-text-brown" href="'+arr["achievement"][i]["url"]+'" target="_blank">'
                out+='<p>'+arr["achievement"][i]["achievement"]+'</p>';
              out+='</div>';
            out+='</div>';
          out+='</div>';
        }
      }else{
        out='<p class"w3-text-red">'+arr["remark"]+'</p>';
      }
      $("#achievement").html(out);
    })
}
</script>