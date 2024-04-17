//document.addEventListener("DOMContentLoaded", function() {

    const connection = require('./connection');

    

    connection.connect(function(err) {
        if (err) throw err;
        connection.query("SELECT * FROM account", function (err, result) {
          if (err) throw err;
          displayData(result);
          connection.end;
        });
      });



// Function to display data in HTML
function displayData(data) {
    const dataList = document.getElementById("data-list");
  
    // Clear previous data
    dataList.innerHTML = "";
  
    // Loop through the data and create list items
    data.forEach(item => {
      const listItem = document.createElement("li");
      listItem.textContent = `ID: ${item.Acc_ID}, Name: ${item.Username}`;
      dataList.appendChild(listItem);
    });
  }

      

//});