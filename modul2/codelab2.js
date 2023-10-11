
function alip() {
  var nama = document.getElementById("name");
  var email = document.getElementById("email");
  var alamat = document.getElementById("address");
  if (nama.value === "" ||email.value === ""||alamat.value === "") {
    alert("Data tidak boleh kosong");
  }else{
    alert("Berhasil dimasukkan datanya");
  }
}
