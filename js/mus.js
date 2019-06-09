
var createChart = function(canvasDivId, apiUrl, countryName, title){
   
var request ='';
if(window.XMLHttpRequest){
   request = new XMLHttpRequest();
   
}
else{
   request = new ActiveXObject("Microsoft, XMLHTTP");
}
request.open('GET', apiUrl,true);
//request.open('GET', 'https://cors-anywhere.herokuapp.com/http://api.worldbank.org/v2/countries/GBR/indicators/SE.TER.ENRL?date=2009:2015',true);
request.onload = function(){
   if((request.readyState=== 4) && (request.status===200)){
       var items=[], date=[];
       for(var i=0; i<7; i++){
           var responsePercentage= request.responseXML.getElementsByTagName('wb:value')[i].innerHTML;//parseFloat(request.responseXML.getElementsByTagName('wb:value')[i].firstChild.nodeValue);
           var responseDate = parseFloat(request.responseXML.getElementsByTagName('wb:date')[i].firstChild.nodeValue);
           items.push(responsePercentage);
           date.push(responseDate)
       }
       console.log(items);
       console.log(date);
       
       
       
       var myChart = document.getElementById(canvasDivId).getContext('2d');            
           var pupulateChart = new Chart(myChart,{
               type: 'line',
               data:{
                   labels:[date[6], date[5],date[4],date[3],date[2],date[1],date[0]],
                   datasets:[{
                       label: countryName,
                       data:[items [6], items[5],items[4],items[3],items[2],items[1],items[0]],
                       backgroundColor:[
                                          
                                          'rgba(255, 206, 86, 0.2)',
                                          'rgba(255, 206, 86, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            ],

                borderColor: [
                   
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',

  ],
                       borderWidth: 3,
                       hoverBorderColor:'#000'
                   }]
                   
               },
               options:{
                   title:{
                       display:true,
                       text: title +' in '+countryName,
                       fontSize:20
                   },
                   
                   
                   layout:{
                       padding:{
                           left:50,
                           right:0,
                           bottom:0,
                           top:0
                       }
                   },
                   tooltips:{
                       enabled:true
                   }
               }
           });
       }
   }
request.send();
 }

createChart('myChart', 'https://cors-anywhere.herokuapp.com/http://api.worldbank.org/v2/countries/MUS/indicators/SE.TER.ENRL?date=2009:2015', 'Mauritius','Total Enrolment');  
