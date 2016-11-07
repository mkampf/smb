  $( function() {

    $( "#iso-dialog" ).dialog({
      autoOpen: false,
      height:130,
      width:500
    });
 
    $( ".iso-link" ).on( "click", function() {
      $( "#iso-dialog" ).dialog( "open" );
    });
  } );