window.addEventListener('scroll', reveal);

function reveal(){
  var reveals = document.querySelectorAll('.reveal');

  for(var i = 0; i < reveals.length; i++){

    var windowheight = window.innerHeight;
    var revealtop = reveals[i].getBoundingClientRect().top;
    var revealpoint = 5;

    if(revealtop < windowheight - revealpoint){
      reveals[i].classList.add('active');
    }
    else{
      reveals[i].classList.remove('active');
    }
  }
}
var $input    = document.getElementById('input-file'),
    $fileName = document.getElementById('file-name');
    

$input.addEventListener('change', function(){
  $fileName.textContent = this.value;
});

var $input    = document.getElementById('input-file1'),
    $fileName1 = document.getElementById('file-name1');
    

$input.addEventListener('change', function(){
  $fileName1.textContent = this.value;
});

var $input    = document.getElementById('input-file2'),
    $fileName2 = document.getElementById('file-name2');
    

$input.addEventListener('change', function(){
  $fileName2.textContent = this.value;
});

var $input    = document.getElementById('input-file3'),
    $fileName3 = document.getElementById('file-name3');
    

$input.addEventListener('change', function(){
  $fileName3.textContent = this.value;
});

var $input    = document.getElementById('input-file4'),
    $fileName4 = document.getElementById('file-name4');
    

$input.addEventListener('change', function(){
  $fileName4.textContent = this.value;
});
var $input    = document.getElementById('input-file5'),
    $fileName5 = document.getElementById('file-name5');
    

$input.addEventListener('change', function(){
  $fileName5.textContent = this.value;
});