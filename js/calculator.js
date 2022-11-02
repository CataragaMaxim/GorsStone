  const nrWrite = document.getElementById('number');
  const montCr = document.getElementById('upgCr');
  const calculateBtn = document.getElementById('Btn-calculate');
  const currentResultOutput = document.getElementById('current-result');

  function calculator() {    
   if (nrWrite.value <= 50) {
     if ((nrWrite.value <= 50) && !montCr.checked) {
      result = 205 * nrWrite.value;
     } else if ((nrWrite.value <= 50) && montCr.checked) {
      result = (205 * nrWrite.value) + (220 * nrWrite.value);
     }
   } else if (50 < nrWrite.value <= 100) {
    if ((50 < nrWrite.value <= 100) && !montCr.checked) {
      result = 190 * nrWrite.value;
     } else if ((50 < nrWrite.value <= 100) && montCr.checked) {
      result = (190 * nrWrite.value) + (220 * nrWrite.value);
     }
    }

    if (100 < nrWrite.value) {
      if (100 < nrWrite.value <= 200) {
        if ((100 < nrWrite.value <= 200) && !montCr.checked) {
          result = 185 * nrWrite.value;
         } else if ((100 < nrWrite.value <= 200) && montCr.checked) {
          result = (185 * nrWrite.value) + (220 * nrWrite.value);
         }
       }
      }
      if (200 < nrWrite.value) {
        if (200 < nrWrite.value <= 250) {
          if ((200 < nrWrite.value <= 250) && !montCr.checked) {
            result = 180 * nrWrite.value;
           } else if ((200 < nrWrite.value <= 250) && montCr.checked) {
            result = (180 * nrWrite.value) + (220 * nrWrite.value);
           }
         }
      }
      if (251 <= nrWrite.value) {
        if ((250 < nrWrite.value) && !montCr.checked) {
          result = 175 * nrWrite.value;
         } else if ((250 < nrWrite.value) && montCr.checked) {
          result = (175 * nrWrite.value) + (220 * nrWrite.value);
        }
      }
    let currentResult = parseInt(result);
    currentResultOutput.textContent = currentResult;
    // if (nrWrite.value <= 0 || nrWrite = '') {
    //   currentResultOutput.textContent = 'Skotina nika nu a scris';      
    // }
  }

  document.onkeydown=key;
function key()
{
 window.status=event.keyCode;
 if(event.keyCode==13)document.getElementById("Btn-calculate").click();;
}


  calculateBtn.addEventListener('click', calculator);
  calculateBtn.addEventListener(key, calculator);
