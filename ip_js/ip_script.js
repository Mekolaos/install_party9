/*************** Install party *****************/
/********* Count Down *************/
// Set the date we're counting down to
var countDownDate = new Date("May 5, 2018 9:30:01").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


//HAHAHA I DIDN'T EVEN STUDY THIS SHIT
  var daysWord = ":";
  var minsWord = ":";
  var hoursWord = ":";
  var secsWord = "secondes";

  if(days == 0 || days == 1){
    daysWord=":";
  }
  if(days < 10){
    days = "0"+days;
  }

  if(hours == 0 || hours == 1){
    hoursWord = ":";
  }
  if(hours < 10){
    hours = "0"+hours;
  }

  if(minutes == 0 || minutes == 1){
    minsWord = ":";
  }
  if(minutes < 10){
    minutes = "0"+minutes;
  }

  if(seconds == 0 || seconds == 1){
    secsWord = "secondes";
  }
  if(seconds < 10){
    seconds = "0"+seconds;
  }

  // Display the result in the element with id="demo"
  document.getElementById("day").innerHTML = days ;
  document.getElementById("dayWord").innerHTML = daysWord ;
  document.getElementById("hour").innerHTML = hours ;
  document.getElementById("hourWord").innerHTML = hoursWord ;
  document.getElementById("min").innerHTML = minutes;
  

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
/**********************************/
 /******* speaker ***********/
function speaker($num){    
      if (window.getComputedStyle(document.querySelector('#speak'+$num)).display=='none'){
            document.querySelector("#speak"+$num).style.display="block";
            document.querySelector("#speakPic"+$num).style.display="block";
            document.querySelector("#speaker"+$num+" li").style.color="#288C86";
            for(var j=1;j<=6;j++) {
                if(j != $num){
                    document.querySelector("#speak"+j).style.display="none";
                    document.querySelector("#speakPic"+j).style.display="none";
                    document.querySelector("#speaker"+j+" li").style.color="#888989";
                }
            }     
      }
}
 /******* workshop ***********/
function workshop($num){    
      if (window.getComputedStyle(document.querySelector('#workPic'+$num)).display=='none'){
            document.querySelector("#workPic"+$num).style.display="block";
            document.querySelector("#work"+$num).style.display="block";
            document.querySelector("#ws"+$num+" li").style.color="#288C86";
            document.querySelector("#signWs").style.display="none";
            for(var j=1;j<=7;j++) {
                if(j != $num){
                    document.querySelector("#workPic"+j).style.display="none";
                    document.querySelector("#work"+j).style.display="none";
                    document.querySelector("#ws"+j+" li").style.color="#888989";
                }
            }     
      }
}

function workshopSign($num,$name){     
      if (window.getComputedStyle(document.querySelector('#work'+$num)).display=='block'){
            document.querySelector("#work"+$num).style.display="none";
            document.querySelector("#signWs").style.display="block";
            document.getElementById("idWorkshop").innerHTML = '<input type="text" name="idWS" value='+$num+' hidden="hidden"/>';
            document.getElementById("nameWorkshop").innerHTML = '<input type="text" name="nameWS" value='+$name+' hidden="hidden"/>';
      }
}

$("#is_open_ipws").on("change", function(){
     if($(this).prop("checked")){
        $("#about_open").show();
        document.querySelector("#labAbout").style.display="block";
         
     }else{
         $("#about_open").hide();
         document.querySelector("#labAbout").style.display="none";
     }

    });

$("#is_open_ip").on("change", function(){
     if($(this).prop("checked")){
        $("#about_openIP").show();
        document.querySelector("#abAbout").style.display="block";
     }else{
         $("#about_openIP").hide();
         document.querySelector("#abAbout").style.display="none";
     }

    });
