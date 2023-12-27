let listBarang = [
	{ kode: "437", nama: "buku", harga: "9000" },
	{ kode: "123", nama: "pensil", harga: "120000" },
	{ kode: "234", nama: "rumah", harga: "9500000" },
];

var elementList = document.getElementById("listBarang");
listBarang.forEach((i) => {
	elementList.innerHTML +=
	`
    <tr>
        <td>` +i["kode"] + `</td>
        <td>` +i["nama"] + `</td>
        <td>` +i["harga"] + `</td>
    </tr>
    `;
});

function getTotalHarga() {
    var inputKode = document.getElementById("inputKode").value;
    var inputBanyak = document.getElementById("inputBanyak").value;
	let terpilih = listBarang.filter((e) => e["kode"] == inputKode);

    if(terpilih.length ===0){
        alert("masukkan kode yang benar");
    }

    let totalHarga = parseInt(terpilih[0]["harga"]) * parseInt(inputBanyak);
    alert("harga total : "+ totalHarga.toString());

    let uang = window.prompt("Masukkan uang");
    let kembalian = (parseInt(uang) - parseInt(totalHarga));

    while(kembalian.toString() == "NaN"){
        alert("masukkan uang dengan benar");
        uang = window.prompt("Masukkan uang");
        kembalian = (parseInt(uang) - parseInt(totalHarga))
    }

    if(kembalian < 0){
        alert("uang kurang");
    }else if(kembalian == 0){
        alert("uang pas");
    }else{
        alert("kembalian : "+ kembalian);
    }
}
