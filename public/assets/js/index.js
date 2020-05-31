//Parallax Image
  $(document).ready(function(){
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();
  })
  $(".closebtn").on("click",function(event){
    console.log($(this))
  })