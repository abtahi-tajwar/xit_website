let table1 = document.querySelector('#table1');
let dataTable = new simpleDatatables.DataTable(table1);
console.log('All members js')
document.querySelectorAll('.activate_member').forEach(item => {
    item.addEventListener('click', (e) => {
        console.log(base_url+'/admin/members/edit/active_status')
        let member_id = e.target.id.split("_")[1];
        let status = e.target.checked;
        const _token = document.querySelector('#activateFrom_'+member_id+'>input[name=_token]').value;
        console.log(_token)
        setmemberActiveStatus({ id: member_id, checked: status, _token: _token })
            .then(response => {
                return response.json();
            }).then(data => {
                console.log(data)
            })
    })
})
async function setmemberActiveStatus(data) {
    // Default options are marked with *
    const response = await fetch(base_url+'/admin/members/edit/active_status', {
        headers: {
          "Content-Type": "application/json",
          "Accept": "application/json",
          "X-Requested-With": "XMLHttpRequest",
          "X-CSRF-Token": data._token
        },
        method: "POST",
        credentials: "same-origin",
        body: JSON.stringify(data)
      })
    return response;
}