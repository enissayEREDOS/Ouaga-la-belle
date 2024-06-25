document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];

    // Fonction pour afficher le modal
    function displayModal(image, title, description) {
        // Logique pour remplir le modal avec les données
        modal.style.display = "block";
    }

    // Gestion de l'événement de fermeture du modal
    span.onclick = function () {
        modal.style.display = "none";
    };

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});
