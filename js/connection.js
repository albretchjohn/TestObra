// db.js
const mysql = require('mysql');

// Create connection
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: "",
  database: 'obra'
});

// Connect to MySQL




module.exports = connection;
