$(document).ready( function(){
    $('#menu').click( function(event){        
        event.stopPropagation();        
        $('#menu-list').toggle();        
    });    
	$(document).click( function(){
        $('#menu-list').hide();
    });

    $('#tienda').click( function(event){        
        event.stopPropagation();        
        $('#tiendas-list').toggle();        
    });    
	$(document).click( function(){
        $('#tiendas-list').hide();
    });
    var wh=$(window).innerHeight();
	if (wh<540) {
		$('#submenu').hide();
	} else {
		$('#submenu').show();
	}
	
	$(window).resize(function(){
		wh=$(window).innerHeight();
		if (wh<540) {
			$('#submenu').hide();
		} else {
			$('#submenu').show();	
		}
	});
	$('div#thedialog').dialog({
		autoOpen: false,
		dialogClass: "no-close",
		buttons: [
    		{
      			text: "Volver",
                class: "volver-btn",
      			click: function() {
        			$( this ).dialog( "close" );
      			}
    		},
    		{
    			text: "Enviar",
                click: function() {
                    window.location.href="finalizado/"
                }
    		}
  		]
	})
    $(".volver-btn").before("<p class='confirmacion'>¿Está seguro?</p>");
	$('.footer-button').click(function(){
		$('div#thedialog').dialog('open');
	});
});

// hide #anew when height changes
        document.write('<style>#anew{visibility:hidden}@media(min-height:'+ ($( window ).height() - 10) + 'px){#anew{visibility:visible}}</style>' );
        document.write('<style>footer{visibility:hidden}@media(min-height:'+ ($( window ).height() - 10) + 'px){footer{visibility:visible}}</style>' );