/*****************/
  if(document.querySelector("#goWS")){
    document.querySelector("#goWS").onclick = function() {
        document.querySelector("#overly").style.display="none";
    }
  }
    

    // document.querySelector("#reg_ws").onclick = function() {
    //   if (window.getComputedStyle(document.querySelector('#descrIP')).display=='none'){
    //         document.querySelector("#descIPDay").style.background="#fff";
    //         document.querySelector("#descrIP").style.display="block";
    //         document.querySelector("#dayIP").style.background="#f4f8f7";
    //         document.querySelector("#dayIP").style.opacity="0.1";
    //   }
    //   else{
    //        document.querySelector("#descIPDay").style.background="#f4f8f7";
    //        document.querySelector("#descIPDay").style.opacity="0.1";
    //        document.querySelector("#descrIP").style.display="none";
    //        document.querySelector("#dayIP").style.background="#fff";
    //   } 
    // }

    // document.querySelector("#plus3").onclick = function() {
    //     if (window.getComputedStyle(document.querySelector('#wsIPBiss')).display=='none'){
    //         document.querySelector("#ip7_work").style.display="none";
    //         document.querySelector("#ip7_workBiss").style.display="block";
    //         document.querySelector("#wsIP").style.display="none";
    //         document.querySelector("#wsIPBiss").style.display="block";
    //     }
    // }

    // document.querySelector("#plus3b").onclick = function() {
    //     if (window.getComputedStyle(document.querySelector('#wsIPBiss')).display=='block'){
    //         document.querySelector("#ip7_workBiss").style.display="none";
    //         document.querySelector("#ip7_work").style.display="block";
    //         document.querySelector("#wsIPBiss").style.display="none";
    //         document.querySelector("#wsIP").style.display="block";
    //         document.querySelector("#signWs").style.display="none";
    //         for(var j=1;j<=7;j++) {
    //                 document.querySelector("#workPic"+j).style.display="none";
    //                 document.querySelector("#work"+j).style.display="none";
    //                 document.querySelector("#ws"+j+" li").style.color="#888989";
    //         } 
    //     }
    // }

    // document.querySelector("#plus4").onclick = function() {
    //   if (window.getComputedStyle(document.querySelector('#speakersIP')).display=='none'){
    //         document.querySelector("#speakIP").style.display="none";
    //         document.querySelector("#talksIP").style.display="none";
    //         document.querySelector("#speakerNass").style.display="none";
    //         document.querySelector("#speakersIP").style.display="block";
    //         document.querySelector("#talksIP").style.display="block";
            
    //   }
    //   else{
    //         document.querySelector("#speakersIP").style.display="none";
    //         document.querySelector("#speakIP").style.display="block";
    //         document.querySelector("#talksIP").style.display="block";
    //         document.querySelector("#speakerNass").style.display="block";
    //         for(var j=1;j<=6;j++) {
                
    //                 document.querySelector("#speak"+j).style.display="none";
    //                 document.querySelector("#speakPic"+j).style.display="none";
    //                 document.querySelector("#speaker"+j+" li").style.color="#888989";
                
    //         }  
    //   } 
    // }

    // document.querySelector("#plus5").onclick = function() {
    //   if (window.getComputedStyle(document.querySelector('#aboutSpIP')).display=='none'){
    //         document.querySelector("#nospIP").style.display="none";
    //         document.querySelector("#stickIP").style.display="none";
    //         document.querySelector("#aboutSpIP").style.display="block";
    //         document.querySelector("#whySpIP").style.background="#f4f8f7";
    //         document.querySelector("#whySpIP").style.opacity="0.1";   
    //   }
    //   else{ 
    //         document.querySelector("#aboutSpIP").style.display="none";
    //         document.querySelector("#whySpIP").style.background="#FFF";
    //         document.querySelector("#nospIP").style.display="block";
    //         document.querySelector("#stickIP").style.display="block";
    //   } 
    // }

    /*document.querySelector("#plus6").onclick = function() {
      if (window.getComputedStyle(document.querySelector('#signIP')).display=='none'){
            document.querySelector("#signIP").style.display="block";
                 
      }
      else{ 
            document.querySelector("#signIP").style.display="none";    
      } 
    }*/

    // document.querySelector("#plus7").onclick = function() {
    //     if (window.getComputedStyle(document.querySelector('#descIPBG')).display=='none'){
    //         document.querySelector("#descIPBG").style.display="block";
    //         document.querySelector("#bgPic").style.display="none";
    //         document.querySelector("#bgEmpIP").style.display="none";
    //     }
    //     else{
    //         document.querySelector("#descIPBG").style.display="none";
    //         document.querySelector("#bgPic").style.display="block";
    //         document.querySelector("#bgEmpIP").style.display="block";
    //     } 
    // }



    /********* Organizers ********/
function myOrgFunction($myPic, $myDesc) {
      if (window.getComputedStyle(document.querySelector('#memDesc'+$myPic)).display=='none'){
            document.querySelector("#memDesc"+$myPic).style.display="block";
            document.querySelector("#mem"+$myDesc).style.display="none";
            document.querySelector("#memDesc"+$myPic).style.cursor="default";
            for(var j=1;j<=8;j++) {
                    if(j != $myPic ){
                    document.querySelector("#mem"+j).style.filter=" opacity(50%)";
                    $("#mem"+j).children().bind('click', function(){ return false; });
                    document.querySelector("#mem"+j).style.cursor="default";
                    }
            }
      }
      else{
            document.querySelector("#memDesc"+$myPic).style.display="none";
            document.querySelector("#mem"+$myDesc).style.display="block";
            for(var j=1;j<=8;j++) {
                    if(j != $myPic ){
                    document.querySelector("#mem"+j).style.filter=" blur(0px)";
                    $("#mem"+j).children().unbind('click');
                    document.querySelector("#mem"+j).style.cursor="pointer";
                    }
            }
      } 
}


    /*************** hadak hamoud ******/
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("monSlide");
  var dots = document.getElementsByClassName("no9ta");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
//   slides[slideIndex-1].style.display = "block";
//   if(dots[slideIndex-1]) {
    dots[slideIndex-1].className += " active";
//   }
} 

/* summ'in summ'in */


    $(document).ready(function() {
     
      $("#owl-demo").owlCarousel({
        navigation : true
      });
     
    });


// TEDDI pepsi YA coca
  // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
//     modal.style.display = "block";
// }

// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
