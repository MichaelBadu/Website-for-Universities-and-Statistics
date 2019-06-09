
//function that searches through the table when search button is pressed
  function search(){
    var search_item = document.getElementById("mysearchbar").value.toLowerCase(); //get the search item and convert to small letters
    var the_table = document.getElementById("schools"); //first grab the table we want
    var rows = the_table.getElementsByTagName("tr");//then we grab the rows


    //looping through the rows to find match for the search query
    for (var i=0; i< rows.length; i++){
      current_row = rows[i].getElementsByTagName("td"); //get me the first element in the row
        if (current_row[0]) {
          if(current_row[0].innerHTML.toLowerCase().indexOf(search_item) > -1){
            document.getElementById("searchresults").innerHTML = "\""+current_row[0].innerHTML+ "\" website link is \""+ current_row[1].innerHTML +"\" A University in Mauritius";
            return;
          }
      }
    }
    document.getElementById("searchresults").innerHTML = "Could not find \""+search_item + "\" in the table";
  }




//this is the live filter function that helps to eliminate rows while typing the search item
  function shortlist(){
    var search_item = document.getElementById("mysearchbar").value.toLowerCase();
    var the_table = document.getElementById("schools");
    var rows = the_table.getElementsByTagName("tr")

    //looping through the table to turn off display for rows that do not match search query
    for (var i=0; i< rows.length; i++){
      current_row = rows[i].getElementsByTagName("td"); //get me the first element in the row

      if(current_row[0]){//checking if row exists

        if(current_row[0].innerHTML.toLowerCase().indexOf(search_item) > -1){
          rows[i].style.display = "";
        }else{
          rows[i].style.display = "none";
        }

      }
    }
  }


