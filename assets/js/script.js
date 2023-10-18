var firstTab = document.getElementById('tab-section-first');
var secondTab = document.getElementById('tab-section-second');

firstTab.addEventListener('click', function(){
    
    var firstDiv = document.getElementById('first-tab-items');
    var secondDiv = document.getElementById('second-tab-items');  
   
    // firstTab.classList.remove('border-white text-white')
    // firstTab.add('border-warning text-warning');
    // secondTab.classList.remove('border-warning text-warning')
    // secondTab.classList.add('border-white text-white');
    firstDiv.style.display = "block";
    secondDiv.style.display = "none";
    
})

secondTab.addEventListener('click', function(){
    
    var firstDiv = document.getElementById('first-tab-items');
    var secondDiv = document.getElementById('second-tab-items');
   
    // secondTab.classList.remove('border-warning text-warning')
    // secondTab.add('border-white text-white');
    // firstTab.classList.remove('border-white text-white')
    // firstTab.add('border-warning text-warning');
    secondDiv.style.display = "block";
    firstDiv.style.display = "none";
})