let d = new Date();
var month_name = ["Januar","Februar","March","April","May","June", "July", "Aug","Sep","Oct","Nov","December"];
let day = d.getDate();
let month = d.getMonth();
let year = d.getFullYear();
let d_id = [$('#1').html(), $('#2').html(), $('#3').html(), $('#4').html(), $('#5').html(), $('#6').html(), $('#7').html(),
            $('#8').html(), $('#9').html(), $('#10').html(), $('#11').html(), $('#12').html(), $('#13').html(), $('#14').html(),
            $('#15').html(), $('#16').html(), $('#17').html(), $('#18').html(), $('#19').html(), $('#20').html(), $('#21').html()];
let a_id = [$('#1'), $('#2'), $('#3'), $('#4'), $('#5'), $('#6'), $('#7'), $('#8'), $('#9'), $('#10'), $('#11'), $('#12'),
            $('#13'), $('#14'), $('#15'), $('#16'), $('#17'), $('#18'), $('#19'), $('#20'), $('#21')];

let id = parseInt(d_id[day]) - 1;


$(document).ready(function(){
  $('.calendar__month').html(month_name[month]);
  $('.calendar__year').html(year);
    if (day == id) {
      console.log(d_id[day]);
      $(a_id[day -1]).addClass("active-day");
    }
});
