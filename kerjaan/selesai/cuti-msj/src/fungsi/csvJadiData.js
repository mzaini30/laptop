// import csv from "csvtojson";
import csvv from "./csvv";

export default function () {
  return new Promise((resolve, reject) => {
    const input = document.createElement("input");
    input.type = "file";
    input.click();

    input.addEventListener("change", async (x) => {
      // @ts-ignore
      const { files } = x.target;
      const [file] = files;

      const reader = new FileReader();
      reader.readAsText(file);

      reader.addEventListener("load", (y) => {
        let data;
        data = reader.result;
        // @ts-ignore
        // data = JSON.parse(data)

        // csv()
        //   // @ts-ignore
        //   .fromString(data)
        //   .then((hasil) => resolve(hasil));

        // resolve(data)

        resolve(csvv(data, ";"));
      });
    });
  });
}
