/* returns a function, that, as long as it continues to be invoked, will not
be triggered. The function will be called after it stops bieng called for
N milliseconds. If 'immediat' is passed, trigger the funtion on the
leading edge, instead of the trailing. 
*/
function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this,
      args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

let $registrationForm = $("#registration-form");
let $username = $registrationForm.find('input[name="username"]');
let $email = $registrationForm.find('input[name="email"]');

// Fonction pour faire une requête Ajax pour tester si l'utilisateur existe
function checkUser() {
  // Génére les données GET
  let getStr = "?username=" + $username.val() + "&email=" + $email.val();
  $.getJSON("../src/ajax/checkUser.php" + getStr, function(data) {
    console.log(data);
    // Test si le script PHP retourne une erreur
    if (data.type == "error") {
      $("#ajax-error").html(data.message);
      $("#ajax-error").show();
    } else {
      $("#ajax-error").hide();
    }
  });
}

$username.keyup(debounce(checkUser, 1000));
$emai.keyup(debounce(checkUser, 1000));

/*
Connexion en AJAX
Faire un test de connexion d'utilisateur en utilisant AJAX
- créer un script php ajax/login.php qui retourne un résultat en JSON
- ajouter une balise html dans le formulaire de connexion qui va afficher les erreurs
- ne pas oublier d'ajouter un id au formulaire pour le différencier des autres
- on utilisera l'événement submit pour faire la requête ajax
- si la connexion a fonctionné on redirige vers index.php (document.location.href = "index.php";)

*/

$form = $("#login-form");
$form.submit(function() {
  $.ajax({
    method: "POST",
    url: "../src/ajax/login.php",
    dataType: "json",
    data: $form.serialize(),
    success: function(data) {
      if (data.type == "error") {
        $("#ajax-error").html(data.message);
        $("#ajax-error").show();
      } else {
        document.location.href = "index.php";
      }
    }
  });
  return false; // On indique au navigateur de ne pas envoyer le formulaire lui-même
});

$(function() {
  $.getJSON("../src/ajax/destinations.php", function(data) {
    data.forEach(function(dest) {
      console.log(dest);
      let $div = $('<div class="card"></div>');
      $div.append("<h2>" + dest.name + "</h2");

      $("#destinations").append($div);
    });
  });
});

// Vanilla
let xhttp = new XMLHttpRequest();
xhttp.open("GET", "../src/ajax/destinations.php");
xhttp.onload = function() {
  let data = JSON.parse(xhttp.responseText);
  data.forEach(function(dest) {
    let destDiv = document.createElement("div");
    destDiv.innerHTML = "<h2>" + dest.name + "</h2>";

    document.getElementById("destinations").appendChild(destDiv);
  });
};
xhttp.send();
