const colorRgb = document.querySelector('#rgbTxt');
const colorHex = document.querySelector('#hexTxt');


let newColor;
console.log(newColor);
   
const generateRgbColor = () => {
    r = Math.floor(Math.random() * 255);
    g = Math.floor(Math.random() * 255);
    b = Math.floor(Math.random() * 255);
    return newColor = [r,g,b];
}

const rgbToHex = () =>{
   r = newColor[0];
   g = newColor[1];
   b = newColor[2];
   return '#' + [r,g,b].map(getHexValueOf).join("");
}

const getHexValueOf = (rgb) =>{ 
   return rgb.toString(16) .toUpperCase().padStart(2, '0');
}

window.addEventListener('keypress', (e)=>{
   if (e.keyCode === 32) {
       colorRgb.textContent = 'rgb('+generateRgbColor()+')';
       colorHex.textContent = rgbToHex(); 
       document.body.style.backgroundColor = rgbToHex();
       // console.log(newColor);
       // console.log(rgbToHex());
   }
})

window.addEventListener('click', (e)=>{
       colorRgb.textContent = 'rgb('+generateRgbColor()+')';
       colorHex.textContent = rgbToHex(); 
       document.body.style.backgroundColor = rgbToHex();
       // console.log(newColor);
       // console.log(rgbToHex());
}) 



 
