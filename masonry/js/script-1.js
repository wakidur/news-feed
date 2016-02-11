$(function(){
     
    $.ajax({
        url: 'data/data.json' ,
        dataType: 'json',
        method: "GET",
        success: function ( response ) {
            var source = $("#hb-news-feet").html(),
                template = Handlebars.compile( source ); 
               $("#masonary").append(template(response) );
               $('#masonary').masonry({
               itemSelector: '.size22',
                columnWidth: '.grid-sizer',
                 gutter: 10
            });
        },
        error : function(){
            console.log("There are some error");
        },
        complete:function(){
           console.log("Good Job you done you job well");
        }
    });
    var inputFiels = document.getElementById("shortSearchList");
        var awesompleteCall = new Awesomplete( inputFiels , {
            minChars: 1,
            maxItems : 5,
            atutoFirst : true
        });
    awesompleteCall.list = ["World", "NEWS " , "Russia", "WEATHER ", "SPORTS ","ENTERTAINMENT ", "SPORTS","MONEY","plugings","min height", "example","HEALTH & FITNESS","FOOD & DRINK","TRAVEL","Headlines","US","World","Crime","Opinion","Local","Technology","Offbeat","Weekend","Video","","","","","","","","","","","","","","","","","",];
});