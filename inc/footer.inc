<footer class="col-md-12">
        <p>Copyright 2016 © Yichen Lu. All rights reserved.</p>
    </footer>

<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="plugins/js/modernizr.custom.js"></script>
<script src="plugins/js/grid.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });

  var href = window.location.href;
  $('nav ul li a').each(function(){
    $(this).parent().parent().addClass('horizontal-menu');
    console.log(href, this.href);
    if(href == this.href){
      $(this).parent().addClass('current');
      console.log($(this));
    }
  });

  Grid.init();
});

// Form validation code will come here.
function validate()
{

   if( document.myForm.firstname.value == "" )
   {
      alert( "Please provide your first name!" );
      document.myForm.firstname.focus() ;
      return false;
   }

   if( document.myForm.lastname.value == "" )
   {
      alert( "Please provide your last name!" );
      document.myForm.lastname.focus() ;
      return false;
   }
   
   if( document.myForm.email.value == "" )
   {
      alert( "Please provide your Email!" );
      document.myForm.email.focus() ;
      return false;
   }
   
   if( document.myForm.phone.value == "" ||
   isNaN( document.myForm.phone.value ) ||
   document.myForm.phone.value.length <= 1 )
   {
      alert( "Please provide a correct phone number." );
      document.myForm.phone.focus() ;
      return false;
   }
   
   return(validateEmail());
}

function validateEmail()
{
   var emailID = document.myForm.email.value;
   atpos = emailID.indexOf("@");
   dotpos = emailID.lastIndexOf(".");
   
   if (atpos < 1 || ( dotpos - atpos < 2 )) 
   {
      alert("Please enter a correct email")
      document.myForm.email.focus() ;
      return false;
   }
   return( true );
}
</script>

</body>

</html>