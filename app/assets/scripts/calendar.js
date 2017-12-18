// let d = new Date();
// var mon_name = ["Januar","Februar","March","April","May","June", "July", "Aug","Sep","Oct","Nov","December"];
// let day = d.getDate();
// let month = d.getMonth();
// let year = d.getFullYear();
// let d_id = [$('#1').html(), $('#2').html(), $('#3').html(), $('#4').html(),
//             $('#5').html(), $('#6').html(), $('#7').html(), $('#8').html(),
//             $('#9').html(), $('#10').html(), $('#11').html(), $('#12').html(),
//             $('#13').html(), $('#14').html(), $('#15').html(), $('#16').html(),
//             $('#17').html(), $('#18').html(), $('#19').html(), $('#20').html(),
//             $('#21').html(), $('#22').html(), $('#23').html(), $('#24').html(),
//             $('#25').html(), $('#26').html(), $('#27').html(), $('#28').html(),
//             $('#29').html(), $('#30').html(), $('#31').html()];
// let a_id = [$('#1'), $('#2'), $('#3'), $('#4'), $('#5'), $('#6'), $('#7'), $('#8'), $('#9'), $('#10'), $('#11'), $('#12'),
//             $('#13'), $('#14'), $('#15'), $('#16'), $('#17'), $('#18'), $('#19'), $('#20'), $('#21')];
//
// let id = parseInt(d_id[day]) - 2;
//
//
//
// $(document).ready(function(){
//   for (var i = 0; i < id; i++) {
//     let past_id = a_id[i];
//     console.log(a_id[past_id]);
//   $('.calendar__month').html(month_name[month]);
//   $('.calendar__year').html(year);
//       $(a_id[id]).addClass("active-day");
//       $(past_id).addClass("past-days");
// }
// });
//


var getDaysInMonth = (function(){
"user strict";

return function(month, year){
return new Date(year, month, 0).getDate();
};

})();




$(document).ready(function(){

$("table").append("<tr><th>Mo</th><th>Di</th><th>Mi</th><th>Do</th><<th>Fr</th><<th>Sa</th><<th>So</th></tr>");
for (var i = 0; i < getDaysInMonth(12, 2017); i++) {
    $("table").append("<td>" + (i + 1) + "</td");

  if (i == 6 && i == 14) {
    $("table").append("<tr>");
  }
}


  // for (var i = 0; i < ; i++) {
  //   $("table").append("<tr><td>" + i + "</td></tr>")
  // }
});
