$(document).ready(function(){
    $.ajax({
        type: "GET" ,
        url: "xml/csBS.xml" ,
        dataType: "xml" ,
        success: function(xml) {
            console.log("success");
            console.log(xml.getElementsByTagName("req"));
        },
        error: function(){
          console.log("failure");
        }
    });
})

// Append "RSS Title" to #someElement
var button = document.createElement("button");
