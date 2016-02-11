(function(){
    $('#masonary').masonry({
        itemSelector: '.size22',
        columnWidth: '.grid-sizer',
        gutter: 10,
        transitionDuration: '0.8s'     
    });
    var inputFiels = document.getElementById("shortSearchList");
    var awesompleteCall = new Awesomplete( inputFiels , {
            minChars: 1,
            maxItems : 5,
            atutoFirst : true
        });
    awesompleteCall.list = ["World", "NEWS " , "Russia", "WEATHER ", "SPORTS ","ENTERTAINMENT ", "SPORTS","MONEY","plugings","min height", "example","HEALTH & FITNESS","FOOD & DRINK","TRAVEL","Headlines","US","World","Crime","Opinion","Local","Technology","Offbeat","Weekend","Video","","","","","","","","","","","","","","","","","",];
})();
