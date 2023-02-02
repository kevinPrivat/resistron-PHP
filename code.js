const colors = {
    "":         {},
    "noir":     {backgroundColor: "#000000", color: "#FFFFFF"},
    "brun":     {backgroundColor: "#964B00", color: "#FFFFFF"},
    "rouge":    {backgroundColor: "#FF0000", color: "#000000"}, 
    "orange":   {backgroundColor: "#FF8800", color: "#000000"},
    "jaune":    {backgroundColor: "#FFFF00", color: "#000000"},
    "vert":     {backgroundColor: "#00FF00", color: "#000000"},
    "bleu":     {backgroundColor: "#0000FF", color: "#FFFFFF"},
    "violet":   {backgroundColor: "#6600FF", color: "#FFFFFF"},
    "gris":     {backgroundColor: "#444444", color: "#FFFFFF"},
    "blanc":    {backgroundColor: "#FFFFFF", color: "#000000"},
    "or":       {backgroundColor: "#E49E00", color: "#000000"},
    "argent":   {backgroundColor: "#C0C0C0", color: "#000000"},
}

function changeColor(selectElement) {
    selectElement.style.backgroundColor = colors[selectElement.value].backgroundColor ?? "";
    selectElement.style.color           = colors[selectElement.value].color ?? "";
}

for (const selectElement of document.querySelectorAll("select")) {
    changeColor(selectElement);
    selectElement.addEventListener("change", () => {
        changeColor(selectElement);
    })
}

function calculAuto(selectElement) {
    selectElement.addEventListener("change", () => {
        calculAuto(selectElement);
    })
}