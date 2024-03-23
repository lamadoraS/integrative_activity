const button = document.getElementById('submit');

button.addEventListener("click", () => {
    let name = document.getElementById('name').value;
    let email_address = document.getElementById('email_address').value;
    let age = document.getElementById('age').value;

    const data = {
        name: name,
        email_address: email_address,
        age: age,
    };

    fetch('http://localhost/integrative_aactivity/post/create.php', {
        method: "POST",
        headers: {
            "Content-Type": "application/json; charset=UTF-8",
        },
        body: JSON.stringify(data),
    })
    .then((res) => res.json())
    .then(response => {
        console.log(response);
        fetchAndDisplay();
    });

});

    function fetchAndDisplay() {
        fetch('http://localhost/integrative_activity/post/act.php')
        .then(response => response.json())
        .then(data => {
            let tableBody = document.getElementById('tableBody');

            tableBody.innerHTML = '';

            for(let i = 0; i < data.length; i++){
                let tableRow = `<tr>
                              <td>${data[i].profile_id}</td>
                              <td>${data[i].name}</td>
                              <td>${data[i].email_address}</td>
                              <td>${data[i].age}</td>
                            </tr>`;
                tableBody.innerHTML += tableRow;
            }
        })
        .catch(error => console.error('error!', error));
    }
    fetchAndDisplay();