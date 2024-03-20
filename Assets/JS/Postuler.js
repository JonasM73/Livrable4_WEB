document.getElementById('CV').addEventListener('change', function() {
  var fileName = this.value.split('\\').pop();
  var label = document.getElementById('fileLabel');
  if (fileName) {
    label.innerHTML = fileName;
  } else {
    label.innerHTML = 'Choisir un fichier';
  }
});