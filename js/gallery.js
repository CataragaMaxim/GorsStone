const backDrop = document.querySelector('.backdrop');
const fullImg = document.querySelector('.full_img');
const mainImg = document.querySelector('.main-img img');
const prevImg = document.querySelector('#go-back');
const nextImg = document.querySelector('#go-next');
const divInt = document.querySelectorAll('#gallery .int')
const divFas = document.querySelectorAll('#gallery .fas')
const arrAll = document.querySelectorAll('#gallery .gal-img img');
const arrInt = document.querySelectorAll('#gallery .int img');
const arrFas = document.querySelectorAll('#gallery .fas img');
const btnCat = document.querySelectorAll('.btn--category div');


let arr = [...arrAll];
let arrNum = parseInt(mainImg.alt);
const arrFirst = 0;
prevImg.double = false;
nextImg.double = true;


function allImg() {
  for (let i = 0; i < arrAll.length; i++ ) {
    arrAll[i].alt = `${i}`;
  }
  for (let i = 0; i < arrInt.length; i++ ) {
    divInt[i].hidden = false;
  }
  for (let i = 0; i < arrFas.length; i++ ) {
    divFas[i].hidden = false;
  }

  while (arr.length) {
    arr.pop();
  }
  arr.push(...arrAll);

  window.scroll(0,0);

  btnCat[0].classList.add('active');
  btnCat[1].classList.remove('active');
  btnCat[2].classList.remove('active');
}

function intImg() {
  for (let i = 0; i < arrInt.length; i++ ) {
    divInt[i].hidden = false;
    arrInt[i].alt = `${i}`;
  }
  for (let i = 0; i < arrFas.length; i++ ) {
    divFas[i].hidden = true;
  }
  
  while (arr.length) {
    arr.pop();
  }
  arr.push(...arrInt);

  window.scroll(0,0);

  btnCat[0].classList.remove('active');
  btnCat[1].classList.add('active');
  btnCat[2].classList.remove('active');
}

function fasImg() {
  for (let i = 0; i < arrInt.length; i++ ) {
    divInt[i].hidden = true;
  }
  for (let i = 0; i < arrFas.length; i++ ) {
    divFas[i].hidden = false;
    arrFas[i].alt = `${i}`;
  }
  
  while (arr.length) {
    arr.pop();
  }
  arr.push(...arrFas);

  window.scroll(0,0);

  btnCat[0].classList.remove('active');
  btnCat[1].classList.remove('active');
  btnCat[2].classList.add('active');
}

function openImg(imgs) {
  mainImg.src = imgs.src;
  mainImg.alt = imgs.alt;
  arrNum = parseInt(mainImg.alt);
  
  fullImg.classList.add('open');
  backDrop.classList.add('open');
}

function removeImg() {
  fullImg.classList.remove('open');
  backDrop.classList.remove('open');
  prevImg.double = false;
  nextImg.double = true;
}

function goNextImg() {
  if (nextImg.double == true) {
    arrNum = arrNum + 1;
  }
  nextImg.double = false;
  prevImg.double = true;
  if (arrNum !== arr.length) {
    return mainImg.src = arr[arrNum++].src;
  } else {
    return;
  }
}

function goPrevImg() {
  if (prevImg.double == true) {
    arrNum = arrNum - 1;
  }
  prevImg.double = false;
  nextImg.double = true;
  if (arrNum !== arrFirst) {
    return mainImg.src = arr[--arrNum].src;
  }
}

if (window.innerWidth < 640) {
  fullImg.style.display = 'none';
}