(function () {
    const CEP = document.querySelector("#CEP")
    const cidade = document.querySelector("#cidade")
    const UF = document.querySelector("#UF")

    CEP.oninput = () => {
        if (CEP.value === "" || CEP.value.length < 9) {
            cidade.value = ""
            UF.value = ""
        }

        fetch(`https://viacep.com.br/ws/${CEP.value}/json/`)
            .then(response => response.json())
            .then(data => {
                cidade.value = data.localidade
                UF.value = data.uf
            })

        CEP.value = CEP.value.replace(/D/g, "").replace(/^(\d{5})(\d)/, "$1-$2")
    }

    console.log("olá")


})();