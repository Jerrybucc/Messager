$(function () {
  var app = {
    addens : [],
    addenPanel : document.getElementById('addens')
  }

  // TODO implement getting data from server
  document.getElementById('butShowAddens').addEventListener('click', function () {
    
  });

  document.getElementById('butAdd').addEventListener('click', function () {
    if (!app.addens) {
      app.addens = [];
    }
    var name = document.getElementById('name');
    var post = document.getElementById('post');
    if (name.value && post.value) {
      app.addens.push({name : name.value, post : post.value});
      app.saveAddens();
      window.location.href = "index.html";
      name.placeholder="Enter Title";
      post.placeholder="Enter Detail";
    }else {
      name.placeholder = "Cannot be empty!";
      post.placeholder = "Cannot be empty!";
    }
  });

  document.getElementById('butClear').addEventListener('click', function () {
    app.clearAddens();
  });

  app.flush = function () {
    if (!app.addens) {
      app.addens = [];
    }
    app.addenPanel.innerHTML = '';
    app.addens.forEach(function (addens) {
      app.addenPanel.innerHTML += '<div data-role="collapsible"><h1>'+addens.name+'</h1><p>'+addens.post+'</p><div data-role="controlgroup" data-type="horizontal" style="text-align:center;"></div></div>';
    });
  }

  app.saveAddens = function () {
    var addens = JSON.stringify(app.addens);
    localStorage.addens = addens;
  }

  app.clearAddens = function () {
    localStorage.addens = "";
    window.location.href = "index.html";
  }

  // Startup code starts here
  app.addens = localStorage.addens;
  if (app.addens) {
    app.addens = JSON.parse(app.addens);
  }
  app.flush();

  //copyright
  document.querySelector("div[data-role='footer']").innerHTML = '<p class="form">Copyright\n Gerald Chen</p>';
});