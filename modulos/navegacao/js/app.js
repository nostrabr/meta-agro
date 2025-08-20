// JavaScript para o módulo navegacao

var open = false;
function menu(){
    if(open){
        document.getElementById("menu-mobile").style.cssText = `height: 0vh; transition: .2s;`;
        open = false;
    }else{
        document.getElementById("menu-mobile").style.cssText = `height: 100vh; transition: .2s;`;
        open = true;
    }
}