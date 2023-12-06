htmx.onLoad(() => {
    let semua_data_type_htmx = document.querySelectorAll("script[data-type='htmx']");
    if (semua_data_type_htmx) {
        semua_data_type_htmx.forEach(x => {
            if (x.getAttribute("src")) {

            } else {
                let isinya = x.innerHTML;
                isinya = `htmx.onLoad(() => {${isinya}})`;
                isinya = isinya.replace(/htmx\.onLoad\(\(\) => \{htmx\.onLoad\(\(\) => \{$1\}\)\}\)/, `htmx.onLoad(() => {$1})`);
                x.innerHTML = isinya;
            }
        });
    }
});