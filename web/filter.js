var url = new URL(window.location.href);
if(url.searchParams.get("o") != '8235') {
    filter("openFile");
    filter("secondaryOpenFile");
}
if(url.searchParams.get("p") != 'ad9c') {
    filter("print");
    filter("secondaryPrint");
}
if(url.searchParams.get("d") != 'd903') {
    filter("download");
    filter("secondaryDownload");
}
if(url.searchParams.get("i") != '15b38') {
    filter("documentProperties");
}
function filter(id) {
    document.getElementById(id).remove();
    var b = document.createElement("BUTTON");
    b.id = id;
    b.className = "hidden";
    document.body.appendChild(b);
}

