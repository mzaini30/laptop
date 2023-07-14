ambil = document.querySelectorAll(".selectable-text.copyable-text");
data = [];
for (x of ambil) {
  data.push(x.innerText);
}
data = data.filter((x) => x.startsWith("+62"));
data = [...new Set(data)];
data = data.map((x) => x.replace("+", "").replace(" ", "").replace(/\-/g, ""));
data = data.join("\n");
prompt("List Nomor WA", data);
