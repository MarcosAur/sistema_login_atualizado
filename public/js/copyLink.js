function CopyInnerFromId(id) {
    let element = document.getElementById(id);
    let copyText = element.innerHTML.trim();

    navigator.clipboard.writeText(copyText);

    linkSuccess = document.getElementById("linkSuccess");
    linkSuccess.classList.remove("hide");
    setTimeout(function () {
        linkSuccess.classList.add("hide");
    }, 2000);
}
