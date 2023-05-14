fetch('/banner.php?path=' + window.location.pathname).then(function (response) {
  return response.json();
}).then(function (data) {
  if (data.success) {
    document.getElementById("banner").src = data.result;
  }
}).catch(function (err) {
  console.log('Fetch Error :-S', err);
});