    var fon = 1;

function iniciar(){
    contato.style.display = "none";
    novidades.style.display = "none";
}

function loadConteudo(carregar, tirar1, tirar2){
    carregar.style.display = "grid";
    tirar1.style.display = "none";
    tirar2.style.display = "none";
}

function mudarBanner(ind){
    var arrayImg = ["imgs/tesbg1.jpg", "imgs/tesbg2.jpg", "imgs/tesbg3.jpg"];
    var img = document.getElementById("bannerImg");

    if(ind < 0){
        if(fon == 1){
            fon = arrayImg.length;
            img.innerHTML = "<img id='bannerImg' src='"+arrayImg[fon]+"' width='1348px'>";
        }else{
            fon--;
            img.innerHTML = "<img id='bannerImg' src='"+arrayImg[fon]+"' width='1348px'>";
        }
    }else{
        if(fon == arrayImg.length-1){
            fon = 1;
            img.innerHTML = "<img id='bannerImg' src='"+arrayImg[fon]+"' width='1348px'>";
        }else{
            fon++;
            img.innerHTML = "<img id='bannerImg' src='"+arrayImg[fon]+"' width='1348px'>";
        }
    }
}