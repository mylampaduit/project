
document.querySelector('.ham').addEventListener('click',()=>{
  document.querySelector('.bar-top').classList.toggle('change1')
  document.querySelector('.bar-middle').classList.toggle('change2')
  document.querySelector('.bar-bottom').classList.toggle('change3')
  document.querySelector('.sidebar').classList.toggle('show')
})
document.getElementById('close').addEventListener('click',()=>{
  document.getElementById('contact').style="scale:0;"
  
})
document.querySelector('.men').addEventListener('click',()=>{
  document.querySelector('.none').classList.toggle('menShow')
  
})
document.querySelector('.BookNow').addEventListener('click',()=>{
  document.getElementById('contact').style="scale:1;"
})
document.querySelector('.logo').addEventListener('click',()=>{
  document.location.href = 'index.php'
})

