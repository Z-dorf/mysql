document.querySelector('form').addEventListener('submit', function(event){
    event.preventDefault();
    data = new FormData();





    var paramAjax = {
        method : "POST",
        body : data
    };

    fetch('result.php', paramAjax).then(function (response){
        return response.text();
    }).then(function (response){
        console.log(response);

        document.getElementById("resultat").innerHTML=response;
    })
})