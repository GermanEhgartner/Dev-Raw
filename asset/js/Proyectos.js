var text = {
  "title": "UI Developer y Application Developer en Argentina || German Ehgartner",
  "title-secondary": "HANDLEBARS BAJADA",
  proyecto: [
{ "cliente"  : "cliente1", "desarrollo" : "Front End", "linkss" : "#", "fecha" : "15/06/15", "img" : "asset/thumb/thumb.jpg","width":"6"},
{ "cliente"  : "cliente2", "desarrollo" : "Front End/ Backend", "linkss" : "#", "fecha" : "15/06/15", "img" : "asset/thumb/thumb1.jpg","width":"6"},
{ "cliente"  : "cliente3", "desarrollo" : "Front End/ Backend", "linkss" : "#", "fecha" : "15/06/15", "img" : "asset/thumb/thumb2.jpg","width":"8"},
{ "cliente"  : "cliente4", "desarrollo" : "Front End/ Backend", "linkss" : "#", "fecha" : "15/06/15", "img" : "asset/thumb/thumb3.jpg","width":"4"},
{ "cliente"  : "cliente5", "desarrollo" : "Front End/ Backend", "linkss" : "#", "fecha" : "15/06/15", "img" : "asset/thumb/thumb4.jpg","width":"6"},
{ "cliente"  : "cliente6", "desarrollo" : "Front End/ Backend", "linkss" : "#", "fecha" : "15/06/15", "img" : "asset/thumb/thumb5.jpg","width":"6"},
{ "cliente"  : "cliente7", "desarrollo" : "Front End/ Backend", "linkss" : "#", "fecha" : "15/06/15", "img" : "asset/thumb/thumb6.jpg","width":"3"},
{ "cliente"  : "cliente8", "desarrollo" : "Front End/ Backend", "linkss" : "#", "fecha" : "15/06/15", "img" : "asset/thumb/thumb7.jpg","width":"3"},
{ "cliente"  : "cliente9", "desarrollo" : "Front End/ Backend", "linkss" : "#", "fecha" : "15/06/15", "img" : "asset/thumb/thumb8.jpg","width":"6"}],
  
  "text-footer": "Copyright © Your Website 2014"
};
//PARAMETROS PARA REMPLAZAR
var template = Handlebars.compile( $('#home').html() );


//EJECUCCION
$('#home').html(template(text));