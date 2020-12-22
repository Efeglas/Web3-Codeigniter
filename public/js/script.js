let deleteBtn = document.querySelectorAll(".deleteBtn");

for (const element of deleteBtn) {
    let id = element.id;

    element.addEventListener("click", async (event) => {
        if (confirm("Biztos hogy törölni szeretné?")) {
            
           await fetch(`http://localhost:8080/fish/delete/${id}`);    

            //window.location.replace(`http://localhost:8080/fish/delete/${id}`);
        }
    } );
}