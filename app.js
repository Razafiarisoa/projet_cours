// DATE ET HEURE
  var aujourdhui = new Date(); 
	var annee = aujourdhui.getFullYear(); // retourne le millésime
	var mois =aujourdhui.getMonth()+1; // date.getMonth retourne un entier entre 0 et 11 donc il faut ajouter 1
	var jour = aujourdhui.getDate(); // retourne le jour (1à 31)
	var joursemaine = aujourdhui.getDay() ; // retourne un entier compris entre 0 et 6 (0 pour dimanche)
	var tab_jour=new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

  document.write(' Nous sommes le : ' +  tab_jour[joursemaine] + ' ' + jour + '/' + mois + '/' + annee) ;



/*----------------------------------------------------------*/

function parseDate(str_date) {
    return new Date(Date.parse(str_date));
  }

  function refresh(pays){
    var t = 1000; // rafraîchissement en millisecondes
    setTimeout(function(){showDate(pays)},t);
}

function showDate(pays) {
    if(pays =='OCEANIE')
    dt = new Date().toLocaleString("en-GB", {timeZone: "Australia/Lord_Howe"});
    if(pays =='ASIE')
    dt = new Date().toLocaleString("en-GB", {timeZone: "Asia/Colombo"});
    if(pays =='AMERICA')
    dt = new Date().toLocaleString("en-GB", {timeZone: "America/Chicago"});
    if(pays =='AFRICA')
    dt = new Date().toLocaleString("en-GB", {timeZone: "Africa/Accra"});    
    // else
    if(pays =='EUROPE')
     dt = new Date().toLocaleString("en-GB", {timeZone: "Europe/Paris"});
    
        
    console.log(pays);
    console.log(dt);
    var date= parseDate(dt);
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    var j = date.getDate();
    var i = date.getMonth()+1;
    var y = date.getFullYear();
    if( h < 10 ){ h = '0' + h; }
    if( m < 10 ){ m = '0' + m; }
    if( s < 10 ){ s = '0' + s; }
    var time = h + ':' + m + ':' + s;
    var dt = i+"/"+j +"/"+y;
    document.getElementById('horloge').innerHTML = time;
    document.getElementById('calendrier').innerHTML = dt;    
    refresh(pays);
 }
    
 
 