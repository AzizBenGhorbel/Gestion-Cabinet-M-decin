function uniquementLettres(x)
{
    x=x.toUpperCase()
    i=0
    while (x.charAt(i)>="A" && x.charAt(i)<="Z" && i<x.length) 
                i++
    return i == x.length
}
function uniquemenChiffres(x)
{ i=0
    while (x.charAt(i)>="0" && x.charAt(i)<="9" && i<x.length) 
                i++
    return i == x.length
}

function verif1()
{   
    matricule = document.getElementById("mat").value   
    nom = document.getElementById("n").value         
    prenom = document.getElementById("p").value   
    //  compléter la suite de cette fonction ....
    if (!uniquemenChiffres(matricule) || matricule.length != 4){alert("matricule invalide !");return false}
    if ( nom == "" || !uniquementLettres(nom)){alert("saisir le Nom !");return false}
    if (prenom == "" || !uniquementLettres(prenom)){alert("saisir le prenom !");return false}
 }
 
 function verif2()
{   //  compléter la suite de cette fonction ....
    mat=document.getElementById("mat").value;
    d=document.getElementById("d").value;     
    prdv=document.getElementById("prdv").value;   
    h=document.getElementById("h").value;
    if (!uniquemenChiffres(mat) || mat.length != 4){alert("matricule invalide !");return false}
    if (d==""){alert("detail doit etre non vide");return false}
    if (!uniquemenChiffres(prdv) || Number(prdv)==0){alert("verifier le champ provhain rdv");return false}
    
}