window.onload = function () {
  this.displayCycle('cycle-1');
  this.changePage('change');
  this.changeLanguage('khmer');

}



function changeLanguage(id) {
  let languages = Array.from(document.getElementsByTagName('language'));
  languages.forEach(language => {
    language.id === id ? language.style.display = '' : language.style.display = 'none';
  });
}



function changePage(id) {
  let titles = Array.from(document.getElementsByTagName('page'));
  titles.forEach((title) => {
    title.id === id ? title.style.display = '' : title.style.display = 'none';
  });
}



function displayCycle(id) {
  let cycles = Array.from(document.getElementsByTagName('cycle'));
  cycles.forEach((el) => {
    el.id === id ? el.style.display = '' : el.style.display = 'none';

  })
  if (document.getElementById('cycle-1Btn')) {
    document.getElementById('cycle-1Btn').classList.remove('active');
  }
  
  if (document.getElementById('cycle-1Btn-kh')) {
    document.getElementById('cycle-1Btn-kh').classList.remove('active');
  }
 
  if (document.getElementById('cycle-2Btn')) {
    document.getElementById('cycle-2Btn').classList.remove('active');
  }

  if (document.getElementById('cycle-2Btn-kh')) {
    document.getElementById('cycle-2Btn-kh').classList.remove('active');
  }

  if (document.getElementById(`${id}Btn`)) {
    document.getElementById(`${id}Btn`).classList.add('active');
  }

  if (document.getElementById(`${id}Btn-kh`)) {
    document.getElementById(`${id}Btn-kh`).classList.add('active');
  }
 
}


