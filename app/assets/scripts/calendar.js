let d = new Date();
var month_name = ["Januar","Februar","March","April","May","June", "July", "Aug","Sep","Oct","Nov","December"];
let day = d.getDate();
let month = d.getMonth();
let year = d.getFullYear();
let d_id = [$('#1'), $('#2'), $('#3'), $('#4'), $('#5'), $('#6'), $('#7'), $('#8'), $('#9'), $('#10'), $('#11'), $('#12'), $('#13'), $('#14'), $('#15'), $('#16'), $('#17'), $('#18'), $('#19'), $('#20'), $('#21')];
console.log(d_id[day]);

$(document).ready(function(){
  $('.calendar__month').html(month_name[month]);
  $('.calendar__year').html(year);
    if (day == day) {
      $('#1').addClass("active-day");
    }
});
