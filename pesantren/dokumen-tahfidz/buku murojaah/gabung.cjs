const { PDFDocument, rgb } = require("pdf-lib");
const fs = require("fs").promises;

async function mergePDFs() {
  // Daftar file PDF yang akan digabungkan
  const pdfFiles = [
    "./sampul.pdf",
    "./murojaah setelah isya.pdf",
    "./murojaah sabtu.pdf",
    "./kosong.pdf",
  ]; // Gantilah dengan nama file Anda

  // Buat dokumen PDF kosong
  const mergedPdf = await PDFDocument.create();

  // Iterasi melalui setiap file PDF dan tambahkan ke dokumen yang digabungkan
  for (const pdfFile of pdfFiles) {
    const pdfBytes = await fs.readFile(pdfFile);
    const pdf = await PDFDocument.load(pdfBytes);
    const copiedPages = await mergedPdf.copyPages(pdf, pdf.getPageIndices());
    copiedPages.forEach((page) => mergedPdf.addPage(page));
  }

  // Simpan dokumen yang digabungkan ke file baru
  const mergedPdfBytes = await mergedPdf.save();
  await fs.writeFile("input_a5.pdf", mergedPdfBytes);
}

mergePDFs()
  .then(() => console.log("File PDF telah digabungkan."))
  .catch((error) => console.error("Terjadi kesalahan:", error));
