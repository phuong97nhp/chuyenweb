function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function eraseCookie(name) {
  setCookie(name,"",-1);
}

// ============================== auto loguot admin ============================

$(document).ready(function(){
  $(window).on('load', function(){
    var dt = new Date();
    var time = dt.getHours() + ":" + dt.getMinutes();
    var day = dt.getDate() + "/" + dt.getMonth()+ "/" + dt.getFullYear();

    //console.log(time);
    var timeStart = getCookie('time');
    var dayStart = getCookie('day');

    // tinh thời gian
    var start = timeStart;
    var end = time;

    s = start.split(':');
    e = end.split(':');

    min = e[1]-s[1];
    hour_carry = 0;
    if(min < 0){
      min += 60;
      hour_carry += 1;
    }

    if ( min>30 || day != dayStart ) {

      const string = window.location.href;
      const substring = "/dang-nhap";
      var stringCheck = string.includes(substring);
      if(stringCheck == false){
        alert('Bạn đã quá thời gian truy cập.');

        $.ajaxSetup({
         headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      });

        jQuery.ajax({
         url: "cw-admin/dang-xuat",
         method: 'post',
         type: 'json',
         data: {status: min},

         success: function(result){
          if(result.constructor === String){
           result = JSON.parse(result);
         }
         if (result.status == true) 
         { 
            location.reload(result.url);
          }
      }
    });
      }

      return 0;
    }else{
      setCookie('time', time, 1800);
      setCookie('day', day, 1800);
    }

  });
});

// ============================== page login ===================================
function evenLogin(){
  var $this = $('#login_signin_submit');
  $this.text("Đang tải...");
  event.preventDefault();

  $.ajaxSetup({
   headers: {
    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
  }
});

  jQuery.ajax({
   url: "dang-nhap",
   method: 'post',
   type: 'json',
   data: {
    email: jQuery('#email').val(),
    password: jQuery('#password').val(),
    remember: jQuery('#remember').val()
  },

  success: function(result){
    if(result.constructor === String){
     result = JSON.parse(result);
   }
   if (result.status == true) 
   { 
    location.reload(result.url);
  }
  else
  {
    $this.text("Đăng nhập");
    jQuery('#'+result.at).html(result.name);
  }
}
});
}

jQuery(document).ready(function(){
  jQuery('#login_signin_submit').click(function(e)
  {
    evenLogin();
  });
});

jQuery(document).ready(function(){
 jQuery('*').keydown(function(event)
 {
  var keycode = (event.keyCode ? event.keyCode : event.which);
  if(keycode === 13)
  {
    evenLogin();
  }
});
});




/*
$(document).ready(function(){
   $('.kt-checkbox').on('click', function(){
      var remember = $('#remember').val();

      switch (remember)
      {
        case "false" : 
        $('#remember').val('true');
        remember = 'false';
        return remember;
        break;
        case "true" : 
        $('#remember').val('false');
        remember = 'true';
        return remember;
        break;
     }

  });
});

*/
