$(document).ready(function () {
   //$('.signup').hide()
  


//this are is for form div

$('.showlogin').on('click',function () {
    $('.sigin').show();
     $('.signup').hide();
})
//showreg
$('.showreg').on('click',function () {
    $('.sigin').hide();
     $('.signup').show();
})

  $('.semaildiv').on('click',function () {
        $('.firstnamediv').hide();
         $('.emaildiv').show();
         $('.emaildiv').css({"display":"flex"});
        $('.countrydiv').hide();
        $('.datediv').hide();
        $('.password').hide();
         $('.finishdiv').hide();
     })
        $('.showcountry').on('click',function () {
        $('.firstnamediv').hide();
         $('.emaildiv').hide();
         $('.countrydiv').css({"display":"flex"});
        $('.datediv').hide();
        $('.password').hide();
         $('.finishdiv').hide();
     })

         $('.showdate').on('click',function () {
        $('.firstnamediv').hide();
         $('.emaildiv').hide();
         $('.countrydiv').hide();
        $('.datediv').css({"display":"flex"});
        $('.password').hide();
         $('.finishdiv').hide();
     })

        $('.showpass').on('click',function () {
        $('.firstnamediv').hide();
         $('.emaildiv').hide();
         $('.countrydiv').hide();
        $('.datediv').hide();
        $('.password').css({"display":"flex"});
         $('.finishdiv').hide();
     })

         $('.showfinish').on('click',function () {
        $('.firstnamediv').hide();
         $('.emaildiv').hide();
         $('.countrydiv').hide();
        $('.datediv').hide();
        $('.password').hide();
         $('.finishdiv').css({"display":"flex"});s
     })


//back code


  $('.closemail').on('click',function () {
        $('.firstnamediv').css({"display":"flex"});
         $('.emaildiv').hide();
        $('.countrydiv').hide();
        $('.datediv').hide();
        $('.password').hide();
         $('.finishdiv').hide();
     })

        $('.closecountry').on('click',function () {
        $('.firstnamediv').hide();
         $('.emaildiv').css({"display":"flex"});
         $('.countrydiv').hide();
        $('.datediv').hide();
        $('.password').hide();
         $('.finishdiv').hide();
     })

         $('.closedate').on('click',function () {
        $('.firstnamediv').hide();
         $('.emaildiv').hide();
         $('.countrydiv').css({"display":"flex"});
        $('.datediv').hide();
        $('.password').hide();
         $('.finishdiv').hide();
     })

        $('.closepass').on('click',function () {
        $('.firstnamediv').hide();
         $('.emaildiv').hide();
         $('.countrydiv').hide();
        $('.datediv').css({"display":"flex"});
        $('.password').hide();
         $('.finishdiv').hide();
     })

         $('.closefinis').on('click',function () {
        $('.firstnamediv').hide();
         $('.emaildiv').hide();
         $('.countrydiv').hide();
        $('.datediv').hide();
        $('.password').css({"display":"flex"});
         $('.finishdiv').hide();
     })









	//this code is for hompage
      // $('.post').hide();
	  // $('.chat').hide();
     $('.h').on('click',function () {
     	$('.home').show();
     	$('.post').hide();
     	$('.chat').hide();
     })

     $('.p').on('click',function () {
     	$('.home').hide();
     	$('.post').show();
     	$('.chat').hide();
     })

     $('.c').on('click',function () {
     	$('.home').hide();
     	$('.post').hide();
     	$('.chat').show();

     })

     //this for comment but will remove it later

     $('.showcoment').on('click',function () {
     	$('.comment').show();
     })

     // this code is for home sidediv
     
        $('.showsidediv').on('click',function () {
        $('.sidediv').show();
     })

        
    $('.hidesidediv').on('click',function () {
        $('.sidediv').hide();
     })
//this code is for search 
   $('.showseach').on('click',function () {
        $('.search').show();
     })

      $('.hidesearch').on('click',function () {
        $('.search').hide();
     })

      //this is for show detail i will remove later
/*
     $('.showdetaile').on('click',function () {
        $('.detail').show();
     })
  */    

       $('.hidedeta').on('click',function () {
        $('.detail').hide();
     })
       //this code is to show chat

        $('.showchat').on('click',function () {
        $('.chat').show();
         $('.sidediv').hide();
        $('.home').hide();
        $('.post').hide();
     })

    //show shownoti means for notification div

        $('.shownoti').on('click',function () {
        $('.notification').show();
         $('.sidediv').hide();
        $('.home').hide();
        $('.post').hide();
     })
       
         $('.hidenoti').on('click',function () {
        $('.notification').hide();
        $('.home').show();
         })
})

function showufirname(s) {
    if (s=="open") {document.getElementsByClassName('accountform')[0].style.display="flex"; }
    else{ document.getElementsByClassName('accountform')[0].style.display="none"; }
  
}
function hideform() {
   document.getElementsByClassName('accountform')[0].style.display="none"; 
}


function showem(e) {
    if (e=="open") {document.getElementsByClassName('emailform')[0].style.display="flex";}
    else{
          document.getElementsByClassName('emailform')[0].style.display="none"; 
    }
 
}

function openacount(p) {
    if (p=="open") { document.getElementsByClassName('account')[0].style.display="block"; }
    else{
         document.getElementsByClassName('account')[0].style.display="none"; 
    }
  
}
function showpass(x) {
    if (x=="open") {   document.getElementsByClassName('passform')[0].style.display="flex";}

    else{
           document.getElementsByClassName('passform')[0].style.display="none";
    }

}

function showloc(x) {
    if (x=="open") { document.getElementsByClassName('locationform')[0].style.display="flex";}
    else{
         document.getElementsByClassName('locationform')[0].style.display="none";
    }

}

function showfrind(x) {
   if (x=="open") {
    document.getElementsByClassName('friends')[0].style.display="block";
    //document.getElementsByClassName('follower')[0].style.display="none";
        $('.home').show();
   }
   else{
      $('.home').show();
       document.getElementsByClassName('friends')[0].style.display="none";
    //document.getElementsByClassName('following')[0].style.display="none";
   // document.getElementsByClassName('follower')[0].style.display="block";
   }
}



function ff(x) {
   if (x=="following") {
    document.getElementsByClassName('following')[0].style.display="block";
    document.getElementsByClassName('follower')[0].style.display="none";
   }
   else{
    document.getElementsByClassName('following')[0].style.display="none";
    document.getElementsByClassName('follower')[0].style.display="block";
   }
}

function openfinff(a) {
    if (a=="open") {document.getElementsByClassName('findfriend')[0].style.display="block";}
    else{document.getElementsByClassName('findfriend')[0].style.display="none";}
 
}