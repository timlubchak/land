var tab;
var tabContent;
window.onload = function(){
    tabContent = document.getElementsByClassName('tabContent');
    tab = document.getElementsByClassName('tab');
    hideTabsContent(1);
}

function hideTabsContent(a){
    for(var i = a; i < tabContent.length; i++){
        tabContent[i].classList.remove('show');
        tabContent[i].classList.add('hide');
        tab[i].classList.remove('first');
    }
}

document.getElementById('tabs').onclick = function(event){
    var target = event.target;
    if( target.classList == 'tab'){
        for(var i = 0; i < tab.length; i++){
            if( target == tab[i]){
                showTabsContent(i);
                break;
            }
        }
    }
}

function showTabsContent(b){
    if(tabContent[b].classList.contains('hide')){
        hideTabsContent(0);
        tabContent[b].classList.add('show');
        tabContent[b].classList.remove('hide');
        tab[b].classList.add('first');

    }
}