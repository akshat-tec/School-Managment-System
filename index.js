//Varlables declarations
const signIn = document.getElementById('signIn');
const sign = document.getElementById('sign');
const close = document.getElementById('close');

// Funct Called
sign.classList.add('hide');

// Events Listeners 
signIn.addEventListener('click', handleUp);
close.addEventListener('click',function ()  {
    sign.classList.add('hide');
    // console.log('you cloose it');
})


// Functions Denoters
function handleUp(e) {
    // console.log("you clicked the button");
    sign.classList.remove('hide');
  
}