tomb = new Array("ko.jpg", "ollo.jpg", "papir.jpg")
tomb2 = new Array("ko", "ollo", "papir")

win = 0;
lose = 0;
draw = 0;

function picctures(pics) {

  document.getElementById
  random = Math.floor(Math.random() * tomb.length);
  document.getElementById("bot").src = tomb[random];

  bot = tomb2[random];
  player = pics.id;

  if (bot == pics.id) {
    draw++;
    document.getElementById("dönt").innerHTML = "Döntetlenek: " + draw;
    document.getElementById("eredmeny").innerHTML = "Eredmény: Döntetlen";
  }
  else if (pics.id == "ko") {
    if (bot == "ollo") {
      win++;
      document.getElementById("győz").innerHTML = "Győzelmek: " + win;
      document.getElementById("eredmeny").innerHTML = "Eredmény: Nyertél";
    }
    else {
      lose++;
      document.getElementById("vesz").innerHTML = "Vereségek: " + lose;
      document.getElementById("eredmeny").innerHTML = "Eredmény: Vesztettél";
    }
  }
  else if (pics.id == "ollo") {
    if (bot == "ko") {
      lose++;
      document.getElementById("vesz").innerHTML = "Vereségek: " + lose;
      document.getElementById("eredmeny").innerHTML = "Eredmény: Vesztettél";

    }
    else {
      win++;
      document.getElementById("győz").innerHTML = "Győzelmek: " + win;
      document.getElementById("eredmeny").innerHTML = "Eredmény: Nyertél";
    }

  }
  else if (pics.id == "papir") {
    if (bot == "ko") {
      win++;
      document.getElementById("győz").innerHTML = "Győzelmek: " + win;
      document.getElementById("eredmeny").innerHTML = "Eredmény: Nyertél";
    }
    else {
      lose++;
      document.getElementById("vesz").innerHTML = "Vereségek: " + lose;
      document.getElementById("eredmeny").innerHTML = "Eredmény: Vesztettél";

    }
  }
}