

var numForm;



function AfficherFormation(idActivite)
{
    $.ajax(
    {
        type:"get",
        url:"index.php/CtrlActivites/AfficherFormations",
        data:"idActivite="+idActivite,
        success:function(data)
        {
            $('#divFormations').empty();
            $('#divAgents').empty();
            $('#divFormations').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}

function AfficherAgents(idFormation)
{
    numForm = idFormation;
    $.ajax(
    {
        type:"get",
        url:"index.php/CtrlActivites/AfficherAgents",
        data:"idFormation="+idFormation,
        success:function(data)
        {
            $('#divAgents').empty();
            $('#divAgents').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
  function ValiderPresences()
  {
      //Il faut récupérer les codeAgents

      var tabAgents = Array();
      var tabPresences = Array();

      $('input[type=checkbox]').each
      (
          function()
          {
              tabAgents.push($(this).val());

              tabPresences.push($(this).is(":checked"));
          }
      );
      

      //Il faut récupérer les présences / Absences

      //En Ajax, appel d'une méthode du controller
      //en lui passant les paramètres nécessaires : les 2 tableaux + numéro de la formation
      
      $.ajax
      (
          {
              type:"get",
              url:"index.php/CtrlActivites/ValiderLesPresence",
              data:"tabAgt="+tabAgents+"&tabPres="+tabPresences+"&numForm="+numForm,
              success: function()
              {
                alert("OK !")
              },
              error: function()
              {
                  alert("Erreur sur la mise à jour des présences");
              }
          }
      )
    }  
