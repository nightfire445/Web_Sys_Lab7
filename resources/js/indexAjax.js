function dotooltip(element){
  //from Jquery UI
    $(this).tooltip();
   
    $(this).tooltip('option', 'position', { my: 'left+15 bottom', at: 'right center' } );

  }



  function buildRootChild(typeString){
    //so we dont add new sub element to nav if there is already one, there probably exists a more efficent way to do this but it remains elusive.
    $('.sub').remove();
 
    var ajaxRequest = new XMLHttpRequest();
   $.getJSON("resources/json/index.json" , function(json){
    //build the sub elements of the Type in nav
    var navChildElementsString= "<div class = 'sub' onmouseover = dotooltip(this)  onmouseleave = $(this).remove()>";
   
    var count =1;

    $.each(json[typeString], function(index,value){
  
      navChildElementsString += "<a class = 'file' title='"+ value.description + "' href = './content/" +  typeString + "/" + value.type +count + "/" + value.filename + "."+value.extension + "'>" + value.filename +"</a>"
       count +=1;

   });
    navChildElementsString+= "</div>";
      
   $("nav").append(navChildElementsString);
  });

  }

   function loadMenu() {

   var ajaxRequest = new XMLHttpRequest();
   console.log(ajaxRequest);
    
   $.getJSON("resources/json/index.json" , function(json){
    //build elements of each Type in nav

    var navRootElementsString= "<div class = nava>";
    $.each(json, function(index,value){
      var indexString = String(index);
      console.log(indexString);
      navRootElementsString += "<a class = 'root " + indexString+ "' onmouseenter = buildRootChild('" + indexString +"') href = './content/" +  indexString + "'>" + indexString +"</a>"

   });
    navRootElementsString += "</div>"
      $("nav").append(navRootElementsString);
      
  })
   .error( function(d, textStatus, error) {
        console.log("getJSON failed, status: " + textStatus + ", error: "+ error);
    });
 
}

$(document).ready(loadMenu());