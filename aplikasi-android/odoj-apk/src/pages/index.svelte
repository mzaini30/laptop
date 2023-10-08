<script type="text/javascript">
  let semua_bulan_dan_tahun = [];
  if (localStorage.bulan_dan_tahun) {
    semua_bulan_dan_tahun = JSON.parse(localStorage.bulan_dan_tahun).reverse();
  }
  let isi = "";
  let semua_data = [];
  let data_tampil = [];
  //   let total_juz = 0
  window.odoj.data
    .each((x) => semua_data.push(x))
    .then(() => {
      for (let x of semua_bulan_dan_tahun) {
        let total_juz = 0;
        for (let n in semua_data) {
          if (semua_data[n].bulan_dan_tahun == x) {
            semua_data[n].juz_1 == true ? (total_juz += 1) : "";
            semua_data[n].juz_2 == true ? (total_juz += 1) : "";
            semua_data[n].juz_3 == true ? (total_juz += 1) : "";
            semua_data[n].juz_4 == true ? (total_juz += 1) : "";
            semua_data[n].juz_5 == true ? (total_juz += 1) : "";
            semua_data[n].juz_6 == true ? (total_juz += 1) : "";
            semua_data[n].juz_7 == true ? (total_juz += 1) : "";
            semua_data[n].juz_8 == true ? (total_juz += 1) : "";
            semua_data[n].juz_9 == true ? (total_juz += 1) : "";
            semua_data[n].juz_10 == true ? (total_juz += 1) : "";
            semua_data[n].juz_11 == true ? (total_juz += 1) : "";
            semua_data[n].juz_12 == true ? (total_juz += 1) : "";
            semua_data[n].juz_13 == true ? (total_juz += 1) : "";
            semua_data[n].juz_14 == true ? (total_juz += 1) : "";
            semua_data[n].juz_15 == true ? (total_juz += 1) : "";
            semua_data[n].juz_16 == true ? (total_juz += 1) : "";
            semua_data[n].juz_17 == true ? (total_juz += 1) : "";
            semua_data[n].juz_18 == true ? (total_juz += 1) : "";
            semua_data[n].juz_19 == true ? (total_juz += 1) : "";
            semua_data[n].juz_20 == true ? (total_juz += 1) : "";
            semua_data[n].juz_21 == true ? (total_juz += 1) : "";
            semua_data[n].juz_22 == true ? (total_juz += 1) : "";
            semua_data[n].juz_23 == true ? (total_juz += 1) : "";
            semua_data[n].juz_24 == true ? (total_juz += 1) : "";
            semua_data[n].juz_25 == true ? (total_juz += 1) : "";
            semua_data[n].juz_26 == true ? (total_juz += 1) : "";
            semua_data[n].juz_27 == true ? (total_juz += 1) : "";
            semua_data[n].juz_28 == true ? (total_juz += 1) : "";
            semua_data[n].juz_29 == true ? (total_juz += 1) : "";
            semua_data[n].juz_30 == true ? (total_juz += 1) : "";
          }
        }
        data_tampil = [
          ...data_tampil,
          {
            x,
            total_juz,
          },
        ];
        // isi += `
        // 		<tr>
        // 			<td>${x}</td>
        // 			<td>${total_juz}</td>
        // 			<td>
        // 				<div class="progress">
        // 					<div class="progress-bar progress-bar-default" style="width: ${Math.floor(
        //         (total_juz / 30) * 100,
        //       )}%"></div>
        // 				</div>
        // 			</td>
        // 		</tr>`;
      }
      //   $(".isi").html(isi);
    });
</script>

<div class="body">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Bulan</th>
        <th>Kuantitas</th>
        <th>Progress</th>
      </tr>
    </thead>
    <tbody class="isi">
      {#each data_tampil as { x, total_juz }}
        <tr>
          <td>{x}</td>
          <td>{total_juz}</td>
          <td>
            <div class="progress">
              <div
                class="progress-bar progress-bar-default"
                style="width: {Math.floor((total_juz / 30) * 100)}%"
              ></div>
            </div>
          </td>
        </tr>
      {/each}
    </tbody>
  </table>

  <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td>
              <a href="#/laporan" class="btn btn-default">Isi laporan</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<style type="text/css">
  .body {
    padding-top: 20px;
  }
</style>
