<div id="tampil">
	Program Studi :

	<select name="pilih program studi" id="pilihprodi">
		<option value="" selected disabled hidden>Pilih Prodi</option>
		<option value="Teknik Informatika">Teknik Informatika</option>
		<option value="Teknik Elektro">Teknik Elektro</option>
		<option value="Teknik Sipil">Teknik Sipil</option>
	</select>
</div>
<br>

<table border="1" id="myTable">
	<tr>
		<th> No. </th>
		<th> NIM </th>
		<th> Nama </th>
		<th> Program Studi </th>
	</tr>
</table>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous">
</script>
<script>
	const pilih = document.getElementById("pilihprodi");
	var something = document.getElementsByTagName('table');
	var x = document.getElementById("myTable");
	var tableca = something[0];
	$(document).ready(function() {
		$("#pilihprodi").click(function() {
			var tableHeaderRowCount = 1;
			var rowCount = x.rows.length;
			for (var i = tableHeaderRowCount; i < rowCount; i++) {
				x.deleteRow(tableHeaderRowCount);
				console.log('masukhapus')
			}
			var nomor = 1;
			$.map([{
					nama    : "Manarul Hidayat",
					nim     : "118140132",
					prodi   : "Teknik Informatika",
				},
				{
					nama    : "Murliana",
					nim     : "120140076",
					prodi   : "Teknik Informatika",
				},
				{
					nama    : "Arre Pangestu",
					nim     : "118140129",
					prodi   : "Teknik Informatika",
				},
				{
					nama    : "Arya Daulat",
					nim     : "118140130",
					prodi   : "Teknik Informatika",
				},
				{
					nama    : "Sigit Setiawan Salim",
					nim     : "118130131",
					prodi   : "Teknik Elektro",
				},
				{
					nama    : "Afdalul Fikri Yulia",
					nim     : "118130132",
					prodi   : "Teknik Elektro",
				},
				{
					nama    : "Nur Indah Fitia",
					nim     : "118130133",
					prodi   : "Teknik Elektro",
				},
				{
					nama    : "M. Dukhi",
					nim     : "118150134",
					prodi   : "Teknik Sipil",
				},
				{
					nama    : "Kipli",
					nim     : "118150135",
					prodi   : "Teknik Sipil",
				},
				{
					nama    : "Cintya",
					nim     : "118150136",
					prodi   : "Teknik Sipil",
				},
                {
                    nama    : "Jangkrik",
                    nim     : "118150111",
                    prodi   : "Teknik Sipil",
                },
			], function(data) {
				if (data.prodi == pilih.value) {
					console.log(data)
					var tr = document.createElement('tr');

					var td1 = document.createElement('td');
					var td2 = document.createElement('td');
					var td3 = document.createElement('td');
					var td4 = document.createElement('td');

					var text1 = document.createTextNode(nomor);
					var text2 = document.createTextNode(data.nama);
					var text3 = document.createTextNode(data.nim);
					var text4 = document.createTextNode(data.prodi);

					td1.appendChild(text1);
					td2.appendChild(text2);
					td3.appendChild(text3);
					td4.appendChild(text4);
					tr.appendChild(td1);
					tr.appendChild(td2);
					tr.appendChild(td3);
					tr.appendChild(td4);
					tableca.appendChild(tr);
					nomor += 1;
				}
				document.body.appendChild(tableca);
			});
		});
	});
</script>