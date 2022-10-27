console.log('===============================');
console.log('=    WebDesign By Wallock     =');
console.log('===============================');


wow = new WOW({
   animateClass: 'animated',
   offset: 100,
   callback: function(box) {
      //console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
   }
});
wow.init();



function alertbox(alertbox, alerttitle, alertdetail) {
   if (alertbox == "1") {
     //swal("" + alertdetail + "", "" + alerttitle + "", "success");
     iziToast.success({
      title: alerttitle,
      theme: 'light',
      position: 'topRight',
      message: alertdetail,
  });
   } else if (alertbox == "2") {
     //swal("" + alertdetail + "", "" + alerttitle + "", "info");
     iziToast.info({
      title: alerttitle,
      theme: 'light',
      position: 'topRight',
      message: alertdetail,
  });
   } else if (alertbox == "3") {
     //swal("" + alertdetail + "", "" + alerttitle + "", "error");
     iziToast.error({
      title: alerttitle,
      theme: 'light',
      position: 'topRight',
      message: alertdetail,
  });
   } else if (alertbox == "4") {
     //swal("" + alertdetail + "", "" + alerttitle + "", "success");
     iziToast.warning({
      title: alerttitle,
      theme: 'light',
      position: 'topRight',
      message: alertdetail,
  });
     //setTimeout("location.href = 'index.php';", 3000);
   }
 }




