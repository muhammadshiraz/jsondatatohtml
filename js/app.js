$(function display() {
   $.getJSON('json/emp.json', function(data) {
       $.each(data.employmentData, function(i, f) {
          var tblRow = "<tr>" + "<td>" + f.id + "</td>" +
           "<td>" + f.name + "</td>" + "<td>" + '<img src= "' + f.thumbnailUrl + '" />' + "</td>" + "<td>" + f.price + "</td>" + "</tr>"
           $(tblRow).appendTo("#employee_table tbody");
     });
   });
});

