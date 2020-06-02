const express = require("express");
const app = express()
const path = require("path")
const PORT = process.env.PORT || 8800;

app.use(express.static("public"));

//Makes sure everything in the css and css frameworks works rigth
app.use(express.urlencoded({ extended : true}));
app.use(express.json());

//Html routes
require("./routes/htmlRoutes.js")(app,path)

app.listen(PORT,function(){
    console.log("APP listening in "+PORT)
})