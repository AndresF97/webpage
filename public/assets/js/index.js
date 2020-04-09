//Parallax Image
  $(document).ready(function(){
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();
  })

  $(".navLink").on("click",function(event){
    console.log(event.val())
  })