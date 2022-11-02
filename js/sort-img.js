  const allImg = document.getElementById('img-all-btn');
  const intImg = document.getElementById('img-in-btn');
  const fasImg = document.getElementById('img-fa-btn');
  
  const testClasses = document.getElementsByClassName('highslide');
  
  allImg.active = true;
  intImg.active = false;
  fasImg.active = false;

  function allShow() {
    intImg.active = false;
    fasImg.active = false;
    allImg.active = true;

    buttonActive();
    sortAll();
    topFunction();
  }

  function intShow() {
    intImg.active = true;
    fasImg.active = false;
    allImg.active = false;

    buttonActive();
    sortInt();
    topFunction();
  }

  function fasShow() {
    allImg.active = false;
    intImg.active = false;
    fasImg.active = true;

    buttonActive();
    sortFas();
    topFunction();
  }

  function buttonActive() {
    if ((allImg.active === true)) {
        allImg.style.backgroundColor = "#5d595b";
        allImg.style.borderColor = "white";
        allImg.style.color = "white";

        intImg.style.backgroundColor = "white";
        intImg.style.borderColor = "gray";
        intImg.style.color = "black";
        fasImg.style.backgroundColor = "white";
        fasImg.style.borderColor = "gray";
        fasImg.style.color = "black";
    } else if ((intImg.active === true)) {
        intImg.style.backgroundColor = "#5d595b";
        intImg.style.borderColor = "white";
        intImg.style.color = "white";

        allImg.style.backgroundColor = "white";
        allImg.style.borderColor = "gray";
        allImg.style.color = "black";
        fasImg.style.backgroundColor = "white";
        fasImg.style.borderColor = "gray";
        fasImg.style.color = "black";
    } else if ((fasImg.active === true)) {
        fasImg.style.backgroundColor = "#5d595b";
        fasImg.style.borderColor = "white";
        fasImg.style.color = "white";

        allImg.style.backgroundColor = "white";
        allImg.style.borderColor = "gray";
        allImg.style.color = "black";
        intImg.style.backgroundColor = "white";
        intImg.style.borderColor = "gray";
        intImg.style.color = "black";
    }
  }

  function sortAll() {
    for (let m = 1; m < 41; m++) {
      document.getElementById('f' + m).hidden = false;
    }
    for (let n = 1; n < 35; n++) {
      document.getElementById('i' + n).hidden = false;
    }

    for (let m = 1; m < 41; m++) {
      document.getElementById('pf' + m).hidden = false;
    }
    for (let n = 1; n < 35; n++) {
      document.getElementById('pi' + n).hidden = false;
    }
  }

  function sortInt() {
    for (let m = 1; m < 41; m++) {
      document.getElementById('f' + m).hidden = true;
    }
    for (let n = 1; n < 35; n++) {
      document.getElementById('i' + n).hidden = false;
    }

    for (let m = 1; m < 41; m++) {
      document.getElementById('pf' + m).hidden = true;
    }
    for (let n = 1; n < 35; n++) {
      document.getElementById('pi' + n).hidden = false;
    }
  }

  function sortFas() {
    for (let n = 1; n < 35; n++) {
      document.getElementById('i' + n).hidden = true
    }
    for (let m = 1; m < 41; m++) {
      document.getElementById('f' + m).hidden = false;
    }

    for (let n = 1; n < 35; n++) {
      document.getElementById('pi' + n).hidden = true
    }
    for (let m = 1; m < 41; m++) {
      document.getElementById('pf' + m).hidden = false;
    }
  }

  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

  buttonActive();

  allImg.addEventListener('click', allShow);
  intImg.addEventListener('click', intShow);
  fasImg.addEventListener('click', fasShow);