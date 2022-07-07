$(document).ready(function(){

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // top sale owl carousel          
    $("#top-sale .owl-carousel").owlCarousel({  // pass peramitar to it 
        loop: true,
        nav: true, //for navigation button 
        dots: false,
        responsive : {   // to make responsive 
            0: {  //if window  view port has > 0
                items: 1
            },
            600: {          //if window has >600 plex
                items: 3
            },
            1000 : {     //if window has >1000 plex
                items: 5
            }
        }
    });

      // isotope filter
      var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function(){ //button group aitai catch korbe 
        var filterValue = $(this).attr('data-filter');// aita catch kora data ke filter kore return korbe 
        $grid.isotope({ filter: filterValue});
    })


    // new phones owl carousel
    $("#new-phones .owl-carousel").owlCarousel({  // pass peramitar to it 
        loop: true,
        nav: false, //for navigation button off
        dots: true,
        responsive : {   // to make responsive 
            0: {  //if window  view port has > 0
                items: 1
            },
            600: {          //if window has >600 plex
                items: 3
            },
            1000 : {     //if window has >1000 plex
                items: 5
            }
        }
    });


        // blogs owl carousel
        $("#blogs .owl-carousel").owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            responsive : {
                0: {
                    items: 1
                },
                600: {
                    items: 3 // when view port is grater thn 600 thn we show 3 items  
                }
            }
        })
    
          // product qty section
    let $qty_up = $(".qty .qty-up");  // called (.)class qty-up 
    let $qty_down = $(".qty .qty-down"); //  called (.)class qty-down
    // let $input = $(".qty .qty_input");
     // aita use korb nah karon cart ar page a amra 2 ta product ar jonno quantity barai komai .. ajonno same kaj 2 bar kora lagbe .. tai amra funtion ar mto perameter pass korbo 

    // click on qty up button
    $qty_up.click(function(e){  // click is jquery method , when click on it it exicute function as a peramiter e 
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`); // jkn cart ar 2 ta product ar jonno call korbo tkn data-id= pro1 ar jonno 1 num ta barabe r data-id=pro2 dile 2 num ta barabe  
        if($input.val() >= 1 && $input.val() <= 9){ // if input >=1 and input <=9 , val() pick the valuse from input 
            $input.val(function(i, oldval){ // update input box quantity , pass (i , oldval) as a argument i = current index , oldval =current value in the box 
                return ++oldval; // increase value of input text box 
            });
        }
    });

       // click on qty down button
       $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
            if($input.val() > 1 && $input.val() <= 10){
            $input.val(function(i, oldval){
                return --oldval; // decrease by 1 
            });
        }
    });
});