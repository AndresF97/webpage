const express = require("express");
const app = express()
const path = require("path")


app.use(express.static("public"));

//Makes sure everything in the css and css frameworks works rigth
app.use(express.urlencoded({ extended : true}));
app.use(express.json());

//Html routes
require("../routes/htmlRoutes.js")(app,path)