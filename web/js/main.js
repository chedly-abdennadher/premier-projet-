document.getElementsByClassName("supprimer").addEventListener("click",fdanger);
function fdanger()
{alert "voulez-vous supprimer ce profil";
	
}
document.getElementsByClassName("ajout").addEventListener("click",addField);
function addField() {
     var field2 = "<input type='text' name='' value='skills7'/>";
var field1 = "<label for ='skills7'> skills7 </label>"
     document.getElementById('skills6').innerHtml += field1+field2;
}
function validate_input(id)
{var frm=document.forms['form1'];
var patt=/[A-Z]{1}[a-z]*/;
if (frm.elements[id]==="") 
{	console.log("essai encore");
return false;}
else
{if (frm.elements[id].value.match(patt))
{console.log (id);
console.log ("valide");
return true;}
else 
{alert (id)
alert ("invalide");
return false;}
}}
function validate_date (id2,maxdate,mindate)
{var frm=document.forms['form1'];
if (frm.elements[id2].value=="") 
{	alert ("essai encore");
return false;}
else
{if ((frm.elements[id2].value <mindate)||(frm.elements[id2].value>maxdate))
{alert (id2);
alert ("invalide");
return false;}
else 
{alert (id2)
alert ("valide");
return true;}
}}
function validate_email (id)
{var frm=document.forms['form1'];
var patt=/[A-Za-z]{1}[A-Za-z0-9]*@[a-z0-9]*.[a-z0-9]*/;
if (frm.elements[id]==="") 
{	alert ("essai encore");
return false;}
else
{if (frm.elements[id].value.match(patt))
{alert (id);
alert ("valide");
return true;
}
else 
{alert (id)
alert ("invalide");
return false;}
}}
var nom_id ="nom";
var prenom_id="prenom";
var date_bac_id ="datebac";
var datenaissance="datenaissance";
var dateaccomplishement1="dateaccomplishement1";
var mindate="1945-01-01";
var maxdate="2004-12-12";
var email="adresseemail";
function validate_form ()
{v1=validate_input(nom_id);
v2=validate_input(prenom_id);
v3=validate_date(date_bac_id,maxdate,mindate);

v4=validate_date(datenaissance,maxdate,mindate);
mindate="1950-01-01";
maxdate="2019-12-12";
v5=validate_email(email);
if ((v1)&&(v2)&&(v3)&&(v4)&&(v5)) 
return true;
else
return false;
}
