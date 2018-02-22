$(".redes-btn").click(function () {
   type = $(this).attr('data-type');
   if (type.length) {
     switch (type) {
       case 'twitter':
         window.open('https://twitter.com/intent/tweet?text=' + sharing_name + ' ' + encodeURIComponent(sharing_url), 'sharertwt', 'toolbar=0,status=0,width=640,height=445');
         break;
       case 'facebook':
         window.open('http://www.facebook.com/sharer.php?u=' + sharing_url, 'sharer', 'toolbar=0,status=0,width=660,height=445');
         break;
       case 'google':
         window.open('https://plus.google.com/share?url=' + sharing_url, 'sharer', 'toolbar=0,status=0,width=660,height=445');
         break;
      case 'linkedin':
         window.open('http://www.linkedin.com/shareArticle?url=' + sharing_url, 'sharer', 'toolbar=0,status=0,width=660,height=445');
         break;
       case 'pinterest':
         var img_url = sharing_img;
         if (typeof $("#bigpic").attr('src') != 'undefined' && $("#bigpic").attr('src') != '') {
           img_url = $("#bigpic").attr('src');
         }
         window.open('http://www.pinterest.com/pin/create/button/?media=' + img_url + '&url=' + sharing_url, 'sharerpinterest', 'toolbar=0,status=0,width=660,height=445');
         break;
       case 'whatsapp':
         var message = encodeURIComponent('Te invitos a que conozcas drarturoflores.com') + " - " + encodeURIComponent(sharing_url);
         var whatsapp_url = "whatsapp://send?text=" + message;
         //window.location.href = whatsapp_url;
         window.open(whatsapp_url, 'sharer', 'toolbar=0,status=0,width=660,height=445');
         break;
     }
   }
});

