/* Lab 3 JavaScript File */

function stringExtender(str, length){
    //makes a new string with length multiples of str.
	var temp = "";
	while (temp.length<length){
		temp += str;
	}
	return temp;
}

// recursive function to navigate dom
function recurseDOM(node, depth) {

        var text = document.getElementById("info"); 
        //write the tagname and depth of element to info
        text.innerHTML = text.innerHTML+"\n"+stringExtender("-", depth)+node.nodeName;
        node.addEventListener("click", function(){ alert(this.tagName); });
        depth +=1;
		node = node.firstChild;

        while(node) {
            recurseDOM(node, depth);
            node = node.nextSibling;
        }

    };
//get  html element
var start = document.documentElement;
var level = 0;
recurseDOM(start, level);


//clone and append favorite quote to body
var clone = document.getElementsByClassName("quote")[1].cloneNode(true);
document.getElementsByTagName("BODY")[0].appendChild(clone);

var divs = document.getElementsByTagName("div");

for(var i = 0; i < divs.length; i++){
  divs[i].addEventListener("mouseover", function(){ this.style.backgroundColor = 'red'; this.style.marginRight = "10px";});
  divs[i].addEventListener("mouseout", function(){ this.style.backgroundColor = 'white'; this.style.marginRight = "auto";});
}