// main tanggal

tanggalan = new Date()
bulan = tanggalan.getMonth()
tahun = tanggalan.getFullYear()

nama_bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']

bulan_dan_tahun = `${nama_bulan[bulan]} ${tahun}`

// bulan_dan_tahun = 'Maret 2020'

// main database

odoj = new Dexie('database odoj')
odoj.version(1).stores({
	data: '++id, juz_1, juz_2, juz_3, juz_4, juz_5, juz_6, juz_7, juz_8, juz_9, juz_10, juz_11, juz_12, juz_13, juz_14, juz_15, juz_16, juz_17, juz_18, juz_19, juz_20, juz_21, juz_22, juz_23, juz_24, juz_25, juz_26, juz_27, juz_28, juz_29, juz_30, bulan_dan_tahun'
})