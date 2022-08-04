function CopyLink(link) {
    console.log(link);
    navigator.clipboard.writeText(link);

    linkSuccess = document.getElementById("linkSuccess");
    linkSuccess.classList.remove("hide");
    setTimeout(function () {
        linkSuccess.classList.add("hide");
    }, 2000);
}
