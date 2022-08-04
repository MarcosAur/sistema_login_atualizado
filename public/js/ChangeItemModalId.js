function ChangeItemModalId(link) {
    let project = document.getElementById("projectModalDisplay");
    project.textContent = link.projeto_id ? link.projeto_id : "Sem Projeto";

    let creator = document.getElementById("criadorModalDisplay");
    creator.textContent = link.criador_id ? link.criador_id : "Sem Criador";

    let originalLink = document.getElementById("linkModalDisplay");
    originalLink.textContent = link.linkOriginal;

    let shortLink = document.getElementById("shortLinkModalDisplay");
    shortLink.textContent = link.linkEncurtado;

    console.log(link);
}
