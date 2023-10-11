
function alip() {
  var nama = document.getElementById("name");
  var email = document.getElementById("email");
  var alamat = document.getElementById("address");
  if (nama.value === "" ||email.value === ""||alamat.value === "" || !email.value.includes("@")) {
    alert("Data tidak boleh kosong atau salah");
  }else{
    alert("Berhasil dimasukkan datanya");
  }
}
