// https://hukum.untag-smd.ac.id/https:

// letakkan di https://hukum.untag-smd.ac.id/

let gambar = document.querySelectorAll("img");
if (gambar) {
  gambar.forEach(
    (x) =>
      (x.src = x.src.replace("https://hukum.untag-smd.ac.id/https:", "https:"))
  );
}
