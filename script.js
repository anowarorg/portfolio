function getTodayDate() {
    var currentDate = new Date();
    var day = currentDate.getDate();
    var month = currentDate.getMonth() + 1;
    var year = currentDate.getFullYear();
  
    
    var formattedDate = year + '-' + (month < 10 ? '0' : '') + month + '-' + (day < 10 ? '0' : '') + day;
  
    return formattedDate;

}

function form(){
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('myForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from actually submitting

        // Change the URL to your desired hyperlink
        window.location.href = 'https://www.google.com';
    });
});

}
  
let date = prompt(getTodayDate());

console.log(getTodayDate());

function pattern()
{
  
let n = prompt();
let string = "";

for(let i = 0; i < n; i++) { 
  for(let j = 0; j < i; j++) { 
    string += "*";
  }

  string += "\n";
}

console.log(string);
}


