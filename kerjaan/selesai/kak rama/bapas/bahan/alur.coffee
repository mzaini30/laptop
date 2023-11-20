# kriminogenikOpsional = false

# di akhir, ditanya apakah lanjut kriminogenik
# farmasi isnt Narkoba/Psikotropika
# rri_a rendah = <7

rri_a = "totalA"
rri_b = "bagianB"
rri_c = "bagianC"
rri_d = "bagianD"
gender = "data.jenisKelamin"
kasus = "data.jenisTindakPidana"
kriminogenik = "bagianKriminogenik"

if rri_a < 7 and gender is "Laki-laki" and kasus is "Narkoba/Psikotropika"
  rri_b = true
  rri_d = true
  kriminogenik = true
  # if rri_b or rri_d is "dicentang"
  #   kriminogenik
  # else if rri_b or rri_d isnt "dicentang"
  #   kriminogenik

else if rri_a < 7 and gender is "Laki-laki" and kasus isnt "Narkoba/Psikotropika"
  rri_b = true
  kriminogenik = false
  # if rri_b is "dicentang"
  #   kriminogenik
  # else if rri_b isnt "dicentang"
  #   "done"

else if rri_a < 7 and gender is "Perempuan" and kasus is "Narkoba/Psikotropika"
  rri_b = true
  rri_c = true
  rri_d = true
  kriminogenik = true
  # if rri_b or rri_c or rri_d is "dicentang"
  #   kriminogenik
  # else if rri_b or rri_c or rri_d isnt "dicentang"
  #   kriminogenik

else if rri_a < 7 and gender is "Perempuan" and kasus isnt "Narkoba/Psikotropika"
  rri_b = true
  rri_c = true
  kriminogenik = false
  # if rri_b or rri_c is "dicentang"
  #   kriminogenik
  # else if rri_b or rri_c isnt "dicentang"
  #   "done"

else if rri_a >= 7 and gender is "Laki-laki" and kasus is "Narkoba/Psikotropika"
  rri_d = true
  kriminogenik = true
  # if rri_d is "dicentang"
  #   kriminogenik
  # else if rri_d isnt "dicentang"
  #   kriminogenik

else if rri_a >= 7 and gender is "Laki-laki" and kasus isnt "Narkoba/Psikotropika"
  kriminogenik = true
  # kriminogenik

else if rri_a >= 7 and gender is "Perempuan" and kasus is "Narkoba/Psikotropika"
  rri_c = true
  rri_d = true
  kriminogenik = true
  # if rri_c or rri_d is "dicentang"
  #   kriminogenik
  # else if rri_c or rri_d isnt "dicentang"
  #   kriminogenik

else if rri_a >= 7 and gender is "Perempuan" and kasus isnt "Narkoba/Psikotropika"
  rri_c = true
  kriminogenik = true
  # if rri_c is "dicentang"
  #   kriminogenik
  # else if rri_c isnt "dicentang"
  #   kriminogenik