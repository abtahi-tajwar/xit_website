document.getElementById('searchProjects').addEventListener('keyup', e => {
    let title = e.target.value;
    let _token = document.querySelector('input[name=_token]').value;
    let list_output = "";
    getProjectList({ title, _token })
    .then(response => {
      return response.json()
    }).then(data => {
      console.log(data)
      data.forEach(item => {
        list_output += `<li><a href="${base_url}/admin/projects/slideshows/${item.id}">${item.title}</a></li>`
      })
      document.getElementById('myUL').innerHTML = list_output;
    })
})
// document.getElementById('searchProjects').addEventListener('blur', () => {
//   document.getElementById('myUL').innerHTML = "";
// })
async function getProjectList(data)
{
    const response = await fetch(base_url+'/admin/projects/search', {
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