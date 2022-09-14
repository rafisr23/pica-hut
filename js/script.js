function viewAllMenu() {
  $.getJSON("data/pizza.json", function (data) {
    let menu = data.menu;
    $.each(menu, function (i, data) {
      $("#daftar-menu").append(` 
      <div class="col-md-4 mb-3">
        <div class="card h-100">
          <img src="img/menu/${data.gambar}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">${data.nama}</h5>
            <p class="card-text">${data.deskripsi}</p>
            <p class="card-text"><b>${data.harga}</b></p>
            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
          </div>
        </div>
      </div>
      `);
    });
  });
}

viewAllMenu();

$(".nav-link").on("click", function () {
  $(".nav-link").removeClass("active");
  $(this).addClass("active");

  let category = $(this).html();
  $("h1").html(category);

  if (category == "All Menu") {
    $("#daftar-menu").html("");
    viewAllMenu();
    return;
  }

  $.getJSON("data/pizza.json", function (data) {
    let menu = data.menu;
    let content = "";

    $.each(menu, function (i, data) {
      if (data.kategori == category.toLowerCase()) {
        content += ` 
        <div class="col-md-4 mb-3">
          <div class="card h-100">
            <img src="img/menu/${data.gambar}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">${data.nama}</h5>
              <p class="card-text">${data.deskripsi}</p>
              <p class="card-text"><b>${data.harga}</b></p>
              <a href="#" class="btn btn-primary">Pesan Sekarang</a>
            </div>
          </div>
        </div>
        `;
      }
    });

    $("#daftar-menu").html(content);
  });
});
