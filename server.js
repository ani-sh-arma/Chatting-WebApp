const http = require("http");
const express = require("express");
const path = require("path");
const fs = require("fs");
var mysql = require("mysql");

const app = express();
const hostname = "127.0.0.1";
const port = 3000;

// Connecting to the database
var conn = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database : "chatting webapp",
});

conn.connect(function (err) {
  if (err) throw err;
  console.log("Connected to the Database!");
});

app.use(express.static(path.join(__dirname, "public")));
app.use(express.urlencoded())

app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname, "./tamplates/index.html"));
});

app.post("/home.pug", (req, res) => {
  let email = req.body.email;
  let password = req.body.password;

  var sql = "INSERT INTO `user information` (`password`, `id`, `email`, `username`) VALUES ('"+password+"', '', '"+email+"', '"+"testUser"+"');";
  conn.query(sql, function (err, result) {
    if (err) throw err;
    console.log("Table created");
  });
  
  const params = { "email": email, "password": password };
  res.render(path.join(__dirname, "./tamplates/home.pug"), params);
});

app.listen(port, () => {
  
  console.log(`Server running at http://${hostname}:${port}/`);
});
