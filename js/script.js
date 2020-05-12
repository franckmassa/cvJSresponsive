// Au chargement de la page
window.onload = function() {
    // On affiche l'onglet projet par défaut
    var defaut = document.querySelector('#tab1');
    // On appelle la fonction showPage pour afficher le contenu de la page projet
    showPage(defaut);
};
//Fonction pour montrer les pages
function showPage(tab) {
    // On stocke toutes les section enfants direct de l'id pages dans une variable page
    var pages = document.querySelectorAll('#pages>section, footer');
    // On stocke tous les spans enfants direct de l'id menu dans une variable tab
    var menu = document.querySelectorAll('#menu>span');

    // Tant que le nombre de section n'atteint pas le nombre 7, on incrémente
    // Pour chaque section dans le tableau i
    for (let i = 0; i < pages.length; i++) {
        // On donne le style: pas d'affichage des pages
        pages[i].style.display = 'none';
    }
    // Tant que le nombre de span n'atteint pas le nombre total, on incrémente
    // Pour chaque span dans le tableau
    for (let j = 0; j < menu.length; j++) {
        // On donne le style au span enfant direct de #menu avec la classe inactive
        // dans la feuille css
        menu[j].className = 'inactive';
    }
    // On affiche la page vs tab
    // On stocke l'id de l'onglet dans la variable page
    // tab ets une variable qui remplace le préfixe de l'id dans html (ex: project)
    var page = document.querySelector('#' + tab.id + '-page');
    page.style.display = '';
    // On donne du style avec la classe active dans la feuille css
    tab.className = 'active';
